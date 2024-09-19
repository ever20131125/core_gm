<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTPPGameEndResp message
 */
class ACTPPGameEndResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NDAYCOUNT = 2;
    const ARRITEMPRIZE = 3;

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
        self::ARRITEMPRIZE => array(
            'name' => 'arrItemPrize',
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
        $this->values[self::ARRITEMPRIZE] = array();
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
     * Appends value to 'arrItemPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemPrize(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMPRIZE, $value);
    }

    /**
     * Clears 'arrItemPrize' list
     *
     * @return null
     */
    public function clearArrItemPrize()
    {
        return $this->clear(self::ARRITEMPRIZE);
    }

    /**
     * Returns 'arrItemPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemPrize()
    {
        return $this->get(self::ARRITEMPRIZE);
    }

    /**
     * Returns true if 'arrItemPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemPrize()
    {
        return count($this->get(self::ARRITEMPRIZE)) !== 0;
    }

    /**
     * Returns 'arrItemPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMPRIZE));
    }

    /**
     * Returns element from 'arrItemPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemPrizeAt($offset)
    {
        return $this->get(self::ARRITEMPRIZE, $offset);
    }

    /**
     * Returns count of 'arrItemPrize' list
     *
     * @return int
     */
    public function getArrItemPrizeCount()
    {
        return $this->count(self::ARRITEMPRIZE);
    }
}
}