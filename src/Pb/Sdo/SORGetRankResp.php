<?php
/**
 * Auto generated from sortserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SORGetRankResp message
 */
class SORGetRankResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SORTTYPE = 2;
    const NOPTION1 = 3;
    const NOPTION2 = 4;
    const NOPTION = 5;
    const STARTINDEX = 6;
    const TOTALCOUNT = 7;
    const ARRROLEINFO = 8;
    const ARRID = 9;
    const ARRKEY = 10;

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
        self::NOPTION1 => array(
            'name' => 'nOption1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION2 => array(
            'name' => 'nOption2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTINDEX => array(
            'name' => 'startIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALCOUNT => array(
            'name' => 'totalCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEINFO => array(
            'name' => 'arrRoleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::ARRID => array(
            'name' => 'arrID',
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
        $this->values[self::NOPTION1] = null;
        $this->values[self::NOPTION2] = null;
        $this->values[self::NOPTION] = null;
        $this->values[self::STARTINDEX] = null;
        $this->values[self::TOTALCOUNT] = null;
        $this->values[self::ARRROLEINFO] = array();
        $this->values[self::ARRID] = array();
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
     * Sets value of 'nOption1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption1($value)
    {
        return $this->set(self::NOPTION1, $value);
    }

    /**
     * Returns value of 'nOption1' property
     *
     * @return integer
     */
    public function getNOption1()
    {
        $value = $this->get(self::NOPTION1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption1()
    {
        return $this->get(self::NOPTION1) !== null;
    }

    /**
     * Sets value of 'nOption2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption2($value)
    {
        return $this->set(self::NOPTION2, $value);
    }

    /**
     * Returns value of 'nOption2' property
     *
     * @return integer
     */
    public function getNOption2()
    {
        $value = $this->get(self::NOPTION2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption2()
    {
        return $this->get(self::NOPTION2) !== null;
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
     * Sets value of 'startIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartIndex($value)
    {
        return $this->set(self::STARTINDEX, $value);
    }

    /**
     * Returns value of 'startIndex' property
     *
     * @return integer
     */
    public function getStartIndex()
    {
        $value = $this->get(self::STARTINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartIndex()
    {
        return $this->get(self::STARTINDEX) !== null;
    }

    /**
     * Sets value of 'totalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalCount($value)
    {
        return $this->set(self::TOTALCOUNT, $value);
    }

    /**
     * Returns value of 'totalCount' property
     *
     * @return integer
     */
    public function getTotalCount()
    {
        $value = $this->get(self::TOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalCount()
    {
        return $this->get(self::TOTALCOUNT) !== null;
    }

    /**
     * Appends value to 'arrRoleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value)
    {
        return $this->append(self::ARRROLEINFO, $value);
    }

    /**
     * Clears 'arrRoleInfo' list
     *
     * @return null
     */
    public function clearArrRoleInfo()
    {
        return $this->clear(self::ARRROLEINFO);
    }

    /**
     * Returns 'arrRoleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo[]
     */
    public function getArrRoleInfo()
    {
        return $this->get(self::ARRROLEINFO);
    }

    /**
     * Returns true if 'arrRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleInfo()
    {
        return count($this->get(self::ARRROLEINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEINFO));
    }

    /**
     * Returns element from 'arrRoleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getArrRoleInfoAt($offset)
    {
        return $this->get(self::ARRROLEINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleInfo' list
     *
     * @return int
     */
    public function getArrRoleInfoCount()
    {
        return $this->count(self::ARRROLEINFO);
    }

    /**
     * Appends value to 'arrID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrID($value)
    {
        return $this->append(self::ARRID, $value);
    }

    /**
     * Clears 'arrID' list
     *
     * @return null
     */
    public function clearArrID()
    {
        return $this->clear(self::ARRID);
    }

    /**
     * Returns 'arrID' list
     *
     * @return integer[]
     */
    public function getArrID()
    {
        return $this->get(self::ARRID);
    }

    /**
     * Returns true if 'arrID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrID()
    {
        return count($this->get(self::ARRID)) !== 0;
    }

    /**
     * Returns 'arrID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRID));
    }

    /**
     * Returns element from 'arrID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrIDAt($offset)
    {
        return $this->get(self::ARRID, $offset);
    }

    /**
     * Returns count of 'arrID' list
     *
     * @return int
     */
    public function getArrIDCount()
    {
        return $this->count(self::ARRID);
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