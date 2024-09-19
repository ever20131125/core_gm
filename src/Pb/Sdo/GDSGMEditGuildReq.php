<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGMEditGuildReq message
 */
class GDSGMEditGuildReq extends \ProtobufMessage
{
    /* Field index constants */
    const NGUILDID = 1;
    const NTYPE = 2;
    const SZCONTENT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGUILDID => array(
            'name' => 'nGuildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTYPE => array(
            'name' => 'nType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCONTENT => array(
            'name' => 'szContent',
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
        $this->values[self::NTYPE] = null;
        $this->values[self::SZCONTENT] = null;
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
     * Sets value of 'nType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return integer
     */
    public function getNType()
    {
        $value = $this->get(self::NTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return $this->get(self::NTYPE) !== null;
    }

    /**
     * Sets value of 'szContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzContent($value)
    {
        return $this->set(self::SZCONTENT, $value);
    }

    /**
     * Returns value of 'szContent' property
     *
     * @return string
     */
    public function getSzContent()
    {
        $value = $this->get(self::SZCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzContent()
    {
        return $this->get(self::SZCONTENT) !== null;
    }
}
}