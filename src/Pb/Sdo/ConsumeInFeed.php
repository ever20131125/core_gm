<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ConsumeInFeed message
 */
class ConsumeInFeed extends \ProtobufMessage
{
    /* Field index constants */
    const FEEDTYPE = 1;
    const CONSUMEITEM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FEEDTYPE => array(
            'name' => 'feedType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONSUMEITEM => array(
            'name' => 'consumeItem',
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
        $this->values[self::FEEDTYPE] = null;
        $this->values[self::CONSUMEITEM] = null;
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
     * Sets value of 'feedType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFeedType($value)
    {
        return $this->set(self::FEEDTYPE, $value);
    }

    /**
     * Returns value of 'feedType' property
     *
     * @return integer
     */
    public function getFeedType()
    {
        $value = $this->get(self::FEEDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'feedType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedType()
    {
        return $this->get(self::FEEDTYPE) !== null;
    }

    /**
     * Sets value of 'consumeItem' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setConsumeItem(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::CONSUMEITEM, $value);
    }

    /**
     * Returns value of 'consumeItem' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getConsumeItem()
    {
        return $this->get(self::CONSUMEITEM);
    }

    /**
     * Returns true if 'consumeItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConsumeItem()
    {
        return $this->get(self::CONSUMEITEM) !== null;
    }
}
}