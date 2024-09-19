<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASRoomInfoUpdatedNoti message
 */
class GASRoomInfoUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROOMINSTANCEID = 1;
    const ROOMSTATE = 2;
    const NTIMELIMIT = 3;
    const NLUXURY = 4;
    const NHOSTID = 5;
    const NLOVERID = 6;
    const NWEDDINGCARDID = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoomState::enmRoomState_Waiting,
            'name' => 'roomState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMELIMIT => array(
            'name' => 'nTimeLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVERID => array(
            'name' => 'nLoverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWEDDINGCARDID => array(
            'name' => 'nWeddingCardID',
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
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::ROOMSTATE] = self::$fields[self::ROOMSTATE]['default'];
        $this->values[self::NTIMELIMIT] = null;
        $this->values[self::NLUXURY] = null;
        $this->values[self::NHOSTID] = null;
        $this->values[self::NLOVERID] = null;
        $this->values[self::NWEDDINGCARDID] = null;
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
     * Sets value of 'nRoomInstanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomInstanceID($value)
    {
        return $this->set(self::NROOMINSTANCEID, $value);
    }

    /**
     * Returns value of 'nRoomInstanceID' property
     *
     * @return integer
     */
    public function getNRoomInstanceID()
    {
        $value = $this->get(self::NROOMINSTANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomInstanceID()
    {
        return $this->get(self::NROOMINSTANCEID) !== null;
    }

    /**
     * Sets value of 'roomState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomState($value)
    {
        return $this->set(self::ROOMSTATE, $value);
    }

    /**
     * Returns value of 'roomState' property
     *
     * @return integer
     */
    public function getRoomState()
    {
        $value = $this->get(self::ROOMSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomState()
    {
        return $this->get(self::ROOMSTATE) !== null;
    }

    /**
     * Sets value of 'nTimeLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeLimit($value)
    {
        return $this->set(self::NTIMELIMIT, $value);
    }

    /**
     * Returns value of 'nTimeLimit' property
     *
     * @return integer
     */
    public function getNTimeLimit()
    {
        $value = $this->get(self::NTIMELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeLimit()
    {
        return $this->get(self::NTIMELIMIT) !== null;
    }

    /**
     * Sets value of 'nLuxury' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLuxury($value)
    {
        return $this->set(self::NLUXURY, $value);
    }

    /**
     * Returns value of 'nLuxury' property
     *
     * @return integer
     */
    public function getNLuxury()
    {
        $value = $this->get(self::NLUXURY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLuxury' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLuxury()
    {
        return $this->get(self::NLUXURY) !== null;
    }

    /**
     * Sets value of 'nHostID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHostID($value)
    {
        return $this->set(self::NHOSTID, $value);
    }

    /**
     * Returns value of 'nHostID' property
     *
     * @return integer
     */
    public function getNHostID()
    {
        $value = $this->get(self::NHOSTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHostID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHostID()
    {
        return $this->get(self::NHOSTID) !== null;
    }

    /**
     * Sets value of 'nLoverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoverID($value)
    {
        return $this->set(self::NLOVERID, $value);
    }

    /**
     * Returns value of 'nLoverID' property
     *
     * @return integer
     */
    public function getNLoverID()
    {
        $value = $this->get(self::NLOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoverID()
    {
        return $this->get(self::NLOVERID) !== null;
    }

    /**
     * Sets value of 'nWeddingCardID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingCardID($value)
    {
        return $this->set(self::NWEDDINGCARDID, $value);
    }

    /**
     * Returns value of 'nWeddingCardID' property
     *
     * @return integer
     */
    public function getNWeddingCardID()
    {
        $value = $this->get(self::NWEDDINGCARDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingCardID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingCardID()
    {
        return $this->get(self::NWEDDINGCARDID) !== null;
    }
}
}