<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoverEvent message
 */
class LoverEvent extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const LOVERID = 2;
    const COUPLEID = 3;
    const LOVEREVENTTYPE = 4;
    const LOVERCNT = 5;
    const OLDLOVERLEVEL = 6;
    const NEWLOVERLEVEL = 7;
    const OLDLOVERVALUE = 8;
    const NEWLOVERVALUE = 9;
    const STCURLOVERINFO = 10;
    const CONFESSANSWER = 11;
    const ROLEDANCEGRADE = 12;
    const LOVERDANCEGRADE = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERID => array(
            'name' => 'loverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUPLEID => array(
            'name' => 'coupleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVEREVENTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\LoverEventType::enmLoverEvent_None,
            'name' => 'loverEventType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERCNT => array(
            'name' => 'loverCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OLDLOVERLEVEL => array(
            'name' => 'oldLoverLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWLOVERLEVEL => array(
            'name' => 'newLoverLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OLDLOVERVALUE => array(
            'name' => 'oldLoverValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWLOVERVALUE => array(
            'name' => 'newLoverValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STCURLOVERINFO => array(
            'name' => 'stCurLoverInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\LoverInfo'
        ),
        self::CONFESSANSWER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Refuse,
            'name' => 'confessAnswer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEDANCEGRADE => array(
            'name' => 'roleDanceGrade',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERDANCEGRADE => array(
            'name' => 'loverDanceGrade',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::LOVERID] = null;
        $this->values[self::COUPLEID] = null;
        $this->values[self::LOVEREVENTTYPE] = self::$fields[self::LOVEREVENTTYPE]['default'];
        $this->values[self::LOVERCNT] = null;
        $this->values[self::OLDLOVERLEVEL] = null;
        $this->values[self::NEWLOVERLEVEL] = null;
        $this->values[self::OLDLOVERVALUE] = null;
        $this->values[self::NEWLOVERVALUE] = null;
        $this->values[self::STCURLOVERINFO] = null;
        $this->values[self::CONFESSANSWER] = self::$fields[self::CONFESSANSWER]['default'];
        $this->values[self::ROLEDANCEGRADE] = null;
        $this->values[self::LOVERDANCEGRADE] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'loverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverID($value)
    {
        return $this->set(self::LOVERID, $value);
    }

    /**
     * Returns value of 'loverID' property
     *
     * @return integer
     */
    public function getLoverID()
    {
        $value = $this->get(self::LOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverID()
    {
        return $this->get(self::LOVERID) !== null;
    }

    /**
     * Sets value of 'coupleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCoupleID($value)
    {
        return $this->set(self::COUPLEID, $value);
    }

    /**
     * Returns value of 'coupleID' property
     *
     * @return integer
     */
    public function getCoupleID()
    {
        $value = $this->get(self::COUPLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'coupleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCoupleID()
    {
        return $this->get(self::COUPLEID) !== null;
    }

    /**
     * Sets value of 'loverEventType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverEventType($value)
    {
        return $this->set(self::LOVEREVENTTYPE, $value);
    }

    /**
     * Returns value of 'loverEventType' property
     *
     * @return integer
     */
    public function getLoverEventType()
    {
        $value = $this->get(self::LOVEREVENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverEventType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverEventType()
    {
        return $this->get(self::LOVEREVENTTYPE) !== null;
    }

    /**
     * Sets value of 'loverCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverCnt($value)
    {
        return $this->set(self::LOVERCNT, $value);
    }

    /**
     * Returns value of 'loverCnt' property
     *
     * @return integer
     */
    public function getLoverCnt()
    {
        $value = $this->get(self::LOVERCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverCnt()
    {
        return $this->get(self::LOVERCNT) !== null;
    }

    /**
     * Sets value of 'oldLoverLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOldLoverLevel($value)
    {
        return $this->set(self::OLDLOVERLEVEL, $value);
    }

    /**
     * Returns value of 'oldLoverLevel' property
     *
     * @return integer
     */
    public function getOldLoverLevel()
    {
        $value = $this->get(self::OLDLOVERLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'oldLoverLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOldLoverLevel()
    {
        return $this->get(self::OLDLOVERLEVEL) !== null;
    }

    /**
     * Sets value of 'newLoverLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewLoverLevel($value)
    {
        return $this->set(self::NEWLOVERLEVEL, $value);
    }

    /**
     * Returns value of 'newLoverLevel' property
     *
     * @return integer
     */
    public function getNewLoverLevel()
    {
        $value = $this->get(self::NEWLOVERLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newLoverLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewLoverLevel()
    {
        return $this->get(self::NEWLOVERLEVEL) !== null;
    }

    /**
     * Sets value of 'oldLoverValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOldLoverValue($value)
    {
        return $this->set(self::OLDLOVERVALUE, $value);
    }

    /**
     * Returns value of 'oldLoverValue' property
     *
     * @return integer
     */
    public function getOldLoverValue()
    {
        $value = $this->get(self::OLDLOVERVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'oldLoverValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOldLoverValue()
    {
        return $this->get(self::OLDLOVERVALUE) !== null;
    }

    /**
     * Sets value of 'newLoverValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewLoverValue($value)
    {
        return $this->set(self::NEWLOVERVALUE, $value);
    }

    /**
     * Returns value of 'newLoverValue' property
     *
     * @return integer
     */
    public function getNewLoverValue()
    {
        $value = $this->get(self::NEWLOVERVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newLoverValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewLoverValue()
    {
        return $this->get(self::NEWLOVERVALUE) !== null;
    }

    /**
     * Sets value of 'stCurLoverInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\LoverInfo $value Property value
     *
     * @return null
     */
    public function setStCurLoverInfo(\Xnhd\Core\Pb\Sdo\LoverInfo $value=null)
    {
        return $this->set(self::STCURLOVERINFO, $value);
    }

    /**
     * Returns value of 'stCurLoverInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\LoverInfo
     */
    public function getStCurLoverInfo()
    {
        return $this->get(self::STCURLOVERINFO);
    }

    /**
     * Returns true if 'stCurLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStCurLoverInfo()
    {
        return $this->get(self::STCURLOVERINFO) !== null;
    }

    /**
     * Sets value of 'confessAnswer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfessAnswer($value)
    {
        return $this->set(self::CONFESSANSWER, $value);
    }

    /**
     * Returns value of 'confessAnswer' property
     *
     * @return integer
     */
    public function getConfessAnswer()
    {
        $value = $this->get(self::CONFESSANSWER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confessAnswer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfessAnswer()
    {
        return $this->get(self::CONFESSANSWER) !== null;
    }

    /**
     * Sets value of 'roleDanceGrade' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleDanceGrade($value)
    {
        return $this->set(self::ROLEDANCEGRADE, $value);
    }

    /**
     * Returns value of 'roleDanceGrade' property
     *
     * @return integer
     */
    public function getRoleDanceGrade()
    {
        $value = $this->get(self::ROLEDANCEGRADE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleDanceGrade' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleDanceGrade()
    {
        return $this->get(self::ROLEDANCEGRADE) !== null;
    }

    /**
     * Sets value of 'loverDanceGrade' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverDanceGrade($value)
    {
        return $this->set(self::LOVERDANCEGRADE, $value);
    }

    /**
     * Returns value of 'loverDanceGrade' property
     *
     * @return integer
     */
    public function getLoverDanceGrade()
    {
        $value = $this->get(self::LOVERDANCEGRADE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverDanceGrade' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverDanceGrade()
    {
        return $this->get(self::LOVERDANCEGRADE) !== null;
    }
}
}