<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleGuildInfo message
 */
class RoleGuildInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NGUILDID = 1;
    const SZGUILDNAME = 2;
    const NGUILDLEVEL = 3;
    const NGUILDMALLLEVEL = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGUILDID => array(
            'name' => 'nGuildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZGUILDNAME => array(
            'name' => 'szGuildName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NGUILDLEVEL => array(
            'name' => 'nGuildLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGUILDMALLLEVEL => array(
            'name' => 'nGuildMallLevel',
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
        $this->values[self::NGUILDID] = null;
        $this->values[self::SZGUILDNAME] = null;
        $this->values[self::NGUILDLEVEL] = null;
        $this->values[self::NGUILDMALLLEVEL] = null;
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
     * Sets value of 'szGuildName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzGuildName($value)
    {
        return $this->set(self::SZGUILDNAME, $value);
    }

    /**
     * Returns value of 'szGuildName' property
     *
     * @return string
     */
    public function getSzGuildName()
    {
        $value = $this->get(self::SZGUILDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szGuildName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzGuildName()
    {
        return $this->get(self::SZGUILDNAME) !== null;
    }

    /**
     * Sets value of 'nGuildLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuildLevel($value)
    {
        return $this->set(self::NGUILDLEVEL, $value);
    }

    /**
     * Returns value of 'nGuildLevel' property
     *
     * @return integer
     */
    public function getNGuildLevel()
    {
        $value = $this->get(self::NGUILDLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuildLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuildLevel()
    {
        return $this->get(self::NGUILDLEVEL) !== null;
    }

    /**
     * Sets value of 'nGuildMallLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuildMallLevel($value)
    {
        return $this->set(self::NGUILDMALLLEVEL, $value);
    }

    /**
     * Returns value of 'nGuildMallLevel' property
     *
     * @return integer
     */
    public function getNGuildMallLevel()
    {
        $value = $this->get(self::NGUILDMALLLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuildMallLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuildMallLevel()
    {
        return $this->get(self::NGUILDMALLLEVEL) !== null;
    }
}
}