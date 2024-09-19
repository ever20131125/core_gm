<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoverInfo message
 */
class LoverInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const LOVERID = 2;
    const LOVERGENDER = 3;
    const LOVERNAME = 4;
    const LOVERFRINDSHIP = 5;
    const LOVERTYPE = 6;
    const LOVERLEVEL = 7;
    const LEVELTITLE = 8;
    const TOTALLOVERVALUE = 9;
    const TODAYLOVERVALUE = 10;
    const NEXTLEVELLOVERVALUE = 11;
    const CONFRESSTIME = 12;
    const MARRYTIME = 13;
    const IFMARRY = 14;
    const CURKEEPSAKEID = 15;
    const LOVEDECLARATION = 16;
    const SKILLS = 17;
    const NKEEPSAKELEVEL = 18;
    const NKEEPSAKESEID = 19;
    const NCURKEEPSAKEVALUE = 20;
    const NNEXTKEEPSAKEVALUE = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERID => array(
            'name' => 'loverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'loverGender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERNAME => array(
            'name' => 'loverName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOVERFRINDSHIP => array(
            'name' => 'loverFrindship',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\FriendInfo'
        ),
        self::LOVERTYPE => array(
            'name' => 'loverType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERLEVEL => array(
            'name' => 'loverLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVELTITLE => array(
            'name' => 'LevelTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALLOVERVALUE => array(
            'name' => 'totalLoverValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TODAYLOVERVALUE => array(
            'name' => 'todayLoverValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXTLEVELLOVERVALUE => array(
            'name' => 'nextLevelLoverValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFRESSTIME => array(
            'name' => 'confressTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MARRYTIME => array(
            'name' => 'marryTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IFMARRY => array(
            'name' => 'ifMarry',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURKEEPSAKEID => array(
            'name' => 'curKeepsakeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVEDECLARATION => array(
            'name' => 'loveDeclaration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SKILLS => array(
            'name' => 'skills',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEEPSAKELEVEL => array(
            'name' => 'nKeepsakeLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEEPSAKESEID => array(
            'name' => 'nKeepsakeSEID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCURKEEPSAKEVALUE => array(
            'name' => 'nCurKeepsakeValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEXTKEEPSAKEVALUE => array(
            'name' => 'nNextKeepsakeValue',
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
        $this->values[self::LOVERID] = null;
        $this->values[self::LOVERGENDER] = self::$fields[self::LOVERGENDER]['default'];
        $this->values[self::LOVERNAME] = null;
        $this->values[self::LOVERFRINDSHIP] = null;
        $this->values[self::LOVERTYPE] = null;
        $this->values[self::LOVERLEVEL] = null;
        $this->values[self::LEVELTITLE] = null;
        $this->values[self::TOTALLOVERVALUE] = null;
        $this->values[self::TODAYLOVERVALUE] = null;
        $this->values[self::NEXTLEVELLOVERVALUE] = null;
        $this->values[self::CONFRESSTIME] = null;
        $this->values[self::MARRYTIME] = null;
        $this->values[self::IFMARRY] = null;
        $this->values[self::CURKEEPSAKEID] = null;
        $this->values[self::LOVEDECLARATION] = null;
        $this->values[self::SKILLS] = null;
        $this->values[self::NKEEPSAKELEVEL] = null;
        $this->values[self::NKEEPSAKESEID] = null;
        $this->values[self::NCURKEEPSAKEVALUE] = null;
        $this->values[self::NNEXTKEEPSAKEVALUE] = null;
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
     * Sets value of 'loverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverID($value)
    {
        return $this->set(self::LOVERID, $value);
    }

    /**
     * Returns value of 'loverID' property
     *
     * @return integer
     */
    public function getLoverID()
    {
        $value = $this->get(self::LOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverID()
    {
        return $this->get(self::LOVERID) !== null;
    }

    /**
     * Sets value of 'loverGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverGender($value)
    {
        return $this->set(self::LOVERGENDER, $value);
    }

    /**
     * Returns value of 'loverGender' property
     *
     * @return integer
     */
    public function getLoverGender()
    {
        $value = $this->get(self::LOVERGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverGender()
    {
        return $this->get(self::LOVERGENDER) !== null;
    }

    /**
     * Sets value of 'loverName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoverName($value)
    {
        return $this->set(self::LOVERNAME, $value);
    }

    /**
     * Returns value of 'loverName' property
     *
     * @return string
     */
    public function getLoverName()
    {
        $value = $this->get(self::LOVERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loverName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverName()
    {
        return $this->get(self::LOVERNAME) !== null;
    }

    /**
     * Sets value of 'loverFrindship' property
     *
     * @param \Xnhd\Core\Pb\Sdo\FriendInfo $value Property value
     *
     * @return null
     */
    public function setLoverFrindship(\Xnhd\Core\Pb\Sdo\FriendInfo $value=null)
    {
        return $this->set(self::LOVERFRINDSHIP, $value);
    }

    /**
     * Returns value of 'loverFrindship' property
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendInfo
     */
    public function getLoverFrindship()
    {
        return $this->get(self::LOVERFRINDSHIP);
    }

    /**
     * Returns true if 'loverFrindship' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverFrindship()
    {
        return $this->get(self::LOVERFRINDSHIP) !== null;
    }

    /**
     * Sets value of 'loverType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverType($value)
    {
        return $this->set(self::LOVERTYPE, $value);
    }

    /**
     * Returns value of 'loverType' property
     *
     * @return integer
     */
    public function getLoverType()
    {
        $value = $this->get(self::LOVERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverType()
    {
        return $this->get(self::LOVERTYPE) !== null;
    }

    /**
     * Sets value of 'loverLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverLevel($value)
    {
        return $this->set(self::LOVERLEVEL, $value);
    }

    /**
     * Returns value of 'loverLevel' property
     *
     * @return integer
     */
    public function getLoverLevel()
    {
        $value = $this->get(self::LOVERLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverLevel()
    {
        return $this->get(self::LOVERLEVEL) !== null;
    }

    /**
     * Sets value of 'LevelTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLevelTitle($value)
    {
        return $this->set(self::LEVELTITLE, $value);
    }

    /**
     * Returns value of 'LevelTitle' property
     *
     * @return string
     */
    public function getLevelTitle()
    {
        $value = $this->get(self::LEVELTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'LevelTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevelTitle()
    {
        return $this->get(self::LEVELTITLE) !== null;
    }

    /**
     * Sets value of 'totalLoverValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalLoverValue($value)
    {
        return $this->set(self::TOTALLOVERVALUE, $value);
    }

    /**
     * Returns value of 'totalLoverValue' property
     *
     * @return integer
     */
    public function getTotalLoverValue()
    {
        $value = $this->get(self::TOTALLOVERVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalLoverValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalLoverValue()
    {
        return $this->get(self::TOTALLOVERVALUE) !== null;
    }

    /**
     * Sets value of 'todayLoverValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTodayLoverValue($value)
    {
        return $this->set(self::TODAYLOVERVALUE, $value);
    }

    /**
     * Returns value of 'todayLoverValue' property
     *
     * @return integer
     */
    public function getTodayLoverValue()
    {
        $value = $this->get(self::TODAYLOVERVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'todayLoverValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTodayLoverValue()
    {
        return $this->get(self::TODAYLOVERVALUE) !== null;
    }

    /**
     * Sets value of 'nextLevelLoverValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNextLevelLoverValue($value)
    {
        return $this->set(self::NEXTLEVELLOVERVALUE, $value);
    }

    /**
     * Returns value of 'nextLevelLoverValue' property
     *
     * @return integer
     */
    public function getNextLevelLoverValue()
    {
        $value = $this->get(self::NEXTLEVELLOVERVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nextLevelLoverValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNextLevelLoverValue()
    {
        return $this->get(self::NEXTLEVELLOVERVALUE) !== null;
    }

    /**
     * Sets value of 'confressTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfressTime($value)
    {
        return $this->set(self::CONFRESSTIME, $value);
    }

    /**
     * Returns value of 'confressTime' property
     *
     * @return integer
     */
    public function getConfressTime()
    {
        $value = $this->get(self::CONFRESSTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confressTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfressTime()
    {
        return $this->get(self::CONFRESSTIME) !== null;
    }

    /**
     * Sets value of 'marryTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMarryTime($value)
    {
        return $this->set(self::MARRYTIME, $value);
    }

    /**
     * Returns value of 'marryTime' property
     *
     * @return integer
     */
    public function getMarryTime()
    {
        $value = $this->get(self::MARRYTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'marryTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarryTime()
    {
        return $this->get(self::MARRYTIME) !== null;
    }

    /**
     * Sets value of 'ifMarry' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIfMarry($value)
    {
        return $this->set(self::IFMARRY, $value);
    }

    /**
     * Returns value of 'ifMarry' property
     *
     * @return integer
     */
    public function getIfMarry()
    {
        $value = $this->get(self::IFMARRY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ifMarry' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIfMarry()
    {
        return $this->get(self::IFMARRY) !== null;
    }

    /**
     * Sets value of 'curKeepsakeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurKeepsakeID($value)
    {
        return $this->set(self::CURKEEPSAKEID, $value);
    }

    /**
     * Returns value of 'curKeepsakeID' property
     *
     * @return integer
     */
    public function getCurKeepsakeID()
    {
        $value = $this->get(self::CURKEEPSAKEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curKeepsakeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurKeepsakeID()
    {
        return $this->get(self::CURKEEPSAKEID) !== null;
    }

    /**
     * Sets value of 'loveDeclaration' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoveDeclaration($value)
    {
        return $this->set(self::LOVEDECLARATION, $value);
    }

    /**
     * Returns value of 'loveDeclaration' property
     *
     * @return string
     */
    public function getLoveDeclaration()
    {
        $value = $this->get(self::LOVEDECLARATION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loveDeclaration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoveDeclaration()
    {
        return $this->get(self::LOVEDECLARATION) !== null;
    }

    /**
     * Sets value of 'skills' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSkills($value)
    {
        return $this->set(self::SKILLS, $value);
    }

    /**
     * Returns value of 'skills' property
     *
     * @return integer
     */
    public function getSkills()
    {
        $value = $this->get(self::SKILLS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'skills' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSkills()
    {
        return $this->get(self::SKILLS) !== null;
    }

    /**
     * Sets value of 'nKeepsakeLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeepsakeLevel($value)
    {
        return $this->set(self::NKEEPSAKELEVEL, $value);
    }

    /**
     * Returns value of 'nKeepsakeLevel' property
     *
     * @return integer
     */
    public function getNKeepsakeLevel()
    {
        $value = $this->get(self::NKEEPSAKELEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeepsakeLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeepsakeLevel()
    {
        return $this->get(self::NKEEPSAKELEVEL) !== null;
    }

    /**
     * Sets value of 'nKeepsakeSEID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeepsakeSEID($value)
    {
        return $this->set(self::NKEEPSAKESEID, $value);
    }

    /**
     * Returns value of 'nKeepsakeSEID' property
     *
     * @return integer
     */
    public function getNKeepsakeSEID()
    {
        $value = $this->get(self::NKEEPSAKESEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeepsakeSEID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeepsakeSEID()
    {
        return $this->get(self::NKEEPSAKESEID) !== null;
    }

    /**
     * Sets value of 'nCurKeepsakeValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurKeepsakeValue($value)
    {
        return $this->set(self::NCURKEEPSAKEVALUE, $value);
    }

    /**
     * Returns value of 'nCurKeepsakeValue' property
     *
     * @return integer
     */
    public function getNCurKeepsakeValue()
    {
        $value = $this->get(self::NCURKEEPSAKEVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurKeepsakeValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurKeepsakeValue()
    {
        return $this->get(self::NCURKEEPSAKEVALUE) !== null;
    }

    /**
     * Sets value of 'nNextKeepsakeValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNextKeepsakeValue($value)
    {
        return $this->set(self::NNEXTKEEPSAKEVALUE, $value);
    }

    /**
     * Returns value of 'nNextKeepsakeValue' property
     *
     * @return integer
     */
    public function getNNextKeepsakeValue()
    {
        $value = $this->get(self::NNEXTKEEPSAKEVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNextKeepsakeValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNextKeepsakeValue()
    {
        return $this->get(self::NNEXTKEEPSAKEVALUE) !== null;
    }
}
}