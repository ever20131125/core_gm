<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetInviteListResp message
 */
class ACTGetInviteListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const INVITELIST = 3;
    const BACKLIST = 4;

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
        self::INVITELIST => array(
            'name' => 'inviteList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BACKLIST => array(
            'name' => 'backList',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::INVITELIST] = array();
        $this->values[self::BACKLIST] = array();
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
     * Appends value to 'inviteList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendInviteList($value)
    {
        return $this->append(self::INVITELIST, $value);
    }

    /**
     * Clears 'inviteList' list
     *
     * @return null
     */
    public function clearInviteList()
    {
        return $this->clear(self::INVITELIST);
    }

    /**
     * Returns 'inviteList' list
     *
     * @return integer[]
     */
    public function getInviteList()
    {
        return $this->get(self::INVITELIST);
    }

    /**
     * Returns true if 'inviteList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInviteList()
    {
        return count($this->get(self::INVITELIST)) !== 0;
    }

    /**
     * Returns 'inviteList' iterator
     *
     * @return \ArrayIterator
     */
    public function getInviteListIterator()
    {
        return new \ArrayIterator($this->get(self::INVITELIST));
    }

    /**
     * Returns element from 'inviteList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getInviteListAt($offset)
    {
        return $this->get(self::INVITELIST, $offset);
    }

    /**
     * Returns count of 'inviteList' list
     *
     * @return int
     */
    public function getInviteListCount()
    {
        return $this->count(self::INVITELIST);
    }

    /**
     * Appends value to 'backList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendBackList($value)
    {
        return $this->append(self::BACKLIST, $value);
    }

    /**
     * Clears 'backList' list
     *
     * @return null
     */
    public function clearBackList()
    {
        return $this->clear(self::BACKLIST);
    }

    /**
     * Returns 'backList' list
     *
     * @return integer[]
     */
    public function getBackList()
    {
        return $this->get(self::BACKLIST);
    }

    /**
     * Returns true if 'backList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBackList()
    {
        return count($this->get(self::BACKLIST)) !== 0;
    }

    /**
     * Returns 'backList' iterator
     *
     * @return \ArrayIterator
     */
    public function getBackListIterator()
    {
        return new \ArrayIterator($this->get(self::BACKLIST));
    }

    /**
     * Returns element from 'backList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getBackListAt($offset)
    {
        return $this->get(self::BACKLIST, $offset);
    }

    /**
     * Returns count of 'backList' list
     *
     * @return int
     */
    public function getBackListCount()
    {
        return $this->count(self::BACKLIST);
    }
}
}