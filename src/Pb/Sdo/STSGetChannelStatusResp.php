<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSGetChannelStatusResp message
 */
class STSGetChannelStatusResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRCHANNELSTATUS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCHANNELSTATUS => array(
            'name' => 'arrChannelStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ChannelStatus'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRCHANNELSTATUS] = array();
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Appends value to 'arrChannelStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ChannelStatus $value Value to append
     *
     * @return null
     */
    public function appendArrChannelStatus(\Xnhd\Core\Pb\Sdo\ChannelStatus $value)
    {
        return $this->append(self::ARRCHANNELSTATUS, $value);
    }

    /**
     * Clears 'arrChannelStatus' list
     *
     * @return null
     */
    public function clearArrChannelStatus()
    {
        return $this->clear(self::ARRCHANNELSTATUS);
    }

    /**
     * Returns 'arrChannelStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChannelStatus[]
     */
    public function getArrChannelStatus()
    {
        return $this->get(self::ARRCHANNELSTATUS);
    }

    /**
     * Returns true if 'arrChannelStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrChannelStatus()
    {
        return count($this->get(self::ARRCHANNELSTATUS)) !== 0;
    }

    /**
     * Returns 'arrChannelStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrChannelStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCHANNELSTATUS));
    }

    /**
     * Returns element from 'arrChannelStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChannelStatus
     */
    public function getArrChannelStatusAt($offset)
    {
        return $this->get(self::ARRCHANNELSTATUS, $offset);
    }

    /**
     * Returns count of 'arrChannelStatus' list
     *
     * @return int
     */
    public function getArrChannelStatusCount()
    {
        return $this->count(self::ARRCHANNELSTATUS);
    }
}
}