<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleLoverInfo message
 */
class RoleLoverInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NLOVERID = 1;
    const SZROLENAME = 2;
    const GENDER = 3;
    const NLOVELEVEL = 4;
    const NFRIENDTYPE = 5;
    const NKEEPSAKELEVEL = 6;
    const NKEEPSAKESEID = 7;
    const STTOKENINFO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NLOVERID => array(
            'name' => 'nLoverID',
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
        self::NLOVELEVEL => array(
            'name' => 'nLoveLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFRIENDTYPE => array(
            'name' => 'nFriendType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEEPSAKELEVEL => array(
            'name' => 'nKeepsakeLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEEPSAKESEID => array(
            'name' => 'nKeepsakeSEID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STTOKENINFO => array(
            'name' => 'stTokenInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TokenInfo'
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
        $this->values[self::NLOVERID] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::NLOVELEVEL] = null;
        $this->values[self::NFRIENDTYPE] = null;
        $this->values[self::NKEEPSAKELEVEL] = null;
        $this->values[self::NKEEPSAKESEID] = null;
        $this->values[self::STTOKENINFO] = null;
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
     * Sets value of 'nLoverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoverID($value)
    {
        return $this->set(self::NLOVERID, $value);
    }

    /**
     * Returns value of 'nLoverID' property
     *
     * @return integer
     */
    public function getNLoverID()
    {
        $value = $this->get(self::NLOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoverID()
    {
        return $this->get(self::NLOVERID) !== null;
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
     * Sets value of 'nLoveLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoveLevel($value)
    {
        return $this->set(self::NLOVELEVEL, $value);
    }

    /**
     * Returns value of 'nLoveLevel' property
     *
     * @return integer
     */
    public function getNLoveLevel()
    {
        $value = $this->get(self::NLOVELEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoveLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoveLevel()
    {
        return $this->get(self::NLOVELEVEL) !== null;
    }

    /**
     * Sets value of 'nFriendType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFriendType($value)
    {
        return $this->set(self::NFRIENDTYPE, $value);
    }

    /**
     * Returns value of 'nFriendType' property
     *
     * @return integer
     */
    public function getNFriendType()
    {
        $value = $this->get(self::NFRIENDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFriendType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFriendType()
    {
        return $this->get(self::NFRIENDTYPE) !== null;
    }

    /**
     * Sets value of 'nKeepsakeLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeepsakeLevel($value)
    {
        return $this->set(self::NKEEPSAKELEVEL, $value);
    }

    /**
     * Returns value of 'nKeepsakeLevel' property
     *
     * @return integer
     */
    public function getNKeepsakeLevel()
    {
        $value = $this->get(self::NKEEPSAKELEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeepsakeLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeepsakeLevel()
    {
        return $this->get(self::NKEEPSAKELEVEL) !== null;
    }

    /**
     * Sets value of 'nKeepsakeSEID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeepsakeSEID($value)
    {
        return $this->set(self::NKEEPSAKESEID, $value);
    }

    /**
     * Returns value of 'nKeepsakeSEID' property
     *
     * @return integer
     */
    public function getNKeepsakeSEID()
    {
        $value = $this->get(self::NKEEPSAKESEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeepsakeSEID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeepsakeSEID()
    {
        return $this->get(self::NKEEPSAKESEID) !== null;
    }

    /**
     * Sets value of 'stTokenInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TokenInfo $value Property value
     *
     * @return null
     */
    public function setStTokenInfo(\Xnhd\Core\Pb\Sdo\TokenInfo $value=null)
    {
        return $this->set(self::STTOKENINFO, $value);
    }

    /**
     * Returns value of 'stTokenInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TokenInfo
     */
    public function getStTokenInfo()
    {
        return $this->get(self::STTOKENINFO);
    }

    /**
     * Returns true if 'stTokenInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTokenInfo()
    {
        return $this->get(self::STTOKENINFO) !== null;
    }
}
}