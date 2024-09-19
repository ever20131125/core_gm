<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBSendRedBagReq message
 */
class IDBSendRedBagReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NBAGID = 2;
    const BAGTYPE = 3;
    const ASSETTYPE = 4;
    const NASSET = 5;
    const NCOUNT = 6;
    const BRANDOM = 7;
    const SZMESSAGE = 8;
    const NOPTION = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBAGID => array(
            'name' => 'nBagID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RedBagType::enmRedBagType_None,
            'name' => 'bagType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSETTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AssetType::enmAssetType_None,
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASSET => array(
            'name' => 'nAsset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOUNT => array(
            'name' => 'nCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BRANDOM => array(
            'name' => 'bRandom',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZMESSAGE => array(
            'name' => 'szMessage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NBAGID] = null;
        $this->values[self::BAGTYPE] = self::$fields[self::BAGTYPE]['default'];
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NASSET] = null;
        $this->values[self::NCOUNT] = null;
        $this->values[self::BRANDOM] = null;
        $this->values[self::SZMESSAGE] = null;
        $this->values[self::NOPTION] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nBagID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBagID($value)
    {
        return $this->set(self::NBAGID, $value);
    }

    /**
     * Returns value of 'nBagID' property
     *
     * @return integer
     */
    public function getNBagID()
    {
        $value = $this->get(self::NBAGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBagID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBagID()
    {
        return $this->get(self::NBAGID) !== null;
    }

    /**
     * Sets value of 'bagType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBagType($value)
    {
        return $this->set(self::BAGTYPE, $value);
    }

    /**
     * Returns value of 'bagType' property
     *
     * @return integer
     */
    public function getBagType()
    {
        $value = $this->get(self::BAGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bagType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBagType()
    {
        return $this->get(self::BAGTYPE) !== null;
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
     * Sets value of 'nAsset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAsset($value)
    {
        return $this->set(self::NASSET, $value);
    }

    /**
     * Returns value of 'nAsset' property
     *
     * @return integer
     */
    public function getNAsset()
    {
        $value = $this->get(self::NASSET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAsset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAsset()
    {
        return $this->get(self::NASSET) !== null;
    }

    /**
     * Sets value of 'nCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCount($value)
    {
        return $this->set(self::NCOUNT, $value);
    }

    /**
     * Returns value of 'nCount' property
     *
     * @return integer
     */
    public function getNCount()
    {
        $value = $this->get(self::NCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCount()
    {
        return $this->get(self::NCOUNT) !== null;
    }

    /**
     * Sets value of 'bRandom' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBRandom($value)
    {
        return $this->set(self::BRANDOM, $value);
    }

    /**
     * Returns value of 'bRandom' property
     *
     * @return integer
     */
    public function getBRandom()
    {
        $value = $this->get(self::BRANDOM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bRandom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBRandom()
    {
        return $this->get(self::BRANDOM) !== null;
    }

    /**
     * Sets value of 'szMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMessage($value)
    {
        return $this->set(self::SZMESSAGE, $value);
    }

    /**
     * Returns value of 'szMessage' property
     *
     * @return string
     */
    public function getSzMessage()
    {
        $value = $this->get(self::SZMESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMessage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMessage()
    {
        return $this->get(self::SZMESSAGE) !== null;
    }

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
    }
}
}