<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RedBagDetail message
 */
class RedBagDetail extends \ProtobufMessage
{
    /* Field index constants */
    const SENDERID = 1;
    const STREDBAGSEND = 2;
    const NEMPTYTIME = 3;
    const NBESTIDX = 4;
    const ARRBAGCATCHER = 5;
    const SZMESSAGE = 6;
    const NOPTION = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDERID => array(
            'name' => 'senderID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STREDBAGSEND => array(
            'name' => 'stRedBagSend',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RedBagSend'
        ),
        self::NEMPTYTIME => array(
            'name' => 'nEmptyTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBESTIDX => array(
            'name' => 'nBestIdx',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBAGCATCHER => array(
            'name' => 'arrBagCatcher',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RedBagCatcher'
        ),
        self::SZMESSAGE => array(
            'name' => 'szMessage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
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
        $this->values[self::SENDERID] = null;
        $this->values[self::STREDBAGSEND] = null;
        $this->values[self::NEMPTYTIME] = null;
        $this->values[self::NBESTIDX] = null;
        $this->values[self::ARRBAGCATCHER] = array();
        $this->values[self::SZMESSAGE] = null;
        $this->values[self::NOPTION] = null;
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
     * Sets value of 'stRedBagSend' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RedBagSend $value Property value
     *
     * @return null
     */
    public function setStRedBagSend(\Xnhd\Core\Pb\Sdo\RedBagSend $value=null)
    {
        return $this->set(self::STREDBAGSEND, $value);
    }

    /**
     * Returns value of 'stRedBagSend' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagSend
     */
    public function getStRedBagSend()
    {
        return $this->get(self::STREDBAGSEND);
    }

    /**
     * Returns true if 'stRedBagSend' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRedBagSend()
    {
        return $this->get(self::STREDBAGSEND) !== null;
    }

    /**
     * Sets value of 'nEmptyTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEmptyTime($value)
    {
        return $this->set(self::NEMPTYTIME, $value);
    }

    /**
     * Returns value of 'nEmptyTime' property
     *
     * @return integer
     */
    public function getNEmptyTime()
    {
        $value = $this->get(self::NEMPTYTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEmptyTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEmptyTime()
    {
        return $this->get(self::NEMPTYTIME) !== null;
    }

    /**
     * Sets value of 'nBestIdx' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBestIdx($value)
    {
        return $this->set(self::NBESTIDX, $value);
    }

    /**
     * Returns value of 'nBestIdx' property
     *
     * @return integer
     */
    public function getNBestIdx()
    {
        $value = $this->get(self::NBESTIDX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBestIdx' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBestIdx()
    {
        return $this->get(self::NBESTIDX) !== null;
    }

    /**
     * Appends value to 'arrBagCatcher' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RedBagCatcher $value Value to append
     *
     * @return null
     */
    public function appendArrBagCatcher(\Xnhd\Core\Pb\Sdo\RedBagCatcher $value)
    {
        return $this->append(self::ARRBAGCATCHER, $value);
    }

    /**
     * Clears 'arrBagCatcher' list
     *
     * @return null
     */
    public function clearArrBagCatcher()
    {
        return $this->clear(self::ARRBAGCATCHER);
    }

    /**
     * Returns 'arrBagCatcher' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagCatcher[]
     */
    public function getArrBagCatcher()
    {
        return $this->get(self::ARRBAGCATCHER);
    }

    /**
     * Returns true if 'arrBagCatcher' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBagCatcher()
    {
        return count($this->get(self::ARRBAGCATCHER)) !== 0;
    }

    /**
     * Returns 'arrBagCatcher' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBagCatcherIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBAGCATCHER));
    }

    /**
     * Returns element from 'arrBagCatcher' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagCatcher
     */
    public function getArrBagCatcherAt($offset)
    {
        return $this->get(self::ARRBAGCATCHER, $offset);
    }

    /**
     * Returns count of 'arrBagCatcher' list
     *
     * @return int
     */
    public function getArrBagCatcherCount()
    {
        return $this->count(self::ARRBAGCATCHER);
    }

    /**
     * Sets value of 'szMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMessage($value)
    {
        return $this->set(self::SZMESSAGE, $value);
    }

    /**
     * Returns value of 'szMessage' property
     *
     * @return string
     */
    public function getSzMessage()
    {
        $value = $this->get(self::SZMESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMessage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMessage()
    {
        return $this->get(self::SZMESSAGE) !== null;
    }

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
    }
}
}