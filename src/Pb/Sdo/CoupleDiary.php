<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleDiary message
 */
class CoupleDiary extends \ProtobufMessage
{
    /* Field index constants */
    const NCOUPLEID = 1;
    const NDATEID = 2;
    const NROLEID = 3;
    const NDIARYID = 4;
    const NCREATETIME = 5;
    const SZFILEURL = 6;
    const SZDIARYINFO = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCOUPLEID => array(
            'name' => 'nCoupleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDATEID => array(
            'name' => 'nDateID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDIARYID => array(
            'name' => 'nDiaryID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCREATETIME => array(
            'name' => 'nCreateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZFILEURL => array(
            'name' => 'szFileUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZDIARYINFO => array(
            'name' => 'szDiaryInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NCOUPLEID] = null;
        $this->values[self::NDATEID] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NDIARYID] = null;
        $this->values[self::NCREATETIME] = null;
        $this->values[self::SZFILEURL] = null;
        $this->values[self::SZDIARYINFO] = null;
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
     * Sets value of 'nCoupleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCoupleID($value)
    {
        return $this->set(self::NCOUPLEID, $value);
    }

    /**
     * Returns value of 'nCoupleID' property
     *
     * @return integer
     */
    public function getNCoupleID()
    {
        $value = $this->get(self::NCOUPLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCoupleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCoupleID()
    {
        return $this->get(self::NCOUPLEID) !== null;
    }

    /**
     * Sets value of 'nDateID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDateID($value)
    {
        return $this->set(self::NDATEID, $value);
    }

    /**
     * Returns value of 'nDateID' property
     *
     * @return integer
     */
    public function getNDateID()
    {
        $value = $this->get(self::NDATEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDateID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDateID()
    {
        return $this->get(self::NDATEID) !== null;
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
     * Sets value of 'nDiaryID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDiaryID($value)
    {
        return $this->set(self::NDIARYID, $value);
    }

    /**
     * Returns value of 'nDiaryID' property
     *
     * @return integer
     */
    public function getNDiaryID()
    {
        $value = $this->get(self::NDIARYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDiaryID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDiaryID()
    {
        return $this->get(self::NDIARYID) !== null;
    }

    /**
     * Sets value of 'nCreateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateTime($value)
    {
        return $this->set(self::NCREATETIME, $value);
    }

    /**
     * Returns value of 'nCreateTime' property
     *
     * @return integer
     */
    public function getNCreateTime()
    {
        $value = $this->get(self::NCREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateTime()
    {
        return $this->get(self::NCREATETIME) !== null;
    }

    /**
     * Sets value of 'szFileUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzFileUrl($value)
    {
        return $this->set(self::SZFILEURL, $value);
    }

    /**
     * Returns value of 'szFileUrl' property
     *
     * @return string
     */
    public function getSzFileUrl()
    {
        $value = $this->get(self::SZFILEURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szFileUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzFileUrl()
    {
        return $this->get(self::SZFILEURL) !== null;
    }

    /**
     * Sets value of 'szDiaryInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzDiaryInfo($value)
    {
        return $this->set(self::SZDIARYINFO, $value);
    }

    /**
     * Returns value of 'szDiaryInfo' property
     *
     * @return string
     */
    public function getSzDiaryInfo()
    {
        $value = $this->get(self::SZDIARYINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szDiaryInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzDiaryInfo()
    {
        return $this->get(self::SZDIARYINFO) !== null;
    }
}
}