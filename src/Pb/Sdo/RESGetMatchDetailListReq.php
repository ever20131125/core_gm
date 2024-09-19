<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetMatchDetailListReq message
 */
class RESGetMatchDetailListReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRDANCEID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRDANCEID => array(
            'name' => 'arrDanceID',
            'repeated' => true,
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
        $this->values[self::ARRDANCEID] = array();
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
     * Appends value to 'arrDanceID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrDanceID($value)
    {
        return $this->append(self::ARRDANCEID, $value);
    }

    /**
     * Clears 'arrDanceID' list
     *
     * @return null
     */
    public function clearArrDanceID()
    {
        return $this->clear(self::ARRDANCEID);
    }

    /**
     * Returns 'arrDanceID' list
     *
     * @return integer[]
     */
    public function getArrDanceID()
    {
        return $this->get(self::ARRDANCEID);
    }

    /**
     * Returns true if 'arrDanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDanceID()
    {
        return count($this->get(self::ARRDANCEID)) !== 0;
    }

    /**
     * Returns 'arrDanceID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDanceIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDANCEID));
    }

    /**
     * Returns element from 'arrDanceID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDanceIDAt($offset)
    {
        return $this->get(self::ARRDANCEID, $offset);
    }

    /**
     * Returns count of 'arrDanceID' list
     *
     * @return int
     */
    public function getArrDanceIDCount()
    {
        return $this->count(self::ARRDANCEID);
    }
}
}