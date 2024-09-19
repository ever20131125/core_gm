<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildEvent message
 */
class GuildEvent extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDID = 1;
    const EVENTID = 2;
    const EVENTTYPE = 3;
    const TIME = 4;
    const EVENTS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENTID => array(
            'name' => 'eventID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildEventType::enmGuildEventType_None,
            'name' => 'eventType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EVENTS => array(
            'name' => 'events',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::GUILDID] = null;
        $this->values[self::EVENTID] = null;
        $this->values[self::EVENTTYPE] = self::$fields[self::EVENTTYPE]['default'];
        $this->values[self::TIME] = null;
        $this->values[self::EVENTS] = null;
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
     * Sets value of 'eventID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventID($value)
    {
        return $this->set(self::EVENTID, $value);
    }

    /**
     * Returns value of 'eventID' property
     *
     * @return integer
     */
    public function getEventID()
    {
        $value = $this->get(self::EVENTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'eventID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventID()
    {
        return $this->get(self::EVENTID) !== null;
    }

    /**
     * Sets value of 'eventType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventType($value)
    {
        return $this->set(self::EVENTTYPE, $value);
    }

    /**
     * Returns value of 'eventType' property
     *
     * @return integer
     */
    public function getEventType()
    {
        $value = $this->get(self::EVENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'eventType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventType()
    {
        return $this->get(self::EVENTTYPE) !== null;
    }

    /**
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTime()
    {
        return $this->get(self::TIME) !== null;
    }

    /**
     * Sets value of 'events' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEvents($value)
    {
        return $this->set(self::EVENTS, $value);
    }

    /**
     * Returns value of 'events' property
     *
     * @return string
     */
    public function getEvents()
    {
        $value = $this->get(self::EVENTS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'events' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEvents()
    {
        return $this->get(self::EVENTS) !== null;
    }
}
}