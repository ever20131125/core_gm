<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSRoomGeneralUpdateNoti message
 */
class COSRoomGeneralUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NCHANNELID = 1;
    const ARRROOMGENERALINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCHANNELID => array(
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROOMGENERALINFO => array(
            'name' => 'arrRoomGeneralInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
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
        $this->values[self::NCHANNELID] = null;
        $this->values[self::ARRROOMGENERALINFO] = array();
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
     * Sets value of 'nChannelID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChannelID($value)
    {
        return $this->set(self::NCHANNELID, $value);
    }

    /**
     * Returns value of 'nChannelID' property
     *
     * @return integer
     */
    public function getNChannelID()
    {
        $value = $this->get(self::NCHANNELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChannelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChannelID()
    {
        return $this->get(self::NCHANNELID) !== null;
    }

    /**
     * Appends value to 'arrRoomGeneralInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value)
    {
        return $this->append(self::ARRROOMGENERALINFO, $value);
    }

    /**
     * Clears 'arrRoomGeneralInfo' list
     *
     * @return null
     */
    public function clearArrRoomGeneralInfo()
    {
        return $this->clear(self::ARRROOMGENERALINFO);
    }

    /**
     * Returns 'arrRoomGeneralInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomGeneralInfo[]
     */
    public function getArrRoomGeneralInfo()
    {
        return $this->get(self::ARRROOMGENERALINFO);
    }

    /**
     * Returns true if 'arrRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoomGeneralInfo()
    {
        return count($this->get(self::ARRROOMGENERALINFO)) !== 0;
    }

    /**
     * Returns 'arrRoomGeneralInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoomGeneralInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROOMGENERALINFO));
    }

    /**
     * Returns element from 'arrRoomGeneralInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomGeneralInfo
     */
    public function getArrRoomGeneralInfoAt($offset)
    {
        return $this->get(self::ARRROOMGENERALINFO, $offset);
    }

    /**
     * Returns count of 'arrRoomGeneralInfo' list
     *
     * @return int
     */
    public function getArrRoomGeneralInfoCount()
    {
        return $this->count(self::ARRROOMGENERALINFO);
    }
}
}