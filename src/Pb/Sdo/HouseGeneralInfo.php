<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HouseGeneralInfo message
 */
class HouseGeneralInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZHOUSENAME = 2;
    const SZHOUSEPSW = 3;
    const NLEVEL = 4;
    const NEXPERENCE = 5;
    const NLUXURY = 6;
    const NVISITCNT = 7;
    const NLIKECNT = 8;
    const NVISITAUTH = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZHOUSENAME => array(
            'name' => 'szHouseName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZHOUSEPSW => array(
            'name' => 'szHousePsw',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPERENCE => array(
            'name' => 'nExperence',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVISITCNT => array(
            'name' => 'nVisitCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIKECNT => array(
            'name' => 'nLikeCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVISITAUTH => array(
            'name' => 'nVisitAuth',
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
        $this->values[self::SZHOUSENAME] = null;
        $this->values[self::SZHOUSEPSW] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::NEXPERENCE] = null;
        $this->values[self::NLUXURY] = null;
        $this->values[self::NVISITCNT] = null;
        $this->values[self::NLIKECNT] = null;
        $this->values[self::NVISITAUTH] = null;
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
     * Sets value of 'szHouseName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzHouseName($value)
    {
        return $this->set(self::SZHOUSENAME, $value);
    }

    /**
     * Returns value of 'szHouseName' property
     *
     * @return string
     */
    public function getSzHouseName()
    {
        $value = $this->get(self::SZHOUSENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szHouseName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzHouseName()
    {
        return $this->get(self::SZHOUSENAME) !== null;
    }

    /**
     * Sets value of 'szHousePsw' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzHousePsw($value)
    {
        return $this->set(self::SZHOUSEPSW, $value);
    }

    /**
     * Returns value of 'szHousePsw' property
     *
     * @return string
     */
    public function getSzHousePsw()
    {
        $value = $this->get(self::SZHOUSEPSW);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szHousePsw' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzHousePsw()
    {
        return $this->get(self::SZHOUSEPSW) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Sets value of 'nExperence' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExperence($value)
    {
        return $this->set(self::NEXPERENCE, $value);
    }

    /**
     * Returns value of 'nExperence' property
     *
     * @return integer
     */
    public function getNExperence()
    {
        $value = $this->get(self::NEXPERENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExperence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExperence()
    {
        return $this->get(self::NEXPERENCE) !== null;
    }

    /**
     * Sets value of 'nLuxury' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLuxury($value)
    {
        return $this->set(self::NLUXURY, $value);
    }

    /**
     * Returns value of 'nLuxury' property
     *
     * @return integer
     */
    public function getNLuxury()
    {
        $value = $this->get(self::NLUXURY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLuxury' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLuxury()
    {
        return $this->get(self::NLUXURY) !== null;
    }

    /**
     * Sets value of 'nVisitCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVisitCnt($value)
    {
        return $this->set(self::NVISITCNT, $value);
    }

    /**
     * Returns value of 'nVisitCnt' property
     *
     * @return integer
     */
    public function getNVisitCnt()
    {
        $value = $this->get(self::NVISITCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVisitCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVisitCnt()
    {
        return $this->get(self::NVISITCNT) !== null;
    }

    /**
     * Sets value of 'nLikeCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLikeCnt($value)
    {
        return $this->set(self::NLIKECNT, $value);
    }

    /**
     * Returns value of 'nLikeCnt' property
     *
     * @return integer
     */
    public function getNLikeCnt()
    {
        $value = $this->get(self::NLIKECNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLikeCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLikeCnt()
    {
        return $this->get(self::NLIKECNT) !== null;
    }

    /**
     * Sets value of 'nVisitAuth' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVisitAuth($value)
    {
        return $this->set(self::NVISITAUTH, $value);
    }

    /**
     * Returns value of 'nVisitAuth' property
     *
     * @return integer
     */
    public function getNVisitAuth()
    {
        $value = $this->get(self::NVISITAUTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVisitAuth' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVisitAuth()
    {
        return $this->get(self::NVISITAUTH) !== null;
    }
}
}