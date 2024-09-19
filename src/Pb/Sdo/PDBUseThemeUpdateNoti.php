<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUseThemeUpdateNoti message
 */
class PDBUseThemeUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NUSETHEME = 2;
    const HOUSEDETAILINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUSETHEME => array(
            'name' => 'nUseTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOUSEDETAILINFO => array(
            'name' => 'houseDetailInfo',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NUSETHEME] = null;
        $this->values[self::HOUSEDETAILINFO] = null;
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
     * Sets value of 'nUseTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUseTheme($value)
    {
        return $this->set(self::NUSETHEME, $value);
    }

    /**
     * Returns value of 'nUseTheme' property
     *
     * @return integer
     */
    public function getNUseTheme()
    {
        $value = $this->get(self::NUSETHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUseTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUseTheme()
    {
        return $this->get(self::NUSETHEME) !== null;
    }

    /**
     * Sets value of 'houseDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDetailInfo $value Property value
     *
     * @return null
     */
    public function setHouseDetailInfo(\Xnhd\Core\Pb\Sdo\HouseDetailInfo $value=null)
    {
        return $this->set(self::HOUSEDETAILINFO, $value);
    }

    /**
     * Returns value of 'houseDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDetailInfo
     */
    public function getHouseDetailInfo()
    {
        return $this->get(self::HOUSEDETAILINFO);
    }

    /**
     * Returns true if 'houseDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHouseDetailInfo()
    {
        return $this->get(self::HOUSEDETAILINFO) !== null;
    }
}
}