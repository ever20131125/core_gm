<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAddFriendNoti message
 */
class RLSAddFriendNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NOTITYPE = 1;
    const FOLLOWCNT = 2;
    const FANSCNT = 3;
    const FRIENDCNT = 4;
    const FRIENDNAME = 5;
    const FRIENDINFO = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NOTITYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\NotiType::enmNotiType_None,
            'name' => 'notiType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FOLLOWCNT => array(
            'name' => 'followcnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FANSCNT => array(
            'name' => 'fanscnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDCNT => array(
            'name' => 'friendcnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDNAME => array(
            'name' => 'friendname',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FRIENDINFO => array(
            'name' => 'friendInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\FriendInfo'
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
        $this->values[self::NOTITYPE] = self::$fields[self::NOTITYPE]['default'];
        $this->values[self::FOLLOWCNT] = null;
        $this->values[self::FANSCNT] = null;
        $this->values[self::FRIENDCNT] = null;
        $this->values[self::FRIENDNAME] = null;
        $this->values[self::FRIENDINFO] = null;
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
     * Sets value of 'notiType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNotiType($value)
    {
        return $this->set(self::NOTITYPE, $value);
    }

    /**
     * Returns value of 'notiType' property
     *
     * @return integer
     */
    public function getNotiType()
    {
        $value = $this->get(self::NOTITYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'notiType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNotiType()
    {
        return $this->get(self::NOTITYPE) !== null;
    }

    /**
     * Sets value of 'followcnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFollowcnt($value)
    {
        return $this->set(self::FOLLOWCNT, $value);
    }

    /**
     * Returns value of 'followcnt' property
     *
     * @return integer
     */
    public function getFollowcnt()
    {
        $value = $this->get(self::FOLLOWCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'followcnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFollowcnt()
    {
        return $this->get(self::FOLLOWCNT) !== null;
    }

    /**
     * Sets value of 'fanscnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFanscnt($value)
    {
        return $this->set(self::FANSCNT, $value);
    }

    /**
     * Returns value of 'fanscnt' property
     *
     * @return integer
     */
    public function getFanscnt()
    {
        $value = $this->get(self::FANSCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fanscnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFanscnt()
    {
        return $this->get(self::FANSCNT) !== null;
    }

    /**
     * Sets value of 'friendcnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendcnt($value)
    {
        return $this->set(self::FRIENDCNT, $value);
    }

    /**
     * Returns value of 'friendcnt' property
     *
     * @return integer
     */
    public function getFriendcnt()
    {
        $value = $this->get(self::FRIENDCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendcnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendcnt()
    {
        return $this->get(self::FRIENDCNT) !== null;
    }

    /**
     * Sets value of 'friendname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendname($value)
    {
        return $this->set(self::FRIENDNAME, $value);
    }

    /**
     * Returns value of 'friendname' property
     *
     * @return string
     */
    public function getFriendname()
    {
        $value = $this->get(self::FRIENDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendname()
    {
        return $this->get(self::FRIENDNAME) !== null;
    }

    /**
     * Sets value of 'friendInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\FriendInfo $value Property value
     *
     * @return null
     */
    public function setFriendInfo(\Xnhd\Core\Pb\Sdo\FriendInfo $value=null)
    {
        return $this->set(self::FRIENDINFO, $value);
    }

    /**
     * Returns value of 'friendInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo
     */
    public function getFriendInfo()
    {
        return $this->get(self::FRIENDINFO);
    }

    /**
     * Returns true if 'friendInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendInfo()
    {
        return $this->get(self::FRIENDINFO) !== null;
    }
}
}