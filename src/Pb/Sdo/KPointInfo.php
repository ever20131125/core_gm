<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KPointInfo message
 */
class KPointInfo extends \ProtobufMessage
{
    /* Field index constants */
    const POINT = 1;
    const ATTRS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::POINT => array(
            'name' => 'point',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\KPoint'
        ),
        self::ATTRS => array(
            'name' => 'attrs',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\KAttr'
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
        $this->values[self::POINT] = null;
        $this->values[self::ATTRS] = array();
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
     * Sets value of 'point' property
     *
     * @param \Xnhd\Core\Pb\Sdo\KPoint $value Property value
     *
     * @return null
     */
    public function setPoint(\Xnhd\Core\Pb\Sdo\KPoint $value=null)
    {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return \Xnhd\Core\Pb\Sdo\KPoint
     */
    public function getPoint()
    {
        return $this->get(self::POINT);
    }

    /**
     * Returns true if 'point' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPoint()
    {
        return $this->get(self::POINT) !== null;
    }

    /**
     * Appends value to 'attrs' list
     *
     * @param \Xnhd\Core\Pb\Sdo\KAttr $value Value to append
     *
     * @return null
     */
    public function appendAttrs(\Xnhd\Core\Pb\Sdo\KAttr $value)
    {
        return $this->append(self::ATTRS, $value);
    }

    /**
     * Clears 'attrs' list
     *
     * @return null
     */
    public function clearAttrs()
    {
        return $this->clear(self::ATTRS);
    }

    /**
     * Returns 'attrs' list
     *
     * @return \Xnhd\Core\Pb\Sdo\KAttr[]
     */
    public function getAttrs()
    {
        return $this->get(self::ATTRS);
    }

    /**
     * Returns true if 'attrs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAttrs()
    {
        return count($this->get(self::ATTRS)) !== 0;
    }

    /**
     * Returns 'attrs' iterator
     *
     * @return \ArrayIterator
     */
    public function getAttrsIterator()
    {
        return new \ArrayIterator($this->get(self::ATTRS));
    }

    /**
     * Returns element from 'attrs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\KAttr
     */
    public function getAttrsAt($offset)
    {
        return $this->get(self::ATTRS, $offset);
    }

    /**
     * Returns count of 'attrs' list
     *
     * @return int
     */
    public function getAttrsCount()
    {
        return $this->count(self::ATTRS);
    }
}
}