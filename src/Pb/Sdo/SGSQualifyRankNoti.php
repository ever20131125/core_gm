<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyRankNoti message
 */
class SGSQualifyRankNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NNO = 1;
    const ROLEID = 2;
    const ACTSTATUS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NNO => array(
            'name' => 'nNo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTSTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_UnReceive,
            'name' => 'actStatus',
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
        $this->values[self::NNO] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::ACTSTATUS] = self::$fields[self::ACTSTATUS]['default'];
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
     * Sets value of 'nNo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNo($value)
    {
        return $this->set(self::NNO, $value);
    }

    /**
     * Returns value of 'nNo' property
     *
     * @return integer
     */
    public function getNNo()
    {
        $value = $this->get(self::NNO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNo()
    {
        return $this->get(self::NNO) !== null;
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
     * Sets value of 'actStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActStatus($value)
    {
        return $this->set(self::ACTSTATUS, $value);
    }

    /**
     * Returns value of 'actStatus' property
     *
     * @return integer
     */
    public function getActStatus()
    {
        $value = $this->get(self::ACTSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActStatus()
    {
        return $this->get(self::ACTSTATUS) !== null;
    }
}
}