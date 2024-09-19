<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PicInfo message
 */
class PicInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NPICINDEX = 1;
    const PICTYPE = 2;
    const NPICID = 3;
    const SZFILEID = 4;
    const SZFILEURL = 5;
    const PICSTATE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPICINDEX => array(
            'name' => 'nPicIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PICTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PicType::enmPicType_HeadGame,
            'name' => 'picType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPICID => array(
            'name' => 'nPicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZFILEID => array(
            'name' => 'szFileID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZFILEURL => array(
            'name' => 'szFileUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PICSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FileState::enmFileState_Normal,
            'name' => 'picState',
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
        $this->values[self::NPICINDEX] = null;
        $this->values[self::PICTYPE] = self::$fields[self::PICTYPE]['default'];
        $this->values[self::NPICID] = null;
        $this->values[self::SZFILEID] = null;
        $this->values[self::SZFILEURL] = null;
        $this->values[self::PICSTATE] = self::$fields[self::PICSTATE]['default'];
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
     * Sets value of 'nPicIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPicIndex($value)
    {
        return $this->set(self::NPICINDEX, $value);
    }

    /**
     * Returns value of 'nPicIndex' property
     *
     * @return integer
     */
    public function getNPicIndex()
    {
        $value = $this->get(self::NPICINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPicIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPicIndex()
    {
        return $this->get(self::NPICINDEX) !== null;
    }

    /**
     * Sets value of 'picType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPicType($value)
    {
        return $this->set(self::PICTYPE, $value);
    }

    /**
     * Returns value of 'picType' property
     *
     * @return integer
     */
    public function getPicType()
    {
        $value = $this->get(self::PICTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'picType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPicType()
    {
        return $this->get(self::PICTYPE) !== null;
    }

    /**
     * Sets value of 'nPicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPicID($value)
    {
        return $this->set(self::NPICID, $value);
    }

    /**
     * Returns value of 'nPicID' property
     *
     * @return integer
     */
    public function getNPicID()
    {
        $value = $this->get(self::NPICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPicID()
    {
        return $this->get(self::NPICID) !== null;
    }

    /**
     * Sets value of 'szFileID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzFileID($value)
    {
        return $this->set(self::SZFILEID, $value);
    }

    /**
     * Returns value of 'szFileID' property
     *
     * @return string
     */
    public function getSzFileID()
    {
        $value = $this->get(self::SZFILEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szFileID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzFileID()
    {
        return $this->get(self::SZFILEID) !== null;
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
     * Sets value of 'picState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPicState($value)
    {
        return $this->set(self::PICSTATE, $value);
    }

    /**
     * Returns value of 'picState' property
     *
     * @return integer
     */
    public function getPicState()
    {
        $value = $this->get(self::PICSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'picState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPicState()
    {
        return $this->get(self::PICSTATE) !== null;
    }
}
}