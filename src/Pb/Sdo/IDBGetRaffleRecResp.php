<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetRaffleRecResp message
 */
class IDBGetRaffleRecResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const RAFFLEID = 3;
    const MYRECORD = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RAFFLEID => array(
            'name' => 'raffleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MYRECORD => array(
            'name' => 'myRecord',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RaffleRecord'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::RAFFLEID] = null;
        $this->values[self::MYRECORD] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'raffleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRaffleID($value)
    {
        return $this->set(self::RAFFLEID, $value);
    }

    /**
     * Returns value of 'raffleID' property
     *
     * @return integer
     */
    public function getRaffleID()
    {
        $value = $this->get(self::RAFFLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'raffleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRaffleID()
    {
        return $this->get(self::RAFFLEID) !== null;
    }

    /**
     * Appends value to 'myRecord' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RaffleRecord $value Value to append
     *
     * @return null
     */
    public function appendMyRecord(\Xnhd\Core\Pb\Sdo\RaffleRecord $value)
    {
        return $this->append(self::MYRECORD, $value);
    }

    /**
     * Clears 'myRecord' list
     *
     * @return null
     */
    public function clearMyRecord()
    {
        return $this->clear(self::MYRECORD);
    }

    /**
     * Returns 'myRecord' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaffleRecord[]
     */
    public function getMyRecord()
    {
        return $this->get(self::MYRECORD);
    }

    /**
     * Returns true if 'myRecord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMyRecord()
    {
        return count($this->get(self::MYRECORD)) !== 0;
    }

    /**
     * Returns 'myRecord' iterator
     *
     * @return \ArrayIterator
     */
    public function getMyRecordIterator()
    {
        return new \ArrayIterator($this->get(self::MYRECORD));
    }

    /**
     * Returns element from 'myRecord' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaffleRecord
     */
    public function getMyRecordAt($offset)
    {
        return $this->get(self::MYRECORD, $offset);
    }

    /**
     * Returns count of 'myRecord' list
     *
     * @return int
     */
    public function getMyRecordCount()
    {
        return $this->count(self::MYRECORD);
    }
}
}