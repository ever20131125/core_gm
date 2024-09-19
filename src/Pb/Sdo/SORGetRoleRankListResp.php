<?php
/**
 * Auto generated from sortserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SORGetRoleRankListResp message
 */
class SORGetRoleRankListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SORTTYPE = 2;
    const NOPTION = 3;
    const ARRROLEID = 4;
    const ARRRANK = 5;
    const ARRKEY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SORTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SortType::enmSortType_None,
            'name' => 'sortType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRRANK => array(
            'name' => 'arrRank',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRKEY => array(
            'name' => 'arrKey',
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
        $this->values[self::SORTTYPE] = self::$fields[self::SORTTYPE]['default'];
        $this->values[self::NOPTION] = null;
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRRANK] = array();
        $this->values[self::ARRKEY] = array();
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
     * Sets value of 'sortType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSortType($value)
    {
        return $this->set(self::SORTTYPE, $value);
    }

    /**
     * Returns value of 'sortType' property
     *
     * @return integer
     */
    public function getSortType()
    {
        $value = $this->get(self::SORTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sortType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSortType()
    {
        return $this->get(self::SORTTYPE) !== null;
    }

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
    }

    /**
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Appends value to 'arrRank' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRank($value)
    {
        return $this->append(self::ARRRANK, $value);
    }

    /**
     * Clears 'arrRank' list
     *
     * @return null
     */
    public function clearArrRank()
    {
        return $this->clear(self::ARRRANK);
    }

    /**
     * Returns 'arrRank' list
     *
     * @return integer[]
     */
    public function getArrRank()
    {
        return $this->get(self::ARRRANK);
    }

    /**
     * Returns true if 'arrRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRank()
    {
        return count($this->get(self::ARRRANK)) !== 0;
    }

    /**
     * Returns 'arrRank' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRankIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRANK));
    }

    /**
     * Returns element from 'arrRank' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRankAt($offset)
    {
        return $this->get(self::ARRRANK, $offset);
    }

    /**
     * Returns count of 'arrRank' list
     *
     * @return int
     */
    public function getArrRankCount()
    {
        return $this->count(self::ARRRANK);
    }

    /**
     * Appends value to 'arrKey' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrKey($value)
    {
        return $this->append(self::ARRKEY, $value);
    }

    /**
     * Clears 'arrKey' list
     *
     * @return null
     */
    public function clearArrKey()
    {
        return $this->clear(self::ARRKEY);
    }

    /**
     * Returns 'arrKey' list
     *
     * @return integer[]
     */
    public function getArrKey()
    {
        return $this->get(self::ARRKEY);
    }

    /**
     * Returns true if 'arrKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrKey()
    {
        return count($this->get(self::ARRKEY)) !== 0;
    }

    /**
     * Returns 'arrKey' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrKeyIterator()
    {
        return new \ArrayIterator($this->get(self::ARRKEY));
    }

    /**
     * Returns element from 'arrKey' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrKeyAt($offset)
    {
        return $this->get(self::ARRKEY, $offset);
    }

    /**
     * Returns count of 'arrKey' list
     *
     * @return int
     */
    public function getArrKeyCount()
    {
        return $this->count(self::ARRKEY);
    }
}
}