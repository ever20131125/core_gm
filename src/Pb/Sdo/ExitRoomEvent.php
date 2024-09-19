<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExitRoomEvent message
 */
class ExitRoomEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ROOMTYPE = 2;
    const REASON = 3;
    const NTIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_None,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'default' => \Xnhd\Core\Pb\Sdo\ExitRoomReason::enmExitRoomReason_Normal,
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIME => array(
            'name' => 'nTime',
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
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::REASON] = self::$fields[self::REASON]['default'];
        $this->values[self::NTIME] = null;
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
     * Sets value of 'nRoleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleid($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleid' property
     *
     * @return integer
     */
    public function getNRoleid()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleid()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'roomType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomType($value)
    {
        return $this->set(self::ROOMTYPE, $value);
    }

    /**
     * Returns value of 'roomType' property
     *
     * @return integer
     */
    public function getRoomType()
    {
        $value = $this->get(self::ROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomType()
    {
        return $this->get(self::ROOMTYPE) !== null;
    }

    /**
     * Sets value of 'reason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReason($value)
    {
        return $this->set(self::REASON, $value);
    }

    /**
     * Returns value of 'reason' property
     *
     * @return integer
     */
    public function getReason()
    {
        $value = $this->get(self::REASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReason()
    {
        return $this->get(self::REASON) !== null;
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }
}
}