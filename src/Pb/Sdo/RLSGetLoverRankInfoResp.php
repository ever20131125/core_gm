<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetLoverRankInfoResp message
 */
class RLSGetLoverRankInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const RANKTYPE = 2;
    const ARRLOVERINFO = 3;
    const ARRVALUE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::RANKTYPE => array(
            'name' => 'rankType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRLOVERINFO => array(
            'name' => 'arrLoverInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\LoverInfo'
        ),
        self::ARRVALUE => array(
            'name' => 'arrValue',
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
        $this->values[self::RANKTYPE] = null;
        $this->values[self::ARRLOVERINFO] = array();
        $this->values[self::ARRVALUE] = array();
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
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }

    /**
     * Appends value to 'arrLoverInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\LoverInfo $value Value to append
     *
     * @return null
     */
    public function appendArrLoverInfo(\Xnhd\Core\Pb\Sdo\LoverInfo $value)
    {
        return $this->append(self::ARRLOVERINFO, $value);
    }

    /**
     * Clears 'arrLoverInfo' list
     *
     * @return null
     */
    public function clearArrLoverInfo()
    {
        return $this->clear(self::ARRLOVERINFO);
    }

    /**
     * Returns 'arrLoverInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\LoverInfo[]
     */
    public function getArrLoverInfo()
    {
        return $this->get(self::ARRLOVERINFO);
    }

    /**
     * Returns true if 'arrLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLoverInfo()
    {
        return count($this->get(self::ARRLOVERINFO)) !== 0;
    }

    /**
     * Returns 'arrLoverInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLoverInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLOVERINFO));
    }

    /**
     * Returns element from 'arrLoverInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\LoverInfo
     */
    public function getArrLoverInfoAt($offset)
    {
        return $this->get(self::ARRLOVERINFO, $offset);
    }

    /**
     * Returns count of 'arrLoverInfo' list
     *
     * @return int
     */
    public function getArrLoverInfoCount()
    {
        return $this->count(self::ARRLOVERINFO);
    }

    /**
     * Appends value to 'arrValue' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrValue($value)
    {
        return $this->append(self::ARRVALUE, $value);
    }

    /**
     * Clears 'arrValue' list
     *
     * @return null
     */
    public function clearArrValue()
    {
        return $this->clear(self::ARRVALUE);
    }

    /**
     * Returns 'arrValue' list
     *
     * @return integer[]
     */
    public function getArrValue()
    {
        return $this->get(self::ARRVALUE);
    }

    /**
     * Returns true if 'arrValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrValue()
    {
        return count($this->get(self::ARRVALUE)) !== 0;
    }

    /**
     * Returns 'arrValue' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrValueIterator()
    {
        return new \ArrayIterator($this->get(self::ARRVALUE));
    }

    /**
     * Returns element from 'arrValue' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrValueAt($offset)
    {
        return $this->get(self::ARRVALUE, $offset);
    }

    /**
     * Returns count of 'arrValue' list
     *
     * @return int
     */
    public function getArrValueCount()
    {
        return $this->count(self::ARRVALUE);
    }
}
}