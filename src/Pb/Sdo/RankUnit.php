<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankUnit message
 */
class RankUnit extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const RANK = 2;
    const KEY1 = 3;
    const KEY2 = 4;
    const KEY3 = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANK => array(
            'name' => 'rank',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::RANK] = null;
        $this->values[self::KEY1] = null;
        $this->values[self::KEY2] = null;
        $this->values[self::KEY3] = null;
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
     * Sets value of 'rank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRank($value)
    {
        return $this->set(self::RANK, $value);
    }

    /**
     * Returns value of 'rank' property
     *
     * @return integer
     */
    public function getRank()
    {
        $value = $this->get(self::RANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRank()
    {
        return $this->get(self::RANK) !== null;
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
}
}