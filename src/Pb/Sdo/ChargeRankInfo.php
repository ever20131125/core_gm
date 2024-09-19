<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChargeRankInfo message
 */
class ChargeRankInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEINFO = 1;
    const NMONEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::NMONEY => array(
            'name' => 'nMoney',
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
        $this->values[self::ROLEINFO] = null;
        $this->values[self::NMONEY] = null;
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
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return $this->get(self::ROLEINFO) !== null;
    }

    /**
     * Sets value of 'nMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoney($value)
    {
        return $this->set(self::NMONEY, $value);
    }

    /**
     * Returns value of 'nMoney' property
     *
     * @return integer
     */
    public function getNMoney()
    {
        $value = $this->get(self::NMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoney()
    {
        return $this->get(self::NMONEY) !== null;
    }
}
}