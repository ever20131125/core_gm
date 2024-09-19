<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSTransferAnswerReq message
 */
class COSTransferAnswerReq extends \ProtobufMessage
{
    /* Field index constants */
    const ANSWER = 1;
    const NASKID = 2;
    const NANSWERID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ANSWER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Unknow,
            'name' => 'answer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASKID => array(
            'name' => 'nAskID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NANSWERID => array(
            'name' => 'nAnswerID',
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
        $this->values[self::ANSWER] = self::$fields[self::ANSWER]['default'];
        $this->values[self::NASKID] = null;
        $this->values[self::NANSWERID] = null;
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
     * Sets value of 'nAskID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskID($value)
    {
        return $this->set(self::NASKID, $value);
    }

    /**
     * Returns value of 'nAskID' property
     *
     * @return integer
     */
    public function getNAskID()
    {
        $value = $this->get(self::NASKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskID()
    {
        return $this->get(self::NASKID) !== null;
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
}
}