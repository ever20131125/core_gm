<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildBriefDetails message
 */
class GuildBriefDetails extends \ProtobufMessage
{
    /* Field index constants */
    const GUILDID = 1;
    const GUILDNAME = 2;
    const GUILDNAMECOLOR = 3;
    const GUILDMEDAL = 4;
    const PRESIDENTID = 5;
    const PRESIDENTNAME = 6;
    const GUILDLEVEL = 7;
    const POPULARITY = 8;
    const GUILDSCORE = 9;
    const MEMBERCOUNT = 10;
    const MEMBERMAX = 11;
    const GUILDSTATUS = 12;
    const APPROVALTYPE = 13;
    const MINLEVEL = 14;
    const NOTICE = 15;
    const LABEL = 16;
    const WEEKPOPULARITY = 17;
    const DAYPOPULARITY = 18;
    const INTRODUCTION = 19;
    const TITLE = 20;
    const LOCATION = 21;
    const PRESIDENTLEVEL = 22;
    const GUILDMEDALFRAME = 23;
    const MEDALRGB = 24;
    const MEDALFRAMERGB = 25;
    const CREATETIME = 26;
    const CREATORNAME = 27;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDNAME => array(
            'name' => 'guildName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GUILDNAMECOLOR => array(
            'name' => 'guildNameColor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDMEDAL => array(
            'name' => 'guildMedal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRESIDENTID => array(
            'name' => 'presidentID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRESIDENTNAME => array(
            'name' => 'presidentName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GUILDLEVEL => array(
            'name' => 'guildLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POPULARITY => array(
            'name' => 'popularity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDSCORE => array(
            'name' => 'guildScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEMBERCOUNT => array(
            'name' => 'memberCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEMBERMAX => array(
            'name' => 'memberMax',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDSTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildStatus::enmGuildStatus_Invalid,
            'name' => 'guildStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::APPROVALTYPE => array(
            'name' => 'approvalType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MINLEVEL => array(
            'name' => 'minLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOTICE => array(
            'name' => 'notice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LABEL => array(
            'name' => 'label',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEEKPOPULARITY => array(
            'name' => 'weekPopularity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAYPOPULARITY => array(
            'name' => 'dayPopularity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INTRODUCTION => array(
            'name' => 'introduction',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCATION => array(
            'name' => 'location',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRESIDENTLEVEL => array(
            'name' => 'presidentLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDMEDALFRAME => array(
            'name' => 'guildMedalFrame',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MEDALRGB => array(
            'name' => 'medalRGB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDALFRAMERGB => array(
            'name' => 'medalFrameRGB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CREATETIME => array(
            'name' => 'createTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CREATORNAME => array(
            'name' => 'creatorName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::GUILDID] = null;
        $this->values[self::GUILDNAME] = null;
        $this->values[self::GUILDNAMECOLOR] = null;
        $this->values[self::GUILDMEDAL] = null;
        $this->values[self::PRESIDENTID] = null;
        $this->values[self::PRESIDENTNAME] = null;
        $this->values[self::GUILDLEVEL] = null;
        $this->values[self::POPULARITY] = null;
        $this->values[self::GUILDSCORE] = null;
        $this->values[self::MEMBERCOUNT] = null;
        $this->values[self::MEMBERMAX] = null;
        $this->values[self::GUILDSTATUS] = self::$fields[self::GUILDSTATUS]['default'];
        $this->values[self::APPROVALTYPE] = null;
        $this->values[self::MINLEVEL] = null;
        $this->values[self::NOTICE] = null;
        $this->values[self::LABEL] = array();
        $this->values[self::WEEKPOPULARITY] = null;
        $this->values[self::DAYPOPULARITY] = null;
        $this->values[self::INTRODUCTION] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::LOCATION] = null;
        $this->values[self::PRESIDENTLEVEL] = null;
        $this->values[self::GUILDMEDALFRAME] = null;
        $this->values[self::MEDALRGB] = null;
        $this->values[self::MEDALFRAMERGB] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::CREATORNAME] = null;
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
     * Sets value of 'guildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildID($value)
    {
        return $this->set(self::GUILDID, $value);
    }

    /**
     * Returns value of 'guildID' property
     *
     * @return integer
     */
    public function getGuildID()
    {
        $value = $this->get(self::GUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildID()
    {
        return $this->get(self::GUILDID) !== null;
    }

    /**
     * Sets value of 'guildName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuildName($value)
    {
        return $this->set(self::GUILDNAME, $value);
    }

    /**
     * Returns value of 'guildName' property
     *
     * @return string
     */
    public function getGuildName()
    {
        $value = $this->get(self::GUILDNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guildName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildName()
    {
        return $this->get(self::GUILDNAME) !== null;
    }

    /**
     * Sets value of 'guildNameColor' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildNameColor($value)
    {
        return $this->set(self::GUILDNAMECOLOR, $value);
    }

    /**
     * Returns value of 'guildNameColor' property
     *
     * @return integer
     */
    public function getGuildNameColor()
    {
        $value = $this->get(self::GUILDNAMECOLOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildNameColor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildNameColor()
    {
        return $this->get(self::GUILDNAMECOLOR) !== null;
    }

    /**
     * Sets value of 'guildMedal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuildMedal($value)
    {
        return $this->set(self::GUILDMEDAL, $value);
    }

    /**
     * Returns value of 'guildMedal' property
     *
     * @return string
     */
    public function getGuildMedal()
    {
        $value = $this->get(self::GUILDMEDAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guildMedal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildMedal()
    {
        return $this->get(self::GUILDMEDAL) !== null;
    }

    /**
     * Sets value of 'presidentID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPresidentID($value)
    {
        return $this->set(self::PRESIDENTID, $value);
    }

    /**
     * Returns value of 'presidentID' property
     *
     * @return integer
     */
    public function getPresidentID()
    {
        $value = $this->get(self::PRESIDENTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'presidentID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPresidentID()
    {
        return $this->get(self::PRESIDENTID) !== null;
    }

    /**
     * Sets value of 'presidentName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPresidentName($value)
    {
        return $this->set(self::PRESIDENTNAME, $value);
    }

    /**
     * Returns value of 'presidentName' property
     *
     * @return string
     */
    public function getPresidentName()
    {
        $value = $this->get(self::PRESIDENTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'presidentName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPresidentName()
    {
        return $this->get(self::PRESIDENTNAME) !== null;
    }

    /**
     * Sets value of 'guildLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildLevel($value)
    {
        return $this->set(self::GUILDLEVEL, $value);
    }

    /**
     * Returns value of 'guildLevel' property
     *
     * @return integer
     */
    public function getGuildLevel()
    {
        $value = $this->get(self::GUILDLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildLevel()
    {
        return $this->get(self::GUILDLEVEL) !== null;
    }

    /**
     * Sets value of 'popularity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPopularity($value)
    {
        return $this->set(self::POPULARITY, $value);
    }

    /**
     * Returns value of 'popularity' property
     *
     * @return integer
     */
    public function getPopularity()
    {
        $value = $this->get(self::POPULARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'popularity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPopularity()
    {
        return $this->get(self::POPULARITY) !== null;
    }

    /**
     * Sets value of 'guildScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildScore($value)
    {
        return $this->set(self::GUILDSCORE, $value);
    }

    /**
     * Returns value of 'guildScore' property
     *
     * @return integer
     */
    public function getGuildScore()
    {
        $value = $this->get(self::GUILDSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildScore()
    {
        return $this->get(self::GUILDSCORE) !== null;
    }

    /**
     * Sets value of 'memberCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemberCount($value)
    {
        return $this->set(self::MEMBERCOUNT, $value);
    }

    /**
     * Returns value of 'memberCount' property
     *
     * @return integer
     */
    public function getMemberCount()
    {
        $value = $this->get(self::MEMBERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'memberCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberCount()
    {
        return $this->get(self::MEMBERCOUNT) !== null;
    }

    /**
     * Sets value of 'memberMax' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemberMax($value)
    {
        return $this->set(self::MEMBERMAX, $value);
    }

    /**
     * Returns value of 'memberMax' property
     *
     * @return integer
     */
    public function getMemberMax()
    {
        $value = $this->get(self::MEMBERMAX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'memberMax' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberMax()
    {
        return $this->get(self::MEMBERMAX) !== null;
    }

    /**
     * Sets value of 'guildStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildStatus($value)
    {
        return $this->set(self::GUILDSTATUS, $value);
    }

    /**
     * Returns value of 'guildStatus' property
     *
     * @return integer
     */
    public function getGuildStatus()
    {
        $value = $this->get(self::GUILDSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildStatus()
    {
        return $this->get(self::GUILDSTATUS) !== null;
    }

    /**
     * Sets value of 'approvalType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setApprovalType($value)
    {
        return $this->set(self::APPROVALTYPE, $value);
    }

    /**
     * Returns value of 'approvalType' property
     *
     * @return integer
     */
    public function getApprovalType()
    {
        $value = $this->get(self::APPROVALTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'approvalType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasApprovalType()
    {
        return $this->get(self::APPROVALTYPE) !== null;
    }

    /**
     * Sets value of 'minLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinLevel($value)
    {
        return $this->set(self::MINLEVEL, $value);
    }

    /**
     * Returns value of 'minLevel' property
     *
     * @return integer
     */
    public function getMinLevel()
    {
        $value = $this->get(self::MINLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'minLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMinLevel()
    {
        return $this->get(self::MINLEVEL) !== null;
    }

    /**
     * Sets value of 'notice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNotice($value)
    {
        return $this->set(self::NOTICE, $value);
    }

    /**
     * Returns value of 'notice' property
     *
     * @return string
     */
    public function getNotice()
    {
        $value = $this->get(self::NOTICE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'notice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNotice()
    {
        return $this->get(self::NOTICE) !== null;
    }

    /**
     * Appends value to 'label' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendLabel($value)
    {
        return $this->append(self::LABEL, $value);
    }

    /**
     * Clears 'label' list
     *
     * @return null
     */
    public function clearLabel()
    {
        return $this->clear(self::LABEL);
    }

    /**
     * Returns 'label' list
     *
     * @return integer[]
     */
    public function getLabel()
    {
        return $this->get(self::LABEL);
    }

    /**
     * Returns true if 'label' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabel()
    {
        return count($this->get(self::LABEL)) !== 0;
    }

    /**
     * Returns 'label' iterator
     *
     * @return \ArrayIterator
     */
    public function getLabelIterator()
    {
        return new \ArrayIterator($this->get(self::LABEL));
    }

    /**
     * Returns element from 'label' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getLabelAt($offset)
    {
        return $this->get(self::LABEL, $offset);
    }

    /**
     * Returns count of 'label' list
     *
     * @return int
     */
    public function getLabelCount()
    {
        return $this->count(self::LABEL);
    }

    /**
     * Sets value of 'weekPopularity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeekPopularity($value)
    {
        return $this->set(self::WEEKPOPULARITY, $value);
    }

    /**
     * Returns value of 'weekPopularity' property
     *
     * @return integer
     */
    public function getWeekPopularity()
    {
        $value = $this->get(self::WEEKPOPULARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'weekPopularity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeekPopularity()
    {
        return $this->get(self::WEEKPOPULARITY) !== null;
    }

    /**
     * Sets value of 'dayPopularity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDayPopularity($value)
    {
        return $this->set(self::DAYPOPULARITY, $value);
    }

    /**
     * Returns value of 'dayPopularity' property
     *
     * @return integer
     */
    public function getDayPopularity()
    {
        $value = $this->get(self::DAYPOPULARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dayPopularity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDayPopularity()
    {
        return $this->get(self::DAYPOPULARITY) !== null;
    }

    /**
     * Sets value of 'introduction' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIntroduction($value)
    {
        return $this->set(self::INTRODUCTION, $value);
    }

    /**
     * Returns value of 'introduction' property
     *
     * @return string
     */
    public function getIntroduction()
    {
        $value = $this->get(self::INTRODUCTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'introduction' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIntroduction()
    {
        return $this->get(self::INTRODUCTION) !== null;
    }

    /**
     * Sets value of 'title' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return integer
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'title' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitle()
    {
        return $this->get(self::TITLE) !== null;
    }

    /**
     * Sets value of 'location' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLocation($value)
    {
        return $this->set(self::LOCATION, $value);
    }

    /**
     * Returns value of 'location' property
     *
     * @return integer
     */
    public function getLocation()
    {
        $value = $this->get(self::LOCATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'location' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLocation()
    {
        return $this->get(self::LOCATION) !== null;
    }

    /**
     * Sets value of 'presidentLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPresidentLevel($value)
    {
        return $this->set(self::PRESIDENTLEVEL, $value);
    }

    /**
     * Returns value of 'presidentLevel' property
     *
     * @return integer
     */
    public function getPresidentLevel()
    {
        $value = $this->get(self::PRESIDENTLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'presidentLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPresidentLevel()
    {
        return $this->get(self::PRESIDENTLEVEL) !== null;
    }

    /**
     * Sets value of 'guildMedalFrame' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuildMedalFrame($value)
    {
        return $this->set(self::GUILDMEDALFRAME, $value);
    }

    /**
     * Returns value of 'guildMedalFrame' property
     *
     * @return string
     */
    public function getGuildMedalFrame()
    {
        $value = $this->get(self::GUILDMEDALFRAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guildMedalFrame' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildMedalFrame()
    {
        return $this->get(self::GUILDMEDALFRAME) !== null;
    }

    /**
     * Sets value of 'medalRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMedalRGB($value)
    {
        return $this->set(self::MEDALRGB, $value);
    }

    /**
     * Returns value of 'medalRGB' property
     *
     * @return integer
     */
    public function getMedalRGB()
    {
        $value = $this->get(self::MEDALRGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'medalRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedalRGB()
    {
        return $this->get(self::MEDALRGB) !== null;
    }

    /**
     * Sets value of 'medalFrameRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMedalFrameRGB($value)
    {
        return $this->set(self::MEDALFRAMERGB, $value);
    }

    /**
     * Returns value of 'medalFrameRGB' property
     *
     * @return integer
     */
    public function getMedalFrameRGB()
    {
        $value = $this->get(self::MEDALFRAMERGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'medalFrameRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMedalFrameRGB()
    {
        return $this->get(self::MEDALFRAMERGB) !== null;
    }

    /**
     * Sets value of 'createTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreateTime()
    {
        return $this->get(self::CREATETIME) !== null;
    }

    /**
     * Sets value of 'creatorName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatorName($value)
    {
        return $this->set(self::CREATORNAME, $value);
    }

    /**
     * Returns value of 'creatorName' property
     *
     * @return string
     */
    public function getCreatorName()
    {
        $value = $this->get(self::CREATORNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'creatorName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreatorName()
    {
        return $this->get(self::CREATORNAME) !== null;
    }
}
}