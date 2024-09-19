<?php

namespace Xnhd\Core\Socket;

class CCSHeadOption implements CMessageBody
{
    public $optionArray = array();

    public function encode(&$pszOut, &$iOutLength)
    {
        $iOutLength = 0;
        $encode_length = 0;
        $ptmp = array();
        foreach($this->optionArray as $key=>$arr){
            $type = $arr[0];
            $value = $arr[1];
            if(is_array($type)){
                if($type[0] == 'string'){
                    $encode_length = CCodeEngine::encode_string($ptmp, $value, $type[1]);
                    $iOutLength += $encode_length;
                }
            }else{
                $encode_length = CCodeEngine::encode_int32($ptmp, $value);
                $iOutLength += $encode_length;
            }
        }
        $pszOut = implode(NULL, $ptmp);
        return true;
    }

    public function decode($pszIn, $iInLength)
    {

    }

    public function dump($fp = NULL)
    {

    }
}

