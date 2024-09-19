<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBCommentSuitReq message
 */
class PDBCommentSuitReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NSUITID = 2;
    const NSTAR = 3;
    const SZCOMMENT = 4;
    const TIMETICK = 5;
    const STRTOKEN = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSUITID => array(
            'name' => 'nSuitID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAR => array(
            'name' => 'nStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCOMMENT => array(
            'name' => 'szComment',
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
        $this->values[self::NSUITID] = null;
        $this->values[self::NSTAR] = null;
        $this->values[self::SZCOMMENT] = null;
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
     * Sets value of 'nSuitID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSuitID($value)
    {
        return $this->set(self::NSUITID, $value);
    }

    /**
     * Returns value of 'nSuitID' property
     *
     * @return integer
     */
    public function getNSuitID()
    {
        $value = $this->get(self::NSUITID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSuitID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSuitID()
    {
        return $this->get(self::NSUITID) !== null;
    }

    /**
     * Sets value of 'nStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStar($value)
    {
        return $this->set(self::NSTAR, $value);
    }

    /**
     * Returns value of 'nStar' property
     *
     * @return integer
     */
    public function getNStar()
    {
        $value = $this->get(self::NSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStar()
    {
        return $this->get(self::NSTAR) !== null;
    }

    /**
     * Sets value of 'szComment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzComment($value)
    {
        return $this->set(self::SZCOMMENT, $value);
    }

    /**
     * Returns value of 'szComment' property
     *
     * @return string
     */
    public function getSzComment()
    {
        $value = $this->get(self::SZCOMMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szComment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzComment()
    {
        return $this->get(self::SZCOMMENT) !== null;
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