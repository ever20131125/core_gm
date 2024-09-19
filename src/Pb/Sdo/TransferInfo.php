<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TransferInfo message
 */
class TransferInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRTRANSFERITEM = 2;
    const NMONEY = 3;
    const NSCORE = 4;
    const NGCOIN = 5;
    const BITEMCONFIRM = 6;
    const BTRANCONFIRM = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTRANSFERITEM => array(
            'name' => 'arrTransferItem',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemExtra'
        ),
        self::NMONEY => array(
            'name' => 'nMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGCOIN => array(
            'name' => 'nGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BITEMCONFIRM => array(
            'name' => 'bItemConfirm',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BTRANCONFIRM => array(
            'name' => 'bTranConfirm',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRTRANSFERITEM] = array();
        $this->values[self::NMONEY] = null;
        $this->values[self::NSCORE] = null;
        $this->values[self::NGCOIN] = null;
        $this->values[self::BITEMCONFIRM] = null;
        $this->values[self::BTRANCONFIRM] = null;
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
     * Appends value to 'arrTransferItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemExtra $value Value to append
     *
     * @return null
     */
    public function appendArrTransferItem(\Xnhd\Core\Pb\Sdo\ItemExtra $value)
    {
        return $this->append(self::ARRTRANSFERITEM, $value);
    }

    /**
     * Clears 'arrTransferItem' list
     *
     * @return null
     */
    public function clearArrTransferItem()
    {
        return $this->clear(self::ARRTRANSFERITEM);
    }

    /**
     * Returns 'arrTransferItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra[]
     */
    public function getArrTransferItem()
    {
        return $this->get(self::ARRTRANSFERITEM);
    }

    /**
     * Returns true if 'arrTransferItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTransferItem()
    {
        return count($this->get(self::ARRTRANSFERITEM)) !== 0;
    }

    /**
     * Returns 'arrTransferItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTransferItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTRANSFERITEM));
    }

    /**
     * Returns element from 'arrTransferItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra
     */
    public function getArrTransferItemAt($offset)
    {
        return $this->get(self::ARRTRANSFERITEM, $offset);
    }

    /**
     * Returns count of 'arrTransferItem' list
     *
     * @return int
     */
    public function getArrTransferItemCount()
    {
        return $this->count(self::ARRTRANSFERITEM);
    }

    /**
     * Sets value of 'nMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoney($value)
    {
        return $this->set(self::NMONEY, $value);
    }

    /**
     * Returns value of 'nMoney' property
     *
     * @return integer
     */
    public function getNMoney()
    {
        $value = $this->get(self::NMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoney()
    {
        return $this->get(self::NMONEY) !== null;
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
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
     * Sets value of 'bItemConfirm' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBItemConfirm($value)
    {
        return $this->set(self::BITEMCONFIRM, $value);
    }

    /**
     * Returns value of 'bItemConfirm' property
     *
     * @return boolean
     */
    public function getBItemConfirm()
    {
        $value = $this->get(self::BITEMCONFIRM);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bItemConfirm' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBItemConfirm()
    {
        return $this->get(self::BITEMCONFIRM) !== null;
    }

    /**
     * Sets value of 'bTranConfirm' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBTranConfirm($value)
    {
        return $this->set(self::BTRANCONFIRM, $value);
    }

    /**
     * Returns value of 'bTranConfirm' property
     *
     * @return boolean
     */
    public function getBTranConfirm()
    {
        $value = $this->get(self::BTRANCONFIRM);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bTranConfirm' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBTranConfirm()
    {
        return $this->get(self::BTRANCONFIRM) !== null;
    }
}
}