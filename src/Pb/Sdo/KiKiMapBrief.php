<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KiKiMapBrief message
 */
class KiKiMapBrief extends \ProtobufMessage
{
    /* Field index constants */
    const RESETTIMESTHISWEEK = 1;
    const ENDURANCE = 2;
    const ENDURANCELIMIT = 3;
    const ROWS = 4;
    const COLS = 5;
    const CURPOS = 6;
    const CURLAYER = 7;
    const TOTALLAYER = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESETTIMESTHISWEEK => array(
            'name' => 'resetTimesThisWeek',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDURANCE => array(
            'name' => 'endurance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDURANCELIMIT => array(
            'name' => 'enduranceLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROWS => array(
            'name' => 'rows',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COLS => array(
            'name' => 'cols',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURPOS => array(
            'name' => 'curPos',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\KPoint'
        ),
        self::CURLAYER => array(
            'name' => 'curLayer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALLAYER => array(
            'name' => 'totalLayer',
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
        $this->values[self::RESETTIMESTHISWEEK] = null;
        $this->values[self::ENDURANCE] = null;
        $this->values[self::ENDURANCELIMIT] = null;
        $this->values[self::ROWS] = null;
        $this->values[self::COLS] = null;
        $this->values[self::CURPOS] = null;
        $this->values[self::CURLAYER] = null;
        $this->values[self::TOTALLAYER] = null;
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
     * Sets value of 'resetTimesThisWeek' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResetTimesThisWeek($value)
    {
        return $this->set(self::RESETTIMESTHISWEEK, $value);
    }

    /**
     * Returns value of 'resetTimesThisWeek' property
     *
     * @return integer
     */
    public function getResetTimesThisWeek()
    {
        $value = $this->get(self::RESETTIMESTHISWEEK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'resetTimesThisWeek' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResetTimesThisWeek()
    {
        return $this->get(self::RESETTIMESTHISWEEK) !== null;
    }

    /**
     * Sets value of 'endurance' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndurance($value)
    {
        return $this->set(self::ENDURANCE, $value);
    }

    /**
     * Returns value of 'endurance' property
     *
     * @return integer
     */
    public function getEndurance()
    {
        $value = $this->get(self::ENDURANCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'endurance' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndurance()
    {
        return $this->get(self::ENDURANCE) !== null;
    }

    /**
     * Sets value of 'enduranceLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnduranceLimit($value)
    {
        return $this->set(self::ENDURANCELIMIT, $value);
    }

    /**
     * Returns value of 'enduranceLimit' property
     *
     * @return integer
     */
    public function getEnduranceLimit()
    {
        $value = $this->get(self::ENDURANCELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'enduranceLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnduranceLimit()
    {
        return $this->get(self::ENDURANCELIMIT) !== null;
    }

    /**
     * Sets value of 'rows' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRows($value)
    {
        return $this->set(self::ROWS, $value);
    }

    /**
     * Returns value of 'rows' property
     *
     * @return integer
     */
    public function getRows()
    {
        $value = $this->get(self::ROWS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rows' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRows()
    {
        return $this->get(self::ROWS) !== null;
    }

    /**
     * Sets value of 'cols' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCols($value)
    {
        return $this->set(self::COLS, $value);
    }

    /**
     * Returns value of 'cols' property
     *
     * @return integer
     */
    public function getCols()
    {
        $value = $this->get(self::COLS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cols' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCols()
    {
        return $this->get(self::COLS) !== null;
    }

    /**
     * Sets value of 'curPos' property
     *
     * @param \Xnhd\Core\Pb\Sdo\KPoint $value Property value
     *
     * @return null
     */
    public function setCurPos(\Xnhd\Core\Pb\Sdo\KPoint $value=null)
    {
        return $this->set(self::CURPOS, $value);
    }

    /**
     * Returns value of 'curPos' property
     *
     * @return \Xnhd\Core\Pb\Sdo\KPoint
     */
    public function getCurPos()
    {
        return $this->get(self::CURPOS);
    }

    /**
     * Returns true if 'curPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurPos()
    {
        return $this->get(self::CURPOS) !== null;
    }

    /**
     * Sets value of 'curLayer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurLayer($value)
    {
        return $this->set(self::CURLAYER, $value);
    }

    /**
     * Returns value of 'curLayer' property
     *
     * @return integer
     */
    public function getCurLayer()
    {
        $value = $this->get(self::CURLAYER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curLayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurLayer()
    {
        return $this->get(self::CURLAYER) !== null;
    }

    /**
     * Sets value of 'totalLayer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalLayer($value)
    {
        return $this->set(self::TOTALLAYER, $value);
    }

    /**
     * Returns value of 'totalLayer' property
     *
     * @return integer
     */
    public function getTotalLayer()
    {
        $value = $this->get(self::TOTALLAYER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalLayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalLayer()
    {
        return $this->get(self::TOTALLAYER) !== null;
    }
}
}