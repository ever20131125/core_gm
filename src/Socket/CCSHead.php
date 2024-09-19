<?php

namespace Xnhd\Core\Socket;

class CCSHead implements CMessageBody
{
    public $httpHead = 0x00;
    public $shPackageLength;            //头部长度 + Body长度
    public $nUIN = -1;
    public $shFlag=0;
    public $nOptionalLen;               //signature 加密串
    public $lpbyOptional;
    public $nHeaderLen;
    public $shMessageID;
    //    public $shMessageType;
    public $shVersion;
    public $nPlayerID;
    public $nLength;
    public $nKeyLen=0;

    public $nSequence;  //sequence 使用加密传输

    public function encode(&$pszOut, &$iOutLength)
    {

        $propertyArray = array(
            'httpHead' => 'int8',
            'shPackageLength' => 'int32',
            'nUIN' => 'int32',
            'shFlag' => 'int16',
            'nOptionalLen' => 'int16',
            'lpbyOptional' => array('memory', 128),
            'nHeaderLen' => 'int16',
            'shMessageID' => 'int16',
            //            'shMessageType' => 'int16',
            'shVersion' => 'int16',
            'nPlayerID' => 'int64',
            'nSequence' => 'int32',
            'nLength' => 'int32',
            'nKeyLen' => 'int16',
        );

        return $this->encodeObject($this, $propertyArray, $pszOut, $iOutLength);
    }

    public function decode($pszIn, $iInLength)
    {
        $propertyArray = array(
            'httpHead' => 'int8',
            'shPackageLength' => 'int32',
            'nUIN' => 'int32',
            'shFlag' => 'int16',
            'nOptionalLen' => 'int16',
            'lpbyOptional' => array('memory', 128),
            'nHeaderLen' => 'int16',
            'shMessageID' => 'int16',
            //            'shMessageType' => 'int16',
            'shVersion' => 'int16',
            'nPlayerID' => 'int64',
            'nSequence' => 'int32',
            'nLength' => 'int32',
            'nKeyLen' => 'int16',
        );

        return $this->decodeObject($pszIn, $iInLength, $this, $propertyArray);
    }

    public function dump($fp = NULL)
    {
        if (NULL == $fp)
        {
            printf("shPackageLength:%04d, shHeaderLength:%02d, shMessageID:08d\n", $this->shPackageLength, $this->shHeaderLength, $this->shMessageID);
        }
        else if(is_resource ($fp))
        {
            fprintf(fp, "shPackageLength:%04d, shHeaderLength:%02d, shMessageID:08d\n", $this->shPackageLength, $this->shHeaderLength, $this->shMessageID);
        }
        else if(is_string ($fp))
        {
            if (!($file = fopen($fp, 'w'))) return;
            fprintf($file, "shPackageLength:%04d, shHeaderLength:%02d, shMessageID:08d\n", $this->shPackageLength, $this->shHeaderLength, $this->shMessageID);
        }
    }

    public function size() {
        return 36; 
    }

    /**
     * encode the message body to binary string.
     *
     * @param CMessageBody $messageBody
     * @param array $propertyArray
     * @param string $pszOut
     * @param int $iOutLength
     * @return Bool result
     */
    protected function encodeObject(CMessageBody $messageBody, $propertyArray, &$pszOut, &$iOutLength) {
        $encode_length = 0;
        $ptmp = array();

        $iOutLength = 0;
        $preValue = NULL;

        foreach($propertyArray as $key => $type) {

            if(is_string($type) && class_exists($type) && $messageBody->$key instanceof $type) {
                $messageBody->$key->encode($str, $encode_length);
                $len = CCodeEngine::encode_int16($ptmp, $encode_length);
                $ptmp[] =  $str;
                $iOutLength += ($encode_length + $len);
            }
            else if(is_array($type) && 'array' == $type[0] && is_array($messageBody->$key)) {
                if(is_numeric($type[3])) {
                    $preValue = intval($type[3]);
                }

                if(class_exists($type[1])) {
                    foreach ($messageBody->$key as $innerMessageBody) {
                        $innerMessageBody->encode($str, $encode_length);
                        if(!isset($type[2]) || 'nosize' != $type[2]) {
                            $len = CCodeEngine::encode_int16($ptmp, $encode_length);
                        }
                        $ptmp[] =  $str;
                        $iOutLength += ($encode_length + $len);

                    }
                }elseif('string' == $type[1]){
                    foreach ($messageBody->$key as $value) {
                        $encode_length = CCodeEngine::encode_string($ptmp, $value, $type[2]);
                        $iOutLength += $encode_length;
                    }
                }else{
                    foreach ($messageBody->$key as $value) {
                        $encode_fun = 'encode_' . $type[1];
                        $encode_length = CCodeEngine::$encode_fun($ptmp, $value);
                        $iOutLength += $encode_length;
                    }
                }

            }
            else if(is_array($type) && is_string($type[0]) && class_exists($type[0]) && $messageBody->$key instanceof $type[0]) {
                $messageBody->$key->encode($str, $encode_length);
                if(!isset($type[1]) || 'nosize' != $type[1]) {
                    $len = CCodeEngine::encode_int16($ptmp, $encode_length);
                }
                $ptmp[] =  $str;
                $iOutLength += ($encode_length + $len);
            }
            else if(is_array($type) && 'string' == $type[0]) {
                $encode_length = CCodeEngine::encode_string($ptmp, $messageBody->$key, $type[1]);
                $iOutLength += $encode_length;

            }
            else if(is_array($type) && 'memory' == $type[0]) {
                $memsize = $preValue > $type[1] ? $type[1] : $preValue;
                $encode_length = CCodeEngine::encode_memory($ptmp, $messageBody->$key, $memsize);
                $iOutLength += $encode_length;
            }
            else {
                $encode_fun = 'encode_' . $type;
                $encode_length = CCodeEngine::$encode_fun($ptmp, $messageBody->$key);
                $iOutLength += $encode_length;
                $preValue = $messageBody->$key;
            }
        }

        $pszOut = implode(NULL, $ptmp);

        return true;
    }

    /**
     * decode the binary code string to message body object.
     *
     * @param String $pszIn
     * @param int $iInLength
     * @param CMessageBody $messageBody
     * @param array $propertyArray
     * @return Bool result
     */
    protected function decodeObject($pszIn, $iInLength, CMessageBody &$messageBody, $propertyArray) {
        if(NULL == $pszIn || $iInLength < 0)
        {
            return false;
        }
        $ptmp = $pszIn;
        $decode_length = 0;
        $remain_length = $iInLength;

        $preValue = NULL;

        foreach($propertyArray as $key => $type) {
            if(!empty($ptmp)){
                if(is_string($type) && class_exists($type)) {
                    $decode_length = CCodeEngine::decode_int16($ptmp, $message_size);
                    $remain_length -= $decode_length;

                    $messageBody->$key = new $type();
                    $messageBody->$key->decode($ptmp, $message_size);

                    $remain_length -= $message_size;
                    $ptmp = substr($ptmp, $message_size);
                }
                else if(is_array($type) && 'array' == $type[0] && is_array($messageBody->$key)) {
                    if(is_numeric($type[3])) {
                        $preValue = intval($type[3]);
                    }

                    if(class_exists($type[1])) {
                        $obj = &$messageBody->$key;

                        for($i=$preValue; $i>0; $i--) {
                            if(!(isset($type[2]) && 'nosize' == $type[2])) {
                                $decode_length = CCodeEngine::decode_int16($ptmp, $message_size);
                                $remain_length -= $decode_length;
                            }
                            $newBody = new $type[1]();
                            $newBody->decode($ptmp, $message_size);
                            $obj[] = $newBody;
                            $remain_length -= $message_size;
                            $ptmp = substr($ptmp, $message_size);
                        }
                    }elseif('string' == $type[1]){
                        $obj = &$messageBody->$key;

                        for($i=$preValue; $i>0; $i--) {
                            $decode_length = CCodeEngine::decode_string($ptmp, $newBody, $type[2]);
                            $remain_length -= $decode_length;
                            $obj[] = $newBody;
                        }
                    }else{
                        $obj = &$messageBody->$key;

                        for($i=$preValue; $i>0; $i--) {
                            $decode_fun = 'decode_' . $type[1];
                            $decode_length = CCodeEngine::$decode_fun($ptmp, $newBody);
                            $remain_length -= $decode_length;
                            $obj[] = $newBody;
                        }
                    }
                }
                else if(is_array($type) && is_string($type[0]) && class_exists($type[0])) {
                    if(!(isset($type[1]) && 'nosize' == $type[1])) {
                        $decode_length = CCodeEngine::decode_int16($ptmp, $message_size);
                        $remain_length -= $decode_length;
                    }

                    $messageBody->$key = new $type[0]();
                    $messageBody->$key->decode($ptmp, $message_size);

                    $remain_length -= $message_size;
                    $ptmp = substr($ptmp, $message_size);
                }
                else if(is_array($type) && 'string' == $type[0]) {
                    $decode_length = CCodeEngine::decode_string($ptmp, $messageBody->$key, $type[1]);
                    $remain_length -= $decode_length;
                }
                else if(is_array($type) && 'memory' == $type[0]) {
                    $memsize = $preValue > $type[1] ? $type[1] : $preValue;
                    $decode_length = CCodeEngine::decode_memory($ptmp, $messageBody->$key, $memsize);
                    $remain_length -= $decode_length;
                }
                else {
                    $decode_fun = 'decode_' . $type;
                    $decode_length = CCodeEngine::$decode_fun($ptmp, $messageBody->$key);
                    $remain_length -= $decode_length;
                    $preValue = $messageBody->$key;
                }
            }
        }

        if($remain_length<0)
        {
            return false;
        }

        return true;
    }
}

