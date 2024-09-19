<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleIDsResp message
 */
class RLSGetCoupleIDsResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRCOUPLEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRCOUPLEID => array(
            'name' => 'arrCoupleID',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRCOUPLEID] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Appends value to 'arrCoupleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCoupleID($value)
    {
        return $this->append(self::ARRCOUPLEID, $value);
    }

    /**
     * Clears 'arrCoupleID' list
     *
     * @return null
     */
    public function clearArrCoupleID()
    {
        return $this->clear(self::ARRCOUPLEID);
    }

    /**
     * Returns 'arrCoupleID' list
     *
     * @return integer[]
     */
    public function getArrCoupleID()
    {
        return $this->get(self::ARRCOUPLEID);
    }

    /**
     * Returns true if 'arrCoupleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCoupleID()
    {
        return count($this->get(self::ARRCOUPLEID)) !== 0;
    }

    /**
     * Returns 'arrCoupleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCoupleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOUPLEID));
    }

    /**
     * Returns element from 'arrCoupleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCoupleIDAt($offset)
    {
        return $this->get(self::ARRCOUPLEID, $offset);
    }

    /**
     * Returns count of 'arrCoupleID' list
     *
     * @return int
     */
    public function getArrCoupleIDCount()
    {
        return $this->count(self::ARRCOUPLEID);
    }
}
}