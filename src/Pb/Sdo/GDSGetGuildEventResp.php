<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetGuildEventResp message
 */
class GDSGetGuildEventResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUILDID = 2;
    const GUILDEVENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDEVENT => array(
            'name' => 'guildEvent',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildEvent'
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
        $this->values[self::GUILDID] = null;
        $this->values[self::GUILDEVENT] = array();
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
     * Sets value of 'guildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildID($value)
    {
        return $this->set(self::GUILDID, $value);
    }

    /**
     * Returns value of 'guildID' property
     *
     * @return integer
     */
    public function getGuildID()
    {
        $value = $this->get(self::GUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildID()
    {
        return $this->get(self::GUILDID) !== null;
    }

    /**
     * Appends value to 'guildEvent' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildEvent $value Value to append
     *
     * @return null
     */
    public function appendGuildEvent(\Xnhd\Core\Pb\Sdo\GuildEvent $value)
    {
        return $this->append(self::GUILDEVENT, $value);
    }

    /**
     * Clears 'guildEvent' list
     *
     * @return null
     */
    public function clearGuildEvent()
    {
        return $this->clear(self::GUILDEVENT);
    }

    /**
     * Returns 'guildEvent' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildEvent[]
     */
    public function getGuildEvent()
    {
        return $this->get(self::GUILDEVENT);
    }

    /**
     * Returns true if 'guildEvent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildEvent()
    {
        return count($this->get(self::GUILDEVENT)) !== 0;
    }

    /**
     * Returns 'guildEvent' iterator
     *
     * @return \ArrayIterator
     */
    public function getGuildEventIterator()
    {
        return new \ArrayIterator($this->get(self::GUILDEVENT));
    }

    /**
     * Returns element from 'guildEvent' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildEvent
     */
    public function getGuildEventAt($offset)
    {
        return $this->get(self::GUILDEVENT, $offset);
    }

    /**
     * Returns count of 'guildEvent' list
     *
     * @return int
     */
    public function getGuildEventCount()
    {
        return $this->count(self::GUILDEVENT);
    }
}
}