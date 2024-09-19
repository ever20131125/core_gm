<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleBufferInfo message
 */
class RoleBufferInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ARRBUFFERINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRBUFFERINFO => array(
            'name' => 'arrBufferInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BufferInfo'
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
        $this->values[self::ARRBUFFERINFO] = array();
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
     * Appends value to 'arrBufferInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BufferInfo $value Value to append
     *
     * @return null
     */
    public function appendArrBufferInfo(\Xnhd\Core\Pb\Sdo\BufferInfo $value)
    {
        return $this->append(self::ARRBUFFERINFO, $value);
    }

    /**
     * Clears 'arrBufferInfo' list
     *
     * @return null
     */
    public function clearArrBufferInfo()
    {
        return $this->clear(self::ARRBUFFERINFO);
    }

    /**
     * Returns 'arrBufferInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BufferInfo[]
     */
    public function getArrBufferInfo()
    {
        return $this->get(self::ARRBUFFERINFO);
    }

    /**
     * Returns true if 'arrBufferInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBufferInfo()
    {
        return count($this->get(self::ARRBUFFERINFO)) !== 0;
    }

    /**
     * Returns 'arrBufferInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBufferInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBUFFERINFO));
    }

    /**
     * Returns element from 'arrBufferInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BufferInfo
     */
    public function getArrBufferInfoAt($offset)
    {
        return $this->get(self::ARRBUFFERINFO, $offset);
    }

    /**
     * Returns count of 'arrBufferInfo' list
     *
     * @return int
     */
    public function getArrBufferInfoCount()
    {
        return $this->count(self::ARRBUFFERINFO);
    }
}
}