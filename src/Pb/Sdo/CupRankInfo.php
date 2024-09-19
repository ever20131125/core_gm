<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CupRankInfo message
 */
class CupRankInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NRANKVALUE = 2;
    const CUPINFOLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANKVALUE => array(
            'name' => 'nRankValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CUPINFOLIST => array(
            'name' => 'cupInfoList',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NRANKVALUE] = null;
        $this->values[self::CUPINFOLIST] = array();
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
     * Sets value of 'nRankValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRankValue($value)
    {
        return $this->set(self::NRANKVALUE, $value);
    }

    /**
     * Returns value of 'nRankValue' property
     *
     * @return integer
     */
    public function getNRankValue()
    {
        $value = $this->get(self::NRANKVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRankValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRankValue()
    {
        return $this->get(self::NRANKVALUE) !== null;
    }

    /**
     * Appends value to 'cupInfoList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendCupInfoList($value)
    {
        return $this->append(self::CUPINFOLIST, $value);
    }

    /**
     * Clears 'cupInfoList' list
     *
     * @return null
     */
    public function clearCupInfoList()
    {
        return $this->clear(self::CUPINFOLIST);
    }

    /**
     * Returns 'cupInfoList' list
     *
     * @return integer[]
     */
    public function getCupInfoList()
    {
        return $this->get(self::CUPINFOLIST);
    }

    /**
     * Returns true if 'cupInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCupInfoList()
    {
        return count($this->get(self::CUPINFOLIST)) !== 0;
    }

    /**
     * Returns 'cupInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getCupInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::CUPINFOLIST));
    }

    /**
     * Returns element from 'cupInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getCupInfoListAt($offset)
    {
        return $this->get(self::CUPINFOLIST, $offset);
    }

    /**
     * Returns count of 'cupInfoList' list
     *
     * @return int
     */
    public function getCupInfoListCount()
    {
        return $this->count(self::CUPINFOLIST);
    }
}
}