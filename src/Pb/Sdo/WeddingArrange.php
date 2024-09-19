<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingArrange message
 */
class WeddingArrange extends \ProtobufMessage
{
    /* Field index constants */
    const NPLACEID = 1;
    const ARRTALK = 2;
    const STITEMBASE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPLACEID => array(
            'name' => 'nPlaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTALK => array(
            'name' => 'arrTalk',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STITEMBASE => array(
            'name' => 'stItemBase',
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
        $this->values[self::NPLACEID] = null;
        $this->values[self::ARRTALK] = array();
        $this->values[self::STITEMBASE] = null;
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
     * Sets value of 'nPlaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlaceID($value)
    {
        return $this->set(self::NPLACEID, $value);
    }

    /**
     * Returns value of 'nPlaceID' property
     *
     * @return integer
     */
    public function getNPlaceID()
    {
        $value = $this->get(self::NPLACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlaceID()
    {
        return $this->get(self::NPLACEID) !== null;
    }

    /**
     * Appends value to 'arrTalk' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrTalk($value)
    {
        return $this->append(self::ARRTALK, $value);
    }

    /**
     * Clears 'arrTalk' list
     *
     * @return null
     */
    public function clearArrTalk()
    {
        return $this->clear(self::ARRTALK);
    }

    /**
     * Returns 'arrTalk' list
     *
     * @return string[]
     */
    public function getArrTalk()
    {
        return $this->get(self::ARRTALK);
    }

    /**
     * Returns true if 'arrTalk' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTalk()
    {
        return count($this->get(self::ARRTALK)) !== 0;
    }

    /**
     * Returns 'arrTalk' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTalkIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTALK));
    }

    /**
     * Returns element from 'arrTalk' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrTalkAt($offset)
    {
        return $this->get(self::ARRTALK, $offset);
    }

    /**
     * Returns count of 'arrTalk' list
     *
     * @return int
     */
    public function getArrTalkCount()
    {
        return $this->count(self::ARRTALK);
    }

    /**
     * Sets value of 'stItemBase' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STITEMBASE, $value);
    }

    /**
     * Returns value of 'stItemBase' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStItemBase()
    {
        return $this->get(self::STITEMBASE);
    }

    /**
     * Returns true if 'stItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStItemBase()
    {
        return $this->get(self::STITEMBASE) !== null;
    }
}
}