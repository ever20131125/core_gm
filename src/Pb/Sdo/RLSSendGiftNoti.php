<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSSendGiftNoti message
 */
class RLSSendGiftNoti extends \ProtobufMessage
{
    /* Field index constants */
    const SENDERID = 1;
    const SENDERNAME = 2;
    const RECEIVERID = 3;
    const RECEIVERNAME = 4;
    const ARRGIFTLIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDERID => array(
            'name' => 'senderID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SENDERNAME => array(
            'name' => 'senderName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RECEIVERID => array(
            'name' => 'receiverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECEIVERNAME => array(
            'name' => 'receiverName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRGIFTLIST => array(
            'name' => 'arrGiftList',
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
        $this->values[self::SENDERID] = null;
        $this->values[self::SENDERNAME] = null;
        $this->values[self::RECEIVERID] = null;
        $this->values[self::RECEIVERNAME] = null;
        $this->values[self::ARRGIFTLIST] = array();
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
     * Sets value of 'senderID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSenderID($value)
    {
        return $this->set(self::SENDERID, $value);
    }

    /**
     * Returns value of 'senderID' property
     *
     * @return integer
     */
    public function getSenderID()
    {
        $value = $this->get(self::SENDERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'senderID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSenderID()
    {
        return $this->get(self::SENDERID) !== null;
    }

    /**
     * Sets value of 'senderName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSenderName($value)
    {
        return $this->set(self::SENDERNAME, $value);
    }

    /**
     * Returns value of 'senderName' property
     *
     * @return string
     */
    public function getSenderName()
    {
        $value = $this->get(self::SENDERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'senderName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSenderName()
    {
        return $this->get(self::SENDERNAME) !== null;
    }

    /**
     * Sets value of 'receiverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReceiverID($value)
    {
        return $this->set(self::RECEIVERID, $value);
    }

    /**
     * Returns value of 'receiverID' property
     *
     * @return integer
     */
    public function getReceiverID()
    {
        $value = $this->get(self::RECEIVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'receiverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReceiverID()
    {
        return $this->get(self::RECEIVERID) !== null;
    }

    /**
     * Sets value of 'receiverName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReceiverName($value)
    {
        return $this->set(self::RECEIVERNAME, $value);
    }

    /**
     * Returns value of 'receiverName' property
     *
     * @return string
     */
    public function getReceiverName()
    {
        $value = $this->get(self::RECEIVERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'receiverName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReceiverName()
    {
        return $this->get(self::RECEIVERNAME) !== null;
    }

    /**
     * Appends value to 'arrGiftList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrGiftList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRGIFTLIST, $value);
    }

    /**
     * Clears 'arrGiftList' list
     *
     * @return null
     */
    public function clearArrGiftList()
    {
        return $this->clear(self::ARRGIFTLIST);
    }

    /**
     * Returns 'arrGiftList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrGiftList()
    {
        return $this->get(self::ARRGIFTLIST);
    }

    /**
     * Returns true if 'arrGiftList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGiftList()
    {
        return count($this->get(self::ARRGIFTLIST)) !== 0;
    }

    /**
     * Returns 'arrGiftList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGiftListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGIFTLIST));
    }

    /**
     * Returns element from 'arrGiftList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrGiftListAt($offset)
    {
        return $this->get(self::ARRGIFTLIST, $offset);
    }

    /**
     * Returns count of 'arrGiftList' list
     *
     * @return int
     */
    public function getArrGiftListCount()
    {
        return $this->count(self::ARRGIFTLIST);
    }
}
}