<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RafflePrize message
 */
class RafflePrize extends \ProtobufMessage
{
    /* Field index constants */
    const ITEMID = 1;
    const QUANTITY = 2;
    const SHOW = 3;
    const RANDOM = 4;
    const CONVERT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::CONVERT => array(
            'name' => 'convert',
            'required' => false,
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
        $this->values[self::ITEMID] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::SHOW] = null;
        $this->values[self::RANDOM] = null;
        $this->values[self::CONVERT] = null;
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
     * Sets value of 'convert' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setConvert(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::CONVERT, $value);
    }

    /**
     * Returns value of 'convert' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getConvert()
    {
        return $this->get(self::CONVERT);
    }

    /**
     * Returns true if 'convert' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConvert()
    {
        return $this->get(self::CONVERT) !== null;
    }
}
}