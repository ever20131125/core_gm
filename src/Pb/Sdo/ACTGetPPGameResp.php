<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetPPGameResp message
 */
class ACTGetPPGameResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NDAYCOUNT = 2;
    const ARRCOST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NDAYCOUNT => array(
            'name' => 'nDayCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCOST => array(
            'name' => 'arrCost',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::NDAYCOUNT] = null;
        $this->values[self::ARRCOST] = array();
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
     * Sets value of 'nDayCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDayCount($value)
    {
        return $this->set(self::NDAYCOUNT, $value);
    }

    /**
     * Returns value of 'nDayCount' property
     *
     * @return integer
     */
    public function getNDayCount()
    {
        $value = $this->get(self::NDAYCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDayCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDayCount()
    {
        return $this->get(self::NDAYCOUNT) !== null;
    }

    /**
     * Appends value to 'arrCost' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrCost(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRCOST, $value);
    }

    /**
     * Clears 'arrCost' list
     *
     * @return null
     */
    public function clearArrCost()
    {
        return $this->clear(self::ARRCOST);
    }

    /**
     * Returns 'arrCost' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrCost()
    {
        return $this->get(self::ARRCOST);
    }

    /**
     * Returns true if 'arrCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCost()
    {
        return count($this->get(self::ARRCOST)) !== 0;
    }

    /**
     * Returns 'arrCost' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCostIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOST));
    }

    /**
     * Returns element from 'arrCost' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrCostAt($offset)
    {
        return $this->get(self::ARRCOST, $offset);
    }

    /**
     * Returns count of 'arrCost' list
     *
     * @return int
     */
    public function getArrCostCount()
    {
        return $this->count(self::ARRCOST);
    }
}
}