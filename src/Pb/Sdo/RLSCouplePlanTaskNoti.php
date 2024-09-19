<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCouplePlanTaskNoti message
 */
class RLSCouplePlanTaskNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STINFO => array(
            'name' => 'stInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CouplePlanTask'
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
        $this->values[self::STINFO] = array();
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
     * Appends value to 'stInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CouplePlanTask $value Value to append
     *
     * @return null
     */
    public function appendStInfo(\Xnhd\Core\Pb\Sdo\CouplePlanTask $value)
    {
        return $this->append(self::STINFO, $value);
    }

    /**
     * Clears 'stInfo' list
     *
     * @return null
     */
    public function clearStInfo()
    {
        return $this->clear(self::STINFO);
    }

    /**
     * Returns 'stInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CouplePlanTask[]
     */
    public function getStInfo()
    {
        return $this->get(self::STINFO);
    }

    /**
     * Returns true if 'stInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStInfo()
    {
        return count($this->get(self::STINFO)) !== 0;
    }

    /**
     * Returns 'stInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getStInfoIterator()
    {
        return new \ArrayIterator($this->get(self::STINFO));
    }

    /**
     * Returns element from 'stInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CouplePlanTask
     */
    public function getStInfoAt($offset)
    {
        return $this->get(self::STINFO, $offset);
    }

    /**
     * Returns count of 'stInfo' list
     *
     * @return int
     */
    public function getStInfoCount()
    {
        return $this->count(self::STINFO);
    }
}
}