<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RedBagCatcher message
 */
class RedBagCatcher extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ASSETTYPE = 2;
    const NASSET = 3;
    const NCATCHTIME = 4;
    const NBEST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
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
        self::NBEST => array(
            'name' => 'nBest',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NASSET] = null;
        $this->values[self::NCATCHTIME] = null;
        $this->values[self::NBEST] = null;
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

    /**
     * Sets value of 'nBest' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBest($value)
    {
        return $this->set(self::NBEST, $value);
    }

    /**
     * Returns value of 'nBest' property
     *
     * @return integer
     */
    public function getNBest()
    {
        $value = $this->get(self::NBEST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBest()
    {
        return $this->get(self::NBEST) !== null;
    }
}
}