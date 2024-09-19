<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoundGoalsToFile message
 */
class RoundGoalsToFile extends \ProtobufMessage
{
    /* Field index constants */
    const ARRROUNDGOALS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRROUNDGOALS => array(
            'name' => 'arrRoundGoals',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoundGoal'
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
        $this->values[self::ARRROUNDGOALS] = array();
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
     * Appends value to 'arrRoundGoals' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoundGoal $value Value to append
     *
     * @return null
     */
    public function appendArrRoundGoals(\Xnhd\Core\Pb\Sdo\RoundGoal $value)
    {
        return $this->append(self::ARRROUNDGOALS, $value);
    }

    /**
     * Clears 'arrRoundGoals' list
     *
     * @return null
     */
    public function clearArrRoundGoals()
    {
        return $this->clear(self::ARRROUNDGOALS);
    }

    /**
     * Returns 'arrRoundGoals' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoundGoal[]
     */
    public function getArrRoundGoals()
    {
        return $this->get(self::ARRROUNDGOALS);
    }

    /**
     * Returns true if 'arrRoundGoals' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoundGoals()
    {
        return count($this->get(self::ARRROUNDGOALS)) !== 0;
    }

    /**
     * Returns 'arrRoundGoals' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoundGoalsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROUNDGOALS));
    }

    /**
     * Returns element from 'arrRoundGoals' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoundGoal
     */
    public function getArrRoundGoalsAt($offset)
    {
        return $this->get(self::ARRROUNDGOALS, $offset);
    }

    /**
     * Returns count of 'arrRoundGoals' list
     *
     * @return int
     */
    public function getArrRoundGoalsCount()
    {
        return $this->count(self::ARRROUNDGOALS);
    }
}
}