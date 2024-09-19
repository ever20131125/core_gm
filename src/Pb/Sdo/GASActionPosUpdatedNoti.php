<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASActionPosUpdatedNoti message
 */
class GASActionPosUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRSTAGEPOSINFO = 1;
    const ARRHOUSEPOSINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRSTAGEPOSINFO => array(
            'name' => 'arrStagePosInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\StagePosInfo'
        ),
        self::ARRHOUSEPOSINFO => array(
            'name' => 'arrHousePosInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HousePosInfo'
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
        $this->values[self::ARRSTAGEPOSINFO] = array();
        $this->values[self::ARRHOUSEPOSINFO] = array();
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
     * Appends value to 'arrStagePosInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\StagePosInfo $value Value to append
     *
     * @return null
     */
    public function appendArrStagePosInfo(\Xnhd\Core\Pb\Sdo\StagePosInfo $value)
    {
        return $this->append(self::ARRSTAGEPOSINFO, $value);
    }

    /**
     * Clears 'arrStagePosInfo' list
     *
     * @return null
     */
    public function clearArrStagePosInfo()
    {
        return $this->clear(self::ARRSTAGEPOSINFO);
    }

    /**
     * Returns 'arrStagePosInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\StagePosInfo[]
     */
    public function getArrStagePosInfo()
    {
        return $this->get(self::ARRSTAGEPOSINFO);
    }

    /**
     * Returns true if 'arrStagePosInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStagePosInfo()
    {
        return count($this->get(self::ARRSTAGEPOSINFO)) !== 0;
    }

    /**
     * Returns 'arrStagePosInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStagePosInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTAGEPOSINFO));
    }

    /**
     * Returns element from 'arrStagePosInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\StagePosInfo
     */
    public function getArrStagePosInfoAt($offset)
    {
        return $this->get(self::ARRSTAGEPOSINFO, $offset);
    }

    /**
     * Returns count of 'arrStagePosInfo' list
     *
     * @return int
     */
    public function getArrStagePosInfoCount()
    {
        return $this->count(self::ARRSTAGEPOSINFO);
    }

    /**
     * Appends value to 'arrHousePosInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HousePosInfo $value Value to append
     *
     * @return null
     */
    public function appendArrHousePosInfo(\Xnhd\Core\Pb\Sdo\HousePosInfo $value)
    {
        return $this->append(self::ARRHOUSEPOSINFO, $value);
    }

    /**
     * Clears 'arrHousePosInfo' list
     *
     * @return null
     */
    public function clearArrHousePosInfo()
    {
        return $this->clear(self::ARRHOUSEPOSINFO);
    }

    /**
     * Returns 'arrHousePosInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\HousePosInfo[]
     */
    public function getArrHousePosInfo()
    {
        return $this->get(self::ARRHOUSEPOSINFO);
    }

    /**
     * Returns true if 'arrHousePosInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHousePosInfo()
    {
        return count($this->get(self::ARRHOUSEPOSINFO)) !== 0;
    }

    /**
     * Returns 'arrHousePosInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHousePosInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHOUSEPOSINFO));
    }

    /**
     * Returns element from 'arrHousePosInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\HousePosInfo
     */
    public function getArrHousePosInfoAt($offset)
    {
        return $this->get(self::ARRHOUSEPOSINFO, $offset);
    }

    /**
     * Returns count of 'arrHousePosInfo' list
     *
     * @return int
     */
    public function getArrHousePosInfoCount()
    {
        return $this->count(self::ARRHOUSEPOSINFO);
    }
}
}