<?php
/**
 * Auto generated from complex.proto at 2022-09-01 09:36:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleItemBuffer message
 */
class RoleItemBuffer extends \ProtobufMessage
{
    /* Field index constants */
    const ARRITEMBUFFER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRITEMBUFFER => array(
            'name' => 'arrItemBuffer',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBuffer'
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
        $this->values[self::ARRITEMBUFFER] = array();
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
     * Appends value to 'arrItemBuffer' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBuffer $value Value to append
     *
     * @return null
     */
    public function appendArrItemBuffer(\Xnhd\Core\Pb\Sdo\ItemBuffer $value)
    {
        return $this->append(self::ARRITEMBUFFER, $value);
    }

    /**
     * Clears 'arrItemBuffer' list
     *
     * @return null
     */
    public function clearArrItemBuffer()
    {
        return $this->clear(self::ARRITEMBUFFER);
    }

    /**
     * Returns 'arrItemBuffer' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBuffer[]
     */
    public function getArrItemBuffer()
    {
        return $this->get(self::ARRITEMBUFFER);
    }

    /**
     * Returns true if 'arrItemBuffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBuffer()
    {
        return count($this->get(self::ARRITEMBUFFER)) !== 0;
    }

    /**
     * Returns 'arrItemBuffer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBufferIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBUFFER));
    }

    /**
     * Returns element from 'arrItemBuffer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBuffer
     */
    public function getArrItemBufferAt($offset)
    {
        return $this->get(self::ARRITEMBUFFER, $offset);
    }

    /**
     * Returns count of 'arrItemBuffer' list
     *
     * @return int
     */
    public function getArrItemBufferCount()
    {
        return $this->count(self::ARRITEMBUFFER);
    }
}
}