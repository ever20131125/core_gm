<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ArenaRecord message
 */
class ArenaRecord extends \ProtobufMessage
{
    /* Field index constants */
    const AIMID = 1;
    const PLAYERTYPE = 2;
    const TIMESTAMP = 3;
    const RESULT = 4;
    const RANKCHANGE = 5;
    const AIMRANK = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AIMID => array(
            'name' => 'aimid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLAYERTYPE => array(
            'name' => 'playerType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKCHANGE => array(
            'name' => 'rankChange',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AIMRANK => array(
            'name' => 'aimRank',
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
        $this->values[self::AIMID] = null;
        $this->values[self::PLAYERTYPE] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::RESULT] = null;
        $this->values[self::RANKCHANGE] = null;
        $this->values[self::AIMRANK] = null;
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
     * Sets value of 'aimid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAimid($value)
    {
        return $this->set(self::AIMID, $value);
    }

    /**
     * Returns value of 'aimid' property
     *
     * @return integer
     */
    public function getAimid()
    {
        $value = $this->get(self::AIMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'aimid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAimid()
    {
        return $this->get(self::AIMID) !== null;
    }

    /**
     * Sets value of 'playerType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlayerType($value)
    {
        return $this->set(self::PLAYERTYPE, $value);
    }

    /**
     * Returns value of 'playerType' property
     *
     * @return integer
     */
    public function getPlayerType()
    {
        $value = $this->get(self::PLAYERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'playerType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlayerType()
    {
        return $this->get(self::PLAYERTYPE) !== null;
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestamp()
    {
        return $this->get(self::TIMESTAMP) !== null;
    }

    /**
     * Sets value of 'result' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return integer
     */
    public function getResult()
    {
        $value = $this->get(self::RESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'result' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResult()
    {
        return $this->get(self::RESULT) !== null;
    }

    /**
     * Sets value of 'rankChange' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankChange($value)
    {
        return $this->set(self::RANKCHANGE, $value);
    }

    /**
     * Returns value of 'rankChange' property
     *
     * @return integer
     */
    public function getRankChange()
    {
        $value = $this->get(self::RANKCHANGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankChange' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankChange()
    {
        return $this->get(self::RANKCHANGE) !== null;
    }

    /**
     * Sets value of 'aimRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAimRank($value)
    {
        return $this->set(self::AIMRANK, $value);
    }

    /**
     * Returns value of 'aimRank' property
     *
     * @return integer
     */
    public function getAimRank()
    {
        $value = $this->get(self::AIMRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'aimRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAimRank()
    {
        return $this->get(self::AIMRANK) !== null;
    }
}
}