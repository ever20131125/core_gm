<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetFriendListResp message
 */
class RLSGetFriendListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const FRIENDTYPE = 3;
    const RANKTYPE = 4;
    const FRIENDIDLIST = 5;

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
        self::RANKTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendRankType::enmFriendRankType_None,
            'name' => 'rankType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDIDLIST => array(
            'name' => 'friendidList',
            'repeated' => true,
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
        $this->values[self::RANKTYPE] = self::$fields[self::RANKTYPE]['default'];
        $this->values[self::FRIENDIDLIST] = array();
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
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }

    /**
     * Appends value to 'friendidList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FriendInfo $value Value to append
     *
     * @return null
     */
    public function appendFriendidList(\Xnhd\Core\Pb\Sdo\FriendInfo $value)
    {
        return $this->append(self::FRIENDIDLIST, $value);
    }

    /**
     * Clears 'friendidList' list
     *
     * @return null
     */
    public function clearFriendidList()
    {
        return $this->clear(self::FRIENDIDLIST);
    }

    /**
     * Returns 'friendidList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo[]
     */
    public function getFriendidList()
    {
        return $this->get(self::FRIENDIDLIST);
    }

    /**
     * Returns true if 'friendidList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendidList()
    {
        return count($this->get(self::FRIENDIDLIST)) !== 0;
    }

    /**
     * Returns 'friendidList' iterator
     *
     * @return \ArrayIterator
     */
    public function getFriendidListIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDIDLIST));
    }

    /**
     * Returns element from 'friendidList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo
     */
    public function getFriendidListAt($offset)
    {
        return $this->get(self::FRIENDIDLIST, $offset);
    }

    /**
     * Returns count of 'friendidList' list
     *
     * @return int
     */
    public function getFriendidListCount()
    {
        return $this->count(self::FRIENDIDLIST);
    }
}
}