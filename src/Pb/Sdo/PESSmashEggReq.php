<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESSmashEggReq message
 */
class PESSmashEggReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const EGGID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EGGID => array(
            'name' => 'eggid',
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
        $this->values[self::EGGID] = null;
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
     * Sets value of 'roleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleId($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleId' property
     *
     * @return integer
     */
    public function getRoleId()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleId()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'eggid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEggid($value)
    {
        return $this->set(self::EGGID, $value);
    }

    /**
     * Returns value of 'eggid' property
     *
     * @return integer
     */
    public function getEggid()
    {
        $value = $this->get(self::EGGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'eggid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEggid()
    {
        return $this->get(self::EGGID) !== null;
    }
}
}