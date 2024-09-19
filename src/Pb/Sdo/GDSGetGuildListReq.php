<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetGuildListReq message
 */
class GDSGetGuildListReq extends \ProtobufMessage
{
    /* Field index constants */
    const GETGUILDINFOTYPE = 1;
    const ROLEID = 2;
    const FROMINDEX = 3;
    const TOINDEX = 4;
    const ARRGUILDID = 5;
    const ARRFILTER = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GETGUILDINFOTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GetGuildInfoType::enmGetGuildInfo_Invalid,
            'name' => 'getGuildInfoType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROMINDEX => array(
            'name' => 'fromIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOINDEX => array(
            'name' => 'toIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGUILDID => array(
            'name' => 'arrGuildID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFILTER => array(
            'name' => 'arrFilter',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildFilter'
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
        $this->values[self::GETGUILDINFOTYPE] = self::$fields[self::GETGUILDINFOTYPE]['default'];
        $this->values[self::ROLEID] = null;
        $this->values[self::FROMINDEX] = null;
        $this->values[self::TOINDEX] = null;
        $this->values[self::ARRGUILDID] = array();
        $this->values[self::ARRFILTER] = array();
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
     * Sets value of 'getGuildInfoType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGetGuildInfoType($value)
    {
        return $this->set(self::GETGUILDINFOTYPE, $value);
    }

    /**
     * Returns value of 'getGuildInfoType' property
     *
     * @return integer
     */
    public function getGetGuildInfoType()
    {
        $value = $this->get(self::GETGUILDINFOTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'getGuildInfoType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetGuildInfoType()
    {
        return $this->get(self::GETGUILDINFOTYPE) !== null;
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
     * Sets value of 'fromIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFromIndex($value)
    {
        return $this->set(self::FROMINDEX, $value);
    }

    /**
     * Returns value of 'fromIndex' property
     *
     * @return integer
     */
    public function getFromIndex()
    {
        $value = $this->get(self::FROMINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fromIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromIndex()
    {
        return $this->get(self::FROMINDEX) !== null;
    }

    /**
     * Sets value of 'toIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setToIndex($value)
    {
        return $this->set(self::TOINDEX, $value);
    }

    /**
     * Returns value of 'toIndex' property
     *
     * @return integer
     */
    public function getToIndex()
    {
        $value = $this->get(self::TOINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'toIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToIndex()
    {
        return $this->get(self::TOINDEX) !== null;
    }

    /**
     * Appends value to 'arrGuildID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGuildID($value)
    {
        return $this->append(self::ARRGUILDID, $value);
    }

    /**
     * Clears 'arrGuildID' list
     *
     * @return null
     */
    public function clearArrGuildID()
    {
        return $this->clear(self::ARRGUILDID);
    }

    /**
     * Returns 'arrGuildID' list
     *
     * @return integer[]
     */
    public function getArrGuildID()
    {
        return $this->get(self::ARRGUILDID);
    }

    /**
     * Returns true if 'arrGuildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGuildID()
    {
        return count($this->get(self::ARRGUILDID)) !== 0;
    }

    /**
     * Returns 'arrGuildID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGuildIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGUILDID));
    }

    /**
     * Returns element from 'arrGuildID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGuildIDAt($offset)
    {
        return $this->get(self::ARRGUILDID, $offset);
    }

    /**
     * Returns count of 'arrGuildID' list
     *
     * @return int
     */
    public function getArrGuildIDCount()
    {
        return $this->count(self::ARRGUILDID);
    }

    /**
     * Appends value to 'arrFilter' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildFilter $value Value to append
     *
     * @return null
     */
    public function appendArrFilter(\Xnhd\Core\Pb\Sdo\GuildFilter $value)
    {
        return $this->append(self::ARRFILTER, $value);
    }

    /**
     * Clears 'arrFilter' list
     *
     * @return null
     */
    public function clearArrFilter()
    {
        return $this->clear(self::ARRFILTER);
    }

    /**
     * Returns 'arrFilter' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildFilter[]
     */
    public function getArrFilter()
    {
        return $this->get(self::ARRFILTER);
    }

    /**
     * Returns true if 'arrFilter' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFilter()
    {
        return count($this->get(self::ARRFILTER)) !== 0;
    }

    /**
     * Returns 'arrFilter' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFilterIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFILTER));
    }

    /**
     * Returns element from 'arrFilter' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildFilter
     */
    public function getArrFilterAt($offset)
    {
        return $this->get(self::ARRFILTER, $offset);
    }

    /**
     * Returns count of 'arrFilter' list
     *
     * @return int
     */
    public function getArrFilterCount()
    {
        return $this->count(self::ARRFILTER);
    }
}
}