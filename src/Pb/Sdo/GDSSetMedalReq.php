<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSSetMedalReq message
 */
class GDSSetMedalReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const MEDAL = 2;
    const TIMETICK = 3;
    const STRTOKEN = 4;
    const MEDALFRAME = 5;
    const MEDALRGB = 6;
    const MEDALFRAMERGB = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDAL => array(
            'name' => 'medal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMETICK => array(
            'name' => 'timetick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRTOKEN => array(
            'name' => 'strtoken',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MEDALFRAME => array(
            'name' => 'medalFrame',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MEDALRGB => array(
            'name' => 'medalRGB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDALFRAMERGB => array(
            'name' => 'medalFrameRGB',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::MEDAL] = null;
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
        $this->values[self::MEDALFRAME] = null;
        $this->values[self::MEDALRGB] = null;
        $this->values[self::MEDALFRAMERGB] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'medal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMedal($value)
    {
        return $this->set(self::MEDAL, $value);
    }

    /**
     * Returns value of 'medal' property
     *
     * @return string
     */
    public function getMedal()
    {
        $value = $this->get(self::MEDAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'medal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedal()
    {
        return $this->get(self::MEDAL) !== null;
    }

    /**
     * Sets value of 'timetick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimetick($value)
    {
        return $this->set(self::TIMETICK, $value);
    }

    /**
     * Returns value of 'timetick' property
     *
     * @return integer
     */
    public function getTimetick()
    {
        $value = $this->get(self::TIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timetick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimetick()
    {
        return $this->get(self::TIMETICK) !== null;
    }

    /**
     * Appends value to 'strtoken' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStrtoken($value)
    {
        return $this->append(self::STRTOKEN, $value);
    }

    /**
     * Clears 'strtoken' list
     *
     * @return null
     */
    public function clearStrtoken()
    {
        return $this->clear(self::STRTOKEN);
    }

    /**
     * Returns 'strtoken' list
     *
     * @return string[]
     */
    public function getStrtoken()
    {
        return $this->get(self::STRTOKEN);
    }

    /**
     * Returns true if 'strtoken' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrtoken()
    {
        return count($this->get(self::STRTOKEN)) !== 0;
    }

    /**
     * Returns 'strtoken' iterator
     *
     * @return \ArrayIterator
     */
    public function getStrtokenIterator()
    {
        return new \ArrayIterator($this->get(self::STRTOKEN));
    }

    /**
     * Returns element from 'strtoken' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStrtokenAt($offset)
    {
        return $this->get(self::STRTOKEN, $offset);
    }

    /**
     * Returns count of 'strtoken' list
     *
     * @return int
     */
    public function getStrtokenCount()
    {
        return $this->count(self::STRTOKEN);
    }

    /**
     * Sets value of 'medalFrame' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMedalFrame($value)
    {
        return $this->set(self::MEDALFRAME, $value);
    }

    /**
     * Returns value of 'medalFrame' property
     *
     * @return string
     */
    public function getMedalFrame()
    {
        $value = $this->get(self::MEDALFRAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'medalFrame' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedalFrame()
    {
        return $this->get(self::MEDALFRAME) !== null;
    }

    /**
     * Sets value of 'medalRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMedalRGB($value)
    {
        return $this->set(self::MEDALRGB, $value);
    }

    /**
     * Returns value of 'medalRGB' property
     *
     * @return integer
     */
    public function getMedalRGB()
    {
        $value = $this->get(self::MEDALRGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'medalRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedalRGB()
    {
        return $this->get(self::MEDALRGB) !== null;
    }

    /**
     * Sets value of 'medalFrameRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMedalFrameRGB($value)
    {
        return $this->set(self::MEDALFRAMERGB, $value);
    }

    /**
     * Returns value of 'medalFrameRGB' property
     *
     * @return integer
     */
    public function getMedalFrameRGB()
    {
        $value = $this->get(self::MEDALFRAMERGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'medalFrameRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedalFrameRGB()
    {
        return $this->get(self::MEDALFRAMERGB) !== null;
    }
}
}