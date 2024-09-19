<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBDecomItemReq message
 */
class PDBDecomItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRITEMINSID = 2;
    const ARRQUANTITY = 3;

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
        self::ARRQUANTITY => array(
            'name' => 'arrQuantity',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRITEMINSID] = array();
        $this->values[self::ARRQUANTITY] = array();
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
     * Appends value to 'arrQuantity' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrQuantity($value)
    {
        return $this->append(self::ARRQUANTITY, $value);
    }

    /**
     * Clears 'arrQuantity' list
     *
     * @return null
     */
    public function clearArrQuantity()
    {
        return $this->clear(self::ARRQUANTITY);
    }

    /**
     * Returns 'arrQuantity' list
     *
     * @return integer[]
     */
    public function getArrQuantity()
    {
        return $this->get(self::ARRQUANTITY);
    }

    /**
     * Returns true if 'arrQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrQuantity()
    {
        return count($this->get(self::ARRQUANTITY)) !== 0;
    }

    /**
     * Returns 'arrQuantity' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrQuantityIterator()
    {
        return new \ArrayIterator($this->get(self::ARRQUANTITY));
    }

    /**
     * Returns element from 'arrQuantity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrQuantityAt($offset)
    {
        return $this->get(self::ARRQUANTITY, $offset);
    }

    /**
     * Returns count of 'arrQuantity' list
     *
     * @return int
     */
    public function getArrQuantityCount()
    {
        return $this->count(self::ARRQUANTITY);
    }
}
}