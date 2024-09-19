<?php
/**
 * Auto generated from complex.proto at 2021-10-20 06:51:40
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * NestInfo message
 */
class NestInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NPOSTYPE = 1;
    const NESTNAME = 2;
    const ARRHOUSEDRESS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPOSTYPE => array(
            'name' => 'nPosType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NESTNAME => array(
            'name' => 'nestName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRHOUSEDRESS => array(
            'name' => 'arrHouseDress',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDress'
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
        $this->values[self::NPOSTYPE] = null;
        $this->values[self::NESTNAME] = null;
        $this->values[self::ARRHOUSEDRESS] = array();
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
     * Sets value of 'nPosType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosType($value)
    {
        return $this->set(self::NPOSTYPE, $value);
    }

    /**
     * Returns value of 'nPosType' property
     *
     * @return integer
     */
    public function getNPosType()
    {
        $value = $this->get(self::NPOSTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosType()
    {
        return $this->get(self::NPOSTYPE) !== null;
    }

    /**
     * Sets value of 'nestName' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNestName($value)
    {
        return $this->set(self::NESTNAME, $value);
    }

    /**
     * Returns value of 'nestName' property
     *
     * @return integer
     */
    public function getNestName()
    {
        $value = $this->get(self::NESTNAME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nestName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNestName()
    {
        return $this->get(self::NESTNAME) !== null;
    }

    /**
     * Appends value to 'arrHouseDress' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDress $value Value to append
     *
     * @return null
     */
    public function appendArrHouseDress(\Xnhd\Core\Pb\Sdo\HouseDress $value)
    {
        return $this->append(self::ARRHOUSEDRESS, $value);
    }

    /**
     * Clears 'arrHouseDress' list
     *
     * @return null
     */
    public function clearArrHouseDress()
    {
        return $this->clear(self::ARRHOUSEDRESS);
    }

    /**
     * Returns 'arrHouseDress' list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDress[]
     */
    public function getArrHouseDress()
    {
        return $this->get(self::ARRHOUSEDRESS);
    }

    /**
     * Returns true if 'arrHouseDress' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHouseDress()
    {
        return count($this->get(self::ARRHOUSEDRESS)) !== 0;
    }

    /**
     * Returns 'arrHouseDress' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHouseDressIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHOUSEDRESS));
    }

    /**
     * Returns element from 'arrHouseDress' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDress
     */
    public function getArrHouseDressAt($offset)
    {
        return $this->get(self::ARRHOUSEDRESS, $offset);
    }

    /**
     * Returns count of 'arrHouseDress' list
     *
     * @return int
     */
    public function getArrHouseDressCount()
    {
        return $this->count(self::ARRHOUSEDRESS);
    }
}
}