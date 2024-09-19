<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemBoxInfo message
 */
class ItemBoxInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NBOXID = 1;
    const NITEMTYPE = 2;
    const NPRIZECNT = 3;
    const NNEEDCNT = 4;
    const ARRPRIZELIST = 5;
    const ARRPRIZEGOT = 6;
    const SZPICURL = 7;
    const STOPENKEY = 8;
    const SZADV = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NBOXID => array(
            'name' => 'nBoxID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMTYPE => array(
            'name' => 'nItemType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZECNT => array(
            'name' => 'nPrizeCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEEDCNT => array(
            'name' => 'nNeedCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRIZELIST => array(
            'name' => 'arrPrizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BoxPrizeUnit'
        ),
        self::ARRPRIZEGOT => array(
            'name' => 'arrPrizeGot',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::SZPICURL => array(
            'name' => 'szPicUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STOPENKEY => array(
            'name' => 'stOpenKey',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::SZADV => array(
            'name' => 'szAdv',
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
        $this->values[self::NBOXID] = null;
        $this->values[self::NITEMTYPE] = null;
        $this->values[self::NPRIZECNT] = null;
        $this->values[self::NNEEDCNT] = null;
        $this->values[self::ARRPRIZELIST] = array();
        $this->values[self::ARRPRIZEGOT] = array();
        $this->values[self::SZPICURL] = null;
        $this->values[self::STOPENKEY] = null;
        $this->values[self::SZADV] = null;
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
     * Sets value of 'nBoxID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBoxID($value)
    {
        return $this->set(self::NBOXID, $value);
    }

    /**
     * Returns value of 'nBoxID' property
     *
     * @return integer
     */
    public function getNBoxID()
    {
        $value = $this->get(self::NBOXID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBoxID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBoxID()
    {
        return $this->get(self::NBOXID) !== null;
    }

    /**
     * Sets value of 'nItemType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemType($value)
    {
        return $this->set(self::NITEMTYPE, $value);
    }

    /**
     * Returns value of 'nItemType' property
     *
     * @return integer
     */
    public function getNItemType()
    {
        $value = $this->get(self::NITEMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemType()
    {
        return $this->get(self::NITEMTYPE) !== null;
    }

    /**
     * Sets value of 'nPrizeCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrizeCnt($value)
    {
        return $this->set(self::NPRIZECNT, $value);
    }

    /**
     * Returns value of 'nPrizeCnt' property
     *
     * @return integer
     */
    public function getNPrizeCnt()
    {
        $value = $this->get(self::NPRIZECNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrizeCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrizeCnt()
    {
        return $this->get(self::NPRIZECNT) !== null;
    }

    /**
     * Sets value of 'nNeedCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNeedCnt($value)
    {
        return $this->set(self::NNEEDCNT, $value);
    }

    /**
     * Returns value of 'nNeedCnt' property
     *
     * @return integer
     */
    public function getNNeedCnt()
    {
        $value = $this->get(self::NNEEDCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNeedCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNeedCnt()
    {
        return $this->get(self::NNEEDCNT) !== null;
    }

    /**
     * Appends value to 'arrPrizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BoxPrizeUnit $value Value to append
     *
     * @return null
     */
    public function appendArrPrizeList(\Xnhd\Core\Pb\Sdo\BoxPrizeUnit $value)
    {
        return $this->append(self::ARRPRIZELIST, $value);
    }

    /**
     * Clears 'arrPrizeList' list
     *
     * @return null
     */
    public function clearArrPrizeList()
    {
        return $this->clear(self::ARRPRIZELIST);
    }

    /**
     * Returns 'arrPrizeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BoxPrizeUnit[]
     */
    public function getArrPrizeList()
    {
        return $this->get(self::ARRPRIZELIST);
    }

    /**
     * Returns true if 'arrPrizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrizeList()
    {
        return count($this->get(self::ARRPRIZELIST)) !== 0;
    }

    /**
     * Returns 'arrPrizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZELIST));
    }

    /**
     * Returns element from 'arrPrizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BoxPrizeUnit
     */
    public function getArrPrizeListAt($offset)
    {
        return $this->get(self::ARRPRIZELIST, $offset);
    }

    /**
     * Returns count of 'arrPrizeList' list
     *
     * @return int
     */
    public function getArrPrizeListCount()
    {
        return $this->count(self::ARRPRIZELIST);
    }

    /**
     * Appends value to 'arrPrizeGot' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrPrizeGot(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRPRIZEGOT, $value);
    }

    /**
     * Clears 'arrPrizeGot' list
     *
     * @return null
     */
    public function clearArrPrizeGot()
    {
        return $this->clear(self::ARRPRIZEGOT);
    }

    /**
     * Returns 'arrPrizeGot' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrPrizeGot()
    {
        return $this->get(self::ARRPRIZEGOT);
    }

    /**
     * Returns true if 'arrPrizeGot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrizeGot()
    {
        return count($this->get(self::ARRPRIZEGOT)) !== 0;
    }

    /**
     * Returns 'arrPrizeGot' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeGotIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZEGOT));
    }

    /**
     * Returns element from 'arrPrizeGot' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrPrizeGotAt($offset)
    {
        return $this->get(self::ARRPRIZEGOT, $offset);
    }

    /**
     * Returns count of 'arrPrizeGot' list
     *
     * @return int
     */
    public function getArrPrizeGotCount()
    {
        return $this->count(self::ARRPRIZEGOT);
    }

    /**
     * Sets value of 'szPicUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPicUrl($value)
    {
        return $this->set(self::SZPICURL, $value);
    }

    /**
     * Returns value of 'szPicUrl' property
     *
     * @return string
     */
    public function getSzPicUrl()
    {
        $value = $this->get(self::SZPICURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPicUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPicUrl()
    {
        return $this->get(self::SZPICURL) !== null;
    }

    /**
     * Sets value of 'stOpenKey' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStOpenKey(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STOPENKEY, $value);
    }

    /**
     * Returns value of 'stOpenKey' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStOpenKey()
    {
        return $this->get(self::STOPENKEY);
    }

    /**
     * Returns true if 'stOpenKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStOpenKey()
    {
        return $this->get(self::STOPENKEY) !== null;
    }

    /**
     * Sets value of 'szAdv' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAdv($value)
    {
        return $this->set(self::SZADV, $value);
    }

    /**
     * Returns value of 'szAdv' property
     *
     * @return string
     */
    public function getSzAdv()
    {
        $value = $this->get(self::SZADV);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAdv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAdv()
    {
        return $this->get(self::SZADV) !== null;
    }
}
}