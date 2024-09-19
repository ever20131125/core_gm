<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildManage message
 */
class GuildManage extends \ProtobufMessage
{
    /* Field index constants */
    const NGUILDID = 1;
    const SZTITLE = 2;
    const SZREASON = 3;
    const NMANAGETYPE = 4;
    const SZMAILCONTENT = 5;
    const SZOPRERATOR = 6;
    const NMANAGEID = 7;
    const SZGUILDNAME = 8;
    const NOPRERATETIME = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGUILDID => array(
            'name' => 'nGuildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZTITLE => array(
            'name' => 'szTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZREASON => array(
            'name' => 'szReason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NMANAGETYPE => array(
            'name' => 'nManageType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZMAILCONTENT => array(
            'name' => 'szMailContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZOPRERATOR => array(
            'name' => 'szOprerator',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NMANAGEID => array(
            'name' => 'nManageID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZGUILDNAME => array(
            'name' => 'szGuildName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOPRERATETIME => array(
            'name' => 'nOprerateTime',
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
        $this->values[self::SZTITLE] = null;
        $this->values[self::SZREASON] = null;
        $this->values[self::NMANAGETYPE] = null;
        $this->values[self::SZMAILCONTENT] = null;
        $this->values[self::SZOPRERATOR] = null;
        $this->values[self::NMANAGEID] = null;
        $this->values[self::SZGUILDNAME] = null;
        $this->values[self::NOPRERATETIME] = null;
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
     * Sets value of 'szTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTitle($value)
    {
        return $this->set(self::SZTITLE, $value);
    }

    /**
     * Returns value of 'szTitle' property
     *
     * @return string
     */
    public function getSzTitle()
    {
        $value = $this->get(self::SZTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTitle()
    {
        return $this->get(self::SZTITLE) !== null;
    }

    /**
     * Sets value of 'szReason' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzReason($value)
    {
        return $this->set(self::SZREASON, $value);
    }

    /**
     * Returns value of 'szReason' property
     *
     * @return string
     */
    public function getSzReason()
    {
        $value = $this->get(self::SZREASON);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szReason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzReason()
    {
        return $this->get(self::SZREASON) !== null;
    }

    /**
     * Sets value of 'nManageType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNManageType($value)
    {
        return $this->set(self::NMANAGETYPE, $value);
    }

    /**
     * Returns value of 'nManageType' property
     *
     * @return integer
     */
    public function getNManageType()
    {
        $value = $this->get(self::NMANAGETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nManageType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNManageType()
    {
        return $this->get(self::NMANAGETYPE) !== null;
    }

    /**
     * Sets value of 'szMailContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMailContent($value)
    {
        return $this->set(self::SZMAILCONTENT, $value);
    }

    /**
     * Returns value of 'szMailContent' property
     *
     * @return string
     */
    public function getSzMailContent()
    {
        $value = $this->get(self::SZMAILCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMailContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMailContent()
    {
        return $this->get(self::SZMAILCONTENT) !== null;
    }

    /**
     * Sets value of 'szOprerator' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOprerator($value)
    {
        return $this->set(self::SZOPRERATOR, $value);
    }

    /**
     * Returns value of 'szOprerator' property
     *
     * @return string
     */
    public function getSzOprerator()
    {
        $value = $this->get(self::SZOPRERATOR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOprerator' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOprerator()
    {
        return $this->get(self::SZOPRERATOR) !== null;
    }

    /**
     * Sets value of 'nManageID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNManageID($value)
    {
        return $this->set(self::NMANAGEID, $value);
    }

    /**
     * Returns value of 'nManageID' property
     *
     * @return integer
     */
    public function getNManageID()
    {
        $value = $this->get(self::NMANAGEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nManageID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNManageID()
    {
        return $this->get(self::NMANAGEID) !== null;
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
     * Sets value of 'nOprerateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOprerateTime($value)
    {
        return $this->set(self::NOPRERATETIME, $value);
    }

    /**
     * Returns value of 'nOprerateTime' property
     *
     * @return integer
     */
    public function getNOprerateTime()
    {
        $value = $this->get(self::NOPRERATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOprerateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOprerateTime()
    {
        return $this->get(self::NOPRERATETIME) !== null;
    }
}
}