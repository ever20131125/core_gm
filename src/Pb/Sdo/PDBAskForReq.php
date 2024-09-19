<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBAskForReq message
 */
class PDBAskForReq extends \ProtobufMessage
{
    /* Field index constants */
    const NASKERID = 1;
    const NASKEEID = 2;
    const ARRGOODSINFO = 3;
    const SZMSG = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NASKERID => array(
            'name' => 'nAskerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASKEEID => array(
            'name' => 'nAskeeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSINFO => array(
            'name' => 'arrGoodsInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemExtra'
        ),
        self::SZMSG => array(
            'name' => 'szMsg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NASKERID] = null;
        $this->values[self::NASKEEID] = null;
        $this->values[self::ARRGOODSINFO] = array();
        $this->values[self::SZMSG] = null;
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
     * Sets value of 'nAskerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskerID($value)
    {
        return $this->set(self::NASKERID, $value);
    }

    /**
     * Returns value of 'nAskerID' property
     *
     * @return integer
     */
    public function getNAskerID()
    {
        $value = $this->get(self::NASKERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskerID()
    {
        return $this->get(self::NASKERID) !== null;
    }

    /**
     * Sets value of 'nAskeeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskeeID($value)
    {
        return $this->set(self::NASKEEID, $value);
    }

    /**
     * Returns value of 'nAskeeID' property
     *
     * @return integer
     */
    public function getNAskeeID()
    {
        $value = $this->get(self::NASKEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskeeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskeeID()
    {
        return $this->get(self::NASKEEID) !== null;
    }

    /**
     * Appends value to 'arrGoodsInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemExtra $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsInfo(\Xnhd\Core\Pb\Sdo\ItemExtra $value)
    {
        return $this->append(self::ARRGOODSINFO, $value);
    }

    /**
     * Clears 'arrGoodsInfo' list
     *
     * @return null
     */
    public function clearArrGoodsInfo()
    {
        return $this->clear(self::ARRGOODSINFO);
    }

    /**
     * Returns 'arrGoodsInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra[]
     */
    public function getArrGoodsInfo()
    {
        return $this->get(self::ARRGOODSINFO);
    }

    /**
     * Returns true if 'arrGoodsInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoodsInfo()
    {
        return count($this->get(self::ARRGOODSINFO)) !== 0;
    }

    /**
     * Returns 'arrGoodsInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoodsInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOODSINFO));
    }

    /**
     * Returns element from 'arrGoodsInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra
     */
    public function getArrGoodsInfoAt($offset)
    {
        return $this->get(self::ARRGOODSINFO, $offset);
    }

    /**
     * Returns count of 'arrGoodsInfo' list
     *
     * @return int
     */
    public function getArrGoodsInfoCount()
    {
        return $this->count(self::ARRGOODSINFO);
    }

    /**
     * Sets value of 'szMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMsg($value)
    {
        return $this->set(self::SZMSG, $value);
    }

    /**
     * Returns value of 'szMsg' property
     *
     * @return string
     */
    public function getSzMsg()
    {
        $value = $this->get(self::SZMSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMsg()
    {
        return $this->get(self::SZMSG) !== null;
    }
}
}