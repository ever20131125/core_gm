<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGMDissolveGuildReq message
 */
class GDSGMDissolveGuildReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZGUILDNAME = 1;
    const SZTITLE = 2;
    const SZREASON = 3;
    const NMANAGETYPE = 4;
    const SZMAILCONTENT = 5;
    const SZOPRERATOR = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZGUILDNAME => array(
            'name' => 'szGuildName',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::SZGUILDNAME] = array();
        $this->values[self::SZTITLE] = null;
        $this->values[self::SZREASON] = null;
        $this->values[self::NMANAGETYPE] = null;
        $this->values[self::SZMAILCONTENT] = null;
        $this->values[self::SZOPRERATOR] = null;
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
     * Appends value to 'szGuildName' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSzGuildName($value)
    {
        return $this->append(self::SZGUILDNAME, $value);
    }

    /**
     * Clears 'szGuildName' list
     *
     * @return null
     */
    public function clearSzGuildName()
    {
        return $this->clear(self::SZGUILDNAME);
    }

    /**
     * Returns 'szGuildName' list
     *
     * @return string[]
     */
    public function getSzGuildName()
    {
        return $this->get(self::SZGUILDNAME);
    }

    /**
     * Returns true if 'szGuildName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzGuildName()
    {
        return count($this->get(self::SZGUILDNAME)) !== 0;
    }

    /**
     * Returns 'szGuildName' iterator
     *
     * @return \ArrayIterator
     */
    public function getSzGuildNameIterator()
    {
        return new \ArrayIterator($this->get(self::SZGUILDNAME));
    }

    /**
     * Returns element from 'szGuildName' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSzGuildNameAt($offset)
    {
        return $this->get(self::SZGUILDNAME, $offset);
    }

    /**
     * Returns count of 'szGuildName' list
     *
     * @return int
     */
    public function getSzGuildNameCount()
    {
        return $this->count(self::SZGUILDNAME);
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
}
}