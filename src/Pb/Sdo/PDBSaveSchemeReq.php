<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBSaveSchemeReq message
 */
class PDBSaveSchemeReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NSCHEMEID = 2;
    const ARRHOUSEDRESS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCHEMEID => array(
            'name' => 'nSchemeID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NSCHEMEID] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nSchemeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSchemeID($value)
    {
        return $this->set(self::NSCHEMEID, $value);
    }

    /**
     * Returns value of 'nSchemeID' property
     *
     * @return integer
     */
    public function getNSchemeID()
    {
        $value = $this->get(self::NSCHEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSchemeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSchemeID()
    {
        return $this->get(self::NSCHEMEID) !== null;
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