<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KPath message
 */
class KPath extends \ProtobufMessage
{
    /* Field index constants */
    const POINTS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::POINTS => array(
            'name' => 'points',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\KPoint'
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
        $this->values[self::POINTS] = array();
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
     * Appends value to 'points' list
     *
     * @param \Xnhd\Core\Pb\Sdo\KPoint $value Value to append
     *
     * @return null
     */
    public function appendPoints(\Xnhd\Core\Pb\Sdo\KPoint $value)
    {
        return $this->append(self::POINTS, $value);
    }

    /**
     * Clears 'points' list
     *
     * @return null
     */
    public function clearPoints()
    {
        return $this->clear(self::POINTS);
    }

    /**
     * Returns 'points' list
     *
     * @return \Xnhd\Core\Pb\Sdo\KPoint[]
     */
    public function getPoints()
    {
        return $this->get(self::POINTS);
    }

    /**
     * Returns true if 'points' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPoints()
    {
        return count($this->get(self::POINTS)) !== 0;
    }

    /**
     * Returns 'points' iterator
     *
     * @return \ArrayIterator
     */
    public function getPointsIterator()
    {
        return new \ArrayIterator($this->get(self::POINTS));
    }

    /**
     * Returns element from 'points' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\KPoint
     */
    public function getPointsAt($offset)
    {
        return $this->get(self::POINTS, $offset);
    }

    /**
     * Returns count of 'points' list
     *
     * @return int
     */
    public function getPointsCount()
    {
        return $this->count(self::POINTS);
    }
}
}