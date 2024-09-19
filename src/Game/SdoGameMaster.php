<?php

namespace Xnhd\Core\Game;

use Illuminate\Support\Facades\Log;
use Xnhd\Core\Pb\Sdo\ADBGetAccountInfoReq;
use Xnhd\Core\Pb\Sdo\ADBGetAccountInfoResp;
use Xnhd\Core\Pb\Sdo\ADBGetRoleInfoReq;
use Xnhd\Core\Pb\Sdo\ADBGetRoleInfoResp;
use Xnhd\Core\Pb\Sdo\ADBGMDeleteRoleReq;
use Xnhd\Core\Pb\Sdo\ADBGMDeleteRoleResp;
use Xnhd\Core\Pb\Sdo\CDSGetAccountDataReq;
use Xnhd\Core\Pb\Sdo\CDSGetAccountDataResp;
use Xnhd\Core\Pb\Sdo\FaceRank;
use Xnhd\Core\Pb\Sdo\IDBGetItemListReq;
use Xnhd\Core\Pb\Sdo\IDBGetItemListResp;
use Xnhd\Core\Pb\Sdo\IDBGMAddFaceRankReq;
use Xnhd\Core\Pb\Sdo\IDBGMAddFaceRankResp;
use Xnhd\Core\Pb\Sdo\IDBGMOperateItemReq;
use Xnhd\Core\Pb\Sdo\IDBGMOperateItemResp;
use Xnhd\Core\Pb\Sdo\IDBGMSendItemReq;
use Xnhd\Core\Pb\Sdo\IDBGMSendItemResp;
use Xnhd\Core\Pb\Sdo\IDBGMUpdateAssetReq;
use Xnhd\Core\Pb\Sdo\IDBGMUpdateAssetResp;
use Xnhd\Core\Pb\Sdo\IDBGMUpdateNameReq;
use Xnhd\Core\Pb\Sdo\IDBGMUpdateNameResp;
use Xnhd\Core\Pb\Sdo\ItemBase;
use Xnhd\Core\Pb\Sdo\ManageAsset;
use Xnhd\Core\Pb\Sdo\ManageItem;
use Xnhd\Core\Pb\Sdo\MSGID_ACCOUNTDBSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_CENTERDATASERVER;
use Xnhd\Core\Pb\Sdo\MSGID_ITEMDBSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_RECORDSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_ROLEDBSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_SEARCHSERVER;
use Xnhd\Core\Pb\Sdo\MSGID_SMALLGAMESERVER;
use Xnhd\Core\Pb\Sdo\SHSGetRoleIDByNameReq;
use Xnhd\Core\Pb\Sdo\SHSGetRoleIDByNameResp;
use Xnhd\Core\Pb\Sdo\PicInfo;
use Xnhd\Core\Pb\Sdo\RDBGetRoleGMInfoReq;
use Xnhd\Core\Pb\Sdo\RDBGetRoleGMInfoResp;
use Xnhd\Core\Pb\Sdo\RDBGMCloseGuideReq;
use Xnhd\Core\Pb\Sdo\RDBGMCloseGuideResp;
use Xnhd\Core\Pb\Sdo\RDBGMResetRoleHeadReq;
use Xnhd\Core\Pb\Sdo\RDBGMResetRoleHeadResp;
use Xnhd\Core\Pb\Sdo\RDBGMResetRoleWordReq;
use Xnhd\Core\Pb\Sdo\RDBGMResetRoleWordResp;
use Xnhd\Core\Pb\Sdo\RDBGMUpdateFileStateReq;
use Xnhd\Core\Pb\Sdo\RDBGMUpdateFileStateResp;
use Xnhd\Core\Pb\Sdo\RDBGetRolePicReq;
use Xnhd\Core\Pb\Sdo\RDBGetRolePicResp;
use Xnhd\Core\Pb\Sdo\RDBGetRoleInfoReq;
use Xnhd\Core\Pb\Sdo\RDBGetRoleInfoResp;
use Xnhd\Core\Pb\Sdo\RDBRemoveRolePicReq;
use Xnhd\Core\Pb\Sdo\RDBRemoveRolePicResp;
use Xnhd\Core\Pb\Sdo\RDBUpdateRoleInfoReq;
use Xnhd\Core\Pb\Sdo\RDBUpdateRoleInfoResp;
use Xnhd\Core\Pb\Sdo\RESAddProficiencyReq;
use Xnhd\Core\Pb\Sdo\RESAddProficiencyResp;
use Xnhd\Core\Pb\Sdo\RESGMSetQualifyInfoReq;
use Xnhd\Core\Pb\Sdo\RESGMSetQualifyInfoResp;
use Xnhd\Core\Pb\Sdo\RESQualifyInfoReq;
use Xnhd\Core\Pb\Sdo\RESQualifyInfoResp;
use Xnhd\Core\Pb\Sdo\SGSGMQualifyInfoReq;
use Xnhd\Core\Pb\Sdo\SGSGMQualifyInfoResp;
use Xnhd\Core\Pb\Sdo\SGSGMSetQualifyInfoReq;
use Xnhd\Core\Pb\Sdo\SGSGMSetQualifyInfoResp;
use Xnhd\Core\Socket\SocketTrait;


class SdoGameMaster
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

    /**
     * 通过帐号获取玩家角色信息
     */
    function getAccountInfo($zoneId, $accountId)
    {
        $request = new ADBGetAccountInfoReq();
        $request->setNZoneID($zoneId);
        $request->setSzAccountID($accountId);

        $messages = new MSGID_ACCOUNTDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CADB_REQ_GETACCOUNTINFO'];

        $response = new ADBGetAccountInfoResp();
        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 根据角色id获取玩家信息
     */
    function getRoleInfo($zoneId, $roleId)
    {
        $request = new ADBGetRoleInfoReq();
        $request->setNRoleID($roleId);

        $messages = new MSGID_ACCOUNTDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CADB_REQ_GETROLEINFO'];

        $response = new ADBGetRoleInfoResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /*
     * 根据条件获取玩家账号信息
     * */
    public function GetRoleAccountInfoByCond($zoneid, $accountid)
    {
        $request = new CDSGetAccountDataReq();
        $request->setNZoneID($zoneid);
        $request->setSzAccount($accountid);

        $messages = new MSGID_CENTERDATASERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CCDS_REQ_GETACCOUNTDATA'];

        $response = new CDSGetAccountDataResp();

        return $this->getResponse($request, $response, $message, $zoneid);
    }

    public function GetRoleItemList($zoneId, $roleId, $bagType = 0, $theme = 0)
    {
        $request = new IDBGetItemListReq();
        $request->setNRoleID($roleId);
        $request->setBagType($bagType);
        $request->setNTheme($theme);

        $messages = new MSGID_ITEMDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CIDB_REQ_GETITEMLIST'];

        $response = new IDBGetItemListResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     *根据roleID更新玩家物品, items = [[roleId, manageType, itemId, quantity, title, content],[...],...]
     * */
    public function updateRoleItem($zoneId, $items, $slice = 100)
    {
        $res = [];
        $res['errorCode'] = -1;
        $res['failCount'] = 0;
        $total = count($items);
        for ($i = 0; $i < $total;) {
            $_items = array_slice($items, $i, $slice);
            $_res = $this->_updateRoleItemSlice($zoneId, $_items);
            if ($_res) {
                if ($_res->getNErrorCode() == 0) {
                    $res['errorCode'] = 0;
                    if ($_res->getArrFailedCount() > 0) {
                        $res['failCount'] += $_res->getArrFailedCount();
                    }
                } else {
                    $res['errorCode'] = $_res->getNErrorCode();
                }
            } else {
                $res['failCount'] += $slice;
            }
            $i += $slice;
            //            if ($i < $total) {
            //                sleep(1);
            //            }
        }
        return $res;
    }

    /*
     * 限制items的最大个数
     */
    public function _updateRoleItemSlice($zoneId, $items)
    {
        $request = new IDBGMOperateItemReq();

        foreach ($items as $item) {
            $iteminsid = array_key_exists('iteminsid', $item) ? $item['iteminsid'] : '';
            $manageItem = new ManageItem();
            $manageItem->setNRoleId($item['roleid']);
            $manageItem->setManage(hexdec($item['managetype']));
            $manageItem->setNItemID($item['itemid']);
            $manageItem->setNQuantity($item['quantity']);
            $manageItem->setSzTitle(substr($item['title'], 0, 25 * 3));
            $manageItem->setSzContent(substr($item['content'], 0, 50 * 3));
            $manageItem->setNItemInsID($iteminsid);

            $request->appendArrManage($manageItem);
        }

        $messages = new MSGID_ITEMDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CIDB_REQ_GMOPERATEITEM'];

        $response = new IDBGMOperateItemResp();
        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     *根据roleID更新玩家资产,assets = [[roleId, assetType, number],[...],...]
     **/
    public function updateRoleAsset($zoneId, $assets, $slice = 48)
    {
        $res = [];
        $res['errorCode'] = -1;
        $res['failCount'] = 0;
        $total = count($assets);
        for ($i = 0; $i < $total;) {
            $_assets = array_slice($assets, $i, $slice);
            $_res = $this->_updateRoleAssetSlice($zoneId, $_assets);
            if ($_res) {
                if ($_res->getNErrorCode() == 0) {
                    $res['errorCode'] = 0;
                    if ($_res->getArrFailedCount() > 0) {
                        $res['failCount'] += $_res->getArrFailedCount();
                    }
                } else {
                    $res['errorCode'] = $_res->getNErrorCode();
                }
            }
            $i += $slice;
            if ($i < $total) {
                sleep(1);
            }
        }
        return $res;
    }

    /*
     * 限制assets的最大个数
     */
    public function _updateRoleAssetSlice($zoneId, $assets)
    {
        $request = new IDBGMUpdateAssetReq();

        foreach ($assets as $asset) {
            $manageAsset = new ManageAsset();
            $manageAsset->setNRoleID($asset['roleid']);
            $manageAsset->setAssetType(hexdec($asset['assettype']));
            $manageAsset->setNAsset($asset['number']);

            $request->appendArrManage($manageAsset);
        }

        $messages = new MSGID_ITEMDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CIDB_REQ_GMUPDATEASSET'];

        $response = new IDBGMUpdateAssetResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     *跳过新手引导
     * */
    public function skipNewbieGuide($zoneId, $accountId)
    {
        $request = new RDBGMCloseGuideReq();
        $request->setSzAccountID($accountId);
        $request->setNZoneID($zoneId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GMCLOSEGUIDE'];

        $response = new RDBGMCloseGuideResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }


    /**
     * 根据昵称得到roleid
     * */
    public function getRoleIDByNickName($zoneId, $nickname)
    {
        $request = new SHSGetRoleIDByNameReq();
        $request->setNZoneID($zoneId);
        $request->setSzRoleName($nickname);

        $messages = new MSGID_SEARCHSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CSHS_REQ_GETROLEIDBYNAME'];

        $response = new SHSGetRoleIDByNameResp();
        
        $roleId = false;
        $res = $this->getResponse($request, $response, $message, $zoneId);
        // dd($res);
        if (!empty($res) && $res->getNErrorCode() == 0) {
            $roleId = $res->getNRoleID();
        }

        return $roleId;
    }

    /**
     * 确认玩家信息
     * */
    function getRoleGMInfo($zoneId, $roleId)
    {
        $request = new RDBGetRoleGMInfoReq();
        $request->setNRoleID($roleId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GETROLEGMINFO'];

        $response = new RDBGetRoleGMInfoResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    function clearRoleinfo($zoneId, $account)
    {
        $request = new ADBGMDeleteRoleReq();
        $request->setNZoneID($zoneId);
        $request->setSzAccountID($account);

        $messages = new MSGID_ACCOUNTDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CADB_REQ_GMDELETEROLE'];

        $response = new ADBGMDeleteRoleResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    function addFaceRank($zoneId, $info, $inRank)
    {
        $request = new IDBGMAddFaceRankReq();

        $faceInfo = new FaceRank();
        $headPic = new PicInfo();

        $headPic->setNPicIndex($info['headPic']['nPicIndex']);
        $headPic->setPicType($info['headPic']['picType']);
        $headPic->setNPicID($info['headPic']['nPicID']);
        $headPic->setSzFileID($info['headPic']['szFileID']);
        $headPic->setSzFileUrl($info['headPic']['szFileUrl']);
        $headPic->setPicState($info['headPic']['picState']);

        $faceInfo->setNFaceID($info['FaceID']);
        $faceInfo->setNType($info['Type']);
        $faceInfo->setNZoneID($info['ZoneID']);
        $faceInfo->setNRoleID($info['RoleID']);
        $faceInfo->setGender($info['Gender']);
        $faceInfo->setSzRoleName($info['RoleName']);
        $faceInfo->setNLike($info['Like']);
        $faceInfo->setStHeadPic($headPic);

        $request->appendArrFaceInfo($faceInfo);
        $request->setNAdd($inRank);

        $messages = new MSGID_ITEMDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CIDB_REQ_GMADDFACERANK'];

        $response = new IDBGMAddFaceRankResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    public function updateRolePersonReq($zoneId, $roleId, $data)
    {
        $request = new IDBGMUpdateNameReq();
        $request->setNRoleID($roleId);
        $request->setSzRoleName($data);

        $messages = new MSGID_ITEMDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CIDB_REQ_GMUPDATENAME'];

        $response = new IDBGMUpdateNameResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    public function getRoleWord($zoneId, $roleId)
    {
        $request = new RDBGetRoleGMInfoReq();
        $request->setNRoleID($roleId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GETROLEGMINFO'];

        $response = new RDBGetRoleGMInfoResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    public function resetRoleWord($zoneId, $roleId)
    {
        $request = new RDBGMResetRoleWordReq();
        $request->setNRoleID($roleId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GMRESETROLEWORD'];

        $response = new RDBGMResetRoleWordResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    public function resetRoleHead($zoneId, $roleId)
    {
        $request = new RDBGMResetRoleHeadReq();
        $request->setNRoleID($roleId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GMRESETROLEHEAD'];

        $response = new RDBGMResetRoleHeadResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    public function getQualifyInfo($zoneId, $roleId)
    {
        $request = new RESQualifyInfoReq();
        $request->setNRoleID($roleId);

        $messages = new MSGID_RECORDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRES_REQ_QUALIFYINFO'];

        $response = new RESQualifyInfoResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }


    public function setQualifyInfo($zoneId, $roleId, $score)
    {
        $request = new RESGMSetQualifyInfoReq();
        $request->setNRoleID($roleId);
        $request->setNScore($score);

        $messages = new MSGID_RECORDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRES_REQ_GMSETQUALIFYINFO'];

        $response = new RESGMSetQualifyInfoResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }


    public function sendItem($zoneId, $roleId, $items, $title, $content)
    {
        $request = new IDBGMSendItemReq();
        $request->setNRoleID($roleId);
        $request->setSzContent($content);
        $request->setSzTitle($title);

        foreach ($items as $item) {
            $manageItem = new ItemBase();
            $manageItem->setNItemID($item['itemid']);
            $manageItem->setNQuantity($item['quantity']);

            $request->appendArrItems($manageItem);
        }

        $messages = new MSGID_ITEMDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CIDB_REQ_GMSENDITEM'];

        $response = new IDBGMSendItemResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 图片审核回调
     *
     */
    public function updateFileState($zoneId, $fileId, $status, $source, $roleId)
    {
        $request = new RDBGMUpdateFileStateReq();
        $request->setSzFileID($fileId);
        $request->setSouce($source);
        $request->setFileState($status);
        $request->setNRoleID($roleId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GMUPDATEFILESTATE'];
        $response = new RDBGMUpdateFileStateResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

     /**
     * 获取角色个性化信息
     *
     */
    public function getRolePersonInfo($zoneId, $roleId)
    {
        $request = new RDBGetRoleInfoReq();
        $request->setRoleID($roleId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GETROLEINFO'];

        $response = new RDBGetRoleInfoResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 清空音频
     *
     */
    public function resetSzVoice($zoneId, $roleId)
    {
        $request = new RDBUpdateRoleInfoReq();
        $request->setSzVoice('');

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_UPDATEROLEINFO'];

        $response = new RDBUpdateRoleInfoResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }
    /**
     * 相册
     *
     */
    public function getRolePic($zoneId, $roleId)
    {
        $request = new RDBGetRolePicReq();
        $request->setNRoleID($roleId);

        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_GETROLEPIC'];

        $response = new RDBGetRolePicResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }

    /**
     * 清空相册
     *
     */
    public function moveRolePic($zoneId, $roleId,$nPicIndex)
    {
        $request = new RDBRemoveRolePicReq();
        $request->setNRoleID($roleId);
        $request->setNPicIndex($nPicIndex);


        $messages = new MSGID_ROLEDBSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRDB_REQ_REMOVEROLEPIC'];

        $response = new RDBRemoveRolePicResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }
     /**
     * 熟练度
     *
     */
    public function addProficiency($zoneId, $roleId,$number)
    {
        $request = new RESAddProficiencyReq();
        $request->setRoleID($roleId);
        $request->setProficiency($number);


        $messages = new MSGID_RECORDSERVER();
        $arrMessage = $messages->getEnumValues();
        $message = $arrMessage['MSGID_CRES_REQ_ADDPROFICIENCY'];

        $response = new RESAddProficiencyResp();

        return $this->getResponse($request, $response, $message, $zoneId);
    }
}
