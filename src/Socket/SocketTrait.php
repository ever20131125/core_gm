<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-01-18 16:50:12
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2022-09-22 11:07:33
 */

namespace Xnhd\Core\Socket;

use Illuminate\Support\Facades\Log;
use Xnhd\Core\Socket\CCodeEngine;
use Xnhd\Core\Socket\CCSHeadOption;
use Xnhd\Core\Socket\CCSHead;
use Xnhd\Core\Socket\Fiveonelib_SockStream;

trait SocketTrait
{
    /**
     * 公共头部方法
     */
    private function head($zoneid, $bodyLength, $messageid)
    {
        $this->socket_stream = new Fiveonelib_SockStream(AF_INET, SOL_TCP);

        // could not connect
        if (empty($this->host) || !$this->socket_stream->connect($this->host, $this->port, 1)) {
            return false;
        }

        // header options
        $headOption = new CCSHeadOption();
        $headOption->optionArray = [
            'zoneid' => ['int32', $zoneid],
        ];
        $headOption->encode($option, $optionLength);

        // return header
        $cshead = new CCSHead();
        $cshead->shPackageLength = $bodyLength + $cshead->size() + $optionLength;
        $cshead->nOptionalLen    = $optionLength;
        $cshead->lpbyOptional    = $option;
        $cshead->shMessageID     = $messageid;
        $cshead->nSequence       = $this->sequence++;
        $cshead->nLength       = $bodyLength;
        $cshead->nHeaderLen      = $cshead->size() + $optionLength;  
        
        return $cshead;
    }

    protected function getResponse($request, $response, $message, $zoneId)
    {
        $body = $request->serializeToString();
        $bodyLength = strlen($body);

        $cshead = $this->head($zoneId, $bodyLength, $message);
        // dd($this, $cshead);
        // return ;
        if (empty($cshead)) {
            Log::info(var_export($this, true));
            Log::info(var_export($cshead, true));
            return false;
        }

        $cshead->encode($head, $headLength);
        $send_result = $this->socket_stream->write($head . $body, $headLength + $bodyLength + 1, 10);
        // var_dump($this, $cshead, $send_result);return;
        //        Log::info(var_export($send_result, true));
        if (0 == $send_result) {
            return FALSE;
        }

        $recieve_result = $this->socket_stream->read(4, 10);
        //  dd($this, $send_result, $recieve_result);
        // return;
        if ($recieve_result != NULL) {
            CCodeEngine::decode_int32($recieve_result, $packageLegth);
            $recieve_result = $this->socket_stream->read($packageLegth - 4, 10);

            if ($recieve_result !== FALSE) {

                if (!empty($response)) {

                    $response->parseFromString(substr($recieve_result, 26));
                    return $response;
                } else {
                    return $recieve_result;
                }
            }
        }else {
            Log::info(var_export($this, true));
            Log::info(var_export($request, true));
            Log::info(var_export($recieve_result, true));
            
            
        }
        return FALSE;
    }
}
