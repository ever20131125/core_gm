<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAskForNoti message
 */
class RLSAskForNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NASKEEID = 1;
    const STASKERPUBLICINFO = 2;
    const ARRGOODSINFO = 3;
    const SZMSG = 4;
    const SZASKTRANSID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NASKEEID => array(
            'name' => 'nAskeeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STASKERPUBLICINFO => array(
            'name' => 'stAskerPublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
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
        $this->values[self::NASKEEID] = null;
        $this->values[self::STASKERPUBLICINFO] = null;
        $this->values[self::ARRGOODSINFO] = array();
        $this->values[self::SZMSG] = null;
        $this->values[self::SZASKTRANSID] = null;
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
     * Sets value of 'stAskerPublicInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStAskerPublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STASKERPUBLICINFO, $value);
    }

    /**
     * Returns value of 'stAskerPublicInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStAskerPublicInfo()
    {
        return $this->get(self::STASKERPUBLICINFO);
    }

    /**
     * Returns true if 'stAskerPublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAskerPublicInfo()
    {
        return $this->get(self::STASKERPUBLICINFO) !== null;
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
}
}