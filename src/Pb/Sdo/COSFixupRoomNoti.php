<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSFixupRoomNoti message
 */
class COSFixupRoomNoti extends \ProtobufMessage
{
    /* Field index constants */
    const FIXUPRESULT = 1;
    const STROOMDETAILINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FIXUPRESULT => array(
            'default' => \Xnhd\Core\Pb\Sdo\FixupResult::enmFixupResult_Success,
            'name' => 'fixupResult',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROOMDETAILINFO => array(
            'name' => 'stRoomDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomDetailInfo'
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
        $this->values[self::FIXUPRESULT] = self::$fields[self::FIXUPRESULT]['default'];
        $this->values[self::STROOMDETAILINFO] = null;
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
     * Sets value of 'fixupResult' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFixupResult($value)
    {
        return $this->set(self::FIXUPRESULT, $value);
    }

    /**
     * Returns value of 'fixupResult' property
     *
     * @return integer
     */
    public function getFixupResult()
    {
        $value = $this->get(self::FIXUPRESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fixupResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFixupResult()
    {
        return $this->get(self::FIXUPRESULT) !== null;
    }

    /**
     * Sets value of 'stRoomDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomDetailInfo $value Property value
     *
     * @return null
     */
    public function setStRoomDetailInfo(\Xnhd\Core\Pb\Sdo\RoomDetailInfo $value=null)
    {
        return $this->set(self::STROOMDETAILINFO, $value);
    }

    /**
     * Returns value of 'stRoomDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomDetailInfo
     */
    public function getStRoomDetailInfo()
    {
        return $this->get(self::STROOMDETAILINFO);
    }

    /**
     * Returns true if 'stRoomDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoomDetailInfo()
    {
        return $this->get(self::STROOMDETAILINFO) !== null;
    }
}
}