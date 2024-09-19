<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemExtra message
 */
class ItemExtra extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMINSID = 1;
    const NITEMID = 2;
    const NQUANTITY = 3;
    const NTIMETICK = 4;
    const NBINDID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::NTIMETICK => array(
            'name' => 'nTimeTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBINDID => array(
            'name' => 'nBindID',
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
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::NTIMETICK] = null;
        $this->values[self::NBINDID] = null;
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
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
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

    /**
     * Sets value of 'nTimeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeTick($value)
    {
        return $this->set(self::NTIMETICK, $value);
    }

    /**
     * Returns value of 'nTimeTick' property
     *
     * @return integer
     */
    public function getNTimeTick()
    {
        $value = $this->get(self::NTIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeTick()
    {
        return $this->get(self::NTIMETICK) !== null;
    }

    /**
     * Sets value of 'nBindID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBindID($value)
    {
        return $this->set(self::NBINDID, $value);
    }

    /**
     * Returns value of 'nBindID' property
     *
     * @return integer
     */
    public function getNBindID()
    {
        $value = $this->get(self::NBINDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBindID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBindID()
    {
        return $this->get(self::NBINDID) !== null;
    }
}
}