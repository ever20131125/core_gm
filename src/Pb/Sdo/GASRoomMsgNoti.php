<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASRoomMsgNoti message
 */
class GASRoomMsgNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRROOMMSG = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRROOMMSG => array(
            'name' => 'arrRoomMsg',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomMsgInfo'
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
        $this->values[self::ARRROOMMSG] = array();
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
     * Appends value to 'arrRoomMsg' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomMsgInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoomMsg(\Xnhd\Core\Pb\Sdo\RoomMsgInfo $value)
    {
        return $this->append(self::ARRROOMMSG, $value);
    }

    /**
     * Clears 'arrRoomMsg' list
     *
     * @return null
     */
    public function clearArrRoomMsg()
    {
        return $this->clear(self::ARRROOMMSG);
    }

    /**
     * Returns 'arrRoomMsg' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomMsgInfo[]
     */
    public function getArrRoomMsg()
    {
        return $this->get(self::ARRROOMMSG);
    }

    /**
     * Returns true if 'arrRoomMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoomMsg()
    {
        return count($this->get(self::ARRROOMMSG)) !== 0;
    }

    /**
     * Returns 'arrRoomMsg' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoomMsgIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROOMMSG));
    }

    /**
     * Returns element from 'arrRoomMsg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomMsgInfo
     */
    public function getArrRoomMsgAt($offset)
    {
        return $this->get(self::ARRROOMMSG, $offset);
    }

    /**
     * Returns count of 'arrRoomMsg' list
     *
     * @return int
     */
    public function getArrRoomMsgCount()
    {
        return $this->count(self::ARRROOMMSG);
    }
}
}