<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RankUpdateEvent message
 */
class RankUpdateEvent extends \ProtobufMessage
{
    /* Field index constants */
    const RANKTYPE = 1;
    const ROLEID = 2;
    const RANKVALUE = 3;
    const KEY1 = 4;
    const KEY2 = 5;
    const KEY3 = 6;
    const OTHERID = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RANKTYPE => array(
            'name' => 'rankType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKVALUE => array(
            'name' => 'rankValue',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY1 => array(
            'name' => 'key1',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY2 => array(
            'name' => 'key2',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY3 => array(
            'name' => 'key3',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OTHERID => array(
            'name' => 'otherID',
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
        $this->values[self::RANKTYPE] = null;
        $this->values[self::ROLEID] = array();
        $this->values[self::RANKVALUE] = array();
        $this->values[self::KEY1] = array();
        $this->values[self::KEY2] = array();
        $this->values[self::KEY3] = array();
        $this->values[self::OTHERID] = array();
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
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }

    /**
     * Appends value to 'roleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRoleID($value)
    {
        return $this->append(self::ROLEID, $value);
    }

    /**
     * Clears 'roleID' list
     *
     * @return null
     */
    public function clearRoleID()
    {
        return $this->clear(self::ROLEID);
    }

    /**
     * Returns 'roleID' list
     *
     * @return integer[]
     */
    public function getRoleID()
    {
        return $this->get(self::ROLEID);
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return count($this->get(self::ROLEID)) !== 0;
    }

    /**
     * Returns 'roleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ROLEID));
    }

    /**
     * Returns element from 'roleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRoleIDAt($offset)
    {
        return $this->get(self::ROLEID, $offset);
    }

    /**
     * Returns count of 'roleID' list
     *
     * @return int
     */
    public function getRoleIDCount()
    {
        return $this->count(self::ROLEID);
    }

    /**
     * Appends value to 'rankValue' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRankValue($value)
    {
        return $this->append(self::RANKVALUE, $value);
    }

    /**
     * Clears 'rankValue' list
     *
     * @return null
     */
    public function clearRankValue()
    {
        return $this->clear(self::RANKVALUE);
    }

    /**
     * Returns 'rankValue' list
     *
     * @return integer[]
     */
    public function getRankValue()
    {
        return $this->get(self::RANKVALUE);
    }

    /**
     * Returns true if 'rankValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankValue()
    {
        return count($this->get(self::RANKVALUE)) !== 0;
    }

    /**
     * Returns 'rankValue' iterator
     *
     * @return \ArrayIterator
     */
    public function getRankValueIterator()
    {
        return new \ArrayIterator($this->get(self::RANKVALUE));
    }

    /**
     * Returns element from 'rankValue' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRankValueAt($offset)
    {
        return $this->get(self::RANKVALUE, $offset);
    }

    /**
     * Returns count of 'rankValue' list
     *
     * @return int
     */
    public function getRankValueCount()
    {
        return $this->count(self::RANKVALUE);
    }

    /**
     * Appends value to 'key1' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendKey1($value)
    {
        return $this->append(self::KEY1, $value);
    }

    /**
     * Clears 'key1' list
     *
     * @return null
     */
    public function clearKey1()
    {
        return $this->clear(self::KEY1);
    }

    /**
     * Returns 'key1' list
     *
     * @return integer[]
     */
    public function getKey1()
    {
        return $this->get(self::KEY1);
    }

    /**
     * Returns true if 'key1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey1()
    {
        return count($this->get(self::KEY1)) !== 0;
    }

    /**
     * Returns 'key1' iterator
     *
     * @return \ArrayIterator
     */
    public function getKey1Iterator()
    {
        return new \ArrayIterator($this->get(self::KEY1));
    }

    /**
     * Returns element from 'key1' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getKey1At($offset)
    {
        return $this->get(self::KEY1, $offset);
    }

    /**
     * Returns count of 'key1' list
     *
     * @return int
     */
    public function getKey1Count()
    {
        return $this->count(self::KEY1);
    }

    /**
     * Appends value to 'key2' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendKey2($value)
    {
        return $this->append(self::KEY2, $value);
    }

    /**
     * Clears 'key2' list
     *
     * @return null
     */
    public function clearKey2()
    {
        return $this->clear(self::KEY2);
    }

    /**
     * Returns 'key2' list
     *
     * @return integer[]
     */
    public function getKey2()
    {
        return $this->get(self::KEY2);
    }

    /**
     * Returns true if 'key2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey2()
    {
        return count($this->get(self::KEY2)) !== 0;
    }

    /**
     * Returns 'key2' iterator
     *
     * @return \ArrayIterator
     */
    public function getKey2Iterator()
    {
        return new \ArrayIterator($this->get(self::KEY2));
    }

    /**
     * Returns element from 'key2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getKey2At($offset)
    {
        return $this->get(self::KEY2, $offset);
    }

    /**
     * Returns count of 'key2' list
     *
     * @return int
     */
    public function getKey2Count()
    {
        return $this->count(self::KEY2);
    }

    /**
     * Appends value to 'key3' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendKey3($value)
    {
        return $this->append(self::KEY3, $value);
    }

    /**
     * Clears 'key3' list
     *
     * @return null
     */
    public function clearKey3()
    {
        return $this->clear(self::KEY3);
    }

    /**
     * Returns 'key3' list
     *
     * @return integer[]
     */
    public function getKey3()
    {
        return $this->get(self::KEY3);
    }

    /**
     * Returns true if 'key3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey3()
    {
        return count($this->get(self::KEY3)) !== 0;
    }

    /**
     * Returns 'key3' iterator
     *
     * @return \ArrayIterator
     */
    public function getKey3Iterator()
    {
        return new \ArrayIterator($this->get(self::KEY3));
    }

    /**
     * Returns element from 'key3' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getKey3At($offset)
    {
        return $this->get(self::KEY3, $offset);
    }

    /**
     * Returns count of 'key3' list
     *
     * @return int
     */
    public function getKey3Count()
    {
        return $this->count(self::KEY3);
    }

    /**
     * Appends value to 'otherID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOtherID($value)
    {
        return $this->append(self::OTHERID, $value);
    }

    /**
     * Clears 'otherID' list
     *
     * @return null
     */
    public function clearOtherID()
    {
        return $this->clear(self::OTHERID);
    }

    /**
     * Returns 'otherID' list
     *
     * @return integer[]
     */
    public function getOtherID()
    {
        return $this->get(self::OTHERID);
    }

    /**
     * Returns true if 'otherID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOtherID()
    {
        return count($this->get(self::OTHERID)) !== 0;
    }

    /**
     * Returns 'otherID' iterator
     *
     * @return \ArrayIterator
     */
    public function getOtherIDIterator()
    {
        return new \ArrayIterator($this->get(self::OTHERID));
    }

    /**
     * Returns element from 'otherID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOtherIDAt($offset)
    {
        return $this->get(self::OTHERID, $offset);
    }

    /**
     * Returns count of 'otherID' list
     *
     * @return int
     */
    public function getOtherIDCount()
    {
        return $this->count(self::OTHERID);
    }
}
}