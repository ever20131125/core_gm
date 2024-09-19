<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetFriendAndCoupleResp message
 */
class RLSGetFriendAndCoupleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const FRIENDTYPE = 3;
    const FRIENDLIST = 4;
    const STCOUPLEINFO = 5;

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
            'default' => \Xnhd\Core\Pb\Sdo\FriendType::enmFriendType_None,
            'name' => 'friendType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDLIST => array(
            'name' => 'friendList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FriendInfo'
        ),
        self::STCOUPLEINFO => array(
            'name' => 'stCoupleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleInfo'
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
        $this->values[self::FRIENDLIST] = array();
        $this->values[self::STCOUPLEINFO] = null;
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
     * Appends value to 'friendList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FriendInfo $value Value to append
     *
     * @return null
     */
    public function appendFriendList(\Xnhd\Core\Pb\Sdo\FriendInfo $value)
    {
        return $this->append(self::FRIENDLIST, $value);
    }

    /**
     * Clears 'friendList' list
     *
     * @return null
     */
    public function clearFriendList()
    {
        return $this->clear(self::FRIENDLIST);
    }

    /**
     * Returns 'friendList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo[]
     */
    public function getFriendList()
    {
        return $this->get(self::FRIENDLIST);
    }

    /**
     * Returns true if 'friendList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendList()
    {
        return count($this->get(self::FRIENDLIST)) !== 0;
    }

    /**
     * Returns 'friendList' iterator
     *
     * @return \ArrayIterator
     */
    public function getFriendListIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDLIST));
    }

    /**
     * Returns element from 'friendList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo
     */
    public function getFriendListAt($offset)
    {
        return $this->get(self::FRIENDLIST, $offset);
    }

    /**
     * Returns count of 'friendList' list
     *
     * @return int
     */
    public function getFriendListCount()
    {
        return $this->count(self::FRIENDLIST);
    }

    /**
     * Sets value of 'stCoupleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleInfo $value Property value
     *
     * @return null
     */
    public function setStCoupleInfo(\Xnhd\Core\Pb\Sdo\CoupleInfo $value=null)
    {
        return $this->set(self::STCOUPLEINFO, $value);
    }

    /**
     * Returns value of 'stCoupleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleInfo
     */
    public function getStCoupleInfo()
    {
        return $this->get(self::STCOUPLEINFO);
    }

    /**
     * Returns true if 'stCoupleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStCoupleInfo()
    {
        return $this->get(self::STCOUPLEINFO) !== null;
    }
}
}