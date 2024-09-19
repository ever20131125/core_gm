<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KeyResult message
 */
class KeyResult extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPLACEID = 2;
    const TEAM = 3;
    const NKEYINDEX = 4;
    const OPERATIONRESULT = 5;
    const NCOMB = 6;
    const NSCORE = 7;
    const NREALSCORE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLACEID => array(
            'name' => 'nPlaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKEYINDEX => array(
            'name' => 'nKeyIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPERATIONRESULT => array(
            'default' => \Xnhd\Core\Pb\Sdo\OperationResult::enmOperationResult_Miss,
            'name' => 'operationResult',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOMB => array(
            'name' => 'nComb',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NREALSCORE => array(
            'name' => 'nRealScore',
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
        $this->values[self::NPLACEID] = null;
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::NKEYINDEX] = null;
        $this->values[self::OPERATIONRESULT] = self::$fields[self::OPERATIONRESULT]['default'];
        $this->values[self::NCOMB] = null;
        $this->values[self::NSCORE] = null;
        $this->values[self::NREALSCORE] = null;
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
     * Sets value of 'nPlaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlaceID($value)
    {
        return $this->set(self::NPLACEID, $value);
    }

    /**
     * Returns value of 'nPlaceID' property
     *
     * @return integer
     */
    public function getNPlaceID()
    {
        $value = $this->get(self::NPLACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlaceID()
    {
        return $this->get(self::NPLACEID) !== null;
    }

    /**
     * Sets value of 'team' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTeam($value)
    {
        return $this->set(self::TEAM, $value);
    }

    /**
     * Returns value of 'team' property
     *
     * @return integer
     */
    public function getTeam()
    {
        $value = $this->get(self::TEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'team' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTeam()
    {
        return $this->get(self::TEAM) !== null;
    }

    /**
     * Sets value of 'nKeyIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKeyIndex($value)
    {
        return $this->set(self::NKEYINDEX, $value);
    }

    /**
     * Returns value of 'nKeyIndex' property
     *
     * @return integer
     */
    public function getNKeyIndex()
    {
        $value = $this->get(self::NKEYINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKeyIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKeyIndex()
    {
        return $this->get(self::NKEYINDEX) !== null;
    }

    /**
     * Sets value of 'operationResult' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOperationResult($value)
    {
        return $this->set(self::OPERATIONRESULT, $value);
    }

    /**
     * Returns value of 'operationResult' property
     *
     * @return integer
     */
    public function getOperationResult()
    {
        $value = $this->get(self::OPERATIONRESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'operationResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOperationResult()
    {
        return $this->get(self::OPERATIONRESULT) !== null;
    }

    /**
     * Sets value of 'nComb' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNComb($value)
    {
        return $this->set(self::NCOMB, $value);
    }

    /**
     * Returns value of 'nComb' property
     *
     * @return integer
     */
    public function getNComb()
    {
        $value = $this->get(self::NCOMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nComb' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNComb()
    {
        return $this->get(self::NCOMB) !== null;
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'nRealScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRealScore($value)
    {
        return $this->set(self::NREALSCORE, $value);
    }

    /**
     * Returns value of 'nRealScore' property
     *
     * @return integer
     */
    public function getNRealScore()
    {
        $value = $this->get(self::NREALSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRealScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRealScore()
    {
        return $this->get(self::NREALSCORE) !== null;
    }
}
}