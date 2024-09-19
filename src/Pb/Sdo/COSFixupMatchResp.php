<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSFixupMatchResp message
 */
class COSFixupMatchResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SOURCE = 3;
    const ARRTARGET = 4;
    const ARRRESULT = 5;

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
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_CreateRoom,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTARGET => array(
            'name' => 'arrTarget',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRRESULT => array(
            'name' => 'arrResult',
            'repeated' => true,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::ARRTARGET] = array();
        $this->values[self::ARRRESULT] = array();
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Appends value to 'arrTarget' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTarget($value)
    {
        return $this->append(self::ARRTARGET, $value);
    }

    /**
     * Clears 'arrTarget' list
     *
     * @return null
     */
    public function clearArrTarget()
    {
        return $this->clear(self::ARRTARGET);
    }

    /**
     * Returns 'arrTarget' list
     *
     * @return integer[]
     */
    public function getArrTarget()
    {
        return $this->get(self::ARRTARGET);
    }

    /**
     * Returns true if 'arrTarget' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTarget()
    {
        return count($this->get(self::ARRTARGET)) !== 0;
    }

    /**
     * Returns 'arrTarget' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTargetIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTARGET));
    }

    /**
     * Returns element from 'arrTarget' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTargetAt($offset)
    {
        return $this->get(self::ARRTARGET, $offset);
    }

    /**
     * Returns count of 'arrTarget' list
     *
     * @return int
     */
    public function getArrTargetCount()
    {
        return $this->count(self::ARRTARGET);
    }

    /**
     * Appends value to 'arrResult' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrResult($value)
    {
        return $this->append(self::ARRRESULT, $value);
    }

    /**
     * Clears 'arrResult' list
     *
     * @return null
     */
    public function clearArrResult()
    {
        return $this->clear(self::ARRRESULT);
    }

    /**
     * Returns 'arrResult' list
     *
     * @return integer[]
     */
    public function getArrResult()
    {
        return $this->get(self::ARRRESULT);
    }

    /**
     * Returns true if 'arrResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrResult()
    {
        return count($this->get(self::ARRRESULT)) !== 0;
    }

    /**
     * Returns 'arrResult' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrResultIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRESULT));
    }

    /**
     * Returns element from 'arrResult' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrResultAt($offset)
    {
        return $this->get(self::ARRRESULT, $offset);
    }

    /**
     * Returns count of 'arrResult' list
     *
     * @return int
     */
    public function getArrResultCount()
    {
        return $this->count(self::ARRRESULT);
    }
}
}