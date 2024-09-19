<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetSendRecordResp message
 */
class RLSGetSendRecordResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const TYPE = 2;
    const RECORDS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SendGiftRecordType::enmSendGiftRecordType_All,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECORDS => array(
            'name' => 'records',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FriendGiftRecord'
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
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::RECORDS] = array();
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Appends value to 'records' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FriendGiftRecord $value Value to append
     *
     * @return null
     */
    public function appendRecords(\Xnhd\Core\Pb\Sdo\FriendGiftRecord $value)
    {
        return $this->append(self::RECORDS, $value);
    }

    /**
     * Clears 'records' list
     *
     * @return null
     */
    public function clearRecords()
    {
        return $this->clear(self::RECORDS);
    }

    /**
     * Returns 'records' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendGiftRecord[]
     */
    public function getRecords()
    {
        return $this->get(self::RECORDS);
    }

    /**
     * Returns true if 'records' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecords()
    {
        return count($this->get(self::RECORDS)) !== 0;
    }

    /**
     * Returns 'records' iterator
     *
     * @return \ArrayIterator
     */
    public function getRecordsIterator()
    {
        return new \ArrayIterator($this->get(self::RECORDS));
    }

    /**
     * Returns element from 'records' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FriendGiftRecord
     */
    public function getRecordsAt($offset)
    {
        return $this->get(self::RECORDS, $offset);
    }

    /**
     * Returns count of 'records' list
     *
     * @return int
     */
    public function getRecordsCount()
    {
        return $this->count(self::RECORDS);
    }
}
}