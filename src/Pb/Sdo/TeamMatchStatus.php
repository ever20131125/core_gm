<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TeamMatchStatus message
 */
class TeamMatchStatus extends \ProtobufMessage
{
    /* Field index constants */
    const TEAM = 1;
    const NSCORE = 2;
    const NREALSCORE = 3;
    const NRANK = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NREALSCORE => array(
            'name' => 'nRealScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANK => array(
            'name' => 'nRank',
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
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::NSCORE] = null;
        $this->values[self::NREALSCORE] = null;
        $this->values[self::NRANK] = null;
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
     * Sets value of 'team' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTeam($value)
    {
        return $this->set(self::TEAM, $value);
    }

    /**
     * Returns value of 'team' property
     *
     * @return integer
     */
    public function getTeam()
    {
        $value = $this->get(self::TEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'team' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTeam()
    {
        return $this->get(self::TEAM) !== null;
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'nRealScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRealScore($value)
    {
        return $this->set(self::NREALSCORE, $value);
    }

    /**
     * Returns value of 'nRealScore' property
     *
     * @return integer
     */
    public function getNRealScore()
    {
        $value = $this->get(self::NREALSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRealScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRealScore()
    {
        return $this->get(self::NREALSCORE) !== null;
    }

    /**
     * Sets value of 'nRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRank($value)
    {
        return $this->set(self::NRANK, $value);
    }

    /**
     * Returns value of 'nRank' property
     *
     * @return integer
     */
    public function getNRank()
    {
        $value = $this->get(self::NRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRank()
    {
        return $this->get(self::NRANK) !== null;
    }
}
}