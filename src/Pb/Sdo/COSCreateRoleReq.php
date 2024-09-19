<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSCreateRoleReq message
 */
class COSCreateRoleReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZACCOUNTID = 1;
    const NZONEID = 2;
    const SZROLENAME = 3;
    const GENDER = 4;
    const NSELECT = 5;
    const NFACEID = 6;
    const NPAINT = 7;
    const TIMETICK = 8;
    const STRTOKEN = 9;
    const NAGE = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSELECT => array(
            'name' => 'nSelect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFACEID => array(
            'name' => 'nFaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAINT => array(
            'name' => 'nPaint',
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
        self::NAGE => array(
            'name' => 'nAge',
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::NSELECT] = null;
        $this->values[self::NFACEID] = null;
        $this->values[self::NPAINT] = null;
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
        $this->values[self::NAGE] = null;
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
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
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
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }

    /**
     * Sets value of 'nSelect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect($value)
    {
        return $this->set(self::NSELECT, $value);
    }

    /**
     * Returns value of 'nSelect' property
     *
     * @return integer
     */
    public function getNSelect()
    {
        $value = $this->get(self::NSELECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect()
    {
        return $this->get(self::NSELECT) !== null;
    }

    /**
     * Sets value of 'nFaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceID($value)
    {
        return $this->set(self::NFACEID, $value);
    }

    /**
     * Returns value of 'nFaceID' property
     *
     * @return integer
     */
    public function getNFaceID()
    {
        $value = $this->get(self::NFACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceID()
    {
        return $this->get(self::NFACEID) !== null;
    }

    /**
     * Sets value of 'nPaint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPaint($value)
    {
        return $this->set(self::NPAINT, $value);
    }

    /**
     * Returns value of 'nPaint' property
     *
     * @return integer
     */
    public function getNPaint()
    {
        $value = $this->get(self::NPAINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPaint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPaint()
    {
        return $this->get(self::NPAINT) !== null;
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
     * Sets value of 'nAge' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAge($value)
    {
        return $this->set(self::NAGE, $value);
    }

    /**
     * Returns value of 'nAge' property
     *
     * @return integer
     */
    public function getNAge()
    {
        $value = $this->get(self::NAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAge' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAge()
    {
        return $this->get(self::NAGE) !== null;
    }
}
}