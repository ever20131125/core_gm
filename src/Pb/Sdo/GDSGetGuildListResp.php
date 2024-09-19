<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetGuildListResp message
 */
class GDSGetGuildListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GETGUILDINFOTYPE = 2;
    const ROLEID = 3;
    const FROMINDEX = 4;
    const GUILDINFOLIST = 5;
    const APPLYEDLIST = 6;
    const OLDGULDINFO = 7;
    const APPLYED = 8;
    const ASSETTYPE = 9;
    const NPRICE = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GETGUILDINFOTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GetGuildInfoType::enmGetGuildInfo_Invalid,
            'name' => 'getGuildInfoType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROMINDEX => array(
            'name' => 'fromIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDINFOLIST => array(
            'name' => 'guildInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildBriefDetails'
        ),
        self::APPLYEDLIST => array(
            'name' => 'applyedList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::OLDGULDINFO => array(
            'name' => 'oldGuldInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildBriefDetails'
        ),
        self::APPLYED => array(
            'name' => 'applyed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ASSETTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AssetType::enmAssetType_Money,
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRICE => array(
            'name' => 'nPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::NERRORCODE] = null;
        $this->values[self::GETGUILDINFOTYPE] = self::$fields[self::GETGUILDINFOTYPE]['default'];
        $this->values[self::ROLEID] = null;
        $this->values[self::FROMINDEX] = null;
        $this->values[self::GUILDINFOLIST] = array();
        $this->values[self::APPLYEDLIST] = array();
        $this->values[self::OLDGULDINFO] = null;
        $this->values[self::APPLYED] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NPRICE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'getGuildInfoType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGetGuildInfoType($value)
    {
        return $this->set(self::GETGUILDINFOTYPE, $value);
    }

    /**
     * Returns value of 'getGuildInfoType' property
     *
     * @return integer
     */
    public function getGetGuildInfoType()
    {
        $value = $this->get(self::GETGUILDINFOTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'getGuildInfoType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetGuildInfoType()
    {
        return $this->get(self::GETGUILDINFOTYPE) !== null;
    }

    /**
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'fromIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFromIndex($value)
    {
        return $this->set(self::FROMINDEX, $value);
    }

    /**
     * Returns value of 'fromIndex' property
     *
     * @return integer
     */
    public function getFromIndex()
    {
        $value = $this->get(self::FROMINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fromIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromIndex()
    {
        return $this->get(self::FROMINDEX) !== null;
    }

    /**
     * Appends value to 'guildInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildBriefDetails $value Value to append
     *
     * @return null
     */
    public function appendGuildInfoList(\Xnhd\Core\Pb\Sdo\GuildBriefDetails $value)
    {
        return $this->append(self::GUILDINFOLIST, $value);
    }

    /**
     * Clears 'guildInfoList' list
     *
     * @return null
     */
    public function clearGuildInfoList()
    {
        return $this->clear(self::GUILDINFOLIST);
    }

    /**
     * Returns 'guildInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails[]
     */
    public function getGuildInfoList()
    {
        return $this->get(self::GUILDINFOLIST);
    }

    /**
     * Returns true if 'guildInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildInfoList()
    {
        return count($this->get(self::GUILDINFOLIST)) !== 0;
    }

    /**
     * Returns 'guildInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getGuildInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::GUILDINFOLIST));
    }

    /**
     * Returns element from 'guildInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails
     */
    public function getGuildInfoListAt($offset)
    {
        return $this->get(self::GUILDINFOLIST, $offset);
    }

    /**
     * Returns count of 'guildInfoList' list
     *
     * @return int
     */
    public function getGuildInfoListCount()
    {
        return $this->count(self::GUILDINFOLIST);
    }

    /**
     * Appends value to 'applyedList' list
     *
     * @param boolean $value Value to append
     *
     * @return null
     */
    public function appendApplyedList($value)
    {
        return $this->append(self::APPLYEDLIST, $value);
    }

    /**
     * Clears 'applyedList' list
     *
     * @return null
     */
    public function clearApplyedList()
    {
        return $this->clear(self::APPLYEDLIST);
    }

    /**
     * Returns 'applyedList' list
     *
     * @return boolean[]
     */
    public function getApplyedList()
    {
        return $this->get(self::APPLYEDLIST);
    }

    /**
     * Returns true if 'applyedList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasApplyedList()
    {
        return count($this->get(self::APPLYEDLIST)) !== 0;
    }

    /**
     * Returns 'applyedList' iterator
     *
     * @return \ArrayIterator
     */
    public function getApplyedListIterator()
    {
        return new \ArrayIterator($this->get(self::APPLYEDLIST));
    }

    /**
     * Returns element from 'applyedList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return boolean
     */
    public function getApplyedListAt($offset)
    {
        return $this->get(self::APPLYEDLIST, $offset);
    }

    /**
     * Returns count of 'applyedList' list
     *
     * @return int
     */
    public function getApplyedListCount()
    {
        return $this->count(self::APPLYEDLIST);
    }

    /**
     * Sets value of 'oldGuldInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildBriefDetails $value Property value
     *
     * @return null
     */
    public function setOldGuldInfo(\Xnhd\Core\Pb\Sdo\GuildBriefDetails $value=null)
    {
        return $this->set(self::OLDGULDINFO, $value);
    }

    /**
     * Returns value of 'oldGuldInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails
     */
    public function getOldGuldInfo()
    {
        return $this->get(self::OLDGULDINFO);
    }

    /**
     * Returns true if 'oldGuldInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOldGuldInfo()
    {
        return $this->get(self::OLDGULDINFO) !== null;
    }

    /**
     * Sets value of 'applyed' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setApplyed($value)
    {
        return $this->set(self::APPLYED, $value);
    }

    /**
     * Returns value of 'applyed' property
     *
     * @return boolean
     */
    public function getApplyed()
    {
        $value = $this->get(self::APPLYED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'applyed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasApplyed()
    {
        return $this->get(self::APPLYED) !== null;
    }

    /**
     * Sets value of 'assetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssetType($value)
    {
        return $this->set(self::ASSETTYPE, $value);
    }

    /**
     * Returns value of 'assetType' property
     *
     * @return integer
     */
    public function getAssetType()
    {
        $value = $this->get(self::ASSETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'assetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAssetType()
    {
        return $this->get(self::ASSETTYPE) !== null;
    }

    /**
     * Sets value of 'nPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrice($value)
    {
        return $this->set(self::NPRICE, $value);
    }

    /**
     * Returns value of 'nPrice' property
     *
     * @return integer
     */
    public function getNPrice()
    {
        $value = $this->get(self::NPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrice()
    {
        return $this->get(self::NPRICE) !== null;
    }
}
}