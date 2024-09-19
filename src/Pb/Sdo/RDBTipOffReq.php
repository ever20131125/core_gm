<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBTipOffReq message
 */
class RDBTipOffReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTARGETID = 2;
    const ARRTIPOFFTYPE = 3;
    const SZWORD = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTIPOFFTYPE => array(
            'name' => 'arrTipOffType',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZWORD => array(
            'name' => 'szWord',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NTARGETID] = null;
        $this->values[self::ARRTIPOFFTYPE] = array();
        $this->values[self::SZWORD] = null;
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
     * Appends value to 'arrTipOffType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTipOffType($value)
    {
        return $this->append(self::ARRTIPOFFTYPE, $value);
    }

    /**
     * Clears 'arrTipOffType' list
     *
     * @return null
     */
    public function clearArrTipOffType()
    {
        return $this->clear(self::ARRTIPOFFTYPE);
    }

    /**
     * Returns 'arrTipOffType' list
     *
     * @return integer[]
     */
    public function getArrTipOffType()
    {
        return $this->get(self::ARRTIPOFFTYPE);
    }

    /**
     * Returns true if 'arrTipOffType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTipOffType()
    {
        return count($this->get(self::ARRTIPOFFTYPE)) !== 0;
    }

    /**
     * Returns 'arrTipOffType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTipOffTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTIPOFFTYPE));
    }

    /**
     * Returns element from 'arrTipOffType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTipOffTypeAt($offset)
    {
        return $this->get(self::ARRTIPOFFTYPE, $offset);
    }

    /**
     * Returns count of 'arrTipOffType' list
     *
     * @return int
     */
    public function getArrTipOffTypeCount()
    {
        return $this->count(self::ARRTIPOFFTYPE);
    }

    /**
     * Sets value of 'szWord' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzWord($value)
    {
        return $this->set(self::SZWORD, $value);
    }

    /**
     * Returns value of 'szWord' property
     *
     * @return string
     */
    public function getSzWord()
    {
        $value = $this->get(self::SZWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szWord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzWord()
    {
        return $this->get(self::SZWORD) !== null;
    }
}
}