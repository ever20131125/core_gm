<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASQuickDoneWorkResp message
 */
class TASQuickDoneWorkResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NWORKID = 3;
    const NTIMES = 4;
    const ARRITEMGAINED = 5;

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
        self::NWORKID => array(
            'name' => 'nWorkID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMES => array(
            'name' => 'nTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMGAINED => array(
            'name' => 'arrItemGained',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
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
        $this->values[self::NWORKID] = null;
        $this->values[self::NTIMES] = null;
        $this->values[self::ARRITEMGAINED] = array();
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
     * Sets value of 'nWorkID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWorkID($value)
    {
        return $this->set(self::NWORKID, $value);
    }

    /**
     * Returns value of 'nWorkID' property
     *
     * @return integer
     */
    public function getNWorkID()
    {
        $value = $this->get(self::NWORKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWorkID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWorkID()
    {
        return $this->get(self::NWORKID) !== null;
    }

    /**
     * Sets value of 'nTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimes($value)
    {
        return $this->set(self::NTIMES, $value);
    }

    /**
     * Returns value of 'nTimes' property
     *
     * @return integer
     */
    public function getNTimes()
    {
        $value = $this->get(self::NTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimes()
    {
        return $this->get(self::NTIMES) !== null;
    }

    /**
     * Appends value to 'arrItemGained' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Value to append
     *
     * @return null
     */
    public function appendArrItemGained(\Xnhd\Core\Pb\Sdo\ItemGained $value)
    {
        return $this->append(self::ARRITEMGAINED, $value);
    }

    /**
     * Clears 'arrItemGained' list
     *
     * @return null
     */
    public function clearArrItemGained()
    {
        return $this->clear(self::ARRITEMGAINED);
    }

    /**
     * Returns 'arrItemGained' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained[]
     */
    public function getArrItemGained()
    {
        return $this->get(self::ARRITEMGAINED);
    }

    /**
     * Returns true if 'arrItemGained' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemGained()
    {
        return count($this->get(self::ARRITEMGAINED)) !== 0;
    }

    /**
     * Returns 'arrItemGained' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemGainedIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMGAINED));
    }

    /**
     * Returns element from 'arrItemGained' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
     */
    public function getArrItemGainedAt($offset)
    {
        return $this->get(self::ARRITEMGAINED, $offset);
    }

    /**
     * Returns count of 'arrItemGained' list
     *
     * @return int
     */
    public function getArrItemGainedCount()
    {
        return $this->count(self::ARRITEMGAINED);
    }
}
}