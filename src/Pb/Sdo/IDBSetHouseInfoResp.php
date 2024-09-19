<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBSetHouseInfoResp message
 */
class IDBSetHouseInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NTHEMEID = 3;
    const NHOUSEINFOTYPE = 4;
    const HOUSEINFO = 5;

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
        self::NTHEMEID => array(
            'name' => 'nThemeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOUSEINFOTYPE => array(
            'name' => 'nHouseInfoType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOUSEINFO => array(
            'name' => 'houseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseGeneralInfo'
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
        $this->values[self::NTHEMEID] = null;
        $this->values[self::NHOUSEINFOTYPE] = null;
        $this->values[self::HOUSEINFO] = null;
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
     * Sets value of 'nThemeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeID($value)
    {
        return $this->set(self::NTHEMEID, $value);
    }

    /**
     * Returns value of 'nThemeID' property
     *
     * @return integer
     */
    public function getNThemeID()
    {
        $value = $this->get(self::NTHEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeID()
    {
        return $this->get(self::NTHEMEID) !== null;
    }

    /**
     * Sets value of 'nHouseInfoType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHouseInfoType($value)
    {
        return $this->set(self::NHOUSEINFOTYPE, $value);
    }

    /**
     * Returns value of 'nHouseInfoType' property
     *
     * @return integer
     */
    public function getNHouseInfoType()
    {
        $value = $this->get(self::NHOUSEINFOTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHouseInfoType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHouseInfoType()
    {
        return $this->get(self::NHOUSEINFOTYPE) !== null;
    }

    /**
     * Sets value of 'houseInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value Property value
     *
     * @return null
     */
    public function setHouseInfo(\Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value=null)
    {
        return $this->set(self::HOUSEINFO, $value);
    }

    /**
     * Returns value of 'houseInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo
     */
    public function getHouseInfo()
    {
        return $this->get(self::HOUSEINFO);
    }

    /**
     * Returns true if 'houseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHouseInfo()
    {
        return $this->get(self::HOUSEINFO) !== null;
    }
}
}