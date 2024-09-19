<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SocialDataUnit message
 */
class SocialDataUnit extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDID = 2;
    const SUBID = 3;
    const DATA1 = 4;
    const DATA2 = 5;
    const DATA3 = 6;
    const DATATIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUBID => array(
            'name' => 'subID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA1 => array(
            'name' => 'data1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA2 => array(
            'name' => 'data2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA3 => array(
            'name' => 'data3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATATIME => array(
            'name' => 'dataTime',
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::SUBID] = null;
        $this->values[self::DATA1] = null;
        $this->values[self::DATA2] = null;
        $this->values[self::DATA3] = null;
        $this->values[self::DATATIME] = null;
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
     * Sets value of 'friendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendID($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendID' property
     *
     * @return integer
     */
    public function getFriendID()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Sets value of 'subID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSubID($value)
    {
        return $this->set(self::SUBID, $value);
    }

    /**
     * Returns value of 'subID' property
     *
     * @return integer
     */
    public function getSubID()
    {
        $value = $this->get(self::SUBID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'subID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubID()
    {
        return $this->get(self::SUBID) !== null;
    }

    /**
     * Sets value of 'data1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setData1($value)
    {
        return $this->set(self::DATA1, $value);
    }

    /**
     * Returns value of 'data1' property
     *
     * @return integer
     */
    public function getData1()
    {
        $value = $this->get(self::DATA1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'data1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData1()
    {
        return $this->get(self::DATA1) !== null;
    }

    /**
     * Sets value of 'data2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setData2($value)
    {
        return $this->set(self::DATA2, $value);
    }

    /**
     * Returns value of 'data2' property
     *
     * @return integer
     */
    public function getData2()
    {
        $value = $this->get(self::DATA2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'data2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData2()
    {
        return $this->get(self::DATA2) !== null;
    }

    /**
     * Sets value of 'data3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setData3($value)
    {
        return $this->set(self::DATA3, $value);
    }

    /**
     * Returns value of 'data3' property
     *
     * @return integer
     */
    public function getData3()
    {
        $value = $this->get(self::DATA3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'data3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData3()
    {
        return $this->get(self::DATA3) !== null;
    }

    /**
     * Sets value of 'dataTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDataTime($value)
    {
        return $this->set(self::DATATIME, $value);
    }

    /**
     * Returns value of 'dataTime' property
     *
     * @return integer
     */
    public function getDataTime()
    {
        $value = $this->get(self::DATATIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dataTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataTime()
    {
        return $this->get(self::DATATIME) !== null;
    }
}
}