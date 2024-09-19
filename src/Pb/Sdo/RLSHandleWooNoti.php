<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSHandleWooNoti message
 */
class RLSHandleWooNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NWOOEDROLEINFO = 1;
    const BAGREE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWOOEDROLEINFO => array(
            'name' => 'nWooedRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::BAGREE => array(
            'name' => 'bAgree',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NWOOEDROLEINFO] = null;
        $this->values[self::BAGREE] = null;
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
     * Sets value of 'nWooedRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setNWooedRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::NWOOEDROLEINFO, $value);
    }

    /**
     * Returns value of 'nWooedRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getNWooedRoleInfo()
    {
        return $this->get(self::NWOOEDROLEINFO);
    }

    /**
     * Returns true if 'nWooedRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWooedRoleInfo()
    {
        return $this->get(self::NWOOEDROLEINFO) !== null;
    }

    /**
     * Sets value of 'bAgree' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBAgree($value)
    {
        return $this->set(self::BAGREE, $value);
    }

    /**
     * Returns value of 'bAgree' property
     *
     * @return boolean
     */
    public function getBAgree()
    {
        $value = $this->get(self::BAGREE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bAgree' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAgree()
    {
        return $this->get(self::BAGREE) !== null;
    }
}
}