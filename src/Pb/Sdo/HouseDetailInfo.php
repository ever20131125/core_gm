<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HouseDetailInfo message
 */
class HouseDetailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STHOUSEINFO = 1;
    const ARRFLOORINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STHOUSEINFO => array(
            'name' => 'stHouseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseGeneralInfo'
        ),
        self::ARRFLOORINFO => array(
            'name' => 'arrFloorInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FloorInfo'
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
        $this->values[self::STHOUSEINFO] = null;
        $this->values[self::ARRFLOORINFO] = array();
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
     * Sets value of 'stHouseInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStHouseInfo(\Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value=null)
    {
        return $this->set(self::STHOUSEINFO, $value);
    }

    /**
     * Returns value of 'stHouseInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo
     */
    public function getStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO);
    }

    /**
     * Returns true if 'stHouseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO) !== null;
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
}
}