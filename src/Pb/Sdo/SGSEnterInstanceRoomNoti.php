<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSEnterInstanceRoomNoti message
 */
class SGSEnterInstanceRoomNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STROLEINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROLEINFO => array(
            'name' => 'stRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\InstanceRoleInfo'
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
        $this->values[self::STROLEINFO] = null;
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
     * Sets value of 'stRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\InstanceRoleInfo $value Property value
     *
     * @return null
     */
    public function setStRoleInfo(\Xnhd\Core\Pb\Sdo\InstanceRoleInfo $value=null)
    {
        return $this->set(self::STROLEINFO, $value);
    }

    /**
     * Returns value of 'stRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceRoleInfo
     */
    public function getStRoleInfo()
    {
        return $this->get(self::STROLEINFO);
    }

    /**
     * Returns true if 'stRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleInfo()
    {
        return $this->get(self::STROLEINFO) !== null;
    }
}
}