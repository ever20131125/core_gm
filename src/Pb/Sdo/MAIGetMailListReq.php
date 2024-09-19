<?php
/**
 * Auto generated from mailserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MAIGetMailListReq message
 */
class MAIGetMailListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRMAILID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMAILID => array(
            'name' => 'arrMailID',
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
        $this->values[self::ARRMAILID] = array();
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
     * Appends value to 'arrMailID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMailID($value)
    {
        return $this->append(self::ARRMAILID, $value);
    }

    /**
     * Clears 'arrMailID' list
     *
     * @return null
     */
    public function clearArrMailID()
    {
        return $this->clear(self::ARRMAILID);
    }

    /**
     * Returns 'arrMailID' list
     *
     * @return integer[]
     */
    public function getArrMailID()
    {
        return $this->get(self::ARRMAILID);
    }

    /**
     * Returns true if 'arrMailID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMailID()
    {
        return count($this->get(self::ARRMAILID)) !== 0;
    }

    /**
     * Returns 'arrMailID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMailIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMAILID));
    }

    /**
     * Returns element from 'arrMailID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMailIDAt($offset)
    {
        return $this->get(self::ARRMAILID, $offset);
    }

    /**
     * Returns count of 'arrMailID' list
     *
     * @return int
     */
    public function getArrMailIDCount()
    {
        return $this->count(self::ARRMAILID);
    }
}
}