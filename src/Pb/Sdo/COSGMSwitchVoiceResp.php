<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGMSwitchVoiceResp message
 */
class COSGMSwitchVoiceResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const VOICE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::VOICE => array(
            'default' => \Xnhd\Core\Pb\Sdo\VoiceType::BackMusic,
            'name' => 'voice',
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
        $this->values[self::VOICE] = self::$fields[self::VOICE]['default'];
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
     * Sets value of 'voice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoice($value)
    {
        return $this->set(self::VOICE, $value);
    }

    /**
     * Returns value of 'voice' property
     *
     * @return integer
     */
    public function getVoice()
    {
        $value = $this->get(self::VOICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoice()
    {
        return $this->get(self::VOICE) !== null;
    }
}
}