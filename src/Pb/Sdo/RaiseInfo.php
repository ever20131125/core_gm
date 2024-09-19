<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RaiseInfo message
 */
class RaiseInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTARGETID = 2;
    const NRAISEID = 3;
    const NRAISELV = 4;
    const NRAISEEXP = 5;
    const NTHEMERAISELV = 6;
    const NTHEMERAISEEXP = 7;
    const STRNAME = 8;
    const NREWARDLV = 9;
    const NDAYRAISE = 10;
    const NDAYRAISELIMIT = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRAISEID => array(
            'name' => 'nRaiseID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRAISELV => array(
            'name' => 'nRaiseLv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRAISEEXP => array(
            'name' => 'nRaiseExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEMERAISELV => array(
            'name' => 'nThemeRaiseLv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEMERAISEEXP => array(
            'name' => 'nThemeRaiseExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRNAME => array(
            'name' => 'strName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NREWARDLV => array(
            'name' => 'nRewardLv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDAYRAISE => array(
            'name' => 'nDayRaise',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDAYRAISELIMIT => array(
            'name' => 'nDayRaiseLimit',
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
        $this->values[self::NTARGETID] = null;
        $this->values[self::NRAISEID] = null;
        $this->values[self::NRAISELV] = null;
        $this->values[self::NRAISEEXP] = null;
        $this->values[self::NTHEMERAISELV] = null;
        $this->values[self::NTHEMERAISEEXP] = null;
        $this->values[self::STRNAME] = null;
        $this->values[self::NREWARDLV] = null;
        $this->values[self::NDAYRAISE] = null;
        $this->values[self::NDAYRAISELIMIT] = null;
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
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }

    /**
     * Sets value of 'nRaiseID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaiseID($value)
    {
        return $this->set(self::NRAISEID, $value);
    }

    /**
     * Returns value of 'nRaiseID' property
     *
     * @return integer
     */
    public function getNRaiseID()
    {
        $value = $this->get(self::NRAISEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaiseID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaiseID()
    {
        return $this->get(self::NRAISEID) !== null;
    }

    /**
     * Sets value of 'nRaiseLv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaiseLv($value)
    {
        return $this->set(self::NRAISELV, $value);
    }

    /**
     * Returns value of 'nRaiseLv' property
     *
     * @return integer
     */
    public function getNRaiseLv()
    {
        $value = $this->get(self::NRAISELV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaiseLv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaiseLv()
    {
        return $this->get(self::NRAISELV) !== null;
    }

    /**
     * Sets value of 'nRaiseExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaiseExp($value)
    {
        return $this->set(self::NRAISEEXP, $value);
    }

    /**
     * Returns value of 'nRaiseExp' property
     *
     * @return integer
     */
    public function getNRaiseExp()
    {
        $value = $this->get(self::NRAISEEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaiseExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaiseExp()
    {
        return $this->get(self::NRAISEEXP) !== null;
    }

    /**
     * Sets value of 'nThemeRaiseLv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeRaiseLv($value)
    {
        return $this->set(self::NTHEMERAISELV, $value);
    }

    /**
     * Returns value of 'nThemeRaiseLv' property
     *
     * @return integer
     */
    public function getNThemeRaiseLv()
    {
        $value = $this->get(self::NTHEMERAISELV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeRaiseLv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeRaiseLv()
    {
        return $this->get(self::NTHEMERAISELV) !== null;
    }

    /**
     * Sets value of 'nThemeRaiseExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeRaiseExp($value)
    {
        return $this->set(self::NTHEMERAISEEXP, $value);
    }

    /**
     * Returns value of 'nThemeRaiseExp' property
     *
     * @return integer
     */
    public function getNThemeRaiseExp()
    {
        $value = $this->get(self::NTHEMERAISEEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeRaiseExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeRaiseExp()
    {
        return $this->get(self::NTHEMERAISEEXP) !== null;
    }

    /**
     * Sets value of 'strName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStrName($value)
    {
        return $this->set(self::STRNAME, $value);
    }

    /**
     * Returns value of 'strName' property
     *
     * @return string
     */
    public function getStrName()
    {
        $value = $this->get(self::STRNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'strName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrName()
    {
        return $this->get(self::STRNAME) !== null;
    }

    /**
     * Sets value of 'nRewardLv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRewardLv($value)
    {
        return $this->set(self::NREWARDLV, $value);
    }

    /**
     * Returns value of 'nRewardLv' property
     *
     * @return integer
     */
    public function getNRewardLv()
    {
        $value = $this->get(self::NREWARDLV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRewardLv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRewardLv()
    {
        return $this->get(self::NREWARDLV) !== null;
    }

    /**
     * Sets value of 'nDayRaise' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDayRaise($value)
    {
        return $this->set(self::NDAYRAISE, $value);
    }

    /**
     * Returns value of 'nDayRaise' property
     *
     * @return integer
     */
    public function getNDayRaise()
    {
        $value = $this->get(self::NDAYRAISE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDayRaise' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDayRaise()
    {
        return $this->get(self::NDAYRAISE) !== null;
    }

    /**
     * Sets value of 'nDayRaiseLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDayRaiseLimit($value)
    {
        return $this->set(self::NDAYRAISELIMIT, $value);
    }

    /**
     * Returns value of 'nDayRaiseLimit' property
     *
     * @return integer
     */
    public function getNDayRaiseLimit()
    {
        $value = $this->get(self::NDAYRAISELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDayRaiseLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDayRaiseLimit()
    {
        return $this->get(self::NDAYRAISELIMIT) !== null;
    }
}
}