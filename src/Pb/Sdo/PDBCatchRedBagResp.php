<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBCatchRedBagResp message
 */
class PDBCatchRedBagResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ASSETTYPE = 3;
    const NASSET = 4;
    const NCATCHTIME = 5;
    const STREDBAGINFO = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
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
        self::STREDBAGINFO => array(
            'name' => 'stRedBagInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RedBagDetail'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NASSET] = null;
        $this->values[self::NCATCHTIME] = null;
        $this->values[self::STREDBAGINFO] = null;
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
     * Sets value of 'stRedBagInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RedBagDetail $value Property value
     *
     * @return null
     */
    public function setStRedBagInfo(\Xnhd\Core\Pb\Sdo\RedBagDetail $value=null)
    {
        return $this->set(self::STREDBAGINFO, $value);
    }

    /**
     * Returns value of 'stRedBagInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagDetail
     */
    public function getStRedBagInfo()
    {
        return $this->get(self::STREDBAGINFO);
    }

    /**
     * Returns true if 'stRedBagInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRedBagInfo()
    {
        return $this->get(self::STREDBAGINFO) !== null;
    }
}
}