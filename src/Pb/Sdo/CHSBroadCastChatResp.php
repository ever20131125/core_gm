<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSBroadCastChatResp message
 */
class CHSBroadCastChatResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SPEAKERCARDID = 2;
    const WAITTIME = 3;
    const CHATSN = 4;
    const OPTDATA = 5;
    const BANENDTIME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SPEAKERCARDID => array(
            'name' => 'speakerCardID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WAITTIME => array(
            'name' => 'WaitTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATSN => array(
            'name' => 'ChatSN',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTDATA => array(
            'name' => 'OptData',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BANENDTIME => array(
            'name' => 'banEndTime',
            'required' => false,
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
        $this->values[self::SPEAKERCARDID] = null;
        $this->values[self::WAITTIME] = null;
        $this->values[self::CHATSN] = null;
        $this->values[self::OPTDATA] = null;
        $this->values[self::BANENDTIME] = null;
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
     * Sets value of 'speakerCardID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpeakerCardID($value)
    {
        return $this->set(self::SPEAKERCARDID, $value);
    }

    /**
     * Returns value of 'speakerCardID' property
     *
     * @return integer
     */
    public function getSpeakerCardID()
    {
        $value = $this->get(self::SPEAKERCARDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'speakerCardID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpeakerCardID()
    {
        return $this->get(self::SPEAKERCARDID) !== null;
    }

    /**
     * Sets value of 'WaitTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWaitTime($value)
    {
        return $this->set(self::WAITTIME, $value);
    }

    /**
     * Returns value of 'WaitTime' property
     *
     * @return integer
     */
    public function getWaitTime()
    {
        $value = $this->get(self::WAITTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'WaitTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWaitTime()
    {
        return $this->get(self::WAITTIME) !== null;
    }

    /**
     * Sets value of 'ChatSN' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatSN($value)
    {
        return $this->set(self::CHATSN, $value);
    }

    /**
     * Returns value of 'ChatSN' property
     *
     * @return integer
     */
    public function getChatSN()
    {
        $value = $this->get(self::CHATSN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ChatSN' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatSN()
    {
        return $this->get(self::CHATSN) !== null;
    }

    /**
     * Sets value of 'OptData' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOptData($value)
    {
        return $this->set(self::OPTDATA, $value);
    }

    /**
     * Returns value of 'OptData' property
     *
     * @return integer
     */
    public function getOptData()
    {
        $value = $this->get(self::OPTDATA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'OptData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOptData()
    {
        return $this->get(self::OPTDATA) !== null;
    }

    /**
     * Sets value of 'banEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBanEndTime($value)
    {
        return $this->set(self::BANENDTIME, $value);
    }

    /**
     * Returns value of 'banEndTime' property
     *
     * @return integer
     */
    public function getBanEndTime()
    {
        $value = $this->get(self::BANENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'banEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBanEndTime()
    {
        return $this->get(self::BANENDTIME) !== null;
    }
}
}