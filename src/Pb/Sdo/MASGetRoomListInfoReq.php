<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASGetRoomListInfoReq message
 */
class MASGetRoomListInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRROOMINSTANCEID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRROOMINSTANCEID => array(
            'name' => 'arrRoomInstanceID',
            'repeated' => true,
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
        $this->values[self::ARRROOMINSTANCEID] = array();
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
     * Appends value to 'arrRoomInstanceID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoomInstanceID($value)
    {
        return $this->append(self::ARRROOMINSTANCEID, $value);
    }

    /**
     * Clears 'arrRoomInstanceID' list
     *
     * @return null
     */
    public function clearArrRoomInstanceID()
    {
        return $this->clear(self::ARRROOMINSTANCEID);
    }

    /**
     * Returns 'arrRoomInstanceID' list
     *
     * @return integer[]
     */
    public function getArrRoomInstanceID()
    {
        return $this->get(self::ARRROOMINSTANCEID);
    }

    /**
     * Returns true if 'arrRoomInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoomInstanceID()
    {
        return count($this->get(self::ARRROOMINSTANCEID)) !== 0;
    }

    /**
     * Returns 'arrRoomInstanceID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoomInstanceIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROOMINSTANCEID));
    }

    /**
     * Returns element from 'arrRoomInstanceID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoomInstanceIDAt($offset)
    {
        return $this->get(self::ARRROOMINSTANCEID, $offset);
    }

    /**
     * Returns count of 'arrRoomInstanceID' list
     *
     * @return int
     */
    public function getArrRoomInstanceIDCount()
    {
        return $this->count(self::ARRROOMINSTANCEID);
    }
}
}