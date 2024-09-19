<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetGuildStageInfoResp message
 */
class GDSGetGuildStageInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUILDSTAGEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GUILDSTAGEINFO => array(
            'name' => 'guildStageInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildStageInfo'
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
        $this->values[self::GUILDSTAGEINFO] = array();
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
     * Appends value to 'guildStageInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildStageInfo $value Value to append
     *
     * @return null
     */
    public function appendGuildStageInfo(\Xnhd\Core\Pb\Sdo\GuildStageInfo $value)
    {
        return $this->append(self::GUILDSTAGEINFO, $value);
    }

    /**
     * Clears 'guildStageInfo' list
     *
     * @return null
     */
    public function clearGuildStageInfo()
    {
        return $this->clear(self::GUILDSTAGEINFO);
    }

    /**
     * Returns 'guildStageInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildStageInfo[]
     */
    public function getGuildStageInfo()
    {
        return $this->get(self::GUILDSTAGEINFO);
    }

    /**
     * Returns true if 'guildStageInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildStageInfo()
    {
        return count($this->get(self::GUILDSTAGEINFO)) !== 0;
    }

    /**
     * Returns 'guildStageInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getGuildStageInfoIterator()
    {
        return new \ArrayIterator($this->get(self::GUILDSTAGEINFO));
    }

    /**
     * Returns element from 'guildStageInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildStageInfo
     */
    public function getGuildStageInfoAt($offset)
    {
        return $this->get(self::GUILDSTAGEINFO, $offset);
    }

    /**
     * Returns count of 'guildStageInfo' list
     *
     * @return int
     */
    public function getGuildStageInfoCount()
    {
        return $this->count(self::GUILDSTAGEINFO);
    }
}
}