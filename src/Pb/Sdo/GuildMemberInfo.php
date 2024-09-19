<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildMemberInfo message
 */
class GuildMemberInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ROLENAME = 2;
    const GENDER = 3;
    const LEVEL = 4;
    const GUILDID = 5;
    const JOINTIME = 6;
    const POSTTYPE = 7;
    const ROLECOIN = 8;
    const CONTRIBUTION = 9;
    const WEEKCONTRIBUTION = 10;
    const DAYCONTRIBUTION = 11;
    const ROLESCORE = 12;
    const ROLESTATUS = 13;
    const LASTUPDATECONTRIBUTIONTIME = 14;
    const LASTOFFLINETIME = 15;
    const DEPOSEVOTETYPE = 16;
    const LASTCHECKINTIME = 17;
    const REWARDSTATUS = 18;
    const LASTRECVREWARDTIME = 19;
    const ROLEREWARDSTATUS = 20;
    const LASTRECVROLEREWARDTIME = 21;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLENAME => array(
            'name' => 'roleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::JOINTIME => array(
            'name' => 'joinTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildPostType::enmGuildPostType_Invalid,
            'name' => 'postType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLECOIN => array(
            'name' => 'roleCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTRIBUTION => array(
            'name' => 'contribution',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEEKCONTRIBUTION => array(
            'name' => 'weekContribution',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAYCONTRIBUTION => array(
            'name' => 'dayContribution',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLESCORE => array(
            'name' => 'roleScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLESTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildRoleStatus::enmRoleStatus_Invalid,
            'name' => 'roleStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTUPDATECONTRIBUTIONTIME => array(
            'name' => 'lastUpdateContributionTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTOFFLINETIME => array(
            'name' => 'lastOfflineTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEPOSEVOTETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\DeposeVoteType::enmDeposeVoteType_Invalid,
            'name' => 'deposeVoteType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTCHECKINTIME => array(
            'name' => 'lastCheckinTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REWARDSTATUS => array(
            'name' => 'rewardStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTRECVREWARDTIME => array(
            'name' => 'lastRecvRewardTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEREWARDSTATUS => array(
            'name' => 'roleRewardStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTRECVROLEREWARDTIME => array(
            'name' => 'lastRecvRoleRewardTime',
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
        $this->values[self::ROLENAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::LEVEL] = null;
        $this->values[self::GUILDID] = null;
        $this->values[self::JOINTIME] = null;
        $this->values[self::POSTTYPE] = self::$fields[self::POSTTYPE]['default'];
        $this->values[self::ROLECOIN] = null;
        $this->values[self::CONTRIBUTION] = null;
        $this->values[self::WEEKCONTRIBUTION] = null;
        $this->values[self::DAYCONTRIBUTION] = null;
        $this->values[self::ROLESCORE] = null;
        $this->values[self::ROLESTATUS] = self::$fields[self::ROLESTATUS]['default'];
        $this->values[self::LASTUPDATECONTRIBUTIONTIME] = null;
        $this->values[self::LASTOFFLINETIME] = null;
        $this->values[self::DEPOSEVOTETYPE] = self::$fields[self::DEPOSEVOTETYPE]['default'];
        $this->values[self::LASTCHECKINTIME] = null;
        $this->values[self::REWARDSTATUS] = null;
        $this->values[self::LASTRECVREWARDTIME] = null;
        $this->values[self::ROLEREWARDSTATUS] = null;
        $this->values[self::LASTRECVROLEREWARDTIME] = null;
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
     * Sets value of 'roleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoleName($value)
    {
        return $this->set(self::ROLENAME, $value);
    }

    /**
     * Returns value of 'roleName' property
     *
     * @return string
     */
    public function getRoleName()
    {
        $value = $this->get(self::ROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'roleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleName()
    {
        return $this->get(self::ROLENAME) !== null;
    }

    /**
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
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
     * Sets value of 'joinTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setJoinTime($value)
    {
        return $this->set(self::JOINTIME, $value);
    }

    /**
     * Returns value of 'joinTime' property
     *
     * @return integer
     */
    public function getJoinTime()
    {
        $value = $this->get(self::JOINTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'joinTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJoinTime()
    {
        return $this->get(self::JOINTIME) !== null;
    }

    /**
     * Sets value of 'postType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPostType($value)
    {
        return $this->set(self::POSTTYPE, $value);
    }

    /**
     * Returns value of 'postType' property
     *
     * @return integer
     */
    public function getPostType()
    {
        $value = $this->get(self::POSTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'postType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostType()
    {
        return $this->get(self::POSTTYPE) !== null;
    }

    /**
     * Sets value of 'roleCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleCoin($value)
    {
        return $this->set(self::ROLECOIN, $value);
    }

    /**
     * Returns value of 'roleCoin' property
     *
     * @return integer
     */
    public function getRoleCoin()
    {
        $value = $this->get(self::ROLECOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleCoin()
    {
        return $this->get(self::ROLECOIN) !== null;
    }

    /**
     * Sets value of 'contribution' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContribution($value)
    {
        return $this->set(self::CONTRIBUTION, $value);
    }

    /**
     * Returns value of 'contribution' property
     *
     * @return integer
     */
    public function getContribution()
    {
        $value = $this->get(self::CONTRIBUTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'contribution' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContribution()
    {
        return $this->get(self::CONTRIBUTION) !== null;
    }

    /**
     * Sets value of 'weekContribution' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeekContribution($value)
    {
        return $this->set(self::WEEKCONTRIBUTION, $value);
    }

    /**
     * Returns value of 'weekContribution' property
     *
     * @return integer
     */
    public function getWeekContribution()
    {
        $value = $this->get(self::WEEKCONTRIBUTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'weekContribution' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeekContribution()
    {
        return $this->get(self::WEEKCONTRIBUTION) !== null;
    }

    /**
     * Sets value of 'dayContribution' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDayContribution($value)
    {
        return $this->set(self::DAYCONTRIBUTION, $value);
    }

    /**
     * Returns value of 'dayContribution' property
     *
     * @return integer
     */
    public function getDayContribution()
    {
        $value = $this->get(self::DAYCONTRIBUTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dayContribution' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDayContribution()
    {
        return $this->get(self::DAYCONTRIBUTION) !== null;
    }

    /**
     * Sets value of 'roleScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleScore($value)
    {
        return $this->set(self::ROLESCORE, $value);
    }

    /**
     * Returns value of 'roleScore' property
     *
     * @return integer
     */
    public function getRoleScore()
    {
        $value = $this->get(self::ROLESCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleScore()
    {
        return $this->get(self::ROLESCORE) !== null;
    }

    /**
     * Sets value of 'roleStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleStatus($value)
    {
        return $this->set(self::ROLESTATUS, $value);
    }

    /**
     * Returns value of 'roleStatus' property
     *
     * @return integer
     */
    public function getRoleStatus()
    {
        $value = $this->get(self::ROLESTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleStatus()
    {
        return $this->get(self::ROLESTATUS) !== null;
    }

    /**
     * Sets value of 'lastUpdateContributionTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastUpdateContributionTime($value)
    {
        return $this->set(self::LASTUPDATECONTRIBUTIONTIME, $value);
    }

    /**
     * Returns value of 'lastUpdateContributionTime' property
     *
     * @return integer
     */
    public function getLastUpdateContributionTime()
    {
        $value = $this->get(self::LASTUPDATECONTRIBUTIONTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastUpdateContributionTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastUpdateContributionTime()
    {
        return $this->get(self::LASTUPDATECONTRIBUTIONTIME) !== null;
    }

    /**
     * Sets value of 'lastOfflineTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastOfflineTime($value)
    {
        return $this->set(self::LASTOFFLINETIME, $value);
    }

    /**
     * Returns value of 'lastOfflineTime' property
     *
     * @return integer
     */
    public function getLastOfflineTime()
    {
        $value = $this->get(self::LASTOFFLINETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastOfflineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastOfflineTime()
    {
        return $this->get(self::LASTOFFLINETIME) !== null;
    }

    /**
     * Sets value of 'deposeVoteType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeposeVoteType($value)
    {
        return $this->set(self::DEPOSEVOTETYPE, $value);
    }

    /**
     * Returns value of 'deposeVoteType' property
     *
     * @return integer
     */
    public function getDeposeVoteType()
    {
        $value = $this->get(self::DEPOSEVOTETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deposeVoteType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeposeVoteType()
    {
        return $this->get(self::DEPOSEVOTETYPE) !== null;
    }

    /**
     * Sets value of 'lastCheckinTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastCheckinTime($value)
    {
        return $this->set(self::LASTCHECKINTIME, $value);
    }

    /**
     * Returns value of 'lastCheckinTime' property
     *
     * @return integer
     */
    public function getLastCheckinTime()
    {
        $value = $this->get(self::LASTCHECKINTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastCheckinTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastCheckinTime()
    {
        return $this->get(self::LASTCHECKINTIME) !== null;
    }

    /**
     * Sets value of 'rewardStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRewardStatus($value)
    {
        return $this->set(self::REWARDSTATUS, $value);
    }

    /**
     * Returns value of 'rewardStatus' property
     *
     * @return integer
     */
    public function getRewardStatus()
    {
        $value = $this->get(self::REWARDSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rewardStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRewardStatus()
    {
        return $this->get(self::REWARDSTATUS) !== null;
    }

    /**
     * Sets value of 'lastRecvRewardTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRecvRewardTime($value)
    {
        return $this->set(self::LASTRECVREWARDTIME, $value);
    }

    /**
     * Returns value of 'lastRecvRewardTime' property
     *
     * @return integer
     */
    public function getLastRecvRewardTime()
    {
        $value = $this->get(self::LASTRECVREWARDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastRecvRewardTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastRecvRewardTime()
    {
        return $this->get(self::LASTRECVREWARDTIME) !== null;
    }

    /**
     * Sets value of 'roleRewardStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleRewardStatus($value)
    {
        return $this->set(self::ROLEREWARDSTATUS, $value);
    }

    /**
     * Returns value of 'roleRewardStatus' property
     *
     * @return integer
     */
    public function getRoleRewardStatus()
    {
        $value = $this->get(self::ROLEREWARDSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleRewardStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleRewardStatus()
    {
        return $this->get(self::ROLEREWARDSTATUS) !== null;
    }

    /**
     * Sets value of 'lastRecvRoleRewardTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRecvRoleRewardTime($value)
    {
        return $this->set(self::LASTRECVROLEREWARDTIME, $value);
    }

    /**
     * Returns value of 'lastRecvRoleRewardTime' property
     *
     * @return integer
     */
    public function getLastRecvRoleRewardTime()
    {
        $value = $this->get(self::LASTRECVROLEREWARDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastRecvRoleRewardTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastRecvRoleRewardTime()
    {
        return $this->get(self::LASTRECVROLEREWARDTIME) !== null;
    }
}
}