<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASSetPlaceStateReq message
 */
class GASSetPlaceStateReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const PLACETYPE = 2;
    const NPLACEID = 3;
    const PLACESTATE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLACETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PlaceType::enmPlaceType_Play,
            'name' => 'placeType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLACEID => array(
            'name' => 'nPlaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLACESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PlaceState::enmPlaceState_Normal,
            'name' => 'placeState',
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
        $this->values[self::PLACETYPE] = self::$fields[self::PLACETYPE]['default'];
        $this->values[self::NPLACEID] = null;
        $this->values[self::PLACESTATE] = self::$fields[self::PLACESTATE]['default'];
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
     * Sets value of 'placeType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlaceType($value)
    {
        return $this->set(self::PLACETYPE, $value);
    }

    /**
     * Returns value of 'placeType' property
     *
     * @return integer
     */
    public function getPlaceType()
    {
        $value = $this->get(self::PLACETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'placeType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlaceType()
    {
        return $this->get(self::PLACETYPE) !== null;
    }

    /**
     * Sets value of 'nPlaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlaceID($value)
    {
        return $this->set(self::NPLACEID, $value);
    }

    /**
     * Returns value of 'nPlaceID' property
     *
     * @return integer
     */
    public function getNPlaceID()
    {
        $value = $this->get(self::NPLACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlaceID()
    {
        return $this->get(self::NPLACEID) !== null;
    }

    /**
     * Sets value of 'placeState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlaceState($value)
    {
        return $this->set(self::PLACESTATE, $value);
    }

    /**
     * Returns value of 'placeState' property
     *
     * @return integer
     */
    public function getPlaceState()
    {
        $value = $this->get(self::PLACESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'placeState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlaceState()
    {
        return $this->get(self::PLACESTATE) !== null;
    }
}
}