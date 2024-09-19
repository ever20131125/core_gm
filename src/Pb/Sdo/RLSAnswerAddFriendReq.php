<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAnswerAddFriendReq message
 */
class RLSAnswerAddFriendReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRASKID = 1;
    const ANSWERID = 2;
    const ANSWER = 3;
    const NSCENE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRASKID => array(
            'name' => 'arrAskID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANSWERID => array(
            'name' => 'answerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANSWER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Refuse,
            'name' => 'answer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCENE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InteractScene::enmInteractScene_None,
            'name' => 'nScene',
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
        $this->values[self::ARRASKID] = array();
        $this->values[self::ANSWERID] = null;
        $this->values[self::ANSWER] = self::$fields[self::ANSWER]['default'];
        $this->values[self::NSCENE] = self::$fields[self::NSCENE]['default'];
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
     * Appends value to 'arrAskID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAskID($value)
    {
        return $this->append(self::ARRASKID, $value);
    }

    /**
     * Clears 'arrAskID' list
     *
     * @return null
     */
    public function clearArrAskID()
    {
        return $this->clear(self::ARRASKID);
    }

    /**
     * Returns 'arrAskID' list
     *
     * @return integer[]
     */
    public function getArrAskID()
    {
        return $this->get(self::ARRASKID);
    }

    /**
     * Returns true if 'arrAskID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAskID()
    {
        return count($this->get(self::ARRASKID)) !== 0;
    }

    /**
     * Returns 'arrAskID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAskIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRASKID));
    }

    /**
     * Returns element from 'arrAskID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAskIDAt($offset)
    {
        return $this->get(self::ARRASKID, $offset);
    }

    /**
     * Returns count of 'arrAskID' list
     *
     * @return int
     */
    public function getArrAskIDCount()
    {
        return $this->count(self::ARRASKID);
    }

    /**
     * Sets value of 'answerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnswerID($value)
    {
        return $this->set(self::ANSWERID, $value);
    }

    /**
     * Returns value of 'answerID' property
     *
     * @return integer
     */
    public function getAnswerID()
    {
        $value = $this->get(self::ANSWERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'answerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnswerID()
    {
        return $this->get(self::ANSWERID) !== null;
    }

    /**
     * Sets value of 'answer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnswer($value)
    {
        return $this->set(self::ANSWER, $value);
    }

    /**
     * Returns value of 'answer' property
     *
     * @return integer
     */
    public function getAnswer()
    {
        $value = $this->get(self::ANSWER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'answer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnswer()
    {
        return $this->get(self::ANSWER) !== null;
    }

    /**
     * Sets value of 'nScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScene($value)
    {
        return $this->set(self::NSCENE, $value);
    }

    /**
     * Returns value of 'nScene' property
     *
     * @return integer
     */
    public function getNScene()
    {
        $value = $this->get(self::NSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScene()
    {
        return $this->get(self::NSCENE) !== null;
    }
}
}