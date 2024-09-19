<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSHandleApplyResp message
 */
class GDSHandleApplyResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ANSWERTYPE = 2;
    const ERRORCODELIST = 3;
    const DEALLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ANSWERTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Unknow,
            'name' => 'answerType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERRORCODELIST => array(
            'name' => 'errorCodeList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::DEALLIST => array(
            'name' => 'dealList',
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
        $this->values[self::ANSWERTYPE] = self::$fields[self::ANSWERTYPE]['default'];
        $this->values[self::ERRORCODELIST] = array();
        $this->values[self::DEALLIST] = array();
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
     * Sets value of 'answerType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnswerType($value)
    {
        return $this->set(self::ANSWERTYPE, $value);
    }

    /**
     * Returns value of 'answerType' property
     *
     * @return integer
     */
    public function getAnswerType()
    {
        $value = $this->get(self::ANSWERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'answerType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnswerType()
    {
        return $this->get(self::ANSWERTYPE) !== null;
    }

    /**
     * Appends value to 'errorCodeList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendErrorCodeList($value)
    {
        return $this->append(self::ERRORCODELIST, $value);
    }

    /**
     * Clears 'errorCodeList' list
     *
     * @return null
     */
    public function clearErrorCodeList()
    {
        return $this->clear(self::ERRORCODELIST);
    }

    /**
     * Returns 'errorCodeList' list
     *
     * @return integer[]
     */
    public function getErrorCodeList()
    {
        return $this->get(self::ERRORCODELIST);
    }

    /**
     * Returns true if 'errorCodeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorCodeList()
    {
        return count($this->get(self::ERRORCODELIST)) !== 0;
    }

    /**
     * Returns 'errorCodeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getErrorCodeListIterator()
    {
        return new \ArrayIterator($this->get(self::ERRORCODELIST));
    }

    /**
     * Returns element from 'errorCodeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getErrorCodeListAt($offset)
    {
        return $this->get(self::ERRORCODELIST, $offset);
    }

    /**
     * Returns count of 'errorCodeList' list
     *
     * @return int
     */
    public function getErrorCodeListCount()
    {
        return $this->count(self::ERRORCODELIST);
    }

    /**
     * Appends value to 'dealList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDealList($value)
    {
        return $this->append(self::DEALLIST, $value);
    }

    /**
     * Clears 'dealList' list
     *
     * @return null
     */
    public function clearDealList()
    {
        return $this->clear(self::DEALLIST);
    }

    /**
     * Returns 'dealList' list
     *
     * @return integer[]
     */
    public function getDealList()
    {
        return $this->get(self::DEALLIST);
    }

    /**
     * Returns true if 'dealList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDealList()
    {
        return count($this->get(self::DEALLIST)) !== 0;
    }

    /**
     * Returns 'dealList' iterator
     *
     * @return \ArrayIterator
     */
    public function getDealListIterator()
    {
        return new \ArrayIterator($this->get(self::DEALLIST));
    }

    /**
     * Returns element from 'dealList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDealListAt($offset)
    {
        return $this->get(self::DEALLIST, $offset);
    }

    /**
     * Returns count of 'dealList' list
     *
     * @return int
     */
    public function getDealListCount()
    {
        return $this->count(self::DEALLIST);
    }
}
}