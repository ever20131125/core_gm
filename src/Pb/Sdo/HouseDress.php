<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HouseDress message
 */
class HouseDress extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NITEMINSID = 2;
    const NFLOORID = 3;
    const NITEMID = 4;
    const NLUXURY = 5;
    const NQUANTITY = 6;
    const NOWNTICK = 7;
    const NPOSITIONX = 8;
    const NPOSITIONY = 9;
    const NPOSITIONZ = 10;
    const NROTATION = 11;
    const ARROPTION = 12;
    const NSTATE = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFLOORID => array(
            'name' => 'nFloorID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOWNTICK => array(
            'name' => 'nOwnTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSITIONX => array(
            'name' => 'nPositionX',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSITIONY => array(
            'name' => 'nPositionY',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSITIONZ => array(
            'name' => 'nPositionZ',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROTATION => array(
            'name' => 'nRotation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTATE => array(
            'name' => 'nState',
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
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NFLOORID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NLUXURY] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::NOWNTICK] = null;
        $this->values[self::NPOSITIONX] = null;
        $this->values[self::NPOSITIONY] = null;
        $this->values[self::NPOSITIONZ] = null;
        $this->values[self::NROTATION] = null;
        $this->values[self::ARROPTION] = array();
        $this->values[self::NSTATE] = null;
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
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
    }

    /**
     * Sets value of 'nFloorID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFloorID($value)
    {
        return $this->set(self::NFLOORID, $value);
    }

    /**
     * Returns value of 'nFloorID' property
     *
     * @return integer
     */
    public function getNFloorID()
    {
        $value = $this->get(self::NFLOORID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFloorID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFloorID()
    {
        return $this->get(self::NFLOORID) !== null;
    }

    /**
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
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
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
    }

    /**
     * Sets value of 'nOwnTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOwnTick($value)
    {
        return $this->set(self::NOWNTICK, $value);
    }

    /**
     * Returns value of 'nOwnTick' property
     *
     * @return integer
     */
    public function getNOwnTick()
    {
        $value = $this->get(self::NOWNTICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOwnTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOwnTick()
    {
        return $this->get(self::NOWNTICK) !== null;
    }

    /**
     * Sets value of 'nPositionX' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionX($value)
    {
        return $this->set(self::NPOSITIONX, $value);
    }

    /**
     * Returns value of 'nPositionX' property
     *
     * @return integer
     */
    public function getNPositionX()
    {
        $value = $this->get(self::NPOSITIONX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionX' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionX()
    {
        return $this->get(self::NPOSITIONX) !== null;
    }

    /**
     * Sets value of 'nPositionY' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionY($value)
    {
        return $this->set(self::NPOSITIONY, $value);
    }

    /**
     * Returns value of 'nPositionY' property
     *
     * @return integer
     */
    public function getNPositionY()
    {
        $value = $this->get(self::NPOSITIONY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionY' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionY()
    {
        return $this->get(self::NPOSITIONY) !== null;
    }

    /**
     * Sets value of 'nPositionZ' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionZ($value)
    {
        return $this->set(self::NPOSITIONZ, $value);
    }

    /**
     * Returns value of 'nPositionZ' property
     *
     * @return integer
     */
    public function getNPositionZ()
    {
        $value = $this->get(self::NPOSITIONZ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionZ' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionZ()
    {
        return $this->get(self::NPOSITIONZ) !== null;
    }

    /**
     * Sets value of 'nRotation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRotation($value)
    {
        return $this->set(self::NROTATION, $value);
    }

    /**
     * Returns value of 'nRotation' property
     *
     * @return integer
     */
    public function getNRotation()
    {
        $value = $this->get(self::NROTATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRotation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRotation()
    {
        return $this->get(self::NROTATION) !== null;
    }

    /**
     * Appends value to 'arrOption' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOption($value)
    {
        return $this->append(self::ARROPTION, $value);
    }

    /**
     * Clears 'arrOption' list
     *
     * @return null
     */
    public function clearArrOption()
    {
        return $this->clear(self::ARROPTION);
    }

    /**
     * Returns 'arrOption' list
     *
     * @return integer[]
     */
    public function getArrOption()
    {
        return $this->get(self::ARROPTION);
    }

    /**
     * Returns true if 'arrOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption()
    {
        return count($this->get(self::ARROPTION)) !== 0;
    }

    /**
     * Returns 'arrOption' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOptionIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION));
    }

    /**
     * Returns element from 'arrOption' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOptionAt($offset)
    {
        return $this->get(self::ARROPTION, $offset);
    }

    /**
     * Returns count of 'arrOption' list
     *
     * @return int
     */
    public function getArrOptionCount()
    {
        return $this->count(self::ARROPTION);
    }

    /**
     * Sets value of 'nState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNState($value)
    {
        return $this->set(self::NSTATE, $value);
    }

    /**
     * Returns value of 'nState' property
     *
     * @return integer
     */
    public function getNState()
    {
        $value = $this->get(self::NSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNState()
    {
        return $this->get(self::NSTATE) !== null;
    }
}
}