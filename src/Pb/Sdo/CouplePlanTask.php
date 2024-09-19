<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CouplePlanTask message
 */
class CouplePlanTask extends \ProtobufMessage
{
    /* Field index constants */
    const NSTEP = 1;
    const NINDEX = 2;
    const NPROCESS = 3;
    const TASKTATUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSTEP => array(
            'name' => 'nStep',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NINDEX => array(
            'name' => 'nIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROCESS => array(
            'name' => 'nProcess',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TASKTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_UnReceive,
            'name' => 'tasktatus',
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
        $this->values[self::NSTEP] = null;
        $this->values[self::NINDEX] = null;
        $this->values[self::NPROCESS] = null;
        $this->values[self::TASKTATUS] = self::$fields[self::TASKTATUS]['default'];
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
     * Sets value of 'nStep' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStep($value)
    {
        return $this->set(self::NSTEP, $value);
    }

    /**
     * Returns value of 'nStep' property
     *
     * @return integer
     */
    public function getNStep()
    {
        $value = $this->get(self::NSTEP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStep' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStep()
    {
        return $this->get(self::NSTEP) !== null;
    }

    /**
     * Sets value of 'nIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIndex($value)
    {
        return $this->set(self::NINDEX, $value);
    }

    /**
     * Returns value of 'nIndex' property
     *
     * @return integer
     */
    public function getNIndex()
    {
        $value = $this->get(self::NINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIndex()
    {
        return $this->get(self::NINDEX) !== null;
    }

    /**
     * Sets value of 'nProcess' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNProcess($value)
    {
        return $this->set(self::NPROCESS, $value);
    }

    /**
     * Returns value of 'nProcess' property
     *
     * @return integer
     */
    public function getNProcess()
    {
        $value = $this->get(self::NPROCESS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nProcess' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNProcess()
    {
        return $this->get(self::NPROCESS) !== null;
    }

    /**
     * Sets value of 'tasktatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTasktatus($value)
    {
        return $this->set(self::TASKTATUS, $value);
    }

    /**
     * Returns value of 'tasktatus' property
     *
     * @return integer
     */
    public function getTasktatus()
    {
        $value = $this->get(self::TASKTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tasktatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTasktatus()
    {
        return $this->get(self::TASKTATUS) !== null;
    }
}
}