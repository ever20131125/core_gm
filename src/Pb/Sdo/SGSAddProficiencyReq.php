<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSAddProficiencyReq message
 */
class SGSAddProficiencyReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const PROFICIENCY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROFICIENCY => array(
            'name' => 'proficiency',
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
        $this->values[self::PROFICIENCY] = null;
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
     * Sets value of 'proficiency' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProficiency($value)
    {
        return $this->set(self::PROFICIENCY, $value);
    }

    /**
     * Returns value of 'proficiency' property
     *
     * @return integer
     */
    public function getProficiency()
    {
        $value = $this->get(self::PROFICIENCY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'proficiency' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProficiency()
    {
        return $this->get(self::PROFICIENCY) !== null;
    }
}
}