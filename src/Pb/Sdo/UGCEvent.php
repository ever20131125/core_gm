<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UGCEvent message
 */
class UGCEvent extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const UGCTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UGCTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\UGCType::enmUGCType_None,
            'name' => 'ugcType',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::UGCTYPE] = self::$fields[self::UGCTYPE]['default'];
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'ugcType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUgcType($value)
    {
        return $this->set(self::UGCTYPE, $value);
    }

    /**
     * Returns value of 'ugcType' property
     *
     * @return integer
     */
    public function getUgcType()
    {
        $value = $this->get(self::UGCTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ugcType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUgcType()
    {
        return $this->get(self::UGCTYPE) !== null;
    }
}
}