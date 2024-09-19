<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleBreakUpNoti message
 */
class RLSCoupleBreakUpNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NBREAKROLEID = 1;
    const NTYPE = 2;
    const NBREAKTIMEDEADLINE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NBREAKROLEID => array(
            'name' => 'nBreakRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BreakUpType::enmBreakUpType_None,
            'name' => 'nType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBREAKTIMEDEADLINE => array(
            'name' => 'nBreakTimeDeadLine',
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
        $this->values[self::NBREAKROLEID] = null;
        $this->values[self::NTYPE] = self::$fields[self::NTYPE]['default'];
        $this->values[self::NBREAKTIMEDEADLINE] = null;
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
     * Sets value of 'nBreakRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBreakRoleID($value)
    {
        return $this->set(self::NBREAKROLEID, $value);
    }

    /**
     * Returns value of 'nBreakRoleID' property
     *
     * @return integer
     */
    public function getNBreakRoleID()
    {
        $value = $this->get(self::NBREAKROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBreakRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBreakRoleID()
    {
        return $this->get(self::NBREAKROLEID) !== null;
    }

    /**
     * Sets value of 'nType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return integer
     */
    public function getNType()
    {
        $value = $this->get(self::NTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return $this->get(self::NTYPE) !== null;
    }

    /**
     * Sets value of 'nBreakTimeDeadLine' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBreakTimeDeadLine($value)
    {
        return $this->set(self::NBREAKTIMEDEADLINE, $value);
    }

    /**
     * Returns value of 'nBreakTimeDeadLine' property
     *
     * @return integer
     */
    public function getNBreakTimeDeadLine()
    {
        $value = $this->get(self::NBREAKTIMEDEADLINE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBreakTimeDeadLine' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBreakTimeDeadLine()
    {
        return $this->get(self::NBREAKTIMEDEADLINE) !== null;
    }
}
}