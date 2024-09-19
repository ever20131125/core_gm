<?php
/**
 * Auto generated from relationserver.proto at 2021-07-21 09:13:26
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAskAddRelativeReq message
 */
class RLSAskAddRelativeReq extends \ProtobufMessage
{
    /* Field index constants */
    const ASKID = 1;
    const ANSWERID = 2;
    const MESSAGE = 3;
    const TYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ASKID => array(
            'name' => 'askID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANSWERID => array(
            'name' => 'answerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendType::enmFriendType_RelativeMask,
            'name' => 'type',
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
        $this->values[self::ASKID] = null;
        $this->values[self::ANSWERID] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
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
     * Sets value of 'askID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAskID($value)
    {
        return $this->set(self::ASKID, $value);
    }

    /**
     * Returns value of 'askID' property
     *
     * @return integer
     */
    public function getAskID()
    {
        $value = $this->get(self::ASKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'askID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAskID()
    {
        return $this->get(self::ASKID) !== null;
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
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        $value = $this->get(self::MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessage()
    {
        return $this->get(self::MESSAGE) !== null;
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
}
}