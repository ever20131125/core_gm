<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingInfo message
 */
class WeddingInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NWEDDINGID = 1;
    const NGROOMID = 2;
    const NBRIDEID = 3;
    const NWEDDINGSTAGE = 4;
    const NCREATETIME = 5;
    const NENDTIME = 6;
    const NLUXURY = 7;
    const ARRGIFTINFO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWEDDINGID => array(
            'name' => 'nWeddingID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGROOMID => array(
            'name' => 'nGroomID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBRIDEID => array(
            'name' => 'nBrideID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWEDDINGSTAGE => array(
            'name' => 'nWeddingStage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCREATETIME => array(
            'name' => 'nCreateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGIFTINFO => array(
            'name' => 'arrGiftInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingGiftInfo'
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
        $this->values[self::NWEDDINGID] = null;
        $this->values[self::NGROOMID] = null;
        $this->values[self::NBRIDEID] = null;
        $this->values[self::NWEDDINGSTAGE] = null;
        $this->values[self::NCREATETIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NLUXURY] = null;
        $this->values[self::ARRGIFTINFO] = array();
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
     * Sets value of 'nWeddingID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingID($value)
    {
        return $this->set(self::NWEDDINGID, $value);
    }

    /**
     * Returns value of 'nWeddingID' property
     *
     * @return integer
     */
    public function getNWeddingID()
    {
        $value = $this->get(self::NWEDDINGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingID()
    {
        return $this->get(self::NWEDDINGID) !== null;
    }

    /**
     * Sets value of 'nGroomID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGroomID($value)
    {
        return $this->set(self::NGROOMID, $value);
    }

    /**
     * Returns value of 'nGroomID' property
     *
     * @return integer
     */
    public function getNGroomID()
    {
        $value = $this->get(self::NGROOMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGroomID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGroomID()
    {
        return $this->get(self::NGROOMID) !== null;
    }

    /**
     * Sets value of 'nBrideID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBrideID($value)
    {
        return $this->set(self::NBRIDEID, $value);
    }

    /**
     * Returns value of 'nBrideID' property
     *
     * @return integer
     */
    public function getNBrideID()
    {
        $value = $this->get(self::NBRIDEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBrideID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBrideID()
    {
        return $this->get(self::NBRIDEID) !== null;
    }

    /**
     * Sets value of 'nWeddingStage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingStage($value)
    {
        return $this->set(self::NWEDDINGSTAGE, $value);
    }

    /**
     * Returns value of 'nWeddingStage' property
     *
     * @return integer
     */
    public function getNWeddingStage()
    {
        $value = $this->get(self::NWEDDINGSTAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingStage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingStage()
    {
        return $this->get(self::NWEDDINGSTAGE) !== null;
    }

    /**
     * Sets value of 'nCreateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateTime($value)
    {
        return $this->set(self::NCREATETIME, $value);
    }

    /**
     * Returns value of 'nCreateTime' property
     *
     * @return integer
     */
    public function getNCreateTime()
    {
        $value = $this->get(self::NCREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateTime()
    {
        return $this->get(self::NCREATETIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nLuxury' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLuxury($value)
    {
        return $this->set(self::NLUXURY, $value);
    }

    /**
     * Returns value of 'nLuxury' property
     *
     * @return integer
     */
    public function getNLuxury()
    {
        $value = $this->get(self::NLUXURY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLuxury' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLuxury()
    {
        return $this->get(self::NLUXURY) !== null;
    }

    /**
     * Appends value to 'arrGiftInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingGiftInfo $value Value to append
     *
     * @return null
     */
    public function appendArrGiftInfo(\Xnhd\Core\Pb\Sdo\WeddingGiftInfo $value)
    {
        return $this->append(self::ARRGIFTINFO, $value);
    }

    /**
     * Clears 'arrGiftInfo' list
     *
     * @return null
     */
    public function clearArrGiftInfo()
    {
        return $this->clear(self::ARRGIFTINFO);
    }

    /**
     * Returns 'arrGiftInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingGiftInfo[]
     */
    public function getArrGiftInfo()
    {
        return $this->get(self::ARRGIFTINFO);
    }

    /**
     * Returns true if 'arrGiftInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGiftInfo()
    {
        return count($this->get(self::ARRGIFTINFO)) !== 0;
    }

    /**
     * Returns 'arrGiftInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGiftInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGIFTINFO));
    }

    /**
     * Returns element from 'arrGiftInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingGiftInfo
     */
    public function getArrGiftInfoAt($offset)
    {
        return $this->get(self::ARRGIFTINFO, $offset);
    }

    /**
     * Returns count of 'arrGiftInfo' list
     *
     * @return int
     */
    public function getArrGiftInfoCount()
    {
        return $this->count(self::ARRGIFTINFO);
    }
}
}