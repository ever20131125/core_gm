<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleEffect message
 */
class RoleEffect extends \ProtobufMessage
{
    /* Field index constants */
    const NEFFECTID = 1;
    const NLEVEL = 2;
    const ARRITEMINSID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEFFECTID => array(
            'name' => 'nEffectID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMINSID => array(
            'name' => 'arrItemInsID',
            'repeated' => true,
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
        $this->values[self::NEFFECTID] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::ARRITEMINSID] = array();
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
     * Sets value of 'nEffectID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEffectID($value)
    {
        return $this->set(self::NEFFECTID, $value);
    }

    /**
     * Returns value of 'nEffectID' property
     *
     * @return integer
     */
    public function getNEffectID()
    {
        $value = $this->get(self::NEFFECTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEffectID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEffectID()
    {
        return $this->get(self::NEFFECTID) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Appends value to 'arrItemInsID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemInsID($value)
    {
        return $this->append(self::ARRITEMINSID, $value);
    }

    /**
     * Clears 'arrItemInsID' list
     *
     * @return null
     */
    public function clearArrItemInsID()
    {
        return $this->clear(self::ARRITEMINSID);
    }

    /**
     * Returns 'arrItemInsID' list
     *
     * @return integer[]
     */
    public function getArrItemInsID()
    {
        return $this->get(self::ARRITEMINSID);
    }

    /**
     * Returns true if 'arrItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemInsID()
    {
        return count($this->get(self::ARRITEMINSID)) !== 0;
    }

    /**
     * Returns 'arrItemInsID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemInsIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMINSID));
    }

    /**
     * Returns element from 'arrItemInsID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemInsIDAt($offset)
    {
        return $this->get(self::ARRITEMINSID, $offset);
    }

    /**
     * Returns count of 'arrItemInsID' list
     *
     * @return int
     */
    public function getArrItemInsIDCount()
    {
        return $this->count(self::ARRITEMINSID);
    }
}
}