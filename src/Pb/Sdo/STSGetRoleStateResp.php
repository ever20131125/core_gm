<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSGetRoleStateResp message
 */
class STSGetRoleStateResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEID = 2;
    const ARRSTATE = 3;
    const ARROFFLINETIME = 4;
    const ARRCHANNELID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSTATE => array(
            'name' => 'arrState',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROFFLINETIME => array(
            'name' => 'arrOfflineTime',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCHANNELID => array(
            'name' => 'arrChannelID',
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
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRSTATE] = array();
        $this->values[self::ARROFFLINETIME] = array();
        $this->values[self::ARRCHANNELID] = array();
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
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Appends value to 'arrState' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrState($value)
    {
        return $this->append(self::ARRSTATE, $value);
    }

    /**
     * Clears 'arrState' list
     *
     * @return null
     */
    public function clearArrState()
    {
        return $this->clear(self::ARRSTATE);
    }

    /**
     * Returns 'arrState' list
     *
     * @return integer[]
     */
    public function getArrState()
    {
        return $this->get(self::ARRSTATE);
    }

    /**
     * Returns true if 'arrState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrState()
    {
        return count($this->get(self::ARRSTATE)) !== 0;
    }

    /**
     * Returns 'arrState' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStateIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTATE));
    }

    /**
     * Returns element from 'arrState' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrStateAt($offset)
    {
        return $this->get(self::ARRSTATE, $offset);
    }

    /**
     * Returns count of 'arrState' list
     *
     * @return int
     */
    public function getArrStateCount()
    {
        return $this->count(self::ARRSTATE);
    }

    /**
     * Appends value to 'arrOfflineTime' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOfflineTime($value)
    {
        return $this->append(self::ARROFFLINETIME, $value);
    }

    /**
     * Clears 'arrOfflineTime' list
     *
     * @return null
     */
    public function clearArrOfflineTime()
    {
        return $this->clear(self::ARROFFLINETIME);
    }

    /**
     * Returns 'arrOfflineTime' list
     *
     * @return integer[]
     */
    public function getArrOfflineTime()
    {
        return $this->get(self::ARROFFLINETIME);
    }

    /**
     * Returns true if 'arrOfflineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOfflineTime()
    {
        return count($this->get(self::ARROFFLINETIME)) !== 0;
    }

    /**
     * Returns 'arrOfflineTime' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOfflineTimeIterator()
    {
        return new \ArrayIterator($this->get(self::ARROFFLINETIME));
    }

    /**
     * Returns element from 'arrOfflineTime' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOfflineTimeAt($offset)
    {
        return $this->get(self::ARROFFLINETIME, $offset);
    }

    /**
     * Returns count of 'arrOfflineTime' list
     *
     * @return int
     */
    public function getArrOfflineTimeCount()
    {
        return $this->count(self::ARROFFLINETIME);
    }

    /**
     * Appends value to 'arrChannelID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrChannelID($value)
    {
        return $this->append(self::ARRCHANNELID, $value);
    }

    /**
     * Clears 'arrChannelID' list
     *
     * @return null
     */
    public function clearArrChannelID()
    {
        return $this->clear(self::ARRCHANNELID);
    }

    /**
     * Returns 'arrChannelID' list
     *
     * @return integer[]
     */
    public function getArrChannelID()
    {
        return $this->get(self::ARRCHANNELID);
    }

    /**
     * Returns true if 'arrChannelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrChannelID()
    {
        return count($this->get(self::ARRCHANNELID)) !== 0;
    }

    /**
     * Returns 'arrChannelID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrChannelIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCHANNELID));
    }

    /**
     * Returns element from 'arrChannelID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrChannelIDAt($offset)
    {
        return $this->get(self::ARRCHANNELID, $offset);
    }

    /**
     * Returns count of 'arrChannelID' list
     *
     * @return int
     */
    public function getArrChannelIDCount()
    {
        return $this->count(self::ARRCHANNELID);
    }
}
}