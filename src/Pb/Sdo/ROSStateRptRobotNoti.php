<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSStateRptRobotNoti message
 */
class ROSStateRptRobotNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROBOTID = 1;
    const STAT_DATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROBOTID => array(
            'name' => 'robotid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAT_DATA => array(
            'name' => 'stat_data',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_StateData'
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
        $this->values[self::ROBOTID] = null;
        $this->values[self::STAT_DATA] = array();
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
     * Sets value of 'robotid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRobotid($value)
    {
        return $this->set(self::ROBOTID, $value);
    }

    /**
     * Returns value of 'robotid' property
     *
     * @return integer
     */
    public function getRobotid()
    {
        $value = $this->get(self::ROBOTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'robotid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRobotid()
    {
        return $this->get(self::ROBOTID) !== null;
    }

    /**
     * Appends value to 'stat_data' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_StateData $value Value to append
     *
     * @return null
     */
    public function appendStatData(\Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_StateData $value)
    {
        return $this->append(self::STAT_DATA, $value);
    }

    /**
     * Clears 'stat_data' list
     *
     * @return null
     */
    public function clearStatData()
    {
        return $this->clear(self::STAT_DATA);
    }

    /**
     * Returns 'stat_data' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_StateData[]
     */
    public function getStatData()
    {
        return $this->get(self::STAT_DATA);
    }

    /**
     * Returns true if 'stat_data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatData()
    {
        return count($this->get(self::STAT_DATA)) !== 0;
    }

    /**
     * Returns 'stat_data' iterator
     *
     * @return \ArrayIterator
     */
    public function getStatDataIterator()
    {
        return new \ArrayIterator($this->get(self::STAT_DATA));
    }

    /**
     * Returns element from 'stat_data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ROSStateRptRobotNoti_StateData
     */
    public function getStatDataAt($offset)
    {
        return $this->get(self::STAT_DATA, $offset);
    }

    /**
     * Returns count of 'stat_data' list
     *
     * @return int
     */
    public function getStatDataCount()
    {
        return $this->count(self::STAT_DATA);
    }
}
}