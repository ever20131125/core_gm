<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASRoleRoomInfoUpdatedNoti message
 */
class GASRoleRoomInfoUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STROLEROOMGENERALINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROLEROOMGENERALINFO => array(
            'name' => 'stRoleRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo'
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
        $this->values[self::STROLEROOMGENERALINFO] = null;
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
     * Sets value of 'stRoleRoomGeneralInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoleRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value=null)
    {
        return $this->set(self::STROLEROOMGENERALINFO, $value);
    }

    /**
     * Returns value of 'stRoleRoomGeneralInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo
     */
    public function getStRoleRoomGeneralInfo()
    {
        return $this->get(self::STROLEROOMGENERALINFO);
    }

    /**
     * Returns true if 'stRoleRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleRoomGeneralInfo()
    {
        return $this->get(self::STROLEROOMGENERALINFO) !== null;
    }
}
}