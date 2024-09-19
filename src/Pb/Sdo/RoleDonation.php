<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleDonation message
 */
class RoleDonation extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const GUILDID = 2;
    const SMALLDONATIONCOUNT = 3;
    const LARGEDONATIONCOUNT = 4;
    const FULLSUPPORTCOUNT = 5;
    const LASTUPDATETIME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SMALLDONATIONCOUNT => array(
            'name' => 'smallDonationCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LARGEDONATIONCOUNT => array(
            'name' => 'largeDonationCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FULLSUPPORTCOUNT => array(
            'name' => 'fullSupportCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTUPDATETIME => array(
            'name' => 'lastUpdateTime',
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
        $this->values[self::GUILDID] = null;
        $this->values[self::SMALLDONATIONCOUNT] = null;
        $this->values[self::LARGEDONATIONCOUNT] = null;
        $this->values[self::FULLSUPPORTCOUNT] = null;
        $this->values[self::LASTUPDATETIME] = null;
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
     * Sets value of 'smallDonationCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSmallDonationCount($value)
    {
        return $this->set(self::SMALLDONATIONCOUNT, $value);
    }

    /**
     * Returns value of 'smallDonationCount' property
     *
     * @return integer
     */
    public function getSmallDonationCount()
    {
        $value = $this->get(self::SMALLDONATIONCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'smallDonationCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmallDonationCount()
    {
        return $this->get(self::SMALLDONATIONCOUNT) !== null;
    }

    /**
     * Sets value of 'largeDonationCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLargeDonationCount($value)
    {
        return $this->set(self::LARGEDONATIONCOUNT, $value);
    }

    /**
     * Returns value of 'largeDonationCount' property
     *
     * @return integer
     */
    public function getLargeDonationCount()
    {
        $value = $this->get(self::LARGEDONATIONCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'largeDonationCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLargeDonationCount()
    {
        return $this->get(self::LARGEDONATIONCOUNT) !== null;
    }

    /**
     * Sets value of 'fullSupportCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFullSupportCount($value)
    {
        return $this->set(self::FULLSUPPORTCOUNT, $value);
    }

    /**
     * Returns value of 'fullSupportCount' property
     *
     * @return integer
     */
    public function getFullSupportCount()
    {
        $value = $this->get(self::FULLSUPPORTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fullSupportCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFullSupportCount()
    {
        return $this->get(self::FULLSUPPORTCOUNT) !== null;
    }

    /**
     * Sets value of 'lastUpdateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastUpdateTime($value)
    {
        return $this->set(self::LASTUPDATETIME, $value);
    }

    /**
     * Returns value of 'lastUpdateTime' property
     *
     * @return integer
     */
    public function getLastUpdateTime()
    {
        $value = $this->get(self::LASTUPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastUpdateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastUpdateTime()
    {
        return $this->get(self::LASTUPDATETIME) !== null;
    }
}
}