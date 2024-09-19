<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MusicInfo message
 */
class MusicInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NMUSICID = 1;
    const BISLIKE = 2;
    const CUPINFO = 3;
    const NPLAYCOUNT = 4;
    const NMAXSCORE = 5;
    const NMAXCOMBO = 6;
    const NMAXGRADE = 7;
    const NMAXACCURACY = 8;
    const BISALLCOMBO = 9;
    const BALLPERFECT = 10;
    const BALLSPERFECT = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BISLIKE => array(
            'name' => 'bIsLike',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::CUPINFO => array(
            'name' => 'cupInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CupInfo'
        ),
        self::NPLAYCOUNT => array(
            'name' => 'nPlayCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXSCORE => array(
            'name' => 'nMaxScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXCOMBO => array(
            'name' => 'nMaxCombo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXGRADE => array(
            'default' => \Xnhd\Core\Pb\Sdo\DanceGrade::enmDanceGrade_E,
            'name' => 'nMaxGrade',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXACCURACY => array(
            'name' => 'nMaxAccuracy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BISALLCOMBO => array(
            'name' => 'bIsAllCombo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BALLPERFECT => array(
            'name' => 'bAllPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BALLSPERFECT => array(
            'name' => 'bAllSPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NMUSICID] = null;
        $this->values[self::BISLIKE] = null;
        $this->values[self::CUPINFO] = null;
        $this->values[self::NPLAYCOUNT] = null;
        $this->values[self::NMAXSCORE] = null;
        $this->values[self::NMAXCOMBO] = null;
        $this->values[self::NMAXGRADE] = self::$fields[self::NMAXGRADE]['default'];
        $this->values[self::NMAXACCURACY] = null;
        $this->values[self::BISALLCOMBO] = null;
        $this->values[self::BALLPERFECT] = null;
        $this->values[self::BALLSPERFECT] = null;
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
     * Sets value of 'nMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicID($value)
    {
        return $this->set(self::NMUSICID, $value);
    }

    /**
     * Returns value of 'nMusicID' property
     *
     * @return integer
     */
    public function getNMusicID()
    {
        $value = $this->get(self::NMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicID()
    {
        return $this->get(self::NMUSICID) !== null;
    }

    /**
     * Sets value of 'bIsLike' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBIsLike($value)
    {
        return $this->set(self::BISLIKE, $value);
    }

    /**
     * Returns value of 'bIsLike' property
     *
     * @return boolean
     */
    public function getBIsLike()
    {
        $value = $this->get(self::BISLIKE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bIsLike' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBIsLike()
    {
        return $this->get(self::BISLIKE) !== null;
    }

    /**
     * Sets value of 'cupInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CupInfo $value Property value
     *
     * @return null
     */
    public function setCupInfo(\Xnhd\Core\Pb\Sdo\CupInfo $value=null)
    {
        return $this->set(self::CUPINFO, $value);
    }

    /**
     * Returns value of 'cupInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CupInfo
     */
    public function getCupInfo()
    {
        return $this->get(self::CUPINFO);
    }

    /**
     * Returns true if 'cupInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCupInfo()
    {
        return $this->get(self::CUPINFO) !== null;
    }

    /**
     * Sets value of 'nPlayCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlayCount($value)
    {
        return $this->set(self::NPLAYCOUNT, $value);
    }

    /**
     * Returns value of 'nPlayCount' property
     *
     * @return integer
     */
    public function getNPlayCount()
    {
        $value = $this->get(self::NPLAYCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlayCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlayCount()
    {
        return $this->get(self::NPLAYCOUNT) !== null;
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

    /**
     * Sets value of 'nMaxCombo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxCombo($value)
    {
        return $this->set(self::NMAXCOMBO, $value);
    }

    /**
     * Returns value of 'nMaxCombo' property
     *
     * @return integer
     */
    public function getNMaxCombo()
    {
        $value = $this->get(self::NMAXCOMBO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxCombo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxCombo()
    {
        return $this->get(self::NMAXCOMBO) !== null;
    }

    /**
     * Sets value of 'nMaxGrade' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxGrade($value)
    {
        return $this->set(self::NMAXGRADE, $value);
    }

    /**
     * Returns value of 'nMaxGrade' property
     *
     * @return integer
     */
    public function getNMaxGrade()
    {
        $value = $this->get(self::NMAXGRADE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxGrade' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxGrade()
    {
        return $this->get(self::NMAXGRADE) !== null;
    }

    /**
     * Sets value of 'nMaxAccuracy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxAccuracy($value)
    {
        return $this->set(self::NMAXACCURACY, $value);
    }

    /**
     * Returns value of 'nMaxAccuracy' property
     *
     * @return integer
     */
    public function getNMaxAccuracy()
    {
        $value = $this->get(self::NMAXACCURACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxAccuracy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxAccuracy()
    {
        return $this->get(self::NMAXACCURACY) !== null;
    }

    /**
     * Sets value of 'bIsAllCombo' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBIsAllCombo($value)
    {
        return $this->set(self::BISALLCOMBO, $value);
    }

    /**
     * Returns value of 'bIsAllCombo' property
     *
     * @return boolean
     */
    public function getBIsAllCombo()
    {
        $value = $this->get(self::BISALLCOMBO);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bIsAllCombo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBIsAllCombo()
    {
        return $this->get(self::BISALLCOMBO) !== null;
    }

    /**
     * Sets value of 'bAllPerfect' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBAllPerfect($value)
    {
        return $this->set(self::BALLPERFECT, $value);
    }

    /**
     * Returns value of 'bAllPerfect' property
     *
     * @return boolean
     */
    public function getBAllPerfect()
    {
        $value = $this->get(self::BALLPERFECT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bAllPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAllPerfect()
    {
        return $this->get(self::BALLPERFECT) !== null;
    }

    /**
     * Sets value of 'bAllSPerfect' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBAllSPerfect($value)
    {
        return $this->set(self::BALLSPERFECT, $value);
    }

    /**
     * Returns value of 'bAllSPerfect' property
     *
     * @return boolean
     */
    public function getBAllSPerfect()
    {
        $value = $this->get(self::BALLSPERFECT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bAllSPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAllSPerfect()
    {
        return $this->get(self::BALLSPERFECT) !== null;
    }
}
}