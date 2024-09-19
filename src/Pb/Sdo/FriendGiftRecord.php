<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendGiftRecord message
 */
class FriendGiftRecord extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDID = 1;
    const INTIMACY = 2;
    const ITEMBASE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDID => array(
            'name' => 'friendid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INTIMACY => array(
            'name' => 'intimacy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMBASE => array(
            'name' => 'itemBase',
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::INTIMACY] = null;
        $this->values[self::ITEMBASE] = array();
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
     * Sets value of 'friendid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendid($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendid' property
     *
     * @return integer
     */
    public function getFriendid()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendid()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Sets value of 'intimacy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIntimacy($value)
    {
        return $this->set(self::INTIMACY, $value);
    }

    /**
     * Returns value of 'intimacy' property
     *
     * @return integer
     */
    public function getIntimacy()
    {
        $value = $this->get(self::INTIMACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'intimacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIntimacy()
    {
        return $this->get(self::INTIMACY) !== null;
    }

    /**
     * Appends value to 'itemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ITEMBASE, $value);
    }

    /**
     * Clears 'itemBase' list
     *
     * @return null
     */
    public function clearItemBase()
    {
        return $this->clear(self::ITEMBASE);
    }

    /**
     * Returns 'itemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getItemBase()
    {
        return $this->get(self::ITEMBASE);
    }

    /**
     * Returns true if 'itemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemBase()
    {
        return count($this->get(self::ITEMBASE)) !== 0;
    }

    /**
     * Returns 'itemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ITEMBASE));
    }

    /**
     * Returns element from 'itemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getItemBaseAt($offset)
    {
        return $this->get(self::ITEMBASE, $offset);
    }

    /**
     * Returns count of 'itemBase' list
     *
     * @return int
     */
    public function getItemBaseCount()
    {
        return $this->count(self::ITEMBASE);
    }
}
}