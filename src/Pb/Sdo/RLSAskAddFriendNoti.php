<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAskAddFriendNoti message
 */
class RLSAskAddFriendNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ASKID = 1;
    const ASKINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ASKID => array(
            'name' => 'askID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASKINFO => array(
            'name' => 'askInfo',
            'required' => false,
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
        $this->values[self::ASKID] = null;
        $this->values[self::ASKINFO] = null;
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
     * Sets value of 'askID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAskID($value)
    {
        return $this->set(self::ASKID, $value);
    }

    /**
     * Returns value of 'askID' property
     *
     * @return integer
     */
    public function getAskID()
    {
        $value = $this->get(self::ASKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'askID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAskID()
    {
        return $this->get(self::ASKID) !== null;
    }

    /**
     * Sets value of 'askInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AskFriendInfo $value Property value
     *
     * @return null
     */
    public function setAskInfo(\Xnhd\Core\Pb\Sdo\AskFriendInfo $value=null)
    {
        return $this->set(self::ASKINFO, $value);
    }

    /**
     * Returns value of 'askInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AskFriendInfo
     */
    public function getAskInfo()
    {
        return $this->get(self::ASKINFO);
    }

    /**
     * Returns true if 'askInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAskInfo()
    {
        return $this->get(self::ASKINFO) !== null;
    }
}
}