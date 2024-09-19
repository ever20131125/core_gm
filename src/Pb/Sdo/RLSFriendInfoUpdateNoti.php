<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSFriendInfoUpdateNoti message
 */
class RLSFriendInfoUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const FRIENDID = 2;
    const FRIENDINFO = 3;

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
        $this->values[self::ROLEID] = null;
        $this->values[self::FRIENDID] = null;
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