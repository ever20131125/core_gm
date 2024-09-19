<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASCreateRoomNoti message
 */
class MASCreateRoomNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NOTITYPE = 2;
    const STROOMGENERALINFO = 3;
    const NRELATION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOTITYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomNotiType::enmRoomNotiType_New,
            'name' => 'notiType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
        ),
        self::NRELATION => array(
            'name' => 'nRelation',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NOTITYPE] = self::$fields[self::NOTITYPE]['default'];
        $this->values[self::STROOMGENERALINFO] = null;
        $this->values[self::NRELATION] = null;
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
     * Sets value of 'notiType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNotiType($value)
    {
        return $this->set(self::NOTITYPE, $value);
    }

    /**
     * Returns value of 'notiType' property
     *
     * @return integer
     */
    public function getNotiType()
    {
        $value = $this->get(self::NOTITYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'notiType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNotiType()
    {
        return $this->get(self::NOTITYPE) !== null;
    }

    /**
     * Sets value of 'stRoomGeneralInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value=null)
    {
        return $this->set(self::STROOMGENERALINFO, $value);
    }

    /**
     * Returns value of 'stRoomGeneralInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomGeneralInfo
     */
    public function getStRoomGeneralInfo()
    {
        return $this->get(self::STROOMGENERALINFO);
    }

    /**
     * Returns true if 'stRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoomGeneralInfo()
    {
        return $this->get(self::STROOMGENERALINFO) !== null;
    }

    /**
     * Sets value of 'nRelation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRelation($value)
    {
        return $this->set(self::NRELATION, $value);
    }

    /**
     * Returns value of 'nRelation' property
     *
     * @return integer
     */
    public function getNRelation()
    {
        $value = $this->get(self::NRELATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRelation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRelation()
    {
        return $this->get(self::NRELATION) !== null;
    }
}
}