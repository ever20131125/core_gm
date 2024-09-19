<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBSetHouseInfoReq message
 */
class IDBSetHouseInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTHEMEID = 2;
    const NHOUSEINFOTYPE = 3;
    const SZHOUSENAME = 4;
    const SZPASSWORD = 5;
    const NVISITAUTH = 6;
    const TIMETICK = 7;
    const STRTOKEN = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEMEID => array(
            'name' => 'nThemeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOUSEINFOTYPE => array(
            'name' => 'nHouseInfoType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZHOUSENAME => array(
            'name' => 'szHouseName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZPASSWORD => array(
            'name' => 'szPassword',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NVISITAUTH => array(
            'name' => 'nVisitAuth',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NTHEMEID] = null;
        $this->values[self::NHOUSEINFOTYPE] = null;
        $this->values[self::SZHOUSENAME] = null;
        $this->values[self::SZPASSWORD] = null;
        $this->values[self::NVISITAUTH] = null;
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
     * Sets value of 'nThemeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeID($value)
    {
        return $this->set(self::NTHEMEID, $value);
    }

    /**
     * Returns value of 'nThemeID' property
     *
     * @return integer
     */
    public function getNThemeID()
    {
        $value = $this->get(self::NTHEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeID()
    {
        return $this->get(self::NTHEMEID) !== null;
    }

    /**
     * Sets value of 'nHouseInfoType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHouseInfoType($value)
    {
        return $this->set(self::NHOUSEINFOTYPE, $value);
    }

    /**
     * Returns value of 'nHouseInfoType' property
     *
     * @return integer
     */
    public function getNHouseInfoType()
    {
        $value = $this->get(self::NHOUSEINFOTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHouseInfoType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHouseInfoType()
    {
        return $this->get(self::NHOUSEINFOTYPE) !== null;
    }

    /**
     * Sets value of 'szHouseName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzHouseName($value)
    {
        return $this->set(self::SZHOUSENAME, $value);
    }

    /**
     * Returns value of 'szHouseName' property
     *
     * @return string
     */
    public function getSzHouseName()
    {
        $value = $this->get(self::SZHOUSENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szHouseName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzHouseName()
    {
        return $this->get(self::SZHOUSENAME) !== null;
    }

    /**
     * Sets value of 'szPassword' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPassword($value)
    {
        return $this->set(self::SZPASSWORD, $value);
    }

    /**
     * Returns value of 'szPassword' property
     *
     * @return string
     */
    public function getSzPassword()
    {
        $value = $this->get(self::SZPASSWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPassword' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPassword()
    {
        return $this->get(self::SZPASSWORD) !== null;
    }

    /**
     * Sets value of 'nVisitAuth' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVisitAuth($value)
    {
        return $this->set(self::NVISITAUTH, $value);
    }

    /**
     * Returns value of 'nVisitAuth' property
     *
     * @return integer
     */
    public function getNVisitAuth()
    {
        $value = $this->get(self::NVISITAUTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVisitAuth' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVisitAuth()
    {
        return $this->get(self::NVISITAUTH) !== null;
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