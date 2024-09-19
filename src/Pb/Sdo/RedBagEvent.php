<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RedBagEvent message
 */
class RedBagEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NTYPE = 1;
    const NROLEID = 2;
    const ASSETTYPE = 3;
    const ASSET = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTYPE => array(
            'name' => 'nType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSETTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AssetType::enmAssetType_None,
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSET => array(
            'name' => 'asset',
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
        $this->values[self::NTYPE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::ASSET] = null;
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
     * Sets value of 'nType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return integer
     */
    public function getNType()
    {
        $value = $this->get(self::NTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return $this->get(self::NTYPE) !== null;
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
     * Sets value of 'asset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAsset($value)
    {
        return $this->set(self::ASSET, $value);
    }

    /**
     * Returns value of 'asset' property
     *
     * @return integer
     */
    public function getAsset()
    {
        $value = $this->get(self::ASSET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'asset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAsset()
    {
        return $this->get(self::ASSET) !== null;
    }
}
}