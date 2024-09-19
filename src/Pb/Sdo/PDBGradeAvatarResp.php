<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGradeAvatarResp message
 */
class PDBGradeAvatarResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SOURCE = 3;
    const NID = 4;
    const STAVATARINFO = 5;
    const STROLESKILLINFO = 6;
    const BFAIL = 7;
    const ARRGRADESCORE = 10;
    const ARRBASELABEL = 11;
    const ARRBASESCORE = 12;
    const NLABELSCORE = 13;
    const ARRSCORE = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_Album,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::STROLESKILLINFO => array(
            'name' => 'stRoleSkillInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleSkillInfo'
        ),
        self::BFAIL => array(
            'name' => 'bFail',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ARRGRADESCORE => array(
            'name' => 'arrGradeScore',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBASELABEL => array(
            'name' => 'arrBaseLabel',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBASESCORE => array(
            'name' => 'arrBaseScore',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLABELSCORE => array(
            'name' => 'nLabelScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSCORE => array(
            'name' => 'arrScore',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\StageAvatarScore'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::NID] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::STROLESKILLINFO] = null;
        $this->values[self::BFAIL] = null;
        $this->values[self::ARRGRADESCORE] = array();
        $this->values[self::ARRBASELABEL] = array();
        $this->values[self::ARRBASESCORE] = array();
        $this->values[self::NLABELSCORE] = null;
        $this->values[self::ARRSCORE] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'nID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNID($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nID' property
     *
     * @return integer
     */
    public function getNID()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNID()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }

    /**
     * Sets value of 'stRoleSkillInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleSkillInfo $value Property value
     *
     * @return null
     */
    public function setStRoleSkillInfo(\Xnhd\Core\Pb\Sdo\RoleSkillInfo $value=null)
    {
        return $this->set(self::STROLESKILLINFO, $value);
    }

    /**
     * Returns value of 'stRoleSkillInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleSkillInfo
     */
    public function getStRoleSkillInfo()
    {
        return $this->get(self::STROLESKILLINFO);
    }

    /**
     * Returns true if 'stRoleSkillInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleSkillInfo()
    {
        return $this->get(self::STROLESKILLINFO) !== null;
    }

    /**
     * Sets value of 'bFail' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBFail($value)
    {
        return $this->set(self::BFAIL, $value);
    }

    /**
     * Returns value of 'bFail' property
     *
     * @return boolean
     */
    public function getBFail()
    {
        $value = $this->get(self::BFAIL);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bFail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBFail()
    {
        return $this->get(self::BFAIL) !== null;
    }

    /**
     * Appends value to 'arrGradeScore' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGradeScore($value)
    {
        return $this->append(self::ARRGRADESCORE, $value);
    }

    /**
     * Clears 'arrGradeScore' list
     *
     * @return null
     */
    public function clearArrGradeScore()
    {
        return $this->clear(self::ARRGRADESCORE);
    }

    /**
     * Returns 'arrGradeScore' list
     *
     * @return integer[]
     */
    public function getArrGradeScore()
    {
        return $this->get(self::ARRGRADESCORE);
    }

    /**
     * Returns true if 'arrGradeScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGradeScore()
    {
        return count($this->get(self::ARRGRADESCORE)) !== 0;
    }

    /**
     * Returns 'arrGradeScore' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGradeScoreIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGRADESCORE));
    }

    /**
     * Returns element from 'arrGradeScore' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGradeScoreAt($offset)
    {
        return $this->get(self::ARRGRADESCORE, $offset);
    }

    /**
     * Returns count of 'arrGradeScore' list
     *
     * @return int
     */
    public function getArrGradeScoreCount()
    {
        return $this->count(self::ARRGRADESCORE);
    }

    /**
     * Appends value to 'arrBaseLabel' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBaseLabel($value)
    {
        return $this->append(self::ARRBASELABEL, $value);
    }

    /**
     * Clears 'arrBaseLabel' list
     *
     * @return null
     */
    public function clearArrBaseLabel()
    {
        return $this->clear(self::ARRBASELABEL);
    }

    /**
     * Returns 'arrBaseLabel' list
     *
     * @return integer[]
     */
    public function getArrBaseLabel()
    {
        return $this->get(self::ARRBASELABEL);
    }

    /**
     * Returns true if 'arrBaseLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBaseLabel()
    {
        return count($this->get(self::ARRBASELABEL)) !== 0;
    }

    /**
     * Returns 'arrBaseLabel' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBaseLabelIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBASELABEL));
    }

    /**
     * Returns element from 'arrBaseLabel' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBaseLabelAt($offset)
    {
        return $this->get(self::ARRBASELABEL, $offset);
    }

    /**
     * Returns count of 'arrBaseLabel' list
     *
     * @return int
     */
    public function getArrBaseLabelCount()
    {
        return $this->count(self::ARRBASELABEL);
    }

    /**
     * Appends value to 'arrBaseScore' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBaseScore($value)
    {
        return $this->append(self::ARRBASESCORE, $value);
    }

    /**
     * Clears 'arrBaseScore' list
     *
     * @return null
     */
    public function clearArrBaseScore()
    {
        return $this->clear(self::ARRBASESCORE);
    }

    /**
     * Returns 'arrBaseScore' list
     *
     * @return integer[]
     */
    public function getArrBaseScore()
    {
        return $this->get(self::ARRBASESCORE);
    }

    /**
     * Returns true if 'arrBaseScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBaseScore()
    {
        return count($this->get(self::ARRBASESCORE)) !== 0;
    }

    /**
     * Returns 'arrBaseScore' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBaseScoreIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBASESCORE));
    }

    /**
     * Returns element from 'arrBaseScore' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBaseScoreAt($offset)
    {
        return $this->get(self::ARRBASESCORE, $offset);
    }

    /**
     * Returns count of 'arrBaseScore' list
     *
     * @return int
     */
    public function getArrBaseScoreCount()
    {
        return $this->count(self::ARRBASESCORE);
    }

    /**
     * Sets value of 'nLabelScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLabelScore($value)
    {
        return $this->set(self::NLABELSCORE, $value);
    }

    /**
     * Returns value of 'nLabelScore' property
     *
     * @return integer
     */
    public function getNLabelScore()
    {
        $value = $this->get(self::NLABELSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLabelScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLabelScore()
    {
        return $this->get(self::NLABELSCORE) !== null;
    }

    /**
     * Appends value to 'arrScore' list
     *
     * @param \Xnhd\Core\Pb\Sdo\StageAvatarScore $value Value to append
     *
     * @return null
     */
    public function appendArrScore(\Xnhd\Core\Pb\Sdo\StageAvatarScore $value)
    {
        return $this->append(self::ARRSCORE, $value);
    }

    /**
     * Clears 'arrScore' list
     *
     * @return null
     */
    public function clearArrScore()
    {
        return $this->clear(self::ARRSCORE);
    }

    /**
     * Returns 'arrScore' list
     *
     * @return \Xnhd\Core\Pb\Sdo\StageAvatarScore[]
     */
    public function getArrScore()
    {
        return $this->get(self::ARRSCORE);
    }

    /**
     * Returns true if 'arrScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrScore()
    {
        return count($this->get(self::ARRSCORE)) !== 0;
    }

    /**
     * Returns 'arrScore' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrScoreIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSCORE));
    }

    /**
     * Returns element from 'arrScore' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\StageAvatarScore
     */
    public function getArrScoreAt($offset)
    {
        return $this->get(self::ARRSCORE, $offset);
    }

    /**
     * Returns count of 'arrScore' list
     *
     * @return int
     */
    public function getArrScoreCount()
    {
        return $this->count(self::ARRSCORE);
    }
}
}