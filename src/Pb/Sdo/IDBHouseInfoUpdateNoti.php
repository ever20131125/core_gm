<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBHouseInfoUpdateNoti message
 */
class IDBHouseInfoUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NHOUSEINFOTYPE = 2;
    const HOUSEINFO = 3;
    const ARRFLOORINFO = 4;
    const ADDEXP = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOUSEINFOTYPE => array(
            'name' => 'nHouseInfoType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOUSEINFO => array(
            'name' => 'houseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseGeneralInfo'
        ),
        self::ARRFLOORINFO => array(
            'name' => 'arrFloorInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FloorInfo'
        ),
        self::ADDEXP => array(
            'name' => 'addExp',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NHOUSEINFOTYPE] = null;
        $this->values[self::HOUSEINFO] = null;
        $this->values[self::ARRFLOORINFO] = array();
        $this->values[self::ADDEXP] = null;
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
     * Sets value of 'nHouseInfoType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHouseInfoType($value)
    {
        return $this->set(self::NHOUSEINFOTYPE, $value);
    }

    /**
     * Returns value of 'nHouseInfoType' property
     *
     * @return integer
     */
    public function getNHouseInfoType()
    {
        $value = $this->get(self::NHOUSEINFOTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHouseInfoType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHouseInfoType()
    {
        return $this->get(self::NHOUSEINFOTYPE) !== null;
    }

    /**
     * Sets value of 'houseInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value Property value
     *
     * @return null
     */
    public function setHouseInfo(\Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value=null)
    {
        return $this->set(self::HOUSEINFO, $value);
    }

    /**
     * Returns value of 'houseInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo
     */
    public function getHouseInfo()
    {
        return $this->get(self::HOUSEINFO);
    }

    /**
     * Returns true if 'houseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHouseInfo()
    {
        return $this->get(self::HOUSEINFO) !== null;
    }

    /**
     * Appends value to 'arrFloorInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FloorInfo $value Value to append
     *
     * @return null
     */
    public function appendArrFloorInfo(\Xnhd\Core\Pb\Sdo\FloorInfo $value)
    {
        return $this->append(self::ARRFLOORINFO, $value);
    }

    /**
     * Clears 'arrFloorInfo' list
     *
     * @return null
     */
    public function clearArrFloorInfo()
    {
        return $this->clear(self::ARRFLOORINFO);
    }

    /**
     * Returns 'arrFloorInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FloorInfo[]
     */
    public function getArrFloorInfo()
    {
        return $this->get(self::ARRFLOORINFO);
    }

    /**
     * Returns true if 'arrFloorInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFloorInfo()
    {
        return count($this->get(self::ARRFLOORINFO)) !== 0;
    }

    /**
     * Returns 'arrFloorInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFloorInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFLOORINFO));
    }

    /**
     * Returns element from 'arrFloorInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FloorInfo
     */
    public function getArrFloorInfoAt($offset)
    {
        return $this->get(self::ARRFLOORINFO, $offset);
    }

    /**
     * Returns count of 'arrFloorInfo' list
     *
     * @return int
     */
    public function getArrFloorInfoCount()
    {
        return $this->count(self::ARRFLOORINFO);
    }

    /**
     * Sets value of 'addExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddExp($value)
    {
        return $this->set(self::ADDEXP, $value);
    }

    /**
     * Returns value of 'addExp' property
     *
     * @return integer
     */
    public function getAddExp()
    {
        $value = $this->get(self::ADDEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'addExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddExp()
    {
        return $this->get(self::ADDEXP) !== null;
    }
}
}