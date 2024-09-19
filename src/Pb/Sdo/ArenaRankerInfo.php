<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ArenaRankerInfo message
 */
class ArenaRankerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const PLAYERTYPE = 2;
    const RANK = 3;
    const IFCOULDCHALLENGE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLAYERTYPE => array(
            'name' => 'playerType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IFCOULDCHALLENGE => array(
            'name' => 'ifCouldChallenge',
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
        $this->values[self::PLAYERTYPE] = null;
        $this->values[self::RANK] = null;
        $this->values[self::IFCOULDCHALLENGE] = null;
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
     * Sets value of 'ifCouldChallenge' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIfCouldChallenge($value)
    {
        return $this->set(self::IFCOULDCHALLENGE, $value);
    }

    /**
     * Returns value of 'ifCouldChallenge' property
     *
     * @return integer
     */
    public function getIfCouldChallenge()
    {
        $value = $this->get(self::IFCOULDCHALLENGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ifCouldChallenge' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIfCouldChallenge()
    {
        return $this->get(self::IFCOULDCHALLENGE) !== null;
    }
}
}