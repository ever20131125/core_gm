<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PlayerMissionList message
 */
class PlayerMissionList extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ARRTASK = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTASK => array(
            'name' => 'arrTask',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TaskInfo'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRTASK] = array();
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
     * Sets value of 'roleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleid($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleid' property
     *
     * @return integer
     */
    public function getRoleid()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleid()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrTask' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TaskInfo $value Value to append
     *
     * @return null
     */
    public function appendArrTask(\Xnhd\Core\Pb\Sdo\TaskInfo $value)
    {
        return $this->append(self::ARRTASK, $value);
    }

    /**
     * Clears 'arrTask' list
     *
     * @return null
     */
    public function clearArrTask()
    {
        return $this->clear(self::ARRTASK);
    }

    /**
     * Returns 'arrTask' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TaskInfo[]
     */
    public function getArrTask()
    {
        return $this->get(self::ARRTASK);
    }

    /**
     * Returns true if 'arrTask' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTask()
    {
        return count($this->get(self::ARRTASK)) !== 0;
    }

    /**
     * Returns 'arrTask' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTaskIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTASK));
    }

    /**
     * Returns element from 'arrTask' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TaskInfo
     */
    public function getArrTaskAt($offset)
    {
        return $this->get(self::ARRTASK, $offset);
    }

    /**
     * Returns count of 'arrTask' list
     *
     * @return int
     */
    public function getArrTaskCount()
    {
        return $this->count(self::ARRTASK);
    }
}
}