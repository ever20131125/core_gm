<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingActChest message
 */
class WeddingActChest extends \ProtobufMessage
{
    /* Field index constants */
    const CHESTID = 1;
    const HASBOUGHT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHESTID => array(
            'name' => 'chestID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HASBOUGHT => array(
            'name' => 'hasBought',
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
        $this->values[self::CHESTID] = null;
        $this->values[self::HASBOUGHT] = null;
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
     * Sets value of 'chestID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChestID($value)
    {
        return $this->set(self::CHESTID, $value);
    }

    /**
     * Returns value of 'chestID' property
     *
     * @return integer
     */
    public function getChestID()
    {
        $value = $this->get(self::CHESTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chestID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChestID()
    {
        return $this->get(self::CHESTID) !== null;
    }

    /**
     * Sets value of 'hasBought' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHasBought($value)
    {
        return $this->set(self::HASBOUGHT, $value);
    }

    /**
     * Returns value of 'hasBought' property
     *
     * @return integer
     */
    public function getHasBought()
    {
        $value = $this->get(self::HASBOUGHT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hasBought' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasBought()
    {
        return $this->get(self::HASBOUGHT) !== null;
    }
}
}