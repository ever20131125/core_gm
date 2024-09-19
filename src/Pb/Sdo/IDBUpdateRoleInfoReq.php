<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBUpdateRoleInfoReq message
 */
class IDBUpdateRoleInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROLEDATATYPE = 2;
    const SZROLENAME = 3;
    const NFACESLOT = 4;
    const NUSETHEME = 5;
    const NSHOWTHEME = 6;
    const TIMETICK = 10;
    const STRTOKEN = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEDATATYPE => array(
            'name' => 'nRoleDataType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NFACESLOT => array(
            'name' => 'nFaceSlot',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUSETHEME => array(
            'name' => 'nUseTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSHOWTHEME => array(
            'name' => 'nShowTheme',
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
        $this->values[self::NROLEDATATYPE] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NFACESLOT] = null;
        $this->values[self::NUSETHEME] = null;
        $this->values[self::NSHOWTHEME] = null;
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
     * Sets value of 'nRoleDataType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleDataType($value)
    {
        return $this->set(self::NROLEDATATYPE, $value);
    }

    /**
     * Returns value of 'nRoleDataType' property
     *
     * @return integer
     */
    public function getNRoleDataType()
    {
        $value = $this->get(self::NROLEDATATYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleDataType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleDataType()
    {
        return $this->get(self::NROLEDATATYPE) !== null;
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
     * Sets value of 'nFaceSlot' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceSlot($value)
    {
        return $this->set(self::NFACESLOT, $value);
    }

    /**
     * Returns value of 'nFaceSlot' property
     *
     * @return integer
     */
    public function getNFaceSlot()
    {
        $value = $this->get(self::NFACESLOT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceSlot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceSlot()
    {
        return $this->get(self::NFACESLOT) !== null;
    }

    /**
     * Sets value of 'nUseTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUseTheme($value)
    {
        return $this->set(self::NUSETHEME, $value);
    }

    /**
     * Returns value of 'nUseTheme' property
     *
     * @return integer
     */
    public function getNUseTheme()
    {
        $value = $this->get(self::NUSETHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUseTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUseTheme()
    {
        return $this->get(self::NUSETHEME) !== null;
    }

    /**
     * Sets value of 'nShowTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShowTheme($value)
    {
        return $this->set(self::NSHOWTHEME, $value);
    }

    /**
     * Returns value of 'nShowTheme' property
     *
     * @return integer
     */
    public function getNShowTheme()
    {
        $value = $this->get(self::NSHOWTHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShowTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShowTheme()
    {
        return $this->get(self::NSHOWTHEME) !== null;
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