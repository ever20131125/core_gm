<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESFeedSpriteResp message
 */
class PESFeedSpriteResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SRCROLEID = 2;
    const DSTROLEID = 3;
    const GOODSID = 4;
    const GOODSNUMBER = 5;
    const FEEDSTATUS = 6;
    const PROPERTY = 7;
    const PRIZEITEM = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SRCROLEID => array(
            'name' => 'srcRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DSTROLEID => array(
            'name' => 'dstRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GOODSID => array(
            'name' => 'goodsId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GOODSNUMBER => array(
            'name' => 'goodsNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FEEDSTATUS => array(
            'name' => 'feedStatus',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\FeedStatus'
        ),
        self::PROPERTY => array(
            'name' => 'property',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\SpriteProperty'
        ),
        self::PRIZEITEM => array(
            'name' => 'prizeItem',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::SRCROLEID] = null;
        $this->values[self::DSTROLEID] = null;
        $this->values[self::GOODSID] = null;
        $this->values[self::GOODSNUMBER] = null;
        $this->values[self::FEEDSTATUS] = null;
        $this->values[self::PROPERTY] = null;
        $this->values[self::PRIZEITEM] = array();
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
     * Sets value of 'srcRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSrcRoleId($value)
    {
        return $this->set(self::SRCROLEID, $value);
    }

    /**
     * Returns value of 'srcRoleId' property
     *
     * @return integer
     */
    public function getSrcRoleId()
    {
        $value = $this->get(self::SRCROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'srcRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSrcRoleId()
    {
        return $this->get(self::SRCROLEID) !== null;
    }

    /**
     * Sets value of 'dstRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDstRoleId($value)
    {
        return $this->set(self::DSTROLEID, $value);
    }

    /**
     * Returns value of 'dstRoleId' property
     *
     * @return integer
     */
    public function getDstRoleId()
    {
        $value = $this->get(self::DSTROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dstRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDstRoleId()
    {
        return $this->get(self::DSTROLEID) !== null;
    }

    /**
     * Sets value of 'goodsId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGoodsId($value)
    {
        return $this->set(self::GOODSID, $value);
    }

    /**
     * Returns value of 'goodsId' property
     *
     * @return integer
     */
    public function getGoodsId()
    {
        $value = $this->get(self::GOODSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'goodsId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGoodsId()
    {
        return $this->get(self::GOODSID) !== null;
    }

    /**
     * Sets value of 'goodsNumber' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGoodsNumber($value)
    {
        return $this->set(self::GOODSNUMBER, $value);
    }

    /**
     * Returns value of 'goodsNumber' property
     *
     * @return integer
     */
    public function getGoodsNumber()
    {
        $value = $this->get(self::GOODSNUMBER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'goodsNumber' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGoodsNumber()
    {
        return $this->get(self::GOODSNUMBER) !== null;
    }

    /**
     * Sets value of 'feedStatus' property
     *
     * @param \Xnhd\Core\Pb\Sdo\FeedStatus $value Property value
     *
     * @return null
     */
    public function setFeedStatus(\Xnhd\Core\Pb\Sdo\FeedStatus $value=null)
    {
        return $this->set(self::FEEDSTATUS, $value);
    }

    /**
     * Returns value of 'feedStatus' property
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus
     */
    public function getFeedStatus()
    {
        return $this->get(self::FEEDSTATUS);
    }

    /**
     * Returns true if 'feedStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedStatus()
    {
        return $this->get(self::FEEDSTATUS) !== null;
    }

    /**
     * Sets value of 'property' property
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Property value
     *
     * @return null
     */
    public function setProperty(\Xnhd\Core\Pb\Sdo\SpriteProperty $value=null)
    {
        return $this->set(self::PROPERTY, $value);
    }

    /**
     * Returns value of 'property' property
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getProperty()
    {
        return $this->get(self::PROPERTY);
    }

    /**
     * Returns true if 'property' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProperty()
    {
        return $this->get(self::PROPERTY) !== null;
    }

    /**
     * Appends value to 'prizeItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendPrizeItem(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::PRIZEITEM, $value);
    }

    /**
     * Clears 'prizeItem' list
     *
     * @return null
     */
    public function clearPrizeItem()
    {
        return $this->clear(self::PRIZEITEM);
    }

    /**
     * Returns 'prizeItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getPrizeItem()
    {
        return $this->get(self::PRIZEITEM);
    }

    /**
     * Returns true if 'prizeItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeItem()
    {
        return count($this->get(self::PRIZEITEM)) !== 0;
    }

    /**
     * Returns 'prizeItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeItemIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZEITEM));
    }

    /**
     * Returns element from 'prizeItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getPrizeItemAt($offset)
    {
        return $this->get(self::PRIZEITEM, $offset);
    }

    /**
     * Returns count of 'prizeItem' list
     *
     * @return int
     */
    public function getPrizeItemCount()
    {
        return $this->count(self::PRIZEITEM);
    }
}
}