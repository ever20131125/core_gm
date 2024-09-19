<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChannelDetailInfo message
 */
class ChannelDetailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STCHANNELSTATUS = 1;
    const ARRROOMLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STCHANNELSTATUS => array(
            'name' => 'stChannelStatus',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ChannelStatus'
        ),
        self::ARRROOMLIST => array(
            'name' => 'arrRoomList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomListInfo'
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
        $this->values[self::STCHANNELSTATUS] = null;
        $this->values[self::ARRROOMLIST] = array();
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
     * Sets value of 'stChannelStatus' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ChannelStatus $value Property value
     *
     * @return null
     */
    public function setStChannelStatus(\Xnhd\Core\Pb\Sdo\ChannelStatus $value=null)
    {
        return $this->set(self::STCHANNELSTATUS, $value);
    }

    /**
     * Returns value of 'stChannelStatus' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ChannelStatus
     */
    public function getStChannelStatus()
    {
        return $this->get(self::STCHANNELSTATUS);
    }

    /**
     * Returns true if 'stChannelStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStChannelStatus()
    {
        return $this->get(self::STCHANNELSTATUS) !== null;
    }

    /**
     * Appends value to 'arrRoomList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomListInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoomList(\Xnhd\Core\Pb\Sdo\RoomListInfo $value)
    {
        return $this->append(self::ARRROOMLIST, $value);
    }

    /**
     * Clears 'arrRoomList' list
     *
     * @return null
     */
    public function clearArrRoomList()
    {
        return $this->clear(self::ARRROOMLIST);
    }

    /**
     * Returns 'arrRoomList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomListInfo[]
     */
    public function getArrRoomList()
    {
        return $this->get(self::ARRROOMLIST);
    }

    /**
     * Returns true if 'arrRoomList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoomList()
    {
        return count($this->get(self::ARRROOMLIST)) !== 0;
    }

    /**
     * Returns 'arrRoomList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoomListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROOMLIST));
    }

    /**
     * Returns element from 'arrRoomList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomListInfo
     */
    public function getArrRoomListAt($offset)
    {
        return $this->get(self::ARRROOMLIST, $offset);
    }

    /**
     * Returns count of 'arrRoomList' list
     *
     * @return int
     */
    public function getArrRoomListCount()
    {
        return $this->count(self::ARRROOMLIST);
    }
}
}