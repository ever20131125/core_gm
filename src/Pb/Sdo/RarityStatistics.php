<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RarityStatistics message
 */
class RarityStatistics extends \ProtobufMessage
{
    /* Field index constants */
    const RARITY = 1;
    const NUMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RARITY => array(
            'name' => 'rarity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUMBER => array(
            'name' => 'number',
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
        $this->values[self::RARITY] = null;
        $this->values[self::NUMBER] = null;
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
     * Sets value of 'rarity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRarity($value)
    {
        return $this->set(self::RARITY, $value);
    }

    /**
     * Returns value of 'rarity' property
     *
     * @return integer
     */
    public function getRarity()
    {
        $value = $this->get(self::RARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rarity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRarity()
    {
        return $this->get(self::RARITY) !== null;
    }

    /**
     * Sets value of 'number' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNumber($value)
    {
        return $this->set(self::NUMBER, $value);
    }

    /**
     * Returns value of 'number' property
     *
     * @return integer
     */
    public function getNumber()
    {
        $value = $this->get(self::NUMBER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'number' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNumber()
    {
        return $this->get(self::NUMBER) !== null;
    }
}
}