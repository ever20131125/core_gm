<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSTransferResultNoti message
 */
class COSTransferResultNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NASKID = 1;
    const NANSWERID = 2;
    const RESULT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::RESULT => array(
            'default' => \Xnhd\Core\Pb\Sdo\TransResult::enmTransRet_Cancel,
            'name' => 'result',
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
        $this->values[self::NASKID] = null;
        $this->values[self::NANSWERID] = null;
        $this->values[self::RESULT] = self::$fields[self::RESULT]['default'];
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

    /**
     * Sets value of 'result' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return integer
     */
    public function getResult()
    {
        $value = $this->get(self::RESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'result' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResult()
    {
        return $this->get(self::RESULT) !== null;
    }
}
}