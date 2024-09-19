<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTStartPuzzleReq message
 */
class ACTStartPuzzleReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRPUZZLEID = 1;
    const NMONEY = 2;
    const ARRTESTROLEID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRPUZZLEID => array(
            'name' => 'arrPuzzleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONEY => array(
            'name' => 'nMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTESTROLEID => array(
            'name' => 'arrTestRoleID',
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
        $this->values[self::ARRPUZZLEID] = array();
        $this->values[self::NMONEY] = null;
        $this->values[self::ARRTESTROLEID] = array();
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
     * Appends value to 'arrPuzzleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPuzzleID($value)
    {
        return $this->append(self::ARRPUZZLEID, $value);
    }

    /**
     * Clears 'arrPuzzleID' list
     *
     * @return null
     */
    public function clearArrPuzzleID()
    {
        return $this->clear(self::ARRPUZZLEID);
    }

    /**
     * Returns 'arrPuzzleID' list
     *
     * @return integer[]
     */
    public function getArrPuzzleID()
    {
        return $this->get(self::ARRPUZZLEID);
    }

    /**
     * Returns true if 'arrPuzzleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPuzzleID()
    {
        return count($this->get(self::ARRPUZZLEID)) !== 0;
    }

    /**
     * Returns 'arrPuzzleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPuzzleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPUZZLEID));
    }

    /**
     * Returns element from 'arrPuzzleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPuzzleIDAt($offset)
    {
        return $this->get(self::ARRPUZZLEID, $offset);
    }

    /**
     * Returns count of 'arrPuzzleID' list
     *
     * @return int
     */
    public function getArrPuzzleIDCount()
    {
        return $this->count(self::ARRPUZZLEID);
    }

    /**
     * Sets value of 'nMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoney($value)
    {
        return $this->set(self::NMONEY, $value);
    }

    /**
     * Returns value of 'nMoney' property
     *
     * @return integer
     */
    public function getNMoney()
    {
        $value = $this->get(self::NMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoney()
    {
        return $this->get(self::NMONEY) !== null;
    }

    /**
     * Appends value to 'arrTestRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTestRoleID($value)
    {
        return $this->append(self::ARRTESTROLEID, $value);
    }

    /**
     * Clears 'arrTestRoleID' list
     *
     * @return null
     */
    public function clearArrTestRoleID()
    {
        return $this->clear(self::ARRTESTROLEID);
    }

    /**
     * Returns 'arrTestRoleID' list
     *
     * @return integer[]
     */
    public function getArrTestRoleID()
    {
        return $this->get(self::ARRTESTROLEID);
    }

    /**
     * Returns true if 'arrTestRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTestRoleID()
    {
        return count($this->get(self::ARRTESTROLEID)) !== 0;
    }

    /**
     * Returns 'arrTestRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTestRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTESTROLEID));
    }

    /**
     * Returns element from 'arrTestRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTestRoleIDAt($offset)
    {
        return $this->get(self::ARRTESTROLEID, $offset);
    }

    /**
     * Returns count of 'arrTestRoleID' list
     *
     * @return int
     */
    public function getArrTestRoleIDCount()
    {
        return $this->count(self::ARRTESTROLEID);
    }
}
}