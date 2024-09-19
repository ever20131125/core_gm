<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActFrame message
 */
class ActFrame extends \ProtobufMessage
{
    /* Field index constants */
    const ACTID = 1;
    const ACTTYPE = 2;
    const SHOWTIME = 3;
    const STARTTIME = 4;
    const ENDTIME = 5;
    const DISPEARTIME = 6;
    const BPRIZED = 7;
    const SZOPTION = 8;
    const ARROPTION = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActType::enmActType_None,
            'name' => 'actType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOWTIME => array(
            'name' => 'showTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTTIME => array(
            'name' => 'startTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDTIME => array(
            'name' => 'endTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DISPEARTIME => array(
            'name' => 'dispearTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BPRIZED => array(
            'default' => false,
            'name' => 'bPrized',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::SZOPTION => array(
            'name' => 'szOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
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
        $this->values[self::ACTID] = null;
        $this->values[self::ACTTYPE] = self::$fields[self::ACTTYPE]['default'];
        $this->values[self::SHOWTIME] = null;
        $this->values[self::STARTTIME] = null;
        $this->values[self::ENDTIME] = null;
        $this->values[self::DISPEARTIME] = null;
        $this->values[self::BPRIZED] = self::$fields[self::BPRIZED]['default'];
        $this->values[self::SZOPTION] = null;
        $this->values[self::ARROPTION] = array();
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
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
    }

    /**
     * Sets value of 'actType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActType($value)
    {
        return $this->set(self::ACTTYPE, $value);
    }

    /**
     * Returns value of 'actType' property
     *
     * @return integer
     */
    public function getActType()
    {
        $value = $this->get(self::ACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActType()
    {
        return $this->get(self::ACTTYPE) !== null;
    }

    /**
     * Sets value of 'showTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShowTime($value)
    {
        return $this->set(self::SHOWTIME, $value);
    }

    /**
     * Returns value of 'showTime' property
     *
     * @return integer
     */
    public function getShowTime()
    {
        $value = $this->get(self::SHOWTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'showTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShowTime()
    {
        return $this->get(self::SHOWTIME) !== null;
    }

    /**
     * Sets value of 'startTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartTime($value)
    {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return integer
     */
    public function getStartTime()
    {
        $value = $this->get(self::STARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartTime()
    {
        return $this->get(self::STARTTIME) !== null;
    }

    /**
     * Sets value of 'endTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndTime($value)
    {
        return $this->set(self::ENDTIME, $value);
    }

    /**
     * Returns value of 'endTime' property
     *
     * @return integer
     */
    public function getEndTime()
    {
        $value = $this->get(self::ENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'endTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTime()
    {
        return $this->get(self::ENDTIME) !== null;
    }

    /**
     * Sets value of 'dispearTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDispearTime($value)
    {
        return $this->set(self::DISPEARTIME, $value);
    }

    /**
     * Returns value of 'dispearTime' property
     *
     * @return integer
     */
    public function getDispearTime()
    {
        $value = $this->get(self::DISPEARTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dispearTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDispearTime()
    {
        return $this->get(self::DISPEARTIME) !== null;
    }

    /**
     * Sets value of 'bPrized' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBPrized($value)
    {
        return $this->set(self::BPRIZED, $value);
    }

    /**
     * Returns value of 'bPrized' property
     *
     * @return boolean
     */
    public function getBPrized()
    {
        $value = $this->get(self::BPRIZED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bPrized' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBPrized()
    {
        return $this->get(self::BPRIZED) !== null;
    }

    /**
     * Sets value of 'szOption' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOption($value)
    {
        return $this->set(self::SZOPTION, $value);
    }

    /**
     * Returns value of 'szOption' property
     *
     * @return string
     */
    public function getSzOption()
    {
        $value = $this->get(self::SZOPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOption()
    {
        return $this->get(self::SZOPTION) !== null;
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
}
}