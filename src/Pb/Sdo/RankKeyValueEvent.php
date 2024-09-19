<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankKeyValueEvent message
 */
class RankKeyValueEvent extends \ProtobufMessage
{
    /* Field index constants */
    const RANKTYPE = 1;
    const ROLEID = 2;
    const KEY1 = 3;
    const KEY2 = 4;
    const KEY3 = 5;
    const MUSICID = 6;
    const KEY4 = 7;
    const KEY5 = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RANKTYPE => array(
            'name' => 'rankType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY1 => array(
            'name' => 'key1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY2 => array(
            'name' => 'key2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY3 => array(
            'name' => 'key3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MUSICID => array(
            'name' => 'musicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY4 => array(
            'name' => 'key4',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY5 => array(
            'name' => 'key5',
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
        $this->values[self::RANKTYPE] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::KEY1] = null;
        $this->values[self::KEY2] = null;
        $this->values[self::KEY3] = null;
        $this->values[self::MUSICID] = null;
        $this->values[self::KEY4] = null;
        $this->values[self::KEY5] = null;
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
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }

    /**
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'key1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKey1($value)
    {
        return $this->set(self::KEY1, $value);
    }

    /**
     * Returns value of 'key1' property
     *
     * @return integer
     */
    public function getKey1()
    {
        $value = $this->get(self::KEY1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'key1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey1()
    {
        return $this->get(self::KEY1) !== null;
    }

    /**
     * Sets value of 'key2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKey2($value)
    {
        return $this->set(self::KEY2, $value);
    }

    /**
     * Returns value of 'key2' property
     *
     * @return integer
     */
    public function getKey2()
    {
        $value = $this->get(self::KEY2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'key2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey2()
    {
        return $this->get(self::KEY2) !== null;
    }

    /**
     * Sets value of 'key3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKey3($value)
    {
        return $this->set(self::KEY3, $value);
    }

    /**
     * Returns value of 'key3' property
     *
     * @return integer
     */
    public function getKey3()
    {
        $value = $this->get(self::KEY3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'key3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey3()
    {
        return $this->get(self::KEY3) !== null;
    }

    /**
     * Sets value of 'musicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMusicID($value)
    {
        return $this->set(self::MUSICID, $value);
    }

    /**
     * Returns value of 'musicID' property
     *
     * @return integer
     */
    public function getMusicID()
    {
        $value = $this->get(self::MUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'musicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMusicID()
    {
        return $this->get(self::MUSICID) !== null;
    }

    /**
     * Sets value of 'key4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKey4($value)
    {
        return $this->set(self::KEY4, $value);
    }

    /**
     * Returns value of 'key4' property
     *
     * @return integer
     */
    public function getKey4()
    {
        $value = $this->get(self::KEY4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'key4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey4()
    {
        return $this->get(self::KEY4) !== null;
    }

    /**
     * Sets value of 'key5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKey5($value)
    {
        return $this->set(self::KEY5, $value);
    }

    /**
     * Returns value of 'key5' property
     *
     * @return integer
     */
    public function getKey5()
    {
        $value = $this->get(self::KEY5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'key5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey5()
    {
        return $this->get(self::KEY5) !== null;
    }
}
}