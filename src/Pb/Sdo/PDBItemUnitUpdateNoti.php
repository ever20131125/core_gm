<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBItemUnitUpdateNoti message
 */
class PDBItemUnitUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRITEMINSID = 2;
    const ARRITEMUNIT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMINSID => array(
            'name' => 'arrItemInsID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMUNIT => array(
            'name' => 'arrItemUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemUnit'
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
        $this->values[self::ARRITEMINSID] = array();
        $this->values[self::ARRITEMUNIT] = array();
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

    /**
     * Appends value to 'arrItemUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemUnit $value Value to append
     *
     * @return null
     */
    public function appendArrItemUnit(\Xnhd\Core\Pb\Sdo\ItemUnit $value)
    {
        return $this->append(self::ARRITEMUNIT, $value);
    }

    /**
     * Clears 'arrItemUnit' list
     *
     * @return null
     */
    public function clearArrItemUnit()
    {
        return $this->clear(self::ARRITEMUNIT);
    }

    /**
     * Returns 'arrItemUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit[]
     */
    public function getArrItemUnit()
    {
        return $this->get(self::ARRITEMUNIT);
    }

    /**
     * Returns true if 'arrItemUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemUnit()
    {
        return count($this->get(self::ARRITEMUNIT)) !== 0;
    }

    /**
     * Returns 'arrItemUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMUNIT));
    }

    /**
     * Returns element from 'arrItemUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemUnit
     */
    public function getArrItemUnitAt($offset)
    {
        return $this->get(self::ARRITEMUNIT, $offset);
    }

    /**
     * Returns count of 'arrItemUnit' list
     *
     * @return int
     */
    public function getArrItemUnitCount()
    {
        return $this->count(self::ARRITEMUNIT);
    }
}
}