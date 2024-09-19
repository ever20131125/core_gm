<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASGetRoomListInfoResp message
 */
class MASGetRoomListInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROOMLISTINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROOMLISTINFO => array(
            'name' => 'arrRoomListInfo',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRROOMLISTINFO] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Appends value to 'arrRoomListInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomListInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoomListInfo(\Xnhd\Core\Pb\Sdo\RoomListInfo $value)
    {
        return $this->append(self::ARRROOMLISTINFO, $value);
    }

    /**
     * Clears 'arrRoomListInfo' list
     *
     * @return null
     */
    public function clearArrRoomListInfo()
    {
        return $this->clear(self::ARRROOMLISTINFO);
    }

    /**
     * Returns 'arrRoomListInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomListInfo[]
     */
    public function getArrRoomListInfo()
    {
        return $this->get(self::ARRROOMLISTINFO);
    }

    /**
     * Returns true if 'arrRoomListInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoomListInfo()
    {
        return count($this->get(self::ARRROOMLISTINFO)) !== 0;
    }

    /**
     * Returns 'arrRoomListInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoomListInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROOMLISTINFO));
    }

    /**
     * Returns element from 'arrRoomListInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomListInfo
     */
    public function getArrRoomListInfoAt($offset)
    {
        return $this->get(self::ARRROOMLISTINFO, $offset);
    }

    /**
     * Returns count of 'arrRoomListInfo' list
     *
     * @return int
     */
    public function getArrRoomListInfoCount()
    {
        return $this->count(self::ARRROOMLISTINFO);
    }
}
}