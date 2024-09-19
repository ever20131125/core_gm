<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTAddGMPrizeMailReq message
 */
class ACTAddGMPrizeMailReq extends \ProtobufMessage
{
    /* Field index constants */
    const NPLATID = 1;
    const NSTARTTIME = 2;
    const NENDTIME = 3;
    const NZONEID = 4;
    const NMINLEVEL = 5;
    const NMAXLEVEL = 6;
    const NMINVIP = 7;
    const NMAXVIP = 8;
    const NMINCREATEROLETIME = 9;
    const NMAXCREATEROLETIME = 10;
    const NSOURCE = 11;
    const SZTITLE = 12;
    const SZCONTENT = 13;
    const ARRITEMLIST = 14;
    const NEFFECTTIME = 15;
    const ARRSDKSOURCE = 16;
    const SZEXTENDSOURCE = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPLATID => array(
            'name' => 'nPlatID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMINLEVEL => array(
            'name' => 'nMinLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXLEVEL => array(
            'name' => 'nMaxLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMINVIP => array(
            'name' => 'nMinVip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXVIP => array(
            'name' => 'nMaxVip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMINCREATEROLETIME => array(
            'name' => 'nMinCreateRoleTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXCREATEROLETIME => array(
            'name' => 'nMaxCreateRoleTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSOURCE => array(
            'name' => 'nSource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZTITLE => array(
            'name' => 'szTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZCONTENT => array(
            'name' => 'szContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRITEMLIST => array(
            'name' => 'arrItemList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NEFFECTTIME => array(
            'name' => 'nEffectTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSDKSOURCE => array(
            'name' => 'arrSdkSource',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZEXTENDSOURCE => array(
            'name' => 'szExtendSource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NPLATID] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::NMINLEVEL] = null;
        $this->values[self::NMAXLEVEL] = null;
        $this->values[self::NMINVIP] = null;
        $this->values[self::NMAXVIP] = null;
        $this->values[self::NMINCREATEROLETIME] = null;
        $this->values[self::NMAXCREATEROLETIME] = null;
        $this->values[self::NSOURCE] = null;
        $this->values[self::SZTITLE] = null;
        $this->values[self::SZCONTENT] = null;
        $this->values[self::ARRITEMLIST] = array();
        $this->values[self::NEFFECTTIME] = null;
        $this->values[self::ARRSDKSOURCE] = array();
        $this->values[self::SZEXTENDSOURCE] = null;
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
     * Sets value of 'nPlatID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlatID($value)
    {
        return $this->set(self::NPLATID, $value);
    }

    /**
     * Returns value of 'nPlatID' property
     *
     * @return integer
     */
    public function getNPlatID()
    {
        $value = $this->get(self::NPLATID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlatID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlatID()
    {
        return $this->get(self::NPLATID) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Sets value of 'nMinLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMinLevel($value)
    {
        return $this->set(self::NMINLEVEL, $value);
    }

    /**
     * Returns value of 'nMinLevel' property
     *
     * @return integer
     */
    public function getNMinLevel()
    {
        $value = $this->get(self::NMINLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMinLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMinLevel()
    {
        return $this->get(self::NMINLEVEL) !== null;
    }

    /**
     * Sets value of 'nMaxLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxLevel($value)
    {
        return $this->set(self::NMAXLEVEL, $value);
    }

    /**
     * Returns value of 'nMaxLevel' property
     *
     * @return integer
     */
    public function getNMaxLevel()
    {
        $value = $this->get(self::NMAXLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxLevel()
    {
        return $this->get(self::NMAXLEVEL) !== null;
    }

    /**
     * Sets value of 'nMinVip' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMinVip($value)
    {
        return $this->set(self::NMINVIP, $value);
    }

    /**
     * Returns value of 'nMinVip' property
     *
     * @return integer
     */
    public function getNMinVip()
    {
        $value = $this->get(self::NMINVIP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMinVip' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMinVip()
    {
        return $this->get(self::NMINVIP) !== null;
    }

    /**
     * Sets value of 'nMaxVip' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxVip($value)
    {
        return $this->set(self::NMAXVIP, $value);
    }

    /**
     * Returns value of 'nMaxVip' property
     *
     * @return integer
     */
    public function getNMaxVip()
    {
        $value = $this->get(self::NMAXVIP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxVip' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxVip()
    {
        return $this->get(self::NMAXVIP) !== null;
    }

    /**
     * Sets value of 'nMinCreateRoleTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMinCreateRoleTime($value)
    {
        return $this->set(self::NMINCREATEROLETIME, $value);
    }

    /**
     * Returns value of 'nMinCreateRoleTime' property
     *
     * @return integer
     */
    public function getNMinCreateRoleTime()
    {
        $value = $this->get(self::NMINCREATEROLETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMinCreateRoleTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMinCreateRoleTime()
    {
        return $this->get(self::NMINCREATEROLETIME) !== null;
    }

    /**
     * Sets value of 'nMaxCreateRoleTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxCreateRoleTime($value)
    {
        return $this->set(self::NMAXCREATEROLETIME, $value);
    }

    /**
     * Returns value of 'nMaxCreateRoleTime' property
     *
     * @return integer
     */
    public function getNMaxCreateRoleTime()
    {
        $value = $this->get(self::NMAXCREATEROLETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxCreateRoleTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxCreateRoleTime()
    {
        return $this->get(self::NMAXCREATEROLETIME) !== null;
    }

    /**
     * Sets value of 'nSource' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSource($value)
    {
        return $this->set(self::NSOURCE, $value);
    }

    /**
     * Returns value of 'nSource' property
     *
     * @return integer
     */
    public function getNSource()
    {
        $value = $this->get(self::NSOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSource()
    {
        return $this->get(self::NSOURCE) !== null;
    }

    /**
     * Sets value of 'szTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTitle($value)
    {
        return $this->set(self::SZTITLE, $value);
    }

    /**
     * Returns value of 'szTitle' property
     *
     * @return string
     */
    public function getSzTitle()
    {
        $value = $this->get(self::SZTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTitle()
    {
        return $this->get(self::SZTITLE) !== null;
    }

    /**
     * Sets value of 'szContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzContent($value)
    {
        return $this->set(self::SZCONTENT, $value);
    }

    /**
     * Returns value of 'szContent' property
     *
     * @return string
     */
    public function getSzContent()
    {
        $value = $this->get(self::SZCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzContent()
    {
        return $this->get(self::SZCONTENT) !== null;
    }

    /**
     * Appends value to 'arrItemList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMLIST, $value);
    }

    /**
     * Clears 'arrItemList' list
     *
     * @return null
     */
    public function clearArrItemList()
    {
        return $this->clear(self::ARRITEMLIST);
    }

    /**
     * Returns 'arrItemList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemList()
    {
        return $this->get(self::ARRITEMLIST);
    }

    /**
     * Returns true if 'arrItemList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemList()
    {
        return count($this->get(self::ARRITEMLIST)) !== 0;
    }

    /**
     * Returns 'arrItemList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMLIST));
    }

    /**
     * Returns element from 'arrItemList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemListAt($offset)
    {
        return $this->get(self::ARRITEMLIST, $offset);
    }

    /**
     * Returns count of 'arrItemList' list
     *
     * @return int
     */
    public function getArrItemListCount()
    {
        return $this->count(self::ARRITEMLIST);
    }

    /**
     * Sets value of 'nEffectTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEffectTime($value)
    {
        return $this->set(self::NEFFECTTIME, $value);
    }

    /**
     * Returns value of 'nEffectTime' property
     *
     * @return integer
     */
    public function getNEffectTime()
    {
        $value = $this->get(self::NEFFECTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEffectTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEffectTime()
    {
        return $this->get(self::NEFFECTTIME) !== null;
    }

    /**
     * Appends value to 'arrSdkSource' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrSdkSource($value)
    {
        return $this->append(self::ARRSDKSOURCE, $value);
    }

    /**
     * Clears 'arrSdkSource' list
     *
     * @return null
     */
    public function clearArrSdkSource()
    {
        return $this->clear(self::ARRSDKSOURCE);
    }

    /**
     * Returns 'arrSdkSource' list
     *
     * @return string[]
     */
    public function getArrSdkSource()
    {
        return $this->get(self::ARRSDKSOURCE);
    }

    /**
     * Returns true if 'arrSdkSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSdkSource()
    {
        return count($this->get(self::ARRSDKSOURCE)) !== 0;
    }

    /**
     * Returns 'arrSdkSource' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSdkSourceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSDKSOURCE));
    }

    /**
     * Returns element from 'arrSdkSource' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrSdkSourceAt($offset)
    {
        return $this->get(self::ARRSDKSOURCE, $offset);
    }

    /**
     * Returns count of 'arrSdkSource' list
     *
     * @return int
     */
    public function getArrSdkSourceCount()
    {
        return $this->count(self::ARRSDKSOURCE);
    }

    /**
     * Sets value of 'szExtendSource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzExtendSource($value)
    {
        return $this->set(self::SZEXTENDSOURCE, $value);
    }

    /**
     * Returns value of 'szExtendSource' property
     *
     * @return string
     */
    public function getSzExtendSource()
    {
        $value = $this->get(self::SZEXTENDSOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szExtendSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzExtendSource()
    {
        return $this->get(self::SZEXTENDSOURCE) !== null;
    }
}
}