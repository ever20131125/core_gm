<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSPullMessageResp message
 */
class CHSPullMessageResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRMESSAGES = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRMESSAGES => array(
            'name' => 'arrMessages',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CHSChatNoti'
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
        $this->values[self::ARRMESSAGES] = array();
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
     * Appends value to 'arrMessages' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CHSChatNoti $value Value to append
     *
     * @return null
     */
    public function appendArrMessages(\Xnhd\Core\Pb\Sdo\CHSChatNoti $value)
    {
        return $this->append(self::ARRMESSAGES, $value);
    }

    /**
     * Clears 'arrMessages' list
     *
     * @return null
     */
    public function clearArrMessages()
    {
        return $this->clear(self::ARRMESSAGES);
    }

    /**
     * Returns 'arrMessages' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CHSChatNoti[]
     */
    public function getArrMessages()
    {
        return $this->get(self::ARRMESSAGES);
    }

    /**
     * Returns true if 'arrMessages' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMessages()
    {
        return count($this->get(self::ARRMESSAGES)) !== 0;
    }

    /**
     * Returns 'arrMessages' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMessagesIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMESSAGES));
    }

    /**
     * Returns element from 'arrMessages' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CHSChatNoti
     */
    public function getArrMessagesAt($offset)
    {
        return $this->get(self::ARRMESSAGES, $offset);
    }

    /**
     * Returns count of 'arrMessages' list
     *
     * @return int
     */
    public function getArrMessagesCount()
    {
        return $this->count(self::ARRMESSAGES);
    }
}
}