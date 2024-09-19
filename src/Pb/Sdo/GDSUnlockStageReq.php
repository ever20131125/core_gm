<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSUnlockStageReq message
 */
class GDSUnlockStageReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const STAGENO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAGENO => array(
            'name' => 'stageNo',
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
        $this->values[self::STAGENO] = null;
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
     * Sets value of 'stageNo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStageNo($value)
    {
        return $this->set(self::STAGENO, $value);
    }

    /**
     * Returns value of 'stageNo' property
     *
     * @return integer
     */
    public function getStageNo()
    {
        $value = $this->get(self::STAGENO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'stageNo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStageNo()
    {
        return $this->get(self::STAGENO) !== null;
    }
}
}