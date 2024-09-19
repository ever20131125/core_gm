<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSFixupRoomReq message
 */
class COSFixupRoomReq extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCE = 1;
    const NROLEID = 2;
    const ARRTARGET = 3;
    const ROOMTYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_CreateRoom,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTARGET => array(
            'name' => 'arrTarget',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
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
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRTARGET] = array();
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
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
     * Appends value to 'arrTarget' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTarget($value)
    {
        return $this->append(self::ARRTARGET, $value);
    }

    /**
     * Clears 'arrTarget' list
     *
     * @return null
     */
    public function clearArrTarget()
    {
        return $this->clear(self::ARRTARGET);
    }

    /**
     * Returns 'arrTarget' list
     *
     * @return integer[]
     */
    public function getArrTarget()
    {
        return $this->get(self::ARRTARGET);
    }

    /**
     * Returns true if 'arrTarget' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTarget()
    {
        return count($this->get(self::ARRTARGET)) !== 0;
    }

    /**
     * Returns 'arrTarget' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTargetIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTARGET));
    }

    /**
     * Returns element from 'arrTarget' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTargetAt($offset)
    {
        return $this->get(self::ARRTARGET, $offset);
    }

    /**
     * Returns count of 'arrTarget' list
     *
     * @return int
     */
    public function getArrTargetCount()
    {
        return $this->count(self::ARRTARGET);
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
}
}