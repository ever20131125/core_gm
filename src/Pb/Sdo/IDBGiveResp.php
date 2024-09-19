<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGiveResp message
 */
class IDBGiveResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NGIVEEID = 2;
    const GIVETYPE = 3;
    const NGIVERID = 4;
    const ARRGOODSINFO = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
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
        $this->values[self::NGIVEEID] = null;
        $this->values[self::GIVETYPE] = self::$fields[self::GIVETYPE]['default'];
        $this->values[self::NGIVERID] = null;
        $this->values[self::ARRGOODSINFO] = array();
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
}
}