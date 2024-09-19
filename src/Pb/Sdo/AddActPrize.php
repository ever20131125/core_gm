<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AddActPrize message
 */
class AddActPrize extends \ProtobufMessage
{
    /* Field index constants */
    const ITEMID = 1;
    const QUANTITY = 2;
    const OPTION1 = 3;
    const OPTION2 = 4;

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
        self::OPTION1 => array(
            'name' => 'option1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTION2 => array(
            'name' => 'option2',
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
        $this->values[self::ITEMID] = null;
        $this->values[self::QUANTITY] = null;
        $this->values[self::OPTION1] = null;
        $this->values[self::OPTION2] = null;
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
     * Sets value of 'option1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption1($value)
    {
        return $this->set(self::OPTION1, $value);
    }

    /**
     * Returns value of 'option1' property
     *
     * @return integer
     */
    public function getOption1()
    {
        $value = $this->get(self::OPTION1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption1()
    {
        return $this->get(self::OPTION1) !== null;
    }

    /**
     * Sets value of 'option2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption2($value)
    {
        return $this->set(self::OPTION2, $value);
    }

    /**
     * Returns value of 'option2' property
     *
     * @return integer
     */
    public function getOption2()
    {
        $value = $this->get(self::OPTION2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption2()
    {
        return $this->get(self::OPTION2) !== null;
    }
}
}