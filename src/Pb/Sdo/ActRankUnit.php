<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActRankUnit message
 */
class ActRankUnit extends \ProtobufMessage
{
    /* Field index constants */
    const ACTID = 1;
    const CURRANK = 2;
    const LASTRANK = 3;
    const ROLEID = 4;
    const VALUE1 = 5;
    const VALUE2 = 6;
    const VALUE3 = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRANK => array(
            'name' => 'curRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTRANK => array(
            'name' => 'lastRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE1 => array(
            'name' => 'value1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE2 => array(
            'name' => 'value2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE3 => array(
            'name' => 'value3',
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
        $this->values[self::ACTID] = null;
        $this->values[self::CURRANK] = null;
        $this->values[self::LASTRANK] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::VALUE1] = null;
        $this->values[self::VALUE2] = null;
        $this->values[self::VALUE3] = null;
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
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
    }

    /**
     * Sets value of 'curRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurRank($value)
    {
        return $this->set(self::CURRANK, $value);
    }

    /**
     * Returns value of 'curRank' property
     *
     * @return integer
     */
    public function getCurRank()
    {
        $value = $this->get(self::CURRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurRank()
    {
        return $this->get(self::CURRANK) !== null;
    }

    /**
     * Sets value of 'lastRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRank($value)
    {
        return $this->set(self::LASTRANK, $value);
    }

    /**
     * Returns value of 'lastRank' property
     *
     * @return integer
     */
    public function getLastRank()
    {
        $value = $this->get(self::LASTRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastRank()
    {
        return $this->get(self::LASTRANK) !== null;
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
     * Sets value of 'value1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValue1($value)
    {
        return $this->set(self::VALUE1, $value);
    }

    /**
     * Returns value of 'value1' property
     *
     * @return integer
     */
    public function getValue1()
    {
        $value = $this->get(self::VALUE1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'value1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue1()
    {
        return $this->get(self::VALUE1) !== null;
    }

    /**
     * Sets value of 'value2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValue2($value)
    {
        return $this->set(self::VALUE2, $value);
    }

    /**
     * Returns value of 'value2' property
     *
     * @return integer
     */
    public function getValue2()
    {
        $value = $this->get(self::VALUE2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'value2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue2()
    {
        return $this->get(self::VALUE2) !== null;
    }

    /**
     * Sets value of 'value3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValue3($value)
    {
        return $this->set(self::VALUE3, $value);
    }

    /**
     * Returns value of 'value3' property
     *
     * @return integer
     */
    public function getValue3()
    {
        $value = $this->get(self::VALUE3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'value3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue3()
    {
        return $this->get(self::VALUE3) !== null;
    }
}
}