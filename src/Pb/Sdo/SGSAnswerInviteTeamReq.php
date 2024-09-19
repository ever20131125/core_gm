<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSAnswerInviteTeamReq message
 */
class SGSAnswerInviteTeamReq extends \ProtobufMessage
{
    /* Field index constants */
    const NINVITEID = 1;
    const NTARGETID = 2;
    const SOURCE = 3;
    const NPOSID = 4;
    const ANSWER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NINVITEID => array(
            'name' => 'nInviteID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSID => array(
            'name' => 'nPosID',
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
        $this->values[self::NINVITEID] = null;
        $this->values[self::NTARGETID] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::NPOSID] = null;
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
     * Sets value of 'nInviteID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNInviteID($value)
    {
        return $this->set(self::NINVITEID, $value);
    }

    /**
     * Returns value of 'nInviteID' property
     *
     * @return integer
     */
    public function getNInviteID()
    {
        $value = $this->get(self::NINVITEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nInviteID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNInviteID()
    {
        return $this->get(self::NINVITEID) !== null;
    }

    /**
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
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
     * Sets value of 'nPosID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosID($value)
    {
        return $this->set(self::NPOSID, $value);
    }

    /**
     * Returns value of 'nPosID' property
     *
     * @return integer
     */
    public function getNPosID()
    {
        $value = $this->get(self::NPOSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosID()
    {
        return $this->get(self::NPOSID) !== null;
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