<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleDiaryReq message
 */
class RLSGetCoupleDiaryReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRDATEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDATEID => array(
            'name' => 'arrDateID',
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
        $this->values[self::ARRDATEID] = array();
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
     * Appends value to 'arrDateID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrDateID($value)
    {
        return $this->append(self::ARRDATEID, $value);
    }

    /**
     * Clears 'arrDateID' list
     *
     * @return null
     */
    public function clearArrDateID()
    {
        return $this->clear(self::ARRDATEID);
    }

    /**
     * Returns 'arrDateID' list
     *
     * @return integer[]
     */
    public function getArrDateID()
    {
        return $this->get(self::ARRDATEID);
    }

    /**
     * Returns true if 'arrDateID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDateID()
    {
        return count($this->get(self::ARRDATEID)) !== 0;
    }

    /**
     * Returns 'arrDateID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDateIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDATEID));
    }

    /**
     * Returns element from 'arrDateID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDateIDAt($offset)
    {
        return $this->get(self::ARRDATEID, $offset);
    }

    /**
     * Returns count of 'arrDateID' list
     *
     * @return int
     */
    public function getArrDateIDCount()
    {
        return $this->count(self::ARRDATEID);
    }
}
}