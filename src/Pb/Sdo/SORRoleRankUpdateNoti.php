<?php
/**
 * Auto generated from sortserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SORRoleRankUpdateNoti message
 */
class SORRoleRankUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const SORTTYPE = 1;
    const NOPTION = 2;
    const NROLEID = 3;
    const NOLDKEY = 4;
    const NOLDRANK = 5;
    const NNEWKEY = 6;
    const NNEWRANK = 7;
    const TOTALCOUNT = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOLDKEY => array(
            'name' => 'nOldKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOLDRANK => array(
            'name' => 'nOldRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWKEY => array(
            'name' => 'nNewKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWRANK => array(
            'name' => 'nNewRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALCOUNT => array(
            'name' => 'totalCount',
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
        $this->values[self::SORTTYPE] = self::$fields[self::SORTTYPE]['default'];
        $this->values[self::NOPTION] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NOLDKEY] = null;
        $this->values[self::NOLDRANK] = null;
        $this->values[self::NNEWKEY] = null;
        $this->values[self::NNEWRANK] = null;
        $this->values[self::TOTALCOUNT] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nOldKey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOldKey($value)
    {
        return $this->set(self::NOLDKEY, $value);
    }

    /**
     * Returns value of 'nOldKey' property
     *
     * @return integer
     */
    public function getNOldKey()
    {
        $value = $this->get(self::NOLDKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOldKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOldKey()
    {
        return $this->get(self::NOLDKEY) !== null;
    }

    /**
     * Sets value of 'nOldRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOldRank($value)
    {
        return $this->set(self::NOLDRANK, $value);
    }

    /**
     * Returns value of 'nOldRank' property
     *
     * @return integer
     */
    public function getNOldRank()
    {
        $value = $this->get(self::NOLDRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOldRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOldRank()
    {
        return $this->get(self::NOLDRANK) !== null;
    }

    /**
     * Sets value of 'nNewKey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewKey($value)
    {
        return $this->set(self::NNEWKEY, $value);
    }

    /**
     * Returns value of 'nNewKey' property
     *
     * @return integer
     */
    public function getNNewKey()
    {
        $value = $this->get(self::NNEWKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewKey()
    {
        return $this->get(self::NNEWKEY) !== null;
    }

    /**
     * Sets value of 'nNewRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewRank($value)
    {
        return $this->set(self::NNEWRANK, $value);
    }

    /**
     * Returns value of 'nNewRank' property
     *
     * @return integer
     */
    public function getNNewRank()
    {
        $value = $this->get(self::NNEWRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewRank()
    {
        return $this->get(self::NNEWRANK) !== null;
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
}
}