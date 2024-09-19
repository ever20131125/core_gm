<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASGetRoomListReq message
 */
class MASGetRoomListReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROOMTYPE = 1;
    const ARRGAMEPLAY = 2;
    const ONLYIDLE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROOMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomType::enmRoomType_Common,
            'name' => 'roomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGAMEPLAY => array(
            'name' => 'arrGamePlay',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLYIDLE => array(
            'default' => 0,
            'name' => 'onlyIdle',
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
        $this->values[self::ROOMTYPE] = self::$fields[self::ROOMTYPE]['default'];
        $this->values[self::ARRGAMEPLAY] = array();
        $this->values[self::ONLYIDLE] = self::$fields[self::ONLYIDLE]['default'];
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
     * Appends value to 'arrGamePlay' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGamePlay($value)
    {
        return $this->append(self::ARRGAMEPLAY, $value);
    }

    /**
     * Clears 'arrGamePlay' list
     *
     * @return null
     */
    public function clearArrGamePlay()
    {
        return $this->clear(self::ARRGAMEPLAY);
    }

    /**
     * Returns 'arrGamePlay' list
     *
     * @return integer[]
     */
    public function getArrGamePlay()
    {
        return $this->get(self::ARRGAMEPLAY);
    }

    /**
     * Returns true if 'arrGamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGamePlay()
    {
        return count($this->get(self::ARRGAMEPLAY)) !== 0;
    }

    /**
     * Returns 'arrGamePlay' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGamePlayIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGAMEPLAY));
    }

    /**
     * Returns element from 'arrGamePlay' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGamePlayAt($offset)
    {
        return $this->get(self::ARRGAMEPLAY, $offset);
    }

    /**
     * Returns count of 'arrGamePlay' list
     *
     * @return int
     */
    public function getArrGamePlayCount()
    {
        return $this->count(self::ARRGAMEPLAY);
    }

    /**
     * Sets value of 'onlyIdle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlyIdle($value)
    {
        return $this->set(self::ONLYIDLE, $value);
    }

    /**
     * Returns value of 'onlyIdle' property
     *
     * @return integer
     */
    public function getOnlyIdle()
    {
        $value = $this->get(self::ONLYIDLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlyIdle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlyIdle()
    {
        return $this->get(self::ONLYIDLE) !== null;
    }
}
}