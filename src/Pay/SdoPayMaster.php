<?php

namespace Xnhd\Core\Pay;

use Xnhd\Core\Pb\Sdo\IDBPayReq;
use Xnhd\Core\Pb\Sdo\IDBPayResp;
use Xnhd\Core\Pb\Sdo\MSGID_ITEMDBSERVER;
use Xnhd\Core\Socket\SocketTrait;

class SdoPayMaster
{
    private $socket_stream;
    private $sequence = 0;
    private $host     = "";
    private $port     = 0;

    function __construct($myhost = '', $myport = 0)
    {
        $this->host = $myhost;
        $this->port = $myport;
    }

    use SocketTrait;


    public function Recharge($accountId, $serverId, $rmb, $productId, $source, $order)
    {
        $request = new IDBPayReq();
        $request->setSzAccountID($accountId);
        $request->setNRMB($rmb);
        $request->setSzProductID($productId);
        $request->setSource($source);
        $request->setSzOrder($order);

        $message = new MSGID_ITEMDBSERVER();
        $arrMessage = $message->getEnumValues();
        $message    = $arrMessage['MSGID_CIDB_REQ_PAY'];

        $response = new IDBPayResp();

        return $this->getResponse($request, $response, $message, $serverId);
    }
}
