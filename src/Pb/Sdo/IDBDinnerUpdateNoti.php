<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBDinnerUpdateNoti message
 */
class IDBDinnerUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRDINNERINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRDINNERINFO => array(
            'name' => 'arrDinnerInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\DinnerInfo'
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
        $this->values[self::ARRDINNERINFO] = array();
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
     * Appends value to 'arrDinnerInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\DinnerInfo $value Value to append
     *
     * @return null
     */
    public function appendArrDinnerInfo(\Xnhd\Core\Pb\Sdo\DinnerInfo $value)
    {
        return $this->append(self::ARRDINNERINFO, $value);
    }

    /**
     * Clears 'arrDinnerInfo' list
     *
     * @return null
     */
    public function clearArrDinnerInfo()
    {
        return $this->clear(self::ARRDINNERINFO);
    }

    /**
     * Returns 'arrDinnerInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\DinnerInfo[]
     */
    public function getArrDinnerInfo()
    {
        return $this->get(self::ARRDINNERINFO);
    }

    /**
     * Returns true if 'arrDinnerInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDinnerInfo()
    {
        return count($this->get(self::ARRDINNERINFO)) !== 0;
    }

    /**
     * Returns 'arrDinnerInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDinnerInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDINNERINFO));
    }

    /**
     * Returns element from 'arrDinnerInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\DinnerInfo
     */
    public function getArrDinnerInfoAt($offset)
    {
        return $this->get(self::ARRDINNERINFO, $offset);
    }

    /**
     * Returns count of 'arrDinnerInfo' list
     *
     * @return int
     */
    public function getArrDinnerInfoCount()
    {
        return $this->count(self::ARRDINNERINFO);
    }
}
}