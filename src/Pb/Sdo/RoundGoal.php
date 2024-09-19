<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoundGoal message
 */
class RoundGoal extends \ProtobufMessage
{
    /* Field index constants */
    const ARRKEYLIST = 1;
    const ROUNDTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRKEYLIST => array(
            'name' => 'arrKeyList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\KeyGoal'
        ),
        self::ROUNDTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RoundType::enmRoundType_Normal,
            'name' => 'roundType',
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
        $this->values[self::ARRKEYLIST] = array();
        $this->values[self::ROUNDTYPE] = self::$fields[self::ROUNDTYPE]['default'];
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
     * Appends value to 'arrKeyList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\KeyGoal $value Value to append
     *
     * @return null
     */
    public function appendArrKeyList(\Xnhd\Core\Pb\Sdo\KeyGoal $value)
    {
        return $this->append(self::ARRKEYLIST, $value);
    }

    /**
     * Clears 'arrKeyList' list
     *
     * @return null
     */
    public function clearArrKeyList()
    {
        return $this->clear(self::ARRKEYLIST);
    }

    /**
     * Returns 'arrKeyList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeyGoal[]
     */
    public function getArrKeyList()
    {
        return $this->get(self::ARRKEYLIST);
    }

    /**
     * Returns true if 'arrKeyList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrKeyList()
    {
        return count($this->get(self::ARRKEYLIST)) !== 0;
    }

    /**
     * Returns 'arrKeyList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrKeyListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRKEYLIST));
    }

    /**
     * Returns element from 'arrKeyList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\KeyGoal
     */
    public function getArrKeyListAt($offset)
    {
        return $this->get(self::ARRKEYLIST, $offset);
    }

    /**
     * Returns count of 'arrKeyList' list
     *
     * @return int
     */
    public function getArrKeyListCount()
    {
        return $this->count(self::ARRKEYLIST);
    }

    /**
     * Sets value of 'roundType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoundType($value)
    {
        return $this->set(self::ROUNDTYPE, $value);
    }

    /**
     * Returns value of 'roundType' property
     *
     * @return integer
     */
    public function getRoundType()
    {
        $value = $this->get(self::ROUNDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roundType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoundType()
    {
        return $this->get(self::ROUNDTYPE) !== null;
    }
}
}