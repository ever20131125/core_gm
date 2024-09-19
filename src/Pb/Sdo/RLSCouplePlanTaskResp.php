<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCouplePlanTaskResp message
 */
class RLSCouplePlanTaskResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRTASK = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRTASK => array(
            'name' => 'arrTask',
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
        $this->values[self::NERRORCODE] = null;
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
     * Appends value to 'arrTask' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CouplePlanTask $value Value to append
     *
     * @return null
     */
    public function appendArrTask(\Xnhd\Core\Pb\Sdo\CouplePlanTask $value)
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
     * @return \Xnhd\Core\Pb\Sdo\CouplePlanTask[]
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
     * @return \Xnhd\Core\Pb\Sdo\CouplePlanTask
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