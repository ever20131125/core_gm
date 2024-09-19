<?php

namespace Xnhd\Core\Socket;

class CMessageHead
{
    public $m_iMessageID = -1;
    public $m_nMessageType = -1;
    public $m_bSourceEntityType = 0xff;
    public $m_bDestEntityType = 0xff;
    public $m_iSourceID = -1;
    public $m_iDestID = -1;
    public $m_iMessageSequence = -1;

    public function encode(&$pszOut, &$iOutLength)
    {

        $ptmp = array();

        $coded_length = 0;

        $iOutLength = 0;

        $coded_length = CCodeEngine::encode_int16($ptmp, $this->m_iMessageID);
        $iOutLength += $coded_length;

        $coded_length = CCodeEngine::encode_int8($ptmp,$this->m_nMessageType);
        $iOutLength += $coded_length;

        $coded_length = CCodeEngine::encode_int8($ptmp, $this->m_bSourceEntityType);
        $iOutLength += $coded_length;

        $coded_length = CCodeEngine::encode_int8($ptmp, $this->m_bDestEntityType);
        $iOutLength += $coded_length;

        $coded_length = CCodeEngine::encode_int32($ptmp, $this->m_iSourceID);
        $iOutLength += $coded_length;

        $coded_length = CCodeEngine::encode_int32($ptmp, $this->m_iDestID);
        $iOutLength += $coded_length;

        $coded_length = CCodeEngine::encode_int32($ptmp, $this->m_iMessageSequence);
        $iOutLength += $coded_length;

        $pszOut = implode(NULL, $ptmp);

        return true;

    }

    public function decode($pszIn, $iInLength)
    {
        if (NULL == $pszIn || $iInLength <= 0)
        {
            return false;
        }

        $ptmp = $pszIn;
        $remained_length = $iInLength;
        $decoded_length = 0;

        $decoded_length = CCodeEngine::decode_int16($ptmp, $this->m_iMessageID);
        $remained_length -= $decoded_length;

        $decoded_length = CCodeEngine::decode_int8($ptmp, $this->m_nMessageType);
        $remained_length -= $decoded_length;

        $decoded_length = CCodeEngine::decode_int8($ptmp, $this->m_bSourceEntityType);
        $remained_length -= $decoded_length;

        $decoded_length = CCodeEngine::decode_int8($ptmp, $this->m_bDestEntityType);
        $remained_length -= $decoded_length;

        $decoded_length = CCodeEngine::decode_int32($ptmp, $this->m_iSourceID);
        $remained_length -= $decoded_length;

        $decoded_length = CCodeEngine::decode_int32($ptmp, $this->m_iDestID);
        $remained_length -= $decoded_length;

        $decoded_length = CCodeEngine::decode_int32($ptmp, $this->m_iMessageSequence);
        $remained_length -= $decoded_length;

        if ($remained_length < 0)
        {
            return false;
        }

        return true;
    }

    public function dump($fp = NULL)
    {
        if (NULL == $fp)
        {
            printf("MessageID:%04d, MessageType:%02d, Sequence:%08d\n", $this->m_iMessageID, $this->m_nMessageType, $this->m_iMessageSequence);
        }
        else if(is_resource ($fp))
        {
            fprintf(fp, "MessageID:%04d, MessageType:%02d, Sequence:%08d\n", $this->m_iMessageID, $this->m_nMessageType, $this->m_iMessageSequence);
        }
        else if(is_string ($fp))
        {
            if (!($file = fopen($fp, 'w'))) return;
            fprintf($file, "MessageID:%04d, MessageType:%02d, Sequence:%08d\n", $this->m_iMessageID, $this->m_nMessageType, $this->m_iMessageSequence);
        }
    }
}

