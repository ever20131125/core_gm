<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RaffleItem message
 */
class RaffleItem extends \ProtobufMessage
{
    /* Field index constants */
    const POOLID = 1;
    const ITEMID = 2;
    const QUANTITY = 3;
    const SHOW = 4;
    const RANDOM = 5;
    const RECEIVED = 6;
    const LUCKY = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::POOLID => array(
            'name' => 'poolID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMID => array(
            'name' => 'itemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::QUANTITY => array(
            'name' => 'quantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOW => array(
            'name' => 'show',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANDOM => array(
            'name' => 'random',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECEIVED => array(
            'name' => 'received',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LUCKY => array(
            'name' => 'lucky',
            'required' => false,
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
        $this->values[self::POOLID] = null;
        $this->values[self::ITEMID] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::SHOW] = null;
        $this->values[self::RANDOM] = null;
        $this->values[self::RECEIVED] = null;
        $this->values[self::LUCKY] = null;
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
     * Sets value of 'poolID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPoolID($value)
    {
        return $this->set(self::POOLID, $value);
    }

    /**
     * Returns value of 'poolID' property
     *
     * @return integer
     */
    public function getPoolID()
    {
        $value = $this->get(self::POOLID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'poolID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPoolID()
    {
        return $this->get(self::POOLID) !== null;
    }

    /**
     * Sets value of 'itemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemID($value)
    {
        return $this->set(self::ITEMID, $value);
    }

    /**
     * Returns value of 'itemID' property
     *
     * @return integer
     */
    public function getItemID()
    {
        $value = $this->get(self::ITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'itemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemID()
    {
        return $this->get(self::ITEMID) !== null;
    }

    /**
     * Sets value of 'quantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQuantity($value)
    {
        return $this->set(self::QUANTITY, $value);
    }

    /**
     * Returns value of 'quantity' property
     *
     * @return integer
     */
    public function getQuantity()
    {
        $value = $this->get(self::QUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'quantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQuantity()
    {
        return $this->get(self::QUANTITY) !== null;
    }

    /**
     * Sets value of 'show' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShow($value)
    {
        return $this->set(self::SHOW, $value);
    }

    /**
     * Returns value of 'show' property
     *
     * @return integer
     */
    public function getShow()
    {
        $value = $this->get(self::SHOW);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'show' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShow()
    {
        return $this->get(self::SHOW) !== null;
    }

    /**
     * Sets value of 'random' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRandom($value)
    {
        return $this->set(self::RANDOM, $value);
    }

    /**
     * Returns value of 'random' property
     *
     * @return integer
     */
    public function getRandom()
    {
        $value = $this->get(self::RANDOM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'random' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRandom()
    {
        return $this->get(self::RANDOM) !== null;
    }

    /**
     * Sets value of 'received' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReceived($value)
    {
        return $this->set(self::RECEIVED, $value);
    }

    /**
     * Returns value of 'received' property
     *
     * @return integer
     */
    public function getReceived()
    {
        $value = $this->get(self::RECEIVED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'received' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReceived()
    {
        return $this->get(self::RECEIVED) !== null;
    }

    /**
     * Sets value of 'lucky' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLucky($value)
    {
        return $this->set(self::LUCKY, $value);
    }

    /**
     * Returns value of 'lucky' property
     *
     * @return integer
     */
    public function getLucky()
    {
        $value = $this->get(self::LUCKY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lucky' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLucky()
    {
        return $this->get(self::LUCKY) !== null;
    }
}
}