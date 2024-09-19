<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TourTree message
 */
class TourTree extends \ProtobufMessage
{
    /* Field index constants */
    const STATUS = 1;
    const PARTS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\TourTaskState::enmTourTaskState_UnRecieve,
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTS => array(
            'name' => 'parts',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TourPart'
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
        $this->values[self::STATUS] = self::$fields[self::STATUS]['default'];
        $this->values[self::PARTS] = array();
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
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Appends value to 'parts' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TourPart $value Value to append
     *
     * @return null
     */
    public function appendParts(\Xnhd\Core\Pb\Sdo\TourPart $value)
    {
        return $this->append(self::PARTS, $value);
    }

    /**
     * Clears 'parts' list
     *
     * @return null
     */
    public function clearParts()
    {
        return $this->clear(self::PARTS);
    }

    /**
     * Returns 'parts' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TourPart[]
     */
    public function getParts()
    {
        return $this->get(self::PARTS);
    }

    /**
     * Returns true if 'parts' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasParts()
    {
        return count($this->get(self::PARTS)) !== 0;
    }

    /**
     * Returns 'parts' iterator
     *
     * @return \ArrayIterator
     */
    public function getPartsIterator()
    {
        return new \ArrayIterator($this->get(self::PARTS));
    }

    /**
     * Returns element from 'parts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TourPart
     */
    public function getPartsAt($offset)
    {
        return $this->get(self::PARTS, $offset);
    }

    /**
     * Returns count of 'parts' list
     *
     * @return int
     */
    public function getPartsCount()
    {
        return $this->count(self::PARTS);
    }
}
}