<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * NearbyPeopleInfo message
 */
class NearbyPeopleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STROLEPUBLICINFO = 1;
    const NDISTANCE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::NDISTANCE => array(
            'name' => 'nDistance',
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
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::NDISTANCE] = null;
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
     * Sets value of 'stRolePublicInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO);
    }

    /**
     * Returns true if 'stRolePublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO) !== null;
    }

    /**
     * Sets value of 'nDistance' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDistance($value)
    {
        return $this->set(self::NDISTANCE, $value);
    }

    /**
     * Returns value of 'nDistance' property
     *
     * @return integer
     */
    public function getNDistance()
    {
        $value = $this->get(self::NDISTANCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDistance' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDistance()
    {
        return $this->get(self::NDISTANCE) !== null;
    }
}
}