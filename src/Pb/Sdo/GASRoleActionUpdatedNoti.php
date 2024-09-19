<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASRoleActionUpdatedNoti message
 */
class GASRoleActionUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ACSTATE = 2;
    const NACTIONPOSEID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActionState::enmActionState_Normal,
            'name' => 'acState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTIONPOSEID => array(
            'name' => 'nActionPoseID',
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
        $this->values[self::ACSTATE] = self::$fields[self::ACSTATE]['default'];
        $this->values[self::NACTIONPOSEID] = null;
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
     * Sets value of 'acState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAcState($value)
    {
        return $this->set(self::ACSTATE, $value);
    }

    /**
     * Returns value of 'acState' property
     *
     * @return integer
     */
    public function getAcState()
    {
        $value = $this->get(self::ACSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'acState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAcState()
    {
        return $this->get(self::ACSTATE) !== null;
    }

    /**
     * Sets value of 'nActionPoseID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActionPoseID($value)
    {
        return $this->set(self::NACTIONPOSEID, $value);
    }

    /**
     * Returns value of 'nActionPoseID' property
     *
     * @return integer
     */
    public function getNActionPoseID()
    {
        $value = $this->get(self::NACTIONPOSEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActionPoseID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActionPoseID()
    {
        return $this->get(self::NACTIONPOSEID) !== null;
    }
}
}