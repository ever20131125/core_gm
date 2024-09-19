<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InstanceAction message
 */
class InstanceAction extends \ProtobufMessage
{
    /* Field index constants */
    const POSID = 1;
    const POSINDEX = 2;
    const ROLEID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::POSID => array(
            'name' => 'posID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSINDEX => array(
            'name' => 'posIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
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
        $this->values[self::POSID] = null;
        $this->values[self::POSINDEX] = null;
        $this->values[self::ROLEID] = null;
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
     * Sets value of 'posID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPosID($value)
    {
        return $this->set(self::POSID, $value);
    }

    /**
     * Returns value of 'posID' property
     *
     * @return integer
     */
    public function getPosID()
    {
        $value = $this->get(self::POSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'posID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPosID()
    {
        return $this->get(self::POSID) !== null;
    }

    /**
     * Sets value of 'posIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPosIndex($value)
    {
        return $this->set(self::POSINDEX, $value);
    }

    /**
     * Returns value of 'posIndex' property
     *
     * @return integer
     */
    public function getPosIndex()
    {
        $value = $this->get(self::POSINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'posIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPosIndex()
    {
        return $this->get(self::POSINDEX) !== null;
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
}
}