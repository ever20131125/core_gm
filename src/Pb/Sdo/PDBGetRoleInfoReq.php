<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRoleInfoReq message
 */
class PDBGetRoleInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const NROLETYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLETYPE => array(
            'name' => 'nRoleType',
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
        $this->values[self::NROLETYPE] = null;
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
     * Sets value of 'nRoleType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleType($value)
    {
        return $this->set(self::NROLETYPE, $value);
    }

    /**
     * Returns value of 'nRoleType' property
     *
     * @return integer
     */
    public function getNRoleType()
    {
        $value = $this->get(self::NROLETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleType()
    {
        return $this->get(self::NROLETYPE) !== null;
    }
}
}