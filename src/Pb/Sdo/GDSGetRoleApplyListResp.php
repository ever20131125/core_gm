<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetRoleApplyListResp message
 */
class GDSGetRoleApplyListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUILDINFO = 2;
    const BAPPLY = 3;
    const NAPPLYTIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GUILDINFO => array(
            'name' => 'guildInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildBriefDetails'
        ),
        self::BAPPLY => array(
            'name' => 'bApply',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NAPPLYTIME => array(
            'name' => 'nApplyTime',
            'repeated' => true,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::GUILDINFO] = array();
        $this->values[self::BAPPLY] = array();
        $this->values[self::NAPPLYTIME] = array();
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

    /**
     * Appends value to 'bApply' list
     *
     * @param boolean $value Value to append
     *
     * @return null
     */
    public function appendBApply($value)
    {
        return $this->append(self::BAPPLY, $value);
    }

    /**
     * Clears 'bApply' list
     *
     * @return null
     */
    public function clearBApply()
    {
        return $this->clear(self::BAPPLY);
    }

    /**
     * Returns 'bApply' list
     *
     * @return boolean[]
     */
    public function getBApply()
    {
        return $this->get(self::BAPPLY);
    }

    /**
     * Returns true if 'bApply' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBApply()
    {
        return count($this->get(self::BAPPLY)) !== 0;
    }

    /**
     * Returns 'bApply' iterator
     *
     * @return \ArrayIterator
     */
    public function getBApplyIterator()
    {
        return new \ArrayIterator($this->get(self::BAPPLY));
    }

    /**
     * Returns element from 'bApply' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return boolean
     */
    public function getBApplyAt($offset)
    {
        return $this->get(self::BAPPLY, $offset);
    }

    /**
     * Returns count of 'bApply' list
     *
     * @return int
     */
    public function getBApplyCount()
    {
        return $this->count(self::BAPPLY);
    }

    /**
     * Appends value to 'nApplyTime' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNApplyTime($value)
    {
        return $this->append(self::NAPPLYTIME, $value);
    }

    /**
     * Clears 'nApplyTime' list
     *
     * @return null
     */
    public function clearNApplyTime()
    {
        return $this->clear(self::NAPPLYTIME);
    }

    /**
     * Returns 'nApplyTime' list
     *
     * @return integer[]
     */
    public function getNApplyTime()
    {
        return $this->get(self::NAPPLYTIME);
    }

    /**
     * Returns true if 'nApplyTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNApplyTime()
    {
        return count($this->get(self::NAPPLYTIME)) !== 0;
    }

    /**
     * Returns 'nApplyTime' iterator
     *
     * @return \ArrayIterator
     */
    public function getNApplyTimeIterator()
    {
        return new \ArrayIterator($this->get(self::NAPPLYTIME));
    }

    /**
     * Returns element from 'nApplyTime' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNApplyTimeAt($offset)
    {
        return $this->get(self::NAPPLYTIME, $offset);
    }

    /**
     * Returns count of 'nApplyTime' list
     *
     * @return int
     */
    public function getNApplyTimeCount()
    {
        return $this->count(self::NAPPLYTIME);
    }
}
}