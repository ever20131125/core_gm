<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetFriendInfoResp message
 */
class RLSGetFriendInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const FRIENDINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::FRIENDINFO => array(
            'name' => 'friendInfo',
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
        $this->values[self::FRIENDINFO] = array();
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
     * Appends value to 'friendInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FriendInfo $value Value to append
     *
     * @return null
     */
    public function appendFriendInfo(\Xnhd\Core\Pb\Sdo\FriendInfo $value)
    {
        return $this->append(self::FRIENDINFO, $value);
    }

    /**
     * Clears 'friendInfo' list
     *
     * @return null
     */
    public function clearFriendInfo()
    {
        return $this->clear(self::FRIENDINFO);
    }

    /**
     * Returns 'friendInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo[]
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
        return count($this->get(self::FRIENDINFO)) !== 0;
    }

    /**
     * Returns 'friendInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getFriendInfoIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDINFO));
    }

    /**
     * Returns element from 'friendInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo
     */
    public function getFriendInfoAt($offset)
    {
        return $this->get(self::FRIENDINFO, $offset);
    }

    /**
     * Returns count of 'friendInfo' list
     *
     * @return int
     */
    public function getFriendInfoCount()
    {
        return $this->count(self::FRIENDINFO);
    }
}
}