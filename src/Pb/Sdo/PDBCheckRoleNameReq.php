<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBCheckRoleNameReq message
 */
class PDBCheckRoleNameReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZROLENAME = 1;
    const NZONEID = 2;
    const TIMETICK = 3;
    const STRTOKEN = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
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
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
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
}
}