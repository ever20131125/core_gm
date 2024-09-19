<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGMSetRoleTypeReq message
 */
class PDBGMSetRoleTypeReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ROLETYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoleType::enmRoleType_Normal,
            'name' => 'roleType',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ROLETYPE] = self::$fields[self::ROLETYPE]['default'];
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'roleType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleType($value)
    {
        return $this->set(self::ROLETYPE, $value);
    }

    /**
     * Returns value of 'roleType' property
     *
     * @return integer
     */
    public function getRoleType()
    {
        $value = $this->get(self::ROLETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleType()
    {
        return $this->get(self::ROLETYPE) !== null;
    }
}
}