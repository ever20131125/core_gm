<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QuestionInfo message
 */
class QuestionInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SZASK = 1;
    const ARRANSWER = 2;
    const ARRKEY = 3;
    const NCORRECT = 4;
    const NINDEX = 5;
    const NBEANSWERED = 6;
    const NLASTANSWER = 7;
    const NTYPE = 8;
    const NOPTIONAL = 9;
    const NEXPIREDTIME = 10;
    const NUNIQUEID = 11;
    const NIFSENTFORHELP = 12;
    const NMODE = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZASK => array(
            'name' => 'szAsk',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRANSWER => array(
            'name' => 'arrAnswer',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRKEY => array(
            'name' => 'arrKey',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCORRECT => array(
            'name' => 'nCorrect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NINDEX => array(
            'name' => 'nIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBEANSWERED => array(
            'name' => 'nBeAnswered',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTANSWER => array(
            'name' => 'nLastAnswer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTYPE => array(
            'name' => 'nType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTIONAL => array(
            'name' => 'nOptional',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPIREDTIME => array(
            'name' => 'nExpiredTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUNIQUEID => array(
            'name' => 'nUniqueID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NIFSENTFORHELP => array(
            'name' => 'nIfSentForHelp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMODE => array(
            'name' => 'nMode',
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
        $this->values[self::SZASK] = null;
        $this->values[self::ARRANSWER] = array();
        $this->values[self::ARRKEY] = array();
        $this->values[self::NCORRECT] = null;
        $this->values[self::NINDEX] = null;
        $this->values[self::NBEANSWERED] = null;
        $this->values[self::NLASTANSWER] = null;
        $this->values[self::NTYPE] = null;
        $this->values[self::NOPTIONAL] = array();
        $this->values[self::NEXPIREDTIME] = null;
        $this->values[self::NUNIQUEID] = null;
        $this->values[self::NIFSENTFORHELP] = null;
        $this->values[self::NMODE] = null;
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
     * Sets value of 'szAsk' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAsk($value)
    {
        return $this->set(self::SZASK, $value);
    }

    /**
     * Returns value of 'szAsk' property
     *
     * @return string
     */
    public function getSzAsk()
    {
        $value = $this->get(self::SZASK);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAsk' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAsk()
    {
        return $this->get(self::SZASK) !== null;
    }

    /**
     * Appends value to 'arrAnswer' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrAnswer($value)
    {
        return $this->append(self::ARRANSWER, $value);
    }

    /**
     * Clears 'arrAnswer' list
     *
     * @return null
     */
    public function clearArrAnswer()
    {
        return $this->clear(self::ARRANSWER);
    }

    /**
     * Returns 'arrAnswer' list
     *
     * @return string[]
     */
    public function getArrAnswer()
    {
        return $this->get(self::ARRANSWER);
    }

    /**
     * Returns true if 'arrAnswer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAnswer()
    {
        return count($this->get(self::ARRANSWER)) !== 0;
    }

    /**
     * Returns 'arrAnswer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAnswerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRANSWER));
    }

    /**
     * Returns element from 'arrAnswer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrAnswerAt($offset)
    {
        return $this->get(self::ARRANSWER, $offset);
    }

    /**
     * Returns count of 'arrAnswer' list
     *
     * @return int
     */
    public function getArrAnswerCount()
    {
        return $this->count(self::ARRANSWER);
    }

    /**
     * Appends value to 'arrKey' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrKey($value)
    {
        return $this->append(self::ARRKEY, $value);
    }

    /**
     * Clears 'arrKey' list
     *
     * @return null
     */
    public function clearArrKey()
    {
        return $this->clear(self::ARRKEY);
    }

    /**
     * Returns 'arrKey' list
     *
     * @return integer[]
     */
    public function getArrKey()
    {
        return $this->get(self::ARRKEY);
    }

    /**
     * Returns true if 'arrKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrKey()
    {
        return count($this->get(self::ARRKEY)) !== 0;
    }

    /**
     * Returns 'arrKey' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrKeyIterator()
    {
        return new \ArrayIterator($this->get(self::ARRKEY));
    }

    /**
     * Returns element from 'arrKey' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrKeyAt($offset)
    {
        return $this->get(self::ARRKEY, $offset);
    }

    /**
     * Returns count of 'arrKey' list
     *
     * @return int
     */
    public function getArrKeyCount()
    {
        return $this->count(self::ARRKEY);
    }

    /**
     * Sets value of 'nCorrect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCorrect($value)
    {
        return $this->set(self::NCORRECT, $value);
    }

    /**
     * Returns value of 'nCorrect' property
     *
     * @return integer
     */
    public function getNCorrect()
    {
        $value = $this->get(self::NCORRECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCorrect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCorrect()
    {
        return $this->get(self::NCORRECT) !== null;
    }

    /**
     * Sets value of 'nIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIndex($value)
    {
        return $this->set(self::NINDEX, $value);
    }

    /**
     * Returns value of 'nIndex' property
     *
     * @return integer
     */
    public function getNIndex()
    {
        $value = $this->get(self::NINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIndex()
    {
        return $this->get(self::NINDEX) !== null;
    }

    /**
     * Sets value of 'nBeAnswered' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBeAnswered($value)
    {
        return $this->set(self::NBEANSWERED, $value);
    }

    /**
     * Returns value of 'nBeAnswered' property
     *
     * @return integer
     */
    public function getNBeAnswered()
    {
        $value = $this->get(self::NBEANSWERED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBeAnswered' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBeAnswered()
    {
        return $this->get(self::NBEANSWERED) !== null;
    }

    /**
     * Sets value of 'nLastAnswer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastAnswer($value)
    {
        return $this->set(self::NLASTANSWER, $value);
    }

    /**
     * Returns value of 'nLastAnswer' property
     *
     * @return integer
     */
    public function getNLastAnswer()
    {
        $value = $this->get(self::NLASTANSWER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastAnswer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastAnswer()
    {
        return $this->get(self::NLASTANSWER) !== null;
    }

    /**
     * Sets value of 'nType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return integer
     */
    public function getNType()
    {
        $value = $this->get(self::NTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return $this->get(self::NTYPE) !== null;
    }

    /**
     * Appends value to 'nOptional' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNOptional($value)
    {
        return $this->append(self::NOPTIONAL, $value);
    }

    /**
     * Clears 'nOptional' list
     *
     * @return null
     */
    public function clearNOptional()
    {
        return $this->clear(self::NOPTIONAL);
    }

    /**
     * Returns 'nOptional' list
     *
     * @return integer[]
     */
    public function getNOptional()
    {
        return $this->get(self::NOPTIONAL);
    }

    /**
     * Returns true if 'nOptional' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOptional()
    {
        return count($this->get(self::NOPTIONAL)) !== 0;
    }

    /**
     * Returns 'nOptional' iterator
     *
     * @return \ArrayIterator
     */
    public function getNOptionalIterator()
    {
        return new \ArrayIterator($this->get(self::NOPTIONAL));
    }

    /**
     * Returns element from 'nOptional' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNOptionalAt($offset)
    {
        return $this->get(self::NOPTIONAL, $offset);
    }

    /**
     * Returns count of 'nOptional' list
     *
     * @return int
     */
    public function getNOptionalCount()
    {
        return $this->count(self::NOPTIONAL);
    }

    /**
     * Sets value of 'nExpiredTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExpiredTime($value)
    {
        return $this->set(self::NEXPIREDTIME, $value);
    }

    /**
     * Returns value of 'nExpiredTime' property
     *
     * @return integer
     */
    public function getNExpiredTime()
    {
        $value = $this->get(self::NEXPIREDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExpiredTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExpiredTime()
    {
        return $this->get(self::NEXPIREDTIME) !== null;
    }

    /**
     * Sets value of 'nUniqueID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUniqueID($value)
    {
        return $this->set(self::NUNIQUEID, $value);
    }

    /**
     * Returns value of 'nUniqueID' property
     *
     * @return integer
     */
    public function getNUniqueID()
    {
        $value = $this->get(self::NUNIQUEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUniqueID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUniqueID()
    {
        return $this->get(self::NUNIQUEID) !== null;
    }

    /**
     * Sets value of 'nIfSentForHelp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIfSentForHelp($value)
    {
        return $this->set(self::NIFSENTFORHELP, $value);
    }

    /**
     * Returns value of 'nIfSentForHelp' property
     *
     * @return integer
     */
    public function getNIfSentForHelp()
    {
        $value = $this->get(self::NIFSENTFORHELP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIfSentForHelp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIfSentForHelp()
    {
        return $this->get(self::NIFSENTFORHELP) !== null;
    }

    /**
     * Sets value of 'nMode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMode($value)
    {
        return $this->set(self::NMODE, $value);
    }

    /**
     * Returns value of 'nMode' property
     *
     * @return integer
     */
    public function getNMode()
    {
        $value = $this->get(self::NMODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMode()
    {
        return $this->get(self::NMODE) !== null;
    }
}
}