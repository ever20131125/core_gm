<?php

namespace Xnhd\Core\Pay;

use Xnhd\Core\Socket\CCodeEngine;
use Xnhd\Core\Socket\CCSHeadOption;
use Xnhd\Core\Socket\CCSHead;
use Xnhd\Core\Socket\Fiveonelib_SockStream;

require_once dirname(__DIR__).'/Protobuf/Sdo/pb_proto_playerdbserver.php';

class SdoPayGameMaster {
	private $HeadHttphead = 0; //
	private $HeadUIN = -1;         //????head???nUIN
    private $HeadVersion = 1 ;     //????head?????????
	private $HeadPlayerID = -1;         //????head???nPlayerID
	private $HeadSequence = 0;         //????head???nSequence
	private $HeadFlag = 8;     //0000 1000 (0x0008):XETA32??
	private $MSGID_CPDB_REQ_Pay = 0x0A20;   //MSGID_CPDB_REQ_Pay  0x0A0C  ????ID
	private $MSGID_PDBC_RESP_Pay = 0x8A20; 	//MSGID_PDBC_RESP_Pay                  0x8A0C  ????ID
	private $host;
	private $port;
	private $socket_stream;
    private $sequence = 0;

	function __construct($host, $port)
    {
        $this->host = $host;
        $this->port = $port;
		$this->socket_stream = new Fiveonelib_SockStream(AF_INET, SOL_TCP);
		$this->socket_stream->connect($this->host, $this->port, 1);
    }

	/**
	 * ¹«¹²Í·²¿·½·¨
	 * @param unknown_type $zoneid
	 * @param unknown_type $bodyLength
	 * @param unknown_type $messageid
	 */
	private function head($zoneid, $bodyLength, $messageid){
		$headOption = new CCSHeadOption();
        $headOption->optionArray = array(
			'zoneid'	=> array('int32', $zoneid)
        );
        $headOption->encode($option, $optionLength);

		$cshead = new CCSHead();
        $cshead->shPackageLength= $bodyLength + $cshead->size() + $optionLength;
        $cshead->nOptionalLen	= $optionLength;
        $cshead->lpbyOptional	= $option;
        $cshead->nHeaderLen	= $cshead->size() + $optionLength;
        $cshead->shMessageID	= $messageid;
        $cshead->nSequence	= $this->sequence++;

		return $cshead;
	}

	//³äÖµÐÂµÄ½Ó¿Ú°¡
	public function Recharge($m_szPayer, $m_szAccountID, $m_zoneID, $m_nMoney, $rmb_money, $m_sourceID, $m_szOrderID, $m_szOption = ''){
		$request = new \PDBPayReq();
        $request->setSzPayer($m_szPayer);
		$request->setSzAccountID($m_szAccountID);
		$request->setNZoneID($m_zoneID);
		$request->setNMoney($m_nMoney);
		$request->setNRMB($rmb_money);
		$request->setSource($m_sourceID);
		$request->setSzOrder($m_szOrderID);
        $request->setSzOption($m_szOption);
//dd($request);
        $body = $request->serializeToString();
        $bodyLength = strlen($body);
        $message = new \MSGIDPLAYERDBSERVER();
        $arrMessage = $message->getEnumValues();
        $cshead = $this->head($m_zoneID, $bodyLength, $arrMessage['MSGID_CPDB_REQ_PAY']);
        $cshead->encode($head, $headLength);

		//send data to auth server
        $send_result = $this->socket_stream->write($head.$body, $headLength+$bodyLength+1, 10);
        if(0 == $send_result)
		{
			return array('m_nErrorCode' => -1,'desc' => 'can not send data to server!');
        }
		//recv response from auth server
        $recieve_result = $this->socket_stream->read(4, 10);
        if ($recieve_result != NULL)
		{
                CCodeEngine::decode_int32($recieve_result, $packageLegth);
                $recieve_result = $this->socket_stream->read($packageLegth-4, 10);
                if ($recieve_result !== FALSE)
				{
                    $response = new \PDBPayResp();
                    $response->parseFromString(substr($recieve_result, 26));
					if(0 == $response->getNErrorCode()){
						$result = array(
							'm_nErrorCode'	=> $response->getNErrorCode(),
							'm_szTransID'	=> $response->getSzTransID(),
							'm_nOldMoney'	=> $response->getNOldMoney(),
							'm_nNewMoney'	=> $response->getNNewMoney(),
							'desc'			=> 'Success!'
						);
					}else{
						$result = array(
							'm_nErrorCode'	=> $response->getNErrorCode(),
							'm_szTransID'	=> $response->getSzTransID(),
							'desc'			=> 'Fail!!'
						);
					}
                    return $result;
                }
				else
				{
					return array('m_nErrorCode' => -3,'desc' => 'wrong!');
				}
        }
        return array('m_nErrorCode' => -2,'desc' => 'can not recv data from auth server!');
	}
	/**
	 *
	 * dod Auth??
	 * @param  $AuthPackage
	 * @param  $arrSessionKey      128?????
	 * @param  $ServerKey      ??key
	 */
	public function UserAuth($AuthPackage, $arrSessionKey, $ServerKey)
	{
		$this->socket_stream = new Fiveonelib_SockStream(AF_INET ,SOL_TCP);
        	$this->socket_stream->connect($this->host, $this->port, 1) ;
        	$send_result = $this->socket_stream->write($AuthPackage, strlen($AuthPackage) +1, 5, true);
	   	if(0 == $send_result) {
            		return FALSE;
            		//echo 'send result error';
        	}
        	//echo '$AuthPackage:' . bin2hex($AuthPackage) . "<br>\n";
        	//??
        	//echo '<br><br>decode start<br><br>';
        	$recieve_result = $this->socket_stream->read(4, 5, true);
        	if ($recieve_result != NULL) {
	        	//echo 'packageLength:' . bin2hex($recieve_result) . "<br>\n";
	        	$packageLen_arr = unpack('N', $recieve_result);
	        	$packageLen = $packageLen_arr[1];
	        	//echo 'unpack packageLegth:'.$packageLen.'<br>';
	        	$recieve_result = $this->socket_stream->read($packageLen-4, 5, true);
            		if ($recieve_result !== FALSE) {
            			//echo 'response package:' . bin2hex($recieve_result) . "<br>\n";
               			$resonse = $this->ParseAuthResult($recieve_result,$packageLen,$arrSessionKey);
               			return $resonse;
            		}
        	}else{
        		//echo '$recieve_result error';
        	}

	}

	/**
	 *
	 * ??????
	 * @param int16 $nSize     ??????
	 * @param int8 $nCryptMeans        ??????????,?CSHead.nFlag
	 * @param string[128] $szAccount       ????
	 * @param int32 $nSessionKeyCount      ?????(?16)
	 * @param char[16] $arrSessionKey      128?????
	 * @param int32 $nTimeStamp        ???
	 * @param int32 $nExpireTime       ???????
	 * @param int32 $nRandom       ???
	 * @param string[16+1] $szMD5Checksum      md5_16(str(szAccount)+str(nTimeStamp)+str(nExpireTime)+str(nRandom)) + \0?	 * @param  $ServerKey      ??key

	 */
	public function MakePlayerSignature( $szAccount, $arrSessionKey, $nTimeStamp, $nExpireTime, $nRandom, $szMD5Checksum, $ServerKey,  $nSessionKeyCount = 16)
	{
		$xtea = new Xtea_Encrypt();

		$nCryptMeans = $this->HeadFlag;
		$body =pack('c', $nCryptMeans);

	   $tmp_string_length = strlen($szAccount);
        if ($tmp_string_length != 0)
        {
            $tmp_string_length += 1;
        }

        if ($tmp_string_length  > 128)
        {
            $tmp_string_length = 128;
        }
        $package = pack('n',$tmp_string_length);
        //echo '$package 1::'.  bin2hex($package) .'<br>';
		$package .= pack('a'.$tmp_string_length, $szAccount);
		 //echo '$package 2::'.  bin2hex($package) .'<br>';
		$package .= pack('N', $nSessionKeyCount);
		  //echo '$package 3::'.  bin2hex($package) .'<br>';


		$package .=  $arrSessionKey;
		//echo '$package 4::'.  bin2hex($package) .'<br>';
		$package .= pack('N', $nTimeStamp);
		$package .= pack('N', $nExpireTime);
		$package .= pack('N', $nRandom);
		//echo '$package 5::'.  bin2hex($package) .'<br>';

	   $tmp_string_length = strlen($szMD5Checksum);
	   //echo 'szMD5Checksum length::'.$tmp_string_length.'<br>';
        $package .= pack('N',$tmp_string_length);
        //$package .= pack('a'.$tmp_string_length, $szMD5Checksum);
		$package .= $szMD5Checksum;
		//echo 'PlayerSignature::'.bin2hex($package).'<br>';
		//echo '$package 6::'.  bin2hex($package) .'<br>';

		$structLen = strlen($package);
		$tmp_structLen = pack('n',$structLen);
		$package = $tmp_structLen.$package;
		//echo '$package 7::'.  bin2hex($package) .'<br>';
		$tmp_package = $xtea->Encrypt($package, $ServerKey);

		$body .= $tmp_package;

		$nSize = 2 + strlen($body);
		$nSizeLen = pack('n', $nSize);
		$tmp_body = $nSizeLen.$body;
		//echo 'PlayerSignature 222 ::'.bin2hex($tmp_body).'<br>';
		return $tmp_body;
	}

	/**
	 *
	 * ?????????? body
	 * @param string[128] $m_szPayer	?????
	 * @param string[128] $m_szAccountID	?????
	 * @param int32 $m_zoneID	????
	 * @param int32 $m_nMoney	????
	 * @param int32 $m_sourceID	????
	 * @param string[32] $m_szOrderID	????????
	 */
	public function MakeCASAuthInfoPush($m_szPayer, $m_szAccountID, $m_zoneID, $m_nMoney, $rmb_money, $m_sourceID, $m_szOrderID)
	{
		$tmp_string_length = strlen($m_szPayer);
        if ($tmp_string_length != 0)
        {
            $tmp_string_length += 1;
        }

        if ($tmp_string_length  > 128)
        {
            $tmp_string_length = 128;
        }
        $package = pack('n',$tmp_string_length);
         //echo ' body  package 1::'.  bin2hex($package) .'<br>';
        $package .= pack('a'.$tmp_string_length, $m_szPayer);

		$tmp_string_length = strlen($m_szAccountID);
        if ($tmp_string_length != 0)
        {
            $tmp_string_length += 1;
        }

        if ($tmp_string_length  > 128)
        {
            $tmp_string_length = 128;
        }
        $package .= pack('n',$tmp_string_length);
         //echo ' body  package 1::'.  bin2hex($package) .'<br>';
        $package .= pack('a'.$tmp_string_length, $m_szAccountID);
        //echo ' body  package 2::'.  bin2hex($package) .'<br>';
		$package .= pack('N', $m_zoneID);
		//echo ' body  package 3::'.  bin2hex($package) .'<br>';
		$package .= pack('N', $m_nMoney);
		//echo ' body  package 4::'.  bin2hex($package) .'<br>';
		$package .= pack('N', $rmb_money);
		//echo ' body  package 5::'.  bin2hex($package) .'<br>';
		$package .= pack('N', $m_sourceID);
		//echo ' body  package 6::'.  bin2hex($package) .'<br>';

		$tmp_string_length = strlen($m_szOrderID);
        if ($tmp_string_length != 0)
        {
            $tmp_string_length += 1;
        }

        if ($tmp_string_length  > 32)
        {
            $tmp_string_length = 32;
        }
        $package .= pack('n',$tmp_string_length);
         //echo ' body  package 6::'.  bin2hex($package) .'<br>';
        $package .= pack('a'.$tmp_string_length, $m_szOrderID);
        //echo ' body  package 7::'.  bin2hex($package) .'<br>';


		return $package;
	}

	/**
	 *
	 * ??????
	 * @param  $PlayerSignature        ????
	 * @param  $CASAuthInfoPush        ????????
	 * * @param   $arrSessionKey      128?????
	  * @param  $zoneID      ??id
	 */
	public function MakeAuthPackage($PlayerSignature, $CASAuthInfoPush, $arrSessionKey,$zoneID)
	{
		$xtea = new Xtea_Encrypt();
        /**
         * head: httpHead(int8 1B)+shPackageLength(int32 4B)+nUIN(int32 4B)+shFlag(int16 2B)+nOptionalLen(int16 2B)+lpbyOptional
                +nHeaderLen(int16 2B)+shMessageID(int16 2B)+shVersion(int16 2B)+nPlayerID(int32 4B)+nSequence(int32 4B)
        */
		  $nOptionalLen = strlen($PlayerSignature)+4;
        $nHeaderLen = 26 + $nOptionalLen+4;  //??????????
        //echo '$nHeaderLen::'.$nHeaderLen.'<br>';


        $body = pack('n', $nHeaderLen);
        $body .=pack('n', $this->MSGID_CPDB_REQ_Pay);
        $body .= pack('n', $this->HeadVersion);
        $body .=pack('N',$this->HeadPlayerID);
        $body .=pack('N', $this->HeadSequence);
        $body .= $CASAuthInfoPush;
        //echo '$cshead nHeaderLen~body ::'.bin2hex($body).'<br>';
        $tmp_body = $xtea->Encrypt($body, $arrSessionKey);

        $shPackageLength = 12+ $nOptionalLen + strlen($tmp_body);
        //echo '$shPackageLength::'.$shPackageLength.'<br>';
        $package = pack('c', $this->HeadHttphead);
        $package .= pack('N', $shPackageLength);
        $package .= pack('N', $this->HeadUIN);
        $package .= pack('n', $this->HeadFlag);
        $package .=pack('n', $nOptionalLen);
        //echo '$cshead HeadHttphead~nOptionalLen ::'.bin2hex($package).'<br>';
		$package .= pack('N',$zoneID);
        $package .= $PlayerSignature . $tmp_body;
        //echo '$cshead all ::'.bin2hex($package).'<br>';
        return $package;
	}

	/**
	 *
	 * ????
	 * @param  $result     ?
	 * @param  $packageLen     ??
	 * @param  $arrSessionKey      128?????
	 */
	function ParseAuthResult($result, $packageLen, $arrSessionKey)
	{
		$xtea = new Xtea_Encrypt();
		 /**
         * head: httpHead(int8 1B)+shPackageLength(int32 4B)+nUIN(int32 4B)+shFlag(int16 2B)+nOptionalLen(int16 2B)+lpbyOptional
                +nHeaderLen(int16 2B)+shMessageID(int16 2B)+shVersion(int16 2B)+nPlayerID(int32 4B)+nSequence(int32 4B)
        */
		$pos = 0;

		$nUIN = substr($result, $pos, 4);
		$nUIN = unpack('N', $nUIN);
		$param['nUIN'] = $nUIN[1];
		$pos +=4;

		$shFlag = substr($result, $pos, 2);
		$shFlag = unpack('n', $shFlag);
		$param['shFlag'] = $shFlag[1];
		$pos +=2;

		$nOptionalLen = substr($result, $pos, 2);
		$nOptionalLen = unpack('n', $nOptionalLen);
		$nOptionalLen = $nOptionalLen[1];
        $param['nOptionalLen'] = $nOptionalLen[1];
		$pos +=2;

		$descryptBody = substr($result, $pos, $packageLen - $pos);
		//////echo '$descryptBody before descry::'.bin2hex($descryptBody).'<br>';
		$descryptBody = $xtea->Decrypt($descryptBody, $arrSessionKey);
		//////echo '$descryptBody::'.bin2hex($descryptBody).'<br>';
		$pos = 0;
		$nHeaderLen = substr($descryptBody, $pos, 2);
		$nHeaderLen = unpack('n', $nHeaderLen);
		$param['nHeaderLen'] = $nHeaderLen[1];
		$pos +=2;

		$shMessageID = substr($descryptBody, $pos, 2);
		$shMessageID = unpack('n', $shMessageID);
		$param['shMessageID'] =  $shMessageID[1];
		$pos +=2;

		$shVersion = substr($descryptBody, $pos, 2);
        $shVersion = unpack('n', $shVersion);
        $param['shVersion'] =  $shVersion[1];
        $pos +=2;

        $nPlayerID = substr($descryptBody, $pos, 4);
        $nPlayerID = unpack('N', $nPlayerID);
        $param['nPlayerID'] =  $nPlayerID[1];
        $pos +=4;

        $nSequence = substr($descryptBody, $pos, 4);
        $nSequence = unpack('N', $nSequence);
        $param['nSequence'] =  $nSequence[1];
        $pos +=4;

	////echo '$descryptBody after descry::'.bin2hex($descryptBody).'<br>';
		$nErrorCode = substr($descryptBody, $pos, 4);
		$nErrorCode = unpack('N', $nErrorCode);
		$param['nErrorCode'] =  $nErrorCode[1];
        $pos +=4;

        $m_szPayerLen = substr($descryptBody, $pos, 2);
        $m_szPayerLen = unpack('n', $m_szPayerLen);
        $m_szPayerLen = $m_szPayerLen[1];
        $param['m_szPayerLen'] =  $m_szPayerLen;
        $pos +=2;

        $real_length = $m_szPayerLen;
        if ( $real_length > 128)
        {
            $real_length = 128;
        }
        $param['m_szPayer'] =  substr($descryptBody, $pos , $real_length);
        $param['m_szPayer'] = substr($param['m_szPayer'], 0, -1);
        $pos +=$real_length;

        $m_szAccountIDLen = substr($descryptBody, $pos, 2);
        $m_szAccountIDLen = unpack('n', $m_szAccountIDLen);
        $m_szAccountIDLen = $m_szAccountIDLen[1];
        $param['m_szAccountIDLen'] =  $m_szAccountIDLen;
        $pos +=2;

        $real_length = $m_szAccountIDLen;
        if ( $real_length > 128)
        {
            $real_length = 128;
        }
        $param['m_szAccountID'] =  substr($descryptBody, $pos , $real_length);
        $param['m_szAccountID'] = substr($param['m_szAccountID'], 0, -1);
        $pos +=$real_length;

        $m_zoneID = substr($descryptBody, $pos, 4);
        $m_zoneID = unpack('N', $m_zoneID);
        $m_zoneID = $m_zoneID[1];
        $param['m_zoneID'] =  $m_zoneID;
        $pos +=4;

        $m_nMoney = substr($descryptBody, $pos, 4);
        $m_nMoney = unpack('N', $m_nMoney);
        $m_nMoney = $m_nMoney[1];
        $param['m_nMoney'] =  $m_nMoney;
        $pos +=4;

        $m_sourceID = substr($descryptBody, $pos, 4);
        $m_sourceID = unpack('N', $m_sourceID);
        $m_sourceID = $m_sourceID[1];
        $param['m_sourceID'] =  $m_sourceID;
        $pos +=4;

        $m_szOrderIDLen = substr($descryptBody, $pos, 2);
        $m_szOrderIDLen = unpack('n', $m_szOrderIDLen);
        $m_szOrderIDLen = $m_szOrderIDLen[1];
        $param['m_szOrderIDLen'] =  $m_szOrderIDLen;
        $pos +=2;

        $real_length = $m_szOrderIDLen;
        if ( $real_length > 32)
        {
            $real_length = 32;
        }
        $param['m_szOrderID'] =  substr($descryptBody, $pos , $real_length);
        $param['m_szOrderID'] = substr($param['m_szOrderID'], 0, -1);
        $pos +=$real_length;

        $m_szTransIDLen = substr($descryptBody, $pos, 2);
        $m_szTransIDLen = unpack('n', $m_szTransIDLen);
        $m_szTransIDLen = $m_szTransIDLen[1];
        $param['m_szTransIDLen'] =  $m_szTransIDLen;
        $pos +=2;

        $real_length = $m_szTransIDLen;
        if ( $real_length > 40)
        {
            $real_length = 40;
        }
        $param['m_szTransID'] =  substr($descryptBody, $pos , $real_length);
        $param['m_szTransID'] = substr($param['m_szTransID'], 0, -1);
        $pos +=$real_length;

        $m_nOldMoney = substr($descryptBody, $pos, 4);
        $m_nOldMoney = unpack('N', $m_nOldMoney);
        $m_nOldMoney = $m_nOldMoney[1];
        $param['m_nOldMoney'] =  $m_nOldMoney;
        $pos +=4;

        $m_nNewMoney = substr($descryptBody, $pos, 4);
        $m_nNewMoney = unpack('N', $m_nNewMoney);
        $m_nNewMoney = $m_nNewMoney[1];
        $param['m_nNewMoney'] =  $m_nNewMoney;
        $pos +=4;

        //var_dump($param);
		return $param;
	}

}

