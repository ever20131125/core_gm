<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCouplePlanNoti message
 */
class RLSCouplePlanNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NEXP = 1;
    const NLEVEL = 2;
    const NPAYMENT = 3;
    const STPLAN = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEXP => array(
            'name' => 'nExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAYMENT => array(
            'name' => 'nPayment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STPLAN => array(
            'name' => 'stPlan',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CouplePlan'
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
        $this->values[self::NEXP] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::NPAYMENT] = null;
        $this->values[self::STPLAN] = array();
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
     * Sets value of 'nExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExp($value)
    {
        return $this->set(self::NEXP, $value);
    }

    /**
     * Returns value of 'nExp' property
     *
     * @return integer
     */
    public function getNExp()
    {
        $value = $this->get(self::NEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExp()
    {
        return $this->get(self::NEXP) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Sets value of 'nPayment' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPayment($value)
    {
        return $this->set(self::NPAYMENT, $value);
    }

    /**
     * Returns value of 'nPayment' property
     *
     * @return integer
     */
    public function getNPayment()
    {
        $value = $this->get(self::NPAYMENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPayment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPayment()
    {
        return $this->get(self::NPAYMENT) !== null;
    }

    /**
     * Appends value to 'stPlan' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CouplePlan $value Value to append
     *
     * @return null
     */
    public function appendStPlan(\Xnhd\Core\Pb\Sdo\CouplePlan $value)
    {
        return $this->append(self::STPLAN, $value);
    }

    /**
     * Clears 'stPlan' list
     *
     * @return null
     */
    public function clearStPlan()
    {
        return $this->clear(self::STPLAN);
    }

    /**
     * Returns 'stPlan' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CouplePlan[]
     */
    public function getStPlan()
    {
        return $this->get(self::STPLAN);
    }

    /**
     * Returns true if 'stPlan' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPlan()
    {
        return count($this->get(self::STPLAN)) !== 0;
    }

    /**
     * Returns 'stPlan' iterator
     *
     * @return \ArrayIterator
     */
    public function getStPlanIterator()
    {
        return new \ArrayIterator($this->get(self::STPLAN));
    }

    /**
     * Returns element from 'stPlan' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CouplePlan
     */
    public function getStPlanAt($offset)
    {
        return $this->get(self::STPLAN, $offset);
    }

    /**
     * Returns count of 'stPlan' list
     *
     * @return int
     */
    public function getStPlanCount()
    {
        return $this->count(self::STPLAN);
    }
}
}