<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdateHouseDressResp message
 */
class PDBUpdateHouseDressResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STHOUSEDETAILINFO = 3;

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
        self::STHOUSEDETAILINFO => array(
            'name' => 'stHouseDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
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
        $this->values[self::STHOUSEDETAILINFO] = null;
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
     * Sets value of 'stHouseDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDetailInfo $value Property value
     *
     * @return null
     */
    public function setStHouseDetailInfo(\Xnhd\Core\Pb\Sdo\HouseDetailInfo $value=null)
    {
        return $this->set(self::STHOUSEDETAILINFO, $value);
    }

    /**
     * Returns value of 'stHouseDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDetailInfo
     */
    public function getStHouseDetailInfo()
    {
        return $this->get(self::STHOUSEDETAILINFO);
    }

    /**
     * Returns true if 'stHouseDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHouseDetailInfo()
    {
        return $this->get(self::STHOUSEDETAILINFO) !== null;
    }
}
}