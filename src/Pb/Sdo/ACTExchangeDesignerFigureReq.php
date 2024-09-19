<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTExchangeDesignerFigureReq message
 */
class ACTExchangeDesignerFigureReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRACTID = 2;
    const ARRINDEX = 3;
    const NACTID = 4;
    const NINDEX = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTID => array(
            'name' => 'arrActID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRINDEX => array(
            'name' => 'arrIndex',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTID => array(
            'name' => 'nActID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NINDEX => array(
            'name' => 'nIndex',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRACTID] = array();
        $this->values[self::ARRINDEX] = array();
        $this->values[self::NACTID] = null;
        $this->values[self::NINDEX] = null;
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
     * Appends value to 'arrActID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrActID($value)
    {
        return $this->append(self::ARRACTID, $value);
    }

    /**
     * Clears 'arrActID' list
     *
     * @return null
     */
    public function clearArrActID()
    {
        return $this->clear(self::ARRACTID);
    }

    /**
     * Returns 'arrActID' list
     *
     * @return integer[]
     */
    public function getArrActID()
    {
        return $this->get(self::ARRACTID);
    }

    /**
     * Returns true if 'arrActID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActID()
    {
        return count($this->get(self::ARRACTID)) !== 0;
    }

    /**
     * Returns 'arrActID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTID));
    }

    /**
     * Returns element from 'arrActID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrActIDAt($offset)
    {
        return $this->get(self::ARRACTID, $offset);
    }

    /**
     * Returns count of 'arrActID' list
     *
     * @return int
     */
    public function getArrActIDCount()
    {
        return $this->count(self::ARRACTID);
    }

    /**
     * Appends value to 'arrIndex' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrIndex($value)
    {
        return $this->append(self::ARRINDEX, $value);
    }

    /**
     * Clears 'arrIndex' list
     *
     * @return null
     */
    public function clearArrIndex()
    {
        return $this->clear(self::ARRINDEX);
    }

    /**
     * Returns 'arrIndex' list
     *
     * @return integer[]
     */
    public function getArrIndex()
    {
        return $this->get(self::ARRINDEX);
    }

    /**
     * Returns true if 'arrIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrIndex()
    {
        return count($this->get(self::ARRINDEX)) !== 0;
    }

    /**
     * Returns 'arrIndex' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrIndexIterator()
    {
        return new \ArrayIterator($this->get(self::ARRINDEX));
    }

    /**
     * Returns element from 'arrIndex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrIndexAt($offset)
    {
        return $this->get(self::ARRINDEX, $offset);
    }

    /**
     * Returns count of 'arrIndex' list
     *
     * @return int
     */
    public function getArrIndexCount()
    {
        return $this->count(self::ARRINDEX);
    }

    /**
     * Sets value of 'nActID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActID($value)
    {
        return $this->set(self::NACTID, $value);
    }

    /**
     * Returns value of 'nActID' property
     *
     * @return integer
     */
    public function getNActID()
    {
        $value = $this->get(self::NACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActID()
    {
        return $this->get(self::NACTID) !== null;
    }

    /**
     * Sets value of 'nIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIndex($value)
    {
        return $this->set(self::NINDEX, $value);
    }

    /**
     * Returns value of 'nIndex' property
     *
     * @return integer
     */
    public function getNIndex()
    {
        $value = $this->get(self::NINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIndex()
    {
        return $this->get(self::NINDEX) !== null;
    }
}
}