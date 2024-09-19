<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASAnswerInviteNoti message
 */
class MASAnswerInviteNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NINVITORID = 2;
    const ANSWER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NINVITORID => array(
            'name' => 'nInvitorID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANSWER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Refuse,
            'name' => 'answer',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NINVITORID] = null;
        $this->values[self::ANSWER] = self::$fields[self::ANSWER]['default'];
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
     * Sets value of 'nInvitorID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNInvitorID($value)
    {
        return $this->set(self::NINVITORID, $value);
    }

    /**
     * Returns value of 'nInvitorID' property
     *
     * @return integer
     */
    public function getNInvitorID()
    {
        $value = $this->get(self::NINVITORID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nInvitorID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNInvitorID()
    {
        return $this->get(self::NINVITORID) !== null;
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
}
}