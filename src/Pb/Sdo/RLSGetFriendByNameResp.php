<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetFriendByNameResp message
 */
class RLSGetFriendByNameResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const FRIENDTYPE = 3;
    const FRIENDIDINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendType::enmFriendType_Follow,
            'name' => 'friendType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDIDINFO => array(
            'name' => 'friendidInfo',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::FRIENDTYPE] = self::$fields[self::FRIENDTYPE]['default'];
        $this->values[self::FRIENDIDINFO] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'friendType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendType($value)
    {
        return $this->set(self::FRIENDTYPE, $value);
    }

    /**
     * Returns value of 'friendType' property
     *
     * @return integer
     */
    public function getFriendType()
    {
        $value = $this->get(self::FRIENDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendType()
    {
        return $this->get(self::FRIENDTYPE) !== null;
    }

    /**
     * Sets value of 'friendidInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\FriendInfo $value Property value
     *
     * @return null
     */
    public function setFriendidInfo(\Xnhd\Core\Pb\Sdo\FriendInfo $value=null)
    {
        return $this->set(self::FRIENDIDINFO, $value);
    }

    /**
     * Returns value of 'friendidInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo
     */
    public function getFriendidInfo()
    {
        return $this->get(self::FRIENDIDINFO);
    }

    /**
     * Returns true if 'friendidInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendidInfo()
    {
        return $this->get(self::FRIENDIDINFO) !== null;
    }
}
}