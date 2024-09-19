<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChannelStatus message
 */
class ChannelStatus extends \ProtobufMessage
{
    /* Field index constants */
    const NCHANNELID = 1;
    const SZCHANNELNAME = 2;
    const NCURPLAYERCOUNT = 3;
    const NMAXPLAYERCOUNT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCHANNELID => array(
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCHANNELNAME => array(
            'name' => 'szChannelName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NCURPLAYERCOUNT => array(
            'name' => 'nCurPlayerCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXPLAYERCOUNT => array(
            'name' => 'nMaxPlayerCount',
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
        $this->values[self::NCHANNELID] = null;
        $this->values[self::SZCHANNELNAME] = null;
        $this->values[self::NCURPLAYERCOUNT] = null;
        $this->values[self::NMAXPLAYERCOUNT] = null;
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
     * Sets value of 'nChannelID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChannelID($value)
    {
        return $this->set(self::NCHANNELID, $value);
    }

    /**
     * Returns value of 'nChannelID' property
     *
     * @return integer
     */
    public function getNChannelID()
    {
        $value = $this->get(self::NCHANNELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChannelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChannelID()
    {
        return $this->get(self::NCHANNELID) !== null;
    }

    /**
     * Sets value of 'szChannelName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzChannelName($value)
    {
        return $this->set(self::SZCHANNELNAME, $value);
    }

    /**
     * Returns value of 'szChannelName' property
     *
     * @return string
     */
    public function getSzChannelName()
    {
        $value = $this->get(self::SZCHANNELNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szChannelName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzChannelName()
    {
        return $this->get(self::SZCHANNELNAME) !== null;
    }

    /**
     * Sets value of 'nCurPlayerCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurPlayerCount($value)
    {
        return $this->set(self::NCURPLAYERCOUNT, $value);
    }

    /**
     * Returns value of 'nCurPlayerCount' property
     *
     * @return integer
     */
    public function getNCurPlayerCount()
    {
        $value = $this->get(self::NCURPLAYERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurPlayerCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurPlayerCount()
    {
        return $this->get(self::NCURPLAYERCOUNT) !== null;
    }

    /**
     * Sets value of 'nMaxPlayerCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxPlayerCount($value)
    {
        return $this->set(self::NMAXPLAYERCOUNT, $value);
    }

    /**
     * Returns value of 'nMaxPlayerCount' property
     *
     * @return integer
     */
    public function getNMaxPlayerCount()
    {
        $value = $this->get(self::NMAXPLAYERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxPlayerCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxPlayerCount()
    {
        return $this->get(self::NMAXPLAYERCOUNT) !== null;
    }
}
}