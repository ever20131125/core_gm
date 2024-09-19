<?php

namespace Xnhd\Core\Socket;

interface CMessageBody
{
    public function encode(&$pszOut, &$iOutLength);
    public function decode($pszIn, $iInLength);
    public function dump($fp = NULL);
}

