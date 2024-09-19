<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBOpenItemBoxNoti message
 */
class IDBOpenItemBoxNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NSOURCE = 1;
    const NQUANTITY = 2;
    const ARRITEMPRIZE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSOURCE => array(
            'name' => 'nSource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
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
        $this->values[self::NSOURCE] = null;
        $this->values[self::NQUANTITY] = null;
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
     * Sets value of 'nSource' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSource($value)
    {
        return $this->set(self::NSOURCE, $value);
    }

    /**
     * Returns value of 'nSource' property
     *
     * @return integer
     */
    public function getNSource()
    {
        $value = $this->get(self::NSOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSource()
    {
        return $this->get(self::NSOURCE) !== null;
    }

    /**
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
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