<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSUpdateFriendIntimacyNoti message
 */
class RLSUpdateFriendIntimacyNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const FRIENDID = 2;
    const CURRENTINTIMACY = 3;
    const SZFRIENDTITLE = 4;
    const NFRIENDLEVEL = 5;
    const TYPE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRENTINTIMACY => array(
            'name' => 'currentIntimacy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZFRIENDTITLE => array(
            'name' => 'szFriendTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NFRIENDLEVEL => array(
            'name' => 'nFriendLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::CURRENTINTIMACY] = null;
        $this->values[self::SZFRIENDTITLE] = null;
        $this->values[self::NFRIENDLEVEL] = null;
        $this->values[self::TYPE] = null;
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
     * Sets value of 'friendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendID($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendID' property
     *
     * @return integer
     */
    public function getFriendID()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Sets value of 'currentIntimacy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentIntimacy($value)
    {
        return $this->set(self::CURRENTINTIMACY, $value);
    }

    /**
     * Returns value of 'currentIntimacy' property
     *
     * @return integer
     */
    public function getCurrentIntimacy()
    {
        $value = $this->get(self::CURRENTINTIMACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'currentIntimacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentIntimacy()
    {
        return $this->get(self::CURRENTINTIMACY) !== null;
    }

    /**
     * Sets value of 'szFriendTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzFriendTitle($value)
    {
        return $this->set(self::SZFRIENDTITLE, $value);
    }

    /**
     * Returns value of 'szFriendTitle' property
     *
     * @return string
     */
    public function getSzFriendTitle()
    {
        $value = $this->get(self::SZFRIENDTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szFriendTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzFriendTitle()
    {
        return $this->get(self::SZFRIENDTITLE) !== null;
    }

    /**
     * Sets value of 'nFriendLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFriendLevel($value)
    {
        return $this->set(self::NFRIENDLEVEL, $value);
    }

    /**
     * Returns value of 'nFriendLevel' property
     *
     * @return integer
     */
    public function getNFriendLevel()
    {
        $value = $this->get(self::NFRIENDLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFriendLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFriendLevel()
    {
        return $this->get(self::NFRIENDLEVEL) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }
}
}