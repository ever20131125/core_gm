<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PKRecord message
 */
class PKRecord extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const MILLISECTIME = 2;
    const ATTACKERID = 3;
    const ATTACKERNAME = 4;
    const ATTACKERRANK = 5;
    const DEFENDERID = 6;
    const DEFENDERNAME = 7;
    const DEFENDERRANK = 8;
    const RESULT = 9;
    const ATTACKERRANK_AG = 10;
    const DEFENDERRANK_AG = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MILLISECTIME => array(
            'name' => 'milliSecTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ATTACKERID => array(
            'name' => 'attackerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ATTACKERNAME => array(
            'name' => 'attackerName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ATTACKERRANK => array(
            'name' => 'attackerRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEFENDERID => array(
            'name' => 'defenderID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEFENDERNAME => array(
            'name' => 'defenderName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEFENDERRANK => array(
            'name' => 'defenderRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ATTACKERRANK_AG => array(
            'name' => 'attackerRank_ag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEFENDERRANK_AG => array(
            'name' => 'defenderRank_ag',
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
        $this->values[self::MILLISECTIME] = null;
        $this->values[self::ATTACKERID] = null;
        $this->values[self::ATTACKERNAME] = null;
        $this->values[self::ATTACKERRANK] = null;
        $this->values[self::DEFENDERID] = null;
        $this->values[self::DEFENDERNAME] = null;
        $this->values[self::DEFENDERRANK] = null;
        $this->values[self::RESULT] = null;
        $this->values[self::ATTACKERRANK_AG] = null;
        $this->values[self::DEFENDERRANK_AG] = null;
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
     * Sets value of 'milliSecTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMilliSecTime($value)
    {
        return $this->set(self::MILLISECTIME, $value);
    }

    /**
     * Returns value of 'milliSecTime' property
     *
     * @return integer
     */
    public function getMilliSecTime()
    {
        $value = $this->get(self::MILLISECTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'milliSecTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMilliSecTime()
    {
        return $this->get(self::MILLISECTIME) !== null;
    }

    /**
     * Sets value of 'attackerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAttackerID($value)
    {
        return $this->set(self::ATTACKERID, $value);
    }

    /**
     * Returns value of 'attackerID' property
     *
     * @return integer
     */
    public function getAttackerID()
    {
        $value = $this->get(self::ATTACKERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'attackerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttackerID()
    {
        return $this->get(self::ATTACKERID) !== null;
    }

    /**
     * Sets value of 'attackerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAttackerName($value)
    {
        return $this->set(self::ATTACKERNAME, $value);
    }

    /**
     * Returns value of 'attackerName' property
     *
     * @return string
     */
    public function getAttackerName()
    {
        $value = $this->get(self::ATTACKERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'attackerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttackerName()
    {
        return $this->get(self::ATTACKERNAME) !== null;
    }

    /**
     * Sets value of 'attackerRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAttackerRank($value)
    {
        return $this->set(self::ATTACKERRANK, $value);
    }

    /**
     * Returns value of 'attackerRank' property
     *
     * @return integer
     */
    public function getAttackerRank()
    {
        $value = $this->get(self::ATTACKERRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'attackerRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttackerRank()
    {
        return $this->get(self::ATTACKERRANK) !== null;
    }

    /**
     * Sets value of 'defenderID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDefenderID($value)
    {
        return $this->set(self::DEFENDERID, $value);
    }

    /**
     * Returns value of 'defenderID' property
     *
     * @return integer
     */
    public function getDefenderID()
    {
        $value = $this->get(self::DEFENDERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'defenderID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefenderID()
    {
        return $this->get(self::DEFENDERID) !== null;
    }

    /**
     * Sets value of 'defenderName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDefenderName($value)
    {
        return $this->set(self::DEFENDERNAME, $value);
    }

    /**
     * Returns value of 'defenderName' property
     *
     * @return string
     */
    public function getDefenderName()
    {
        $value = $this->get(self::DEFENDERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'defenderName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefenderName()
    {
        return $this->get(self::DEFENDERNAME) !== null;
    }

    /**
     * Sets value of 'defenderRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDefenderRank($value)
    {
        return $this->set(self::DEFENDERRANK, $value);
    }

    /**
     * Returns value of 'defenderRank' property
     *
     * @return integer
     */
    public function getDefenderRank()
    {
        $value = $this->get(self::DEFENDERRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'defenderRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefenderRank()
    {
        return $this->get(self::DEFENDERRANK) !== null;
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
     * Sets value of 'attackerRank_ag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAttackerRankAg($value)
    {
        return $this->set(self::ATTACKERRANK_AG, $value);
    }

    /**
     * Returns value of 'attackerRank_ag' property
     *
     * @return integer
     */
    public function getAttackerRankAg()
    {
        $value = $this->get(self::ATTACKERRANK_AG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'attackerRank_ag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttackerRankAg()
    {
        return $this->get(self::ATTACKERRANK_AG) !== null;
    }

    /**
     * Sets value of 'defenderRank_ag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDefenderRankAg($value)
    {
        return $this->set(self::DEFENDERRANK_AG, $value);
    }

    /**
     * Returns value of 'defenderRank_ag' property
     *
     * @return integer
     */
    public function getDefenderRankAg()
    {
        $value = $this->get(self::DEFENDERRANK_AG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'defenderRank_ag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefenderRankAg()
    {
        return $this->get(self::DEFENDERRANK_AG) !== null;
    }
}
}