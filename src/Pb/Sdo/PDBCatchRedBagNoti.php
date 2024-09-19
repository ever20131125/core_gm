<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBCatchRedBagNoti message
 */
class PDBCatchRedBagNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NBAGID = 2;
    const ASSETTYPE = 3;
    const NASSET = 4;
    const NCATCHTIME = 5;

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
        self::NCATCHTIME => array(
            'name' => 'nCatchTime',
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
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NASSET] = null;
        $this->values[self::NCATCHTIME] = null;
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
     * Sets value of 'nCatchTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCatchTime($value)
    {
        return $this->set(self::NCATCHTIME, $value);
    }

    /**
     * Returns value of 'nCatchTime' property
     *
     * @return integer
     */
    public function getNCatchTime()
    {
        $value = $this->get(self::NCATCHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCatchTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCatchTime()
    {
        return $this->get(self::NCATCHTIME) !== null;
    }
}
}