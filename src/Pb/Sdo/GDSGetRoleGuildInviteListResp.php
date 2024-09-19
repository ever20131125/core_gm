<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetRoleGuildInviteListResp message
 */
class GDSGetRoleGuildInviteListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUILDINVITE = 2;
    const GUILDINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GUILDINVITE => array(
            'name' => 'guildInvite',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGuildInvite'
        ),
        self::GUILDINFO => array(
            'name' => 'guildInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildBriefDetails'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::GUILDINVITE] = array();
        $this->values[self::GUILDINFO] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Appends value to 'guildInvite' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGuildInvite $value Value to append
     *
     * @return null
     */
    public function appendGuildInvite(\Xnhd\Core\Pb\Sdo\RoleGuildInvite $value)
    {
        return $this->append(self::GUILDINVITE, $value);
    }

    /**
     * Clears 'guildInvite' list
     *
     * @return null
     */
    public function clearGuildInvite()
    {
        return $this->clear(self::GUILDINVITE);
    }

    /**
     * Returns 'guildInvite' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInvite[]
     */
    public function getGuildInvite()
    {
        return $this->get(self::GUILDINVITE);
    }

    /**
     * Returns true if 'guildInvite' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildInvite()
    {
        return count($this->get(self::GUILDINVITE)) !== 0;
    }

    /**
     * Returns 'guildInvite' iterator
     *
     * @return \ArrayIterator
     */
    public function getGuildInviteIterator()
    {
        return new \ArrayIterator($this->get(self::GUILDINVITE));
    }

    /**
     * Returns element from 'guildInvite' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInvite
     */
    public function getGuildInviteAt($offset)
    {
        return $this->get(self::GUILDINVITE, $offset);
    }

    /**
     * Returns count of 'guildInvite' list
     *
     * @return int
     */
    public function getGuildInviteCount()
    {
        return $this->count(self::GUILDINVITE);
    }

    /**
     * Appends value to 'guildInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildBriefDetails $value Value to append
     *
     * @return null
     */
    public function appendGuildInfo(\Xnhd\Core\Pb\Sdo\GuildBriefDetails $value)
    {
        return $this->append(self::GUILDINFO, $value);
    }

    /**
     * Clears 'guildInfo' list
     *
     * @return null
     */
    public function clearGuildInfo()
    {
        return $this->clear(self::GUILDINFO);
    }

    /**
     * Returns 'guildInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails[]
     */
    public function getGuildInfo()
    {
        return $this->get(self::GUILDINFO);
    }

    /**
     * Returns true if 'guildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildInfo()
    {
        return count($this->get(self::GUILDINFO)) !== 0;
    }

    /**
     * Returns 'guildInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getGuildInfoIterator()
    {
        return new \ArrayIterator($this->get(self::GUILDINFO));
    }

    /**
     * Returns element from 'guildInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildBriefDetails
     */
    public function getGuildInfoAt($offset)
    {
        return $this->get(self::GUILDINFO, $offset);
    }

    /**
     * Returns count of 'guildInfo' list
     *
     * @return int
     */
    public function getGuildInfoCount()
    {
        return $this->count(self::GUILDINFO);
    }
}
}