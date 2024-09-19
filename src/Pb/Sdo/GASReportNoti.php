<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASReportNoti message
 */
class GASReportNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NKEY = 1;
    const ARRROOMDATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NKEY => array(
            'name' => 'nKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROOMDATA => array(
            'name' => 'arrRoomData',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomData'
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
        $this->values[self::NKEY] = null;
        $this->values[self::ARRROOMDATA] = array();
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
     * Sets value of 'nKey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKey($value)
    {
        return $this->set(self::NKEY, $value);
    }

    /**
     * Returns value of 'nKey' property
     *
     * @return integer
     */
    public function getNKey()
    {
        $value = $this->get(self::NKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKey()
    {
        return $this->get(self::NKEY) !== null;
    }

    /**
     * Appends value to 'arrRoomData' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomData $value Value to append
     *
     * @return null
     */
    public function appendArrRoomData(\Xnhd\Core\Pb\Sdo\RoomData $value)
    {
        return $this->append(self::ARRROOMDATA, $value);
    }

    /**
     * Clears 'arrRoomData' list
     *
     * @return null
     */
    public function clearArrRoomData()
    {
        return $this->clear(self::ARRROOMDATA);
    }

    /**
     * Returns 'arrRoomData' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomData[]
     */
    public function getArrRoomData()
    {
        return $this->get(self::ARRROOMDATA);
    }

    /**
     * Returns true if 'arrRoomData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoomData()
    {
        return count($this->get(self::ARRROOMDATA)) !== 0;
    }

    /**
     * Returns 'arrRoomData' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoomDataIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROOMDATA));
    }

    /**
     * Returns element from 'arrRoomData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomData
     */
    public function getArrRoomDataAt($offset)
    {
        return $this->get(self::ARRROOMDATA, $offset);
    }

    /**
     * Returns count of 'arrRoomData' list
     *
     * @return int
     */
    public function getArrRoomDataCount()
    {
        return $this->count(self::ARRROOMDATA);
    }
}
}