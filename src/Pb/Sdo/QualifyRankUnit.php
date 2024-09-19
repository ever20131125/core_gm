<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyRankUnit message
 */
class QualifyRankUnit extends \ProtobufMessage
{
    /* Field index constants */
    const NNO = 1;
    const ROLEID = 2;
    const POINT = 3;
    const CURRANK = 4;
    const LASTRANK = 5;
    const UPDATETIME = 6;
    const ROLEINFO = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NNO => array(
            'name' => 'nNo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POINT => array(
            'name' => 'point',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRANK => array(
            'name' => 'curRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTRANK => array(
            'name' => 'lastRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATETIME => array(
            'name' => 'updateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
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
        $this->values[self::NNO] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::POINT] = null;
        $this->values[self::CURRANK] = null;
        $this->values[self::LASTRANK] = null;
        $this->values[self::UPDATETIME] = null;
        $this->values[self::ROLEINFO] = null;
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
     * Sets value of 'nNo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNo($value)
    {
        return $this->set(self::NNO, $value);
    }

    /**
     * Returns value of 'nNo' property
     *
     * @return integer
     */
    public function getNNo()
    {
        $value = $this->get(self::NNO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNo()
    {
        return $this->get(self::NNO) !== null;
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
     * Sets value of 'point' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPoint($value)
    {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return integer
     */
    public function getPoint()
    {
        $value = $this->get(self::POINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'point' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPoint()
    {
        return $this->get(self::POINT) !== null;
    }

    /**
     * Sets value of 'curRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurRank($value)
    {
        return $this->set(self::CURRANK, $value);
    }

    /**
     * Returns value of 'curRank' property
     *
     * @return integer
     */
    public function getCurRank()
    {
        $value = $this->get(self::CURRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'curRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurRank()
    {
        return $this->get(self::CURRANK) !== null;
    }

    /**
     * Sets value of 'lastRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRank($value)
    {
        return $this->set(self::LASTRANK, $value);
    }

    /**
     * Returns value of 'lastRank' property
     *
     * @return integer
     */
    public function getLastRank()
    {
        $value = $this->get(self::LASTRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastRank()
    {
        return $this->get(self::LASTRANK) !== null;
    }

    /**
     * Sets value of 'updateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateTime($value)
    {
        return $this->set(self::UPDATETIME, $value);
    }

    /**
     * Returns value of 'updateTime' property
     *
     * @return integer
     */
    public function getUpdateTime()
    {
        $value = $this->get(self::UPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateTime()
    {
        return $this->get(self::UPDATETIME) !== null;
    }

    /**
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return $this->get(self::ROLEINFO) !== null;
    }
}
}