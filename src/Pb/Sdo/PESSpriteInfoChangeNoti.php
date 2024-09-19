<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESSpriteInfoChangeNoti message
 */
class PESSpriteInfoChangeNoti extends \ProtobufMessage
{
    /* Field index constants */
    const CHANNAL = 1;
    const PROPERTY = 2;
    const CONSUMEITEM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHANNAL => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'channal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROPERTY => array(
            'name' => 'property',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\SpriteProperty'
        ),
        self::CONSUMEITEM => array(
            'name' => 'consumeItem',
            'repeated' => true,
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
        $this->values[self::CHANNAL] = self::$fields[self::CHANNAL]['default'];
        $this->values[self::PROPERTY] = null;
        $this->values[self::CONSUMEITEM] = array();
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
     * Sets value of 'channal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChannal($value)
    {
        return $this->set(self::CHANNAL, $value);
    }

    /**
     * Returns value of 'channal' property
     *
     * @return integer
     */
    public function getChannal()
    {
        $value = $this->get(self::CHANNAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'channal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChannal()
    {
        return $this->get(self::CHANNAL) !== null;
    }

    /**
     * Sets value of 'property' property
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Property value
     *
     * @return null
     */
    public function setProperty(\Xnhd\Core\Pb\Sdo\SpriteProperty $value=null)
    {
        return $this->set(self::PROPERTY, $value);
    }

    /**
     * Returns value of 'property' property
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getProperty()
    {
        return $this->get(self::PROPERTY);
    }

    /**
     * Returns true if 'property' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProperty()
    {
        return $this->get(self::PROPERTY) !== null;
    }

    /**
     * Appends value to 'consumeItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendConsumeItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::CONSUMEITEM, $value);
    }

    /**
     * Clears 'consumeItem' list
     *
     * @return null
     */
    public function clearConsumeItem()
    {
        return $this->clear(self::CONSUMEITEM);
    }

    /**
     * Returns 'consumeItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
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
        return count($this->get(self::CONSUMEITEM)) !== 0;
    }

    /**
     * Returns 'consumeItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getConsumeItemIterator()
    {
        return new \ArrayIterator($this->get(self::CONSUMEITEM));
    }

    /**
     * Returns element from 'consumeItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getConsumeItemAt($offset)
    {
        return $this->get(self::CONSUMEITEM, $offset);
    }

    /**
     * Returns count of 'consumeItem' list
     *
     * @return int
     */
    public function getConsumeItemCount()
    {
        return $this->count(self::CONSUMEITEM);
    }
}
}