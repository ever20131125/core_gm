<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBOpenItemBoxResp message
 */
class IDBOpenItemBoxResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NITEMINSID = 3;
    const NQUANTITY = 4;
    const ARRITEMPRIZE = 5;
    const ARRPRIZELIST = 6;

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
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMPRIZE => array(
            'name' => 'arrItemPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::ARRPRIZELIST => array(
            'name' => 'arrPrizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RafflePrize'
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
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::ARRITEMPRIZE] = array();
        $this->values[self::ARRPRIZELIST] = array();
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
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
    }

    /**
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
    }

    /**
     * Appends value to 'arrItemPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemPrize(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMPRIZE, $value);
    }

    /**
     * Clears 'arrItemPrize' list
     *
     * @return null
     */
    public function clearArrItemPrize()
    {
        return $this->clear(self::ARRITEMPRIZE);
    }

    /**
     * Returns 'arrItemPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemPrize()
    {
        return $this->get(self::ARRITEMPRIZE);
    }

    /**
     * Returns true if 'arrItemPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemPrize()
    {
        return count($this->get(self::ARRITEMPRIZE)) !== 0;
    }

    /**
     * Returns 'arrItemPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMPRIZE));
    }

    /**
     * Returns element from 'arrItemPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemPrizeAt($offset)
    {
        return $this->get(self::ARRITEMPRIZE, $offset);
    }

    /**
     * Returns count of 'arrItemPrize' list
     *
     * @return int
     */
    public function getArrItemPrizeCount()
    {
        return $this->count(self::ARRITEMPRIZE);
    }

    /**
     * Appends value to 'arrPrizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RafflePrize $value Value to append
     *
     * @return null
     */
    public function appendArrPrizeList(\Xnhd\Core\Pb\Sdo\RafflePrize $value)
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
     * @return \Xnhd\Core\Pb\Sdo\RafflePrize[]
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
     * @return \Xnhd\Core\Pb\Sdo\RafflePrize
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
}
}