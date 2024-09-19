<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESCompositeResp message
 */
class PESCompositeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const COMPOSITEID = 2;
    const TYPE = 3;
    const STPRIZEITEM = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::COMPOSITEID => array(
            'name' => 'compositeId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STPRIZEITEM => array(
            'name' => 'stPrizeItem',
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
        $this->values[self::COMPOSITEID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::STPRIZEITEM] = array();
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
     * Sets value of 'compositeId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCompositeId($value)
    {
        return $this->set(self::COMPOSITEID, $value);
    }

    /**
     * Returns value of 'compositeId' property
     *
     * @return integer
     */
    public function getCompositeId()
    {
        $value = $this->get(self::COMPOSITEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'compositeId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCompositeId()
    {
        return $this->get(self::COMPOSITEID) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Appends value to 'stPrizeItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendStPrizeItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::STPRIZEITEM, $value);
    }

    /**
     * Clears 'stPrizeItem' list
     *
     * @return null
     */
    public function clearStPrizeItem()
    {
        return $this->clear(self::STPRIZEITEM);
    }

    /**
     * Returns 'stPrizeItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getStPrizeItem()
    {
        return $this->get(self::STPRIZEITEM);
    }

    /**
     * Returns true if 'stPrizeItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPrizeItem()
    {
        return count($this->get(self::STPRIZEITEM)) !== 0;
    }

    /**
     * Returns 'stPrizeItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getStPrizeItemIterator()
    {
        return new \ArrayIterator($this->get(self::STPRIZEITEM));
    }

    /**
     * Returns element from 'stPrizeItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStPrizeItemAt($offset)
    {
        return $this->get(self::STPRIZEITEM, $offset);
    }

    /**
     * Returns count of 'stPrizeItem' list
     *
     * @return int
     */
    public function getStPrizeItemCount()
    {
        return $this->count(self::STPRIZEITEM);
    }
}
}