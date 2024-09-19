<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BeTipOffInfo message
 */
class BeTipOffInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NTARGETID = 1;
    const TIPOFFTYPE = 2;
    const NCOUNT = 3;
    const NFINISHTIME = 4;
    const SZDEALMESSAGE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIPOFFTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\TipOffType::enmTipOff_None,
            'name' => 'tipOffType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOUNT => array(
            'name' => 'nCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFINISHTIME => array(
            'name' => 'nFinishTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZDEALMESSAGE => array(
            'name' => 'szDealMessage',
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
        $this->values[self::NTARGETID] = null;
        $this->values[self::TIPOFFTYPE] = self::$fields[self::TIPOFFTYPE]['default'];
        $this->values[self::NCOUNT] = null;
        $this->values[self::NFINISHTIME] = null;
        $this->values[self::SZDEALMESSAGE] = null;
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
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }

    /**
     * Sets value of 'tipOffType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTipOffType($value)
    {
        return $this->set(self::TIPOFFTYPE, $value);
    }

    /**
     * Returns value of 'tipOffType' property
     *
     * @return integer
     */
    public function getTipOffType()
    {
        $value = $this->get(self::TIPOFFTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tipOffType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTipOffType()
    {
        return $this->get(self::TIPOFFTYPE) !== null;
    }

    /**
     * Sets value of 'nCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCount($value)
    {
        return $this->set(self::NCOUNT, $value);
    }

    /**
     * Returns value of 'nCount' property
     *
     * @return integer
     */
    public function getNCount()
    {
        $value = $this->get(self::NCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCount()
    {
        return $this->get(self::NCOUNT) !== null;
    }

    /**
     * Sets value of 'nFinishTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFinishTime($value)
    {
        return $this->set(self::NFINISHTIME, $value);
    }

    /**
     * Returns value of 'nFinishTime' property
     *
     * @return integer
     */
    public function getNFinishTime()
    {
        $value = $this->get(self::NFINISHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFinishTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFinishTime()
    {
        return $this->get(self::NFINISHTIME) !== null;
    }

    /**
     * Sets value of 'szDealMessage' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzDealMessage($value)
    {
        return $this->set(self::SZDEALMESSAGE, $value);
    }

    /**
     * Returns value of 'szDealMessage' property
     *
     * @return string
     */
    public function getSzDealMessage()
    {
        $value = $this->get(self::SZDEALMESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szDealMessage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzDealMessage()
    {
        return $this->get(self::SZDEALMESSAGE) !== null;
    }
}
}