<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetAskAddFriendListResp message
 */
class RLSGetAskAddFriendListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ASKLIST = 3;

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
        self::ASKLIST => array(
            'name' => 'askList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AskFriendInfo'
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
        $this->values[self::ASKLIST] = array();
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
     * Appends value to 'askList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AskFriendInfo $value Value to append
     *
     * @return null
     */
    public function appendAskList(\Xnhd\Core\Pb\Sdo\AskFriendInfo $value)
    {
        return $this->append(self::ASKLIST, $value);
    }

    /**
     * Clears 'askList' list
     *
     * @return null
     */
    public function clearAskList()
    {
        return $this->clear(self::ASKLIST);
    }

    /**
     * Returns 'askList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AskFriendInfo[]
     */
    public function getAskList()
    {
        return $this->get(self::ASKLIST);
    }

    /**
     * Returns true if 'askList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAskList()
    {
        return count($this->get(self::ASKLIST)) !== 0;
    }

    /**
     * Returns 'askList' iterator
     *
     * @return \ArrayIterator
     */
    public function getAskListIterator()
    {
        return new \ArrayIterator($this->get(self::ASKLIST));
    }

    /**
     * Returns element from 'askList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AskFriendInfo
     */
    public function getAskListAt($offset)
    {
        return $this->get(self::ASKLIST, $offset);
    }

    /**
     * Returns count of 'askList' list
     *
     * @return int
     */
    public function getAskListCount()
    {
        return $this->count(self::ASKLIST);
    }
}
}