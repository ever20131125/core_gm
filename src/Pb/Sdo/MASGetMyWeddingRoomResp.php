<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASGetMyWeddingRoomResp message
 */
class MASGetMyWeddingRoomResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROOMLISTINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROOMLISTINFO => array(
            'name' => 'roomListInfo',
            'required' => false,
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
        $this->values[self::ROOMLISTINFO] = null;
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
     * Sets value of 'roomListInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomListInfo $value Property value
     *
     * @return null
     */
    public function setRoomListInfo(\Xnhd\Core\Pb\Sdo\RoomListInfo $value=null)
    {
        return $this->set(self::ROOMLISTINFO, $value);
    }

    /**
     * Returns value of 'roomListInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomListInfo
     */
    public function getRoomListInfo()
    {
        return $this->get(self::ROOMLISTINFO);
    }

    /**
     * Returns true if 'roomListInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomListInfo()
    {
        return $this->get(self::ROOMLISTINFO) !== null;
    }
}
}