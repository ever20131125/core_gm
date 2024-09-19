<?php
/**
 * Auto generated from accountdbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ADBCreateRoleNoti message
 */
class ADBCreateRoleNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STROLEPUBLICINFO = 1;
    const STROLEPRIVATEINFO = 2;
    const STAVATARINFO = 3;
    const STROLEPLATINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STROLEPRIVATEINFO => array(
            'name' => 'stRolePrivateInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePrivateInfo'
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::STROLEPLATINFO => array(
            'name' => 'stRolePlatInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePlatInfo'
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
        $this->values[self::STROLEPRIVATEINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLEPLATINFO] = null;
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
     * Sets value of 'stRolePrivateInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePrivateInfo $value Property value
     *
     * @return null
     */
    public function setStRolePrivateInfo(\Xnhd\Core\Pb\Sdo\RolePrivateInfo $value=null)
    {
        return $this->set(self::STROLEPRIVATEINFO, $value);
    }

    /**
     * Returns value of 'stRolePrivateInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePrivateInfo
     */
    public function getStRolePrivateInfo()
    {
        return $this->get(self::STROLEPRIVATEINFO);
    }

    /**
     * Returns true if 'stRolePrivateInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePrivateInfo()
    {
        return $this->get(self::STROLEPRIVATEINFO) !== null;
    }

    /**
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }

    /**
     * Sets value of 'stRolePlatInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePlatInfo $value Property value
     *
     * @return null
     */
    public function setStRolePlatInfo(\Xnhd\Core\Pb\Sdo\RolePlatInfo $value=null)
    {
        return $this->set(self::STROLEPLATINFO, $value);
    }

    /**
     * Returns value of 'stRolePlatInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePlatInfo
     */
    public function getStRolePlatInfo()
    {
        return $this->get(self::STROLEPLATINFO);
    }

    /**
     * Returns true if 'stRolePlatInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePlatInfo()
    {
        return $this->get(self::STROLEPLATINFO) !== null;
    }
}
}