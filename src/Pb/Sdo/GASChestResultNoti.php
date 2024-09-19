<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASChestResultNoti message
 */
class GASChestResultNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRROLEID = 1;
    const ARRPRICE = 2;
    const ARRITEMGAINED = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRICE => array(
            'name' => 'arrPrice',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMGAINED => array(
            'name' => 'arrItemGained',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
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
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRPRICE] = array();
        $this->values[self::ARRITEMGAINED] = array();
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
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Appends value to 'arrPrice' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPrice($value)
    {
        return $this->append(self::ARRPRICE, $value);
    }

    /**
     * Clears 'arrPrice' list
     *
     * @return null
     */
    public function clearArrPrice()
    {
        return $this->clear(self::ARRPRICE);
    }

    /**
     * Returns 'arrPrice' list
     *
     * @return integer[]
     */
    public function getArrPrice()
    {
        return $this->get(self::ARRPRICE);
    }

    /**
     * Returns true if 'arrPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrice()
    {
        return count($this->get(self::ARRPRICE)) !== 0;
    }

    /**
     * Returns 'arrPrice' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPriceIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRICE));
    }

    /**
     * Returns element from 'arrPrice' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPriceAt($offset)
    {
        return $this->get(self::ARRPRICE, $offset);
    }

    /**
     * Returns count of 'arrPrice' list
     *
     * @return int
     */
    public function getArrPriceCount()
    {
        return $this->count(self::ARRPRICE);
    }

    /**
     * Appends value to 'arrItemGained' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Value to append
     *
     * @return null
     */
    public function appendArrItemGained(\Xnhd\Core\Pb\Sdo\ItemGained $value)
    {
        return $this->append(self::ARRITEMGAINED, $value);
    }

    /**
     * Clears 'arrItemGained' list
     *
     * @return null
     */
    public function clearArrItemGained()
    {
        return $this->clear(self::ARRITEMGAINED);
    }

    /**
     * Returns 'arrItemGained' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained[]
     */
    public function getArrItemGained()
    {
        return $this->get(self::ARRITEMGAINED);
    }

    /**
     * Returns true if 'arrItemGained' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemGained()
    {
        return count($this->get(self::ARRITEMGAINED)) !== 0;
    }

    /**
     * Returns 'arrItemGained' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemGainedIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMGAINED));
    }

    /**
     * Returns element from 'arrItemGained' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
     */
    public function getArrItemGainedAt($offset)
    {
        return $this->get(self::ARRITEMGAINED, $offset);
    }

    /**
     * Returns count of 'arrItemGained' list
     *
     * @return int
     */
    public function getArrItemGainedCount()
    {
        return $this->count(self::ARRITEMGAINED);
    }
}
}