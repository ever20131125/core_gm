<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGuildHonourUpdatedNoti message
 */
class GDSGuildHonourUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRITEM = 1;
    const SOURCE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRITEM => array(
            'name' => 'arrItem',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::SOURCE => array(
            'name' => 'source',
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
        $this->values[self::ARRITEM] = array();
        $this->values[self::SOURCE] = null;
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
     * Appends value to 'arrItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEM, $value);
    }

    /**
     * Clears 'arrItem' list
     *
     * @return null
     */
    public function clearArrItem()
    {
        return $this->clear(self::ARRITEM);
    }

    /**
     * Returns 'arrItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItem()
    {
        return $this->get(self::ARRITEM);
    }

    /**
     * Returns true if 'arrItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItem()
    {
        return count($this->get(self::ARRITEM)) !== 0;
    }

    /**
     * Returns 'arrItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEM));
    }

    /**
     * Returns element from 'arrItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemAt($offset)
    {
        return $this->get(self::ARRITEM, $offset);
    }

    /**
     * Returns count of 'arrItem' list
     *
     * @return int
     */
    public function getArrItemCount()
    {
        return $this->count(self::ARRITEM);
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }
}
}