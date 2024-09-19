<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AvatarItem message
 */
class AvatarItem extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const NITEMTYPE = 2;
    const NITEMINSID = 3;
    const NQUANTITY = 4;
    const NOWNTICK = 5;
    const BENABLE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMTYPE => array(
            'name' => 'nItemType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOWNTICK => array(
            'name' => 'nOwnTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BENABLE => array(
            'name' => 'bEnable',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NITEMTYPE] = null;
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::NOWNTICK] = null;
        $this->values[self::BENABLE] = null;
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
     * Sets value of 'nItemType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemType($value)
    {
        return $this->set(self::NITEMTYPE, $value);
    }

    /**
     * Returns value of 'nItemType' property
     *
     * @return integer
     */
    public function getNItemType()
    {
        $value = $this->get(self::NITEMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemType()
    {
        return $this->get(self::NITEMTYPE) !== null;
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
     * Sets value of 'nOwnTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOwnTick($value)
    {
        return $this->set(self::NOWNTICK, $value);
    }

    /**
     * Returns value of 'nOwnTick' property
     *
     * @return integer
     */
    public function getNOwnTick()
    {
        $value = $this->get(self::NOWNTICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOwnTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOwnTick()
    {
        return $this->get(self::NOWNTICK) !== null;
    }

    /**
     * Sets value of 'bEnable' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBEnable($value)
    {
        return $this->set(self::BENABLE, $value);
    }

    /**
     * Returns value of 'bEnable' property
     *
     * @return boolean
     */
    public function getBEnable()
    {
        $value = $this->get(self::BENABLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bEnable' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBEnable()
    {
        return $this->get(self::BENABLE) !== null;
    }
}
}