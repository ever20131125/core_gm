<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MusicScoreRankInfo message
 */
class MusicScoreRankInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NMAXSCORE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXSCORE => array(
            'name' => 'nMaxScore',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NMAXSCORE] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nMaxScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxScore($value)
    {
        return $this->set(self::NMAXSCORE, $value);
    }

    /**
     * Returns value of 'nMaxScore' property
     *
     * @return integer
     */
    public function getNMaxScore()
    {
        $value = $this->get(self::NMAXSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxScore()
    {
        return $this->get(self::NMAXSCORE) !== null;
    }
}
}