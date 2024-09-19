<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExchangeLimit message
 */
class ExchangeLimit extends \ProtobufMessage
{
    /* Field index constants */
    const LOOT = 1;
    const LIMIT = 2;
    const ITEMID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOOT => array(
            'name' => 'loot',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIMIT => array(
            'name' => 'limit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMID => array(
            'name' => 'itemID',
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
        $this->values[self::LOOT] = null;
        $this->values[self::LIMIT] = null;
        $this->values[self::ITEMID] = null;
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
     * Sets value of 'loot' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoot($value)
    {
        return $this->set(self::LOOT, $value);
    }

    /**
     * Returns value of 'loot' property
     *
     * @return integer
     */
    public function getLoot()
    {
        $value = $this->get(self::LOOT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoot()
    {
        return $this->get(self::LOOT) !== null;
    }

    /**
     * Sets value of 'limit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLimit($value)
    {
        return $this->set(self::LIMIT, $value);
    }

    /**
     * Returns value of 'limit' property
     *
     * @return integer
     */
    public function getLimit()
    {
        $value = $this->get(self::LIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'limit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLimit()
    {
        return $this->get(self::LIMIT) !== null;
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
}
}