<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FeteRecordInfo message
 */
class FeteRecordInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ENEMYID = 1;
    const ENEMYSTAGE = 2;
    const RECORDTIME = 3;
    const CHANGESCORE = 4;
    const GAMERET = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENEMYID => array(
            'name' => 'enemyid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENEMYSTAGE => array(
            'name' => 'enemystage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECORDTIME => array(
            'name' => 'recordTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHANGESCORE => array(
            'name' => 'changeScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMERET => array(
            'name' => 'gameRet',
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
        $this->values[self::ENEMYID] = null;
        $this->values[self::ENEMYSTAGE] = null;
        $this->values[self::RECORDTIME] = null;
        $this->values[self::CHANGESCORE] = null;
        $this->values[self::GAMERET] = null;
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
     * Sets value of 'enemyid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnemyid($value)
    {
        return $this->set(self::ENEMYID, $value);
    }

    /**
     * Returns value of 'enemyid' property
     *
     * @return integer
     */
    public function getEnemyid()
    {
        $value = $this->get(self::ENEMYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'enemyid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnemyid()
    {
        return $this->get(self::ENEMYID) !== null;
    }

    /**
     * Sets value of 'enemystage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnemystage($value)
    {
        return $this->set(self::ENEMYSTAGE, $value);
    }

    /**
     * Returns value of 'enemystage' property
     *
     * @return integer
     */
    public function getEnemystage()
    {
        $value = $this->get(self::ENEMYSTAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'enemystage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnemystage()
    {
        return $this->get(self::ENEMYSTAGE) !== null;
    }

    /**
     * Sets value of 'recordTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecordTime($value)
    {
        return $this->set(self::RECORDTIME, $value);
    }

    /**
     * Returns value of 'recordTime' property
     *
     * @return integer
     */
    public function getRecordTime()
    {
        $value = $this->get(self::RECORDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recordTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecordTime()
    {
        return $this->get(self::RECORDTIME) !== null;
    }

    /**
     * Sets value of 'changeScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChangeScore($value)
    {
        return $this->set(self::CHANGESCORE, $value);
    }

    /**
     * Returns value of 'changeScore' property
     *
     * @return integer
     */
    public function getChangeScore()
    {
        $value = $this->get(self::CHANGESCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'changeScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChangeScore()
    {
        return $this->get(self::CHANGESCORE) !== null;
    }

    /**
     * Sets value of 'gameRet' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameRet($value)
    {
        return $this->set(self::GAMERET, $value);
    }

    /**
     * Returns value of 'gameRet' property
     *
     * @return integer
     */
    public function getGameRet()
    {
        $value = $this->get(self::GAMERET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameRet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameRet()
    {
        return $this->get(self::GAMERET) !== null;
    }
}
}