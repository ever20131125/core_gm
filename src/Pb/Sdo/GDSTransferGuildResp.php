<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSTransferGuildResp message
 */
class GDSTransferGuildResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NTRANSFERTIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NTRANSFERTIME => array(
            'name' => 'nTransferTime',
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
        $this->values[self::NTRANSFERTIME] = null;
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
     * Sets value of 'nTransferTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTransferTime($value)
    {
        return $this->set(self::NTRANSFERTIME, $value);
    }

    /**
     * Returns value of 'nTransferTime' property
     *
     * @return integer
     */
    public function getNTransferTime()
    {
        $value = $this->get(self::NTRANSFERTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTransferTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTransferTime()
    {
        return $this->get(self::NTRANSFERTIME) !== null;
    }
}
}