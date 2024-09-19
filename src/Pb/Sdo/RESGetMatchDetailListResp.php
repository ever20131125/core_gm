<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetMatchDetailListResp message
 */
class RESGetMatchDetailListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NDANCEID = 2;
    const ARRMATCHDETAIL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDANCEID => array(
            'name' => 'nDanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMATCHDETAIL => array(
            'name' => 'arrMatchDetail',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistoryDetail'
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
        $this->values[self::NDANCEID] = null;
        $this->values[self::ARRMATCHDETAIL] = array();
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
     * Sets value of 'nDanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDanceID($value)
    {
        return $this->set(self::NDANCEID, $value);
    }

    /**
     * Returns value of 'nDanceID' property
     *
     * @return integer
     */
    public function getNDanceID()
    {
        $value = $this->get(self::NDANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDanceID()
    {
        return $this->get(self::NDANCEID) !== null;
    }

    /**
     * Appends value to 'arrMatchDetail' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistoryDetail $value Value to append
     *
     * @return null
     */
    public function appendArrMatchDetail(\Xnhd\Core\Pb\Sdo\MatchHistoryDetail $value)
    {
        return $this->append(self::ARRMATCHDETAIL, $value);
    }

    /**
     * Clears 'arrMatchDetail' list
     *
     * @return null
     */
    public function clearArrMatchDetail()
    {
        return $this->clear(self::ARRMATCHDETAIL);
    }

    /**
     * Returns 'arrMatchDetail' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryDetail[]
     */
    public function getArrMatchDetail()
    {
        return $this->get(self::ARRMATCHDETAIL);
    }

    /**
     * Returns true if 'arrMatchDetail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMatchDetail()
    {
        return count($this->get(self::ARRMATCHDETAIL)) !== 0;
    }

    /**
     * Returns 'arrMatchDetail' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMatchDetailIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMATCHDETAIL));
    }

    /**
     * Returns element from 'arrMatchDetail' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryDetail
     */
    public function getArrMatchDetailAt($offset)
    {
        return $this->get(self::ARRMATCHDETAIL, $offset);
    }

    /**
     * Returns count of 'arrMatchDetail' list
     *
     * @return int
     */
    public function getArrMatchDetailCount()
    {
        return $this->count(self::ARRMATCHDETAIL);
    }
}
}