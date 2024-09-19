<?php
/**
 * Auto generated from event.proto at 2021-08-23 09:18:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CommonGuildEvent message
 */
class CommonGuildEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENTTYPE = 1;
    const GUILDINFO = 2;
    const WEALTH = 3;
    const ROLEGUILDINFO = 4;
    const ROLEID = 5;
    const ARRITEM = 6;
    const NGUILDDOANATETYPE = 7;
    const ARRDANCEPLAYER = 8;
    const ARRSCORE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildTaskEventType::enmGuildTaskEvent_None,
            'name' => 'EventType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUILDINFO => array(
            'name' => 'guildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildInfo'
        ),
        self::WEALTH => array(
            'name' => 'wealth',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEGUILDINFO => array(
            'name' => 'roleGuildInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildMemberInfo'
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEM => array(
            'name' => 'arrItem',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NGUILDDOANATETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildDoanteType::enmGuildDonateType_commom,
            'name' => 'nGuildDoanateType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDANCEPLAYER => array(
            'name' => 'arrDancePlayer',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSCORE => array(
            'name' => 'arrScore',
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
        $this->values[self::EVENTTYPE] = self::$fields[self::EVENTTYPE]['default'];
        $this->values[self::GUILDINFO] = null;
        $this->values[self::WEALTH] = null;
        $this->values[self::ROLEGUILDINFO] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRITEM] = array();
        $this->values[self::NGUILDDOANATETYPE] = self::$fields[self::NGUILDDOANATETYPE]['default'];
        $this->values[self::ARRDANCEPLAYER] = array();
        $this->values[self::ARRSCORE] = array();
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
     * Sets value of 'EventType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEventType($value)
    {
        return $this->set(self::EVENTTYPE, $value);
    }

    /**
     * Returns value of 'EventType' property
     *
     * @return integer
     */
    public function getEventType()
    {
        $value = $this->get(self::EVENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'EventType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEventType()
    {
        return $this->get(self::EVENTTYPE) !== null;
    }

    /**
     * Sets value of 'guildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildInfo $value Property value
     *
     * @return null
     */
    public function setGuildInfo(\Xnhd\Core\Pb\Sdo\GuildInfo $value=null)
    {
        return $this->set(self::GUILDINFO, $value);
    }

    /**
     * Returns value of 'guildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildInfo
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
        return $this->get(self::GUILDINFO) !== null;
    }

    /**
     * Sets value of 'wealth' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWealth($value)
    {
        return $this->set(self::WEALTH, $value);
    }

    /**
     * Returns value of 'wealth' property
     *
     * @return integer
     */
    public function getWealth()
    {
        $value = $this->get(self::WEALTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'wealth' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWealth()
    {
        return $this->get(self::WEALTH) !== null;
    }

    /**
     * Sets value of 'roleGuildInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildMemberInfo $value Property value
     *
     * @return null
     */
    public function setRoleGuildInfo(\Xnhd\Core\Pb\Sdo\GuildMemberInfo $value=null)
    {
        return $this->set(self::ROLEGUILDINFO, $value);
    }

    /**
     * Returns value of 'roleGuildInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildMemberInfo
     */
    public function getRoleGuildInfo()
    {
        return $this->get(self::ROLEGUILDINFO);
    }

    /**
     * Returns true if 'roleGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleGuildInfo()
    {
        return $this->get(self::ROLEGUILDINFO) !== null;
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
     * Appends value to 'arrItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEM, $value);
    }

    /**
     * Clears 'arrItem' list
     *
     * @return null
     */
    public function clearArrItem()
    {
        return $this->clear(self::ARRITEM);
    }

    /**
     * Returns 'arrItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItem()
    {
        return $this->get(self::ARRITEM);
    }

    /**
     * Returns true if 'arrItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItem()
    {
        return count($this->get(self::ARRITEM)) !== 0;
    }

    /**
     * Returns 'arrItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEM));
    }

    /**
     * Returns element from 'arrItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemAt($offset)
    {
        return $this->get(self::ARRITEM, $offset);
    }

    /**
     * Returns count of 'arrItem' list
     *
     * @return int
     */
    public function getArrItemCount()
    {
        return $this->count(self::ARRITEM);
    }

    /**
     * Sets value of 'nGuildDoanateType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuildDoanateType($value)
    {
        return $this->set(self::NGUILDDOANATETYPE, $value);
    }

    /**
     * Returns value of 'nGuildDoanateType' property
     *
     * @return integer
     */
    public function getNGuildDoanateType()
    {
        $value = $this->get(self::NGUILDDOANATETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuildDoanateType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuildDoanateType()
    {
        return $this->get(self::NGUILDDOANATETYPE) !== null;
    }

    /**
     * Appends value to 'arrDancePlayer' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrDancePlayer($value)
    {
        return $this->append(self::ARRDANCEPLAYER, $value);
    }

    /**
     * Clears 'arrDancePlayer' list
     *
     * @return null
     */
    public function clearArrDancePlayer()
    {
        return $this->clear(self::ARRDANCEPLAYER);
    }

    /**
     * Returns 'arrDancePlayer' list
     *
     * @return integer[]
     */
    public function getArrDancePlayer()
    {
        return $this->get(self::ARRDANCEPLAYER);
    }

    /**
     * Returns true if 'arrDancePlayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDancePlayer()
    {
        return count($this->get(self::ARRDANCEPLAYER)) !== 0;
    }

    /**
     * Returns 'arrDancePlayer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDancePlayerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDANCEPLAYER));
    }

    /**
     * Returns element from 'arrDancePlayer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDancePlayerAt($offset)
    {
        return $this->get(self::ARRDANCEPLAYER, $offset);
    }

    /**
     * Returns count of 'arrDancePlayer' list
     *
     * @return int
     */
    public function getArrDancePlayerCount()
    {
        return $this->count(self::ARRDANCEPLAYER);
    }

    /**
     * Appends value to 'arrScore' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrScore($value)
    {
        return $this->append(self::ARRSCORE, $value);
    }

    /**
     * Clears 'arrScore' list
     *
     * @return null
     */
    public function clearArrScore()
    {
        return $this->clear(self::ARRSCORE);
    }

    /**
     * Returns 'arrScore' list
     *
     * @return integer[]
     */
    public function getArrScore()
    {
        return $this->get(self::ARRSCORE);
    }

    /**
     * Returns true if 'arrScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrScore()
    {
        return count($this->get(self::ARRSCORE)) !== 0;
    }

    /**
     * Returns 'arrScore' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrScoreIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSCORE));
    }

    /**
     * Returns element from 'arrScore' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrScoreAt($offset)
    {
        return $this->get(self::ARRSCORE, $offset);
    }

    /**
     * Returns count of 'arrScore' list
     *
     * @return int
     */
    public function getArrScoreCount()
    {
        return $this->count(self::ARRSCORE);
    }
}
}