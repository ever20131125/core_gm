<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGiveReq message
 */
class IDBGiveReq extends \ProtobufMessage
{
    /* Field index constants */
    const NGIVEEID = 1;
    const GIVETYPE = 2;
    const NGIVERID = 3;
    const ARRGOODSINFO = 4;
    const SZMSG = 5;
    const SZASKTRANSID = 6;
    const NTICKETINSID = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGIVEEID => array(
            'name' => 'nGiveeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GIVETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GiveType::enmGiveType_None,
            'name' => 'giveType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGIVERID => array(
            'name' => 'nGiverID',
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
        self::SZASKTRANSID => array(
            'name' => 'szAskTransID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NTICKETINSID => array(
            'default' => 0,
            'name' => 'nTicketInsID',
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
        $this->values[self::NGIVEEID] = null;
        $this->values[self::GIVETYPE] = self::$fields[self::GIVETYPE]['default'];
        $this->values[self::NGIVERID] = null;
        $this->values[self::ARRGOODSINFO] = array();
        $this->values[self::SZMSG] = null;
        $this->values[self::SZASKTRANSID] = null;
        $this->values[self::NTICKETINSID] = self::$fields[self::NTICKETINSID]['default'];
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
     * Sets value of 'nGiveeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGiveeID($value)
    {
        return $this->set(self::NGIVEEID, $value);
    }

    /**
     * Returns value of 'nGiveeID' property
     *
     * @return integer
     */
    public function getNGiveeID()
    {
        $value = $this->get(self::NGIVEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGiveeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGiveeID()
    {
        return $this->get(self::NGIVEEID) !== null;
    }

    /**
     * Sets value of 'giveType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGiveType($value)
    {
        return $this->set(self::GIVETYPE, $value);
    }

    /**
     * Returns value of 'giveType' property
     *
     * @return integer
     */
    public function getGiveType()
    {
        $value = $this->get(self::GIVETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'giveType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGiveType()
    {
        return $this->get(self::GIVETYPE) !== null;
    }

    /**
     * Sets value of 'nGiverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGiverID($value)
    {
        return $this->set(self::NGIVERID, $value);
    }

    /**
     * Returns value of 'nGiverID' property
     *
     * @return integer
     */
    public function getNGiverID()
    {
        $value = $this->get(self::NGIVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGiverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGiverID()
    {
        return $this->get(self::NGIVERID) !== null;
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

    /**
     * Sets value of 'szAskTransID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAskTransID($value)
    {
        return $this->set(self::SZASKTRANSID, $value);
    }

    /**
     * Returns value of 'szAskTransID' property
     *
     * @return string
     */
    public function getSzAskTransID()
    {
        $value = $this->get(self::SZASKTRANSID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAskTransID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAskTransID()
    {
        return $this->get(self::SZASKTRANSID) !== null;
    }

    /**
     * Sets value of 'nTicketInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTicketInsID($value)
    {
        return $this->set(self::NTICKETINSID, $value);
    }

    /**
     * Returns value of 'nTicketInsID' property
     *
     * @return integer
     */
    public function getNTicketInsID()
    {
        $value = $this->get(self::NTICKETINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTicketInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTicketInsID()
    {
        return $this->get(self::NTICKETINSID) !== null;
    }
}
}