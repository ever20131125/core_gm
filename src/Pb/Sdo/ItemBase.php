<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemBase message
 */
class ItemBase extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const NQUANTITY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
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
        $this->values[self::NITEMID] = null;
        $this->values[self::NQUANTITY] = null;
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
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
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
}
}