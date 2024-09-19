<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GardenMessage message
 */
class GardenMessage extends \ProtobufMessage
{
    /* Field index constants */
    const SERIALNUM = 1;
    const TIME = 2;
    const FROMID = 3;
    const TOID = 4;
    const CONTENT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERIALNUM => array(
            'name' => 'serialNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROMID => array(
            'name' => 'fromId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOID => array(
            'name' => 'toId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
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
        $this->values[self::SERIALNUM] = null;
        $this->values[self::TIME] = null;
        $this->values[self::FROMID] = null;
        $this->values[self::TOID] = null;
        $this->values[self::CONTENT] = null;
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
     * Sets value of 'serialNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSerialNum($value)
    {
        return $this->set(self::SERIALNUM, $value);
    }

    /**
     * Returns value of 'serialNum' property
     *
     * @return integer
     */
    public function getSerialNum()
    {
        $value = $this->get(self::SERIALNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'serialNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSerialNum()
    {
        return $this->get(self::SERIALNUM) !== null;
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
     * Sets value of 'fromId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFromId($value)
    {
        return $this->set(self::FROMID, $value);
    }

    /**
     * Returns value of 'fromId' property
     *
     * @return integer
     */
    public function getFromId()
    {
        $value = $this->get(self::FROMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fromId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromId()
    {
        return $this->get(self::FROMID) !== null;
    }

    /**
     * Sets value of 'toId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setToId($value)
    {
        return $this->set(self::TOID, $value);
    }

    /**
     * Returns value of 'toId' property
     *
     * @return integer
     */
    public function getToId()
    {
        $value = $this->get(self::TOID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'toId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToId()
    {
        return $this->get(self::TOID) !== null;
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
    }
}
}