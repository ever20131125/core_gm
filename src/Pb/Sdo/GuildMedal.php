<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildMedal message
 */
class GuildMedal extends \ProtobufMessage
{
    /* Field index constants */
    const NGUILDID = 1;
    const NMEDALID = 2;
    const MEDALTYPE = 3;
    const NSOURCEID = 4;
    const SZSOURCEURL = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGUILDID => array(
            'name' => 'nGuildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMEDALID => array(
            'name' => 'nMedalID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDALTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildMedalType::enmGuildMedalType_None,
            'name' => 'MedalType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSOURCEID => array(
            'name' => 'nSourceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZSOURCEURL => array(
            'name' => 'szSourceURL',
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
        $this->values[self::NGUILDID] = null;
        $this->values[self::NMEDALID] = null;
        $this->values[self::MEDALTYPE] = self::$fields[self::MEDALTYPE]['default'];
        $this->values[self::NSOURCEID] = null;
        $this->values[self::SZSOURCEURL] = null;
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
     * Sets value of 'nGuildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuildID($value)
    {
        return $this->set(self::NGUILDID, $value);
    }

    /**
     * Returns value of 'nGuildID' property
     *
     * @return integer
     */
    public function getNGuildID()
    {
        $value = $this->get(self::NGUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuildID()
    {
        return $this->get(self::NGUILDID) !== null;
    }

    /**
     * Sets value of 'nMedalID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMedalID($value)
    {
        return $this->set(self::NMEDALID, $value);
    }

    /**
     * Returns value of 'nMedalID' property
     *
     * @return integer
     */
    public function getNMedalID()
    {
        $value = $this->get(self::NMEDALID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMedalID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMedalID()
    {
        return $this->get(self::NMEDALID) !== null;
    }

    /**
     * Sets value of 'MedalType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMedalType($value)
    {
        return $this->set(self::MEDALTYPE, $value);
    }

    /**
     * Returns value of 'MedalType' property
     *
     * @return integer
     */
    public function getMedalType()
    {
        $value = $this->get(self::MEDALTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'MedalType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedalType()
    {
        return $this->get(self::MEDALTYPE) !== null;
    }

    /**
     * Sets value of 'nSourceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSourceID($value)
    {
        return $this->set(self::NSOURCEID, $value);
    }

    /**
     * Returns value of 'nSourceID' property
     *
     * @return integer
     */
    public function getNSourceID()
    {
        $value = $this->get(self::NSOURCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSourceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSourceID()
    {
        return $this->get(self::NSOURCEID) !== null;
    }

    /**
     * Sets value of 'szSourceURL' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzSourceURL($value)
    {
        return $this->set(self::SZSOURCEURL, $value);
    }

    /**
     * Returns value of 'szSourceURL' property
     *
     * @return string
     */
    public function getSzSourceURL()
    {
        $value = $this->get(self::SZSOURCEURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szSourceURL' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzSourceURL()
    {
        return $this->get(self::SZSOURCEURL) !== null;
    }
}
}