<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MailDetail message
 */
class MailDetail extends \ProtobufMessage
{
    /* Field index constants */
    const NMAILID = 1;
    const BBEREAD = 2;
    const MAILTYPE = 3;
    const NFROMID = 4;
    const NSENDTIME = 5;
    const SZTITLE = 6;
    const SZCONTENT = 7;
    const ARROPTION = 8;
    const NDELETETIME = 9;
    const ARRITEMBASE = 10;
    const NISRECEIVE = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NMAILID => array(
            'name' => 'nMailID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BBEREAD => array(
            'name' => 'bBeRead',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::MAILTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MailType::enmMailType_Syetem,
            'name' => 'mailType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFROMID => array(
            'name' => 'nFromID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSENDTIME => array(
            'name' => 'nSendTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZTITLE => array(
            'name' => 'szTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZCONTENT => array(
            'name' => 'szContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NDELETETIME => array(
            'name' => 'nDeleteTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NISRECEIVE => array(
            'name' => 'nIsReceive',
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
        $this->values[self::NMAILID] = null;
        $this->values[self::BBEREAD] = null;
        $this->values[self::MAILTYPE] = self::$fields[self::MAILTYPE]['default'];
        $this->values[self::NFROMID] = null;
        $this->values[self::NSENDTIME] = null;
        $this->values[self::SZTITLE] = null;
        $this->values[self::SZCONTENT] = null;
        $this->values[self::ARROPTION] = array();
        $this->values[self::NDELETETIME] = null;
        $this->values[self::ARRITEMBASE] = array();
        $this->values[self::NISRECEIVE] = null;
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
     * Sets value of 'nMailID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMailID($value)
    {
        return $this->set(self::NMAILID, $value);
    }

    /**
     * Returns value of 'nMailID' property
     *
     * @return integer
     */
    public function getNMailID()
    {
        $value = $this->get(self::NMAILID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMailID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMailID()
    {
        return $this->get(self::NMAILID) !== null;
    }

    /**
     * Sets value of 'bBeRead' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBBeRead($value)
    {
        return $this->set(self::BBEREAD, $value);
    }

    /**
     * Returns value of 'bBeRead' property
     *
     * @return boolean
     */
    public function getBBeRead()
    {
        $value = $this->get(self::BBEREAD);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bBeRead' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBBeRead()
    {
        return $this->get(self::BBEREAD) !== null;
    }

    /**
     * Sets value of 'mailType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMailType($value)
    {
        return $this->set(self::MAILTYPE, $value);
    }

    /**
     * Returns value of 'mailType' property
     *
     * @return integer
     */
    public function getMailType()
    {
        $value = $this->get(self::MAILTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mailType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMailType()
    {
        return $this->get(self::MAILTYPE) !== null;
    }

    /**
     * Sets value of 'nFromID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFromID($value)
    {
        return $this->set(self::NFROMID, $value);
    }

    /**
     * Returns value of 'nFromID' property
     *
     * @return integer
     */
    public function getNFromID()
    {
        $value = $this->get(self::NFROMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFromID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFromID()
    {
        return $this->get(self::NFROMID) !== null;
    }

    /**
     * Sets value of 'nSendTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSendTime($value)
    {
        return $this->set(self::NSENDTIME, $value);
    }

    /**
     * Returns value of 'nSendTime' property
     *
     * @return integer
     */
    public function getNSendTime()
    {
        $value = $this->get(self::NSENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSendTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSendTime()
    {
        return $this->get(self::NSENDTIME) !== null;
    }

    /**
     * Sets value of 'szTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTitle($value)
    {
        return $this->set(self::SZTITLE, $value);
    }

    /**
     * Returns value of 'szTitle' property
     *
     * @return string
     */
    public function getSzTitle()
    {
        $value = $this->get(self::SZTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTitle()
    {
        return $this->get(self::SZTITLE) !== null;
    }

    /**
     * Sets value of 'szContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzContent($value)
    {
        return $this->set(self::SZCONTENT, $value);
    }

    /**
     * Returns value of 'szContent' property
     *
     * @return string
     */
    public function getSzContent()
    {
        $value = $this->get(self::SZCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzContent()
    {
        return $this->get(self::SZCONTENT) !== null;
    }

    /**
     * Appends value to 'arrOption' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrOption($value)
    {
        return $this->append(self::ARROPTION, $value);
    }

    /**
     * Clears 'arrOption' list
     *
     * @return null
     */
    public function clearArrOption()
    {
        return $this->clear(self::ARROPTION);
    }

    /**
     * Returns 'arrOption' list
     *
     * @return string[]
     */
    public function getArrOption()
    {
        return $this->get(self::ARROPTION);
    }

    /**
     * Returns true if 'arrOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption()
    {
        return count($this->get(self::ARROPTION)) !== 0;
    }

    /**
     * Returns 'arrOption' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOptionIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION));
    }

    /**
     * Returns element from 'arrOption' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrOptionAt($offset)
    {
        return $this->get(self::ARROPTION, $offset);
    }

    /**
     * Returns count of 'arrOption' list
     *
     * @return int
     */
    public function getArrOptionCount()
    {
        return $this->count(self::ARROPTION);
    }

    /**
     * Sets value of 'nDeleteTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDeleteTime($value)
    {
        return $this->set(self::NDELETETIME, $value);
    }

    /**
     * Returns value of 'nDeleteTime' property
     *
     * @return integer
     */
    public function getNDeleteTime()
    {
        $value = $this->get(self::NDELETETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDeleteTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDeleteTime()
    {
        return $this->get(self::NDELETETIME) !== null;
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

    /**
     * Sets value of 'nIsReceive' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIsReceive($value)
    {
        return $this->set(self::NISRECEIVE, $value);
    }

    /**
     * Returns value of 'nIsReceive' property
     *
     * @return integer
     */
    public function getNIsReceive()
    {
        $value = $this->get(self::NISRECEIVE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIsReceive' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIsReceive()
    {
        return $this->get(self::NISRECEIVE) !== null;
    }
}
}