<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSAnswerConfessReq message
 */
class RLSAnswerConfessReq extends \ProtobufMessage
{
    /* Field index constants */
    const CONFESSEEID = 1;
    const CONFESSERID = 2;
    const CONFESSRESULT = 3;
    const CONFESSIDCARD = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFESSEEID => array(
            'name' => 'confesseeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSERID => array(
            'name' => 'confesserID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSRESULT => array(
            'default' => \Xnhd\Core\Pb\Sdo\AnswerResultType::enmAnswerResultType_None,
            'name' => 'confessResult',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSIDCARD => array(
            'name' => 'confessIDCard',
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
        $this->values[self::CONFESSEEID] = null;
        $this->values[self::CONFESSERID] = null;
        $this->values[self::CONFESSRESULT] = self::$fields[self::CONFESSRESULT]['default'];
        $this->values[self::CONFESSIDCARD] = null;
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
     * Sets value of 'confesseeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesseeID($value)
    {
        return $this->set(self::CONFESSEEID, $value);
    }

    /**
     * Returns value of 'confesseeID' property
     *
     * @return integer
     */
    public function getConfesseeID()
    {
        $value = $this->get(self::CONFESSEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesseeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesseeID()
    {
        return $this->get(self::CONFESSEEID) !== null;
    }

    /**
     * Sets value of 'confesserID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesserID($value)
    {
        return $this->set(self::CONFESSERID, $value);
    }

    /**
     * Returns value of 'confesserID' property
     *
     * @return integer
     */
    public function getConfesserID()
    {
        $value = $this->get(self::CONFESSERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesserID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesserID()
    {
        return $this->get(self::CONFESSERID) !== null;
    }

    /**
     * Sets value of 'confessResult' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfessResult($value)
    {
        return $this->set(self::CONFESSRESULT, $value);
    }

    /**
     * Returns value of 'confessResult' property
     *
     * @return integer
     */
    public function getConfessResult()
    {
        $value = $this->get(self::CONFESSRESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confessResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfessResult()
    {
        return $this->get(self::CONFESSRESULT) !== null;
    }

    /**
     * Sets value of 'confessIDCard' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfessIDCard($value)
    {
        return $this->set(self::CONFESSIDCARD, $value);
    }

    /**
     * Returns value of 'confessIDCard' property
     *
     * @return integer
     */
    public function getConfessIDCard()
    {
        $value = $this->get(self::CONFESSIDCARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confessIDCard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfessIDCard()
    {
        return $this->get(self::CONFESSIDCARD) !== null;
    }
}
}