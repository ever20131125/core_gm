<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSReconnectReq message
 */
class COSReconnectReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRDATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRDATA => array(
            'name' => 'arrData',
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
        $this->values[self::ARRDATA] = array();
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
     * Appends value to 'arrData' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrData($value)
    {
        return $this->append(self::ARRDATA, $value);
    }

    /**
     * Clears 'arrData' list
     *
     * @return null
     */
    public function clearArrData()
    {
        return $this->clear(self::ARRDATA);
    }

    /**
     * Returns 'arrData' list
     *
     * @return integer[]
     */
    public function getArrData()
    {
        return $this->get(self::ARRDATA);
    }

    /**
     * Returns true if 'arrData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrData()
    {
        return count($this->get(self::ARRDATA)) !== 0;
    }

    /**
     * Returns 'arrData' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDataIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDATA));
    }

    /**
     * Returns element from 'arrData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrDataAt($offset)
    {
        return $this->get(self::ARRDATA, $offset);
    }

    /**
     * Returns count of 'arrData' list
     *
     * @return int
     */
    public function getArrDataCount()
    {
        return $this->count(self::ARRDATA);
    }
}
}