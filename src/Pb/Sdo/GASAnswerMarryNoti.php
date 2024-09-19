<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASAnswerMarryNoti message
 */
class GASAnswerMarryNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ANSWER = 1;
    const NASKERID = 2;
    const SZASKERNAME = 3;
    const NANSWERID = 4;
    const SZANSWERNAME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ANSWER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Agree,
            'name' => 'answer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASKERID => array(
            'name' => 'nAskerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZASKERNAME => array(
            'name' => 'szAskerName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NANSWERID => array(
            'name' => 'nAnswerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZANSWERNAME => array(
            'name' => 'szAnswerName',
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
        $this->values[self::ANSWER] = self::$fields[self::ANSWER]['default'];
        $this->values[self::NASKERID] = null;
        $this->values[self::SZASKERNAME] = null;
        $this->values[self::NANSWERID] = null;
        $this->values[self::SZANSWERNAME] = null;
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
     * Sets value of 'nAskerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskerID($value)
    {
        return $this->set(self::NASKERID, $value);
    }

    /**
     * Returns value of 'nAskerID' property
     *
     * @return integer
     */
    public function getNAskerID()
    {
        $value = $this->get(self::NASKERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskerID()
    {
        return $this->get(self::NASKERID) !== null;
    }

    /**
     * Sets value of 'szAskerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAskerName($value)
    {
        return $this->set(self::SZASKERNAME, $value);
    }

    /**
     * Returns value of 'szAskerName' property
     *
     * @return string
     */
    public function getSzAskerName()
    {
        $value = $this->get(self::SZASKERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAskerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAskerName()
    {
        return $this->get(self::SZASKERNAME) !== null;
    }

    /**
     * Sets value of 'nAnswerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAnswerID($value)
    {
        return $this->set(self::NANSWERID, $value);
    }

    /**
     * Returns value of 'nAnswerID' property
     *
     * @return integer
     */
    public function getNAnswerID()
    {
        $value = $this->get(self::NANSWERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAnswerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAnswerID()
    {
        return $this->get(self::NANSWERID) !== null;
    }

    /**
     * Sets value of 'szAnswerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAnswerName($value)
    {
        return $this->set(self::SZANSWERNAME, $value);
    }

    /**
     * Returns value of 'szAnswerName' property
     *
     * @return string
     */
    public function getSzAnswerName()
    {
        $value = $this->get(self::SZANSWERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAnswerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAnswerName()
    {
        return $this->get(self::SZANSWERNAME) !== null;
    }
}
}