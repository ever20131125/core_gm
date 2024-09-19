<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBDecomItemResp message
 */
class PDBDecomItemResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRITEMINSID = 3;
    const ARRQUANTITY = 4;
    const NCOST = 5;
    const NSOUL = 6;
    const NGCOIN = 7;
    const ARRITEMBASE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMINSID => array(
            'name' => 'arrItemInsID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRQUANTITY => array(
            'name' => 'arrQuantity',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOST => array(
            'name' => 'nCost',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSOUL => array(
            'name' => 'nSoul',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGCOIN => array(
            'name' => 'nGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRITEMINSID] = array();
        $this->values[self::ARRQUANTITY] = array();
        $this->values[self::NCOST] = null;
        $this->values[self::NSOUL] = null;
        $this->values[self::NGCOIN] = null;
        $this->values[self::ARRITEMBASE] = array();
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
     * Appends value to 'arrItemInsID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemInsID($value)
    {
        return $this->append(self::ARRITEMINSID, $value);
    }

    /**
     * Clears 'arrItemInsID' list
     *
     * @return null
     */
    public function clearArrItemInsID()
    {
        return $this->clear(self::ARRITEMINSID);
    }

    /**
     * Returns 'arrItemInsID' list
     *
     * @return integer[]
     */
    public function getArrItemInsID()
    {
        return $this->get(self::ARRITEMINSID);
    }

    /**
     * Returns true if 'arrItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemInsID()
    {
        return count($this->get(self::ARRITEMINSID)) !== 0;
    }

    /**
     * Returns 'arrItemInsID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemInsIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMINSID));
    }

    /**
     * Returns element from 'arrItemInsID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemInsIDAt($offset)
    {
        return $this->get(self::ARRITEMINSID, $offset);
    }

    /**
     * Returns count of 'arrItemInsID' list
     *
     * @return int
     */
    public function getArrItemInsIDCount()
    {
        return $this->count(self::ARRITEMINSID);
    }

    /**
     * Appends value to 'arrQuantity' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrQuantity($value)
    {
        return $this->append(self::ARRQUANTITY, $value);
    }

    /**
     * Clears 'arrQuantity' list
     *
     * @return null
     */
    public function clearArrQuantity()
    {
        return $this->clear(self::ARRQUANTITY);
    }

    /**
     * Returns 'arrQuantity' list
     *
     * @return integer[]
     */
    public function getArrQuantity()
    {
        return $this->get(self::ARRQUANTITY);
    }

    /**
     * Returns true if 'arrQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrQuantity()
    {
        return count($this->get(self::ARRQUANTITY)) !== 0;
    }

    /**
     * Returns 'arrQuantity' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrQuantityIterator()
    {
        return new \ArrayIterator($this->get(self::ARRQUANTITY));
    }

    /**
     * Returns element from 'arrQuantity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrQuantityAt($offset)
    {
        return $this->get(self::ARRQUANTITY, $offset);
    }

    /**
     * Returns count of 'arrQuantity' list
     *
     * @return int
     */
    public function getArrQuantityCount()
    {
        return $this->count(self::ARRQUANTITY);
    }

    /**
     * Sets value of 'nCost' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCost($value)
    {
        return $this->set(self::NCOST, $value);
    }

    /**
     * Returns value of 'nCost' property
     *
     * @return integer
     */
    public function getNCost()
    {
        $value = $this->get(self::NCOST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCost()
    {
        return $this->get(self::NCOST) !== null;
    }

    /**
     * Sets value of 'nSoul' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSoul($value)
    {
        return $this->set(self::NSOUL, $value);
    }

    /**
     * Returns value of 'nSoul' property
     *
     * @return integer
     */
    public function getNSoul()
    {
        $value = $this->get(self::NSOUL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSoul' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSoul()
    {
        return $this->get(self::NSOUL) !== null;
    }

    /**
     * Sets value of 'nGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGCoin($value)
    {
        return $this->set(self::NGCOIN, $value);
    }

    /**
     * Returns value of 'nGCoin' property
     *
     * @return integer
     */
    public function getNGCoin()
    {
        $value = $this->get(self::NGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGCoin()
    {
        return $this->get(self::NGCOIN) !== null;
    }

    /**
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
    }
}
}