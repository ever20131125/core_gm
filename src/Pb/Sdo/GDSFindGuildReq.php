<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSFindGuildReq message
 */
class GDSFindGuildReq extends \ProtobufMessage
{
    /* Field index constants */
    const FINDTYPE = 1;
    const GUILDID = 2;
    const GUILDNAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FINDTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FindType::enmFindType_None,
            'name' => 'findType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDNAME => array(
            'name' => 'guildName',
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
        $this->values[self::FINDTYPE] = self::$fields[self::FINDTYPE]['default'];
        $this->values[self::GUILDID] = null;
        $this->values[self::GUILDNAME] = null;
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
     * Sets value of 'findType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFindType($value)
    {
        return $this->set(self::FINDTYPE, $value);
    }

    /**
     * Returns value of 'findType' property
     *
     * @return integer
     */
    public function getFindType()
    {
        $value = $this->get(self::FINDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'findType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFindType()
    {
        return $this->get(self::FINDTYPE) !== null;
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
     * Sets value of 'guildName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuildName($value)
    {
        return $this->set(self::GUILDNAME, $value);
    }

    /**
     * Returns value of 'guildName' property
     *
     * @return string
     */
    public function getGuildName()
    {
        $value = $this->get(self::GUILDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guildName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildName()
    {
        return $this->get(self::GUILDNAME) !== null;
    }
}
}