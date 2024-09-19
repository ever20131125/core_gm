<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KeyGoal message
 */
class KeyGoal extends \ProtobufMessage
{
    /* Field index constants */
    const NKEYINFO = 1;
    const BEATTYPE = 2;
    const NTIMESEP = 3;
    const ARROPTION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NKEYINFO => array(
            'name' => 'nKeyInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BEATTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BeatType::enmBeatType_Normal,
            'name' => 'beatType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMESEP => array(
            'name' => 'nTimeSep',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
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
        $this->values[self::NKEYINFO] = null;
        $this->values[self::BEATTYPE] = self::$fields[self::BEATTYPE]['default'];
        $this->values[self::NTIMESEP] = null;
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
     * Sets value of 'nKeyInfo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeyInfo($value)
    {
        return $this->set(self::NKEYINFO, $value);
    }

    /**
     * Returns value of 'nKeyInfo' property
     *
     * @return integer
     */
    public function getNKeyInfo()
    {
        $value = $this->get(self::NKEYINFO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeyInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeyInfo()
    {
        return $this->get(self::NKEYINFO) !== null;
    }

    /**
     * Sets value of 'beatType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBeatType($value)
    {
        return $this->set(self::BEATTYPE, $value);
    }

    /**
     * Returns value of 'beatType' property
     *
     * @return integer
     */
    public function getBeatType()
    {
        $value = $this->get(self::BEATTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'beatType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBeatType()
    {
        return $this->get(self::BEATTYPE) !== null;
    }

    /**
     * Sets value of 'nTimeSep' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeSep($value)
    {
        return $this->set(self::NTIMESEP, $value);
    }

    /**
     * Returns value of 'nTimeSep' property
     *
     * @return integer
     */
    public function getNTimeSep()
    {
        $value = $this->get(self::NTIMESEP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeSep' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeSep()
    {
        return $this->get(self::NTIMESEP) !== null;
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