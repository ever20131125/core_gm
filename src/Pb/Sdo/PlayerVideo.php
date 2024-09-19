<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlayerVideo message
 */
class PlayerVideo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZROLENAME = 2;
    const GENDER = 3;
    const VIPLEVEL = 4;
    const NLEVEL = 5;
    const ARRAVATARID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
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
        self::VIPLEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\VIPLevel::enmVIPLevel_Null,
            'name' => 'vipLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRAVATARID => array(
            'name' => 'arrAvatarID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::VIPLEVEL] = self::$fields[self::VIPLEVEL]['default'];
        $this->values[self::NLEVEL] = null;
        $this->values[self::ARRAVATARID] = array();
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
     * Sets value of 'vipLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVipLevel($value)
    {
        return $this->set(self::VIPLEVEL, $value);
    }

    /**
     * Returns value of 'vipLevel' property
     *
     * @return integer
     */
    public function getVipLevel()
    {
        $value = $this->get(self::VIPLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'vipLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVipLevel()
    {
        return $this->get(self::VIPLEVEL) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Appends value to 'arrAvatarID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAvatarID($value)
    {
        return $this->append(self::ARRAVATARID, $value);
    }

    /**
     * Clears 'arrAvatarID' list
     *
     * @return null
     */
    public function clearArrAvatarID()
    {
        return $this->clear(self::ARRAVATARID);
    }

    /**
     * Returns 'arrAvatarID' list
     *
     * @return integer[]
     */
    public function getArrAvatarID()
    {
        return $this->get(self::ARRAVATARID);
    }

    /**
     * Returns true if 'arrAvatarID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAvatarID()
    {
        return count($this->get(self::ARRAVATARID)) !== 0;
    }

    /**
     * Returns 'arrAvatarID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAvatarIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRAVATARID));
    }

    /**
     * Returns element from 'arrAvatarID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAvatarIDAt($offset)
    {
        return $this->get(self::ARRAVATARID, $offset);
    }

    /**
     * Returns count of 'arrAvatarID' list
     *
     * @return int
     */
    public function getArrAvatarIDCount()
    {
        return $this->count(self::ARRAVATARID);
    }
}
}