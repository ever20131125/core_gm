<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SocialRecord message
 */
class SocialRecord extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const STRRECORD = 2;
    const TIME = 3;
    const LISTID = 4;
    const STATE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'iD',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRRECORD => array(
            'name' => 'strRecord',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LISTID => array(
            'name' => 'listID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
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
        $this->values[self::ID] = null;
        $this->values[self::STRRECORD] = null;
        $this->values[self::TIME] = null;
        $this->values[self::LISTID] = null;
        $this->values[self::STATE] = null;
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
     * Sets value of 'iD' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setID($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'iD' property
     *
     * @return integer
     */
    public function getID()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'iD' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasID()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'strRecord' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStrRecord($value)
    {
        return $this->set(self::STRRECORD, $value);
    }

    /**
     * Returns value of 'strRecord' property
     *
     * @return string
     */
    public function getStrRecord()
    {
        $value = $this->get(self::STRRECORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'strRecord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrRecord()
    {
        return $this->get(self::STRRECORD) !== null;
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
     * Sets value of 'listID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setListID($value)
    {
        return $this->set(self::LISTID, $value);
    }

    /**
     * Returns value of 'listID' property
     *
     * @return integer
     */
    public function getListID()
    {
        $value = $this->get(self::LISTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'listID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasListID()
    {
        return $this->get(self::LISTID) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }
}
}