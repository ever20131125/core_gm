<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSQuickJoinGuildResp message
 */
class GDSQuickJoinGuildResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STGUILDINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STGUILDINFO => array(
            'name' => 'stGuildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildInfo'
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
        $this->values[self::STGUILDINFO] = null;
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
     * Sets value of 'stGuildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildInfo $value Property value
     *
     * @return null
     */
    public function setStGuildInfo(\Xnhd\Core\Pb\Sdo\GuildInfo $value=null)
    {
        return $this->set(self::STGUILDINFO, $value);
    }

    /**
     * Returns value of 'stGuildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildInfo
     */
    public function getStGuildInfo()
    {
        return $this->get(self::STGUILDINFO);
    }

    /**
     * Returns true if 'stGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStGuildInfo()
    {
        return $this->get(self::STGUILDINFO) !== null;
    }
}
}