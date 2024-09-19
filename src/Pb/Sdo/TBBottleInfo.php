<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TBBottleInfo message
 */
class TBBottleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const BOTTLEID = 1;
    const SOURCEROLEID = 2;
    const SOURCEHEADID = 3;
    const SOURCESEX = 4;
    const SOURCEROLENAME = 5;
    const BOTTLE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BOTTLEID => array(
            'name' => 'bottleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCEROLEID => array(
            'name' => 'sourceRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCEHEADID => array(
            'name' => 'sourceHeadId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCESEX => array(
            'name' => 'sourceSex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCEROLENAME => array(
            'name' => 'sourceRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BOTTLE => array(
            'name' => 'bottle',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TBBottleProp'
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
        $this->values[self::BOTTLEID] = null;
        $this->values[self::SOURCEROLEID] = null;
        $this->values[self::SOURCEHEADID] = null;
        $this->values[self::SOURCESEX] = null;
        $this->values[self::SOURCEROLENAME] = null;
        $this->values[self::BOTTLE] = null;
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
     * Sets value of 'bottleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBottleID($value)
    {
        return $this->set(self::BOTTLEID, $value);
    }

    /**
     * Returns value of 'bottleID' property
     *
     * @return integer
     */
    public function getBottleID()
    {
        $value = $this->get(self::BOTTLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bottleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBottleID()
    {
        return $this->get(self::BOTTLEID) !== null;
    }

    /**
     * Sets value of 'sourceRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceRoleId($value)
    {
        return $this->set(self::SOURCEROLEID, $value);
    }

    /**
     * Returns value of 'sourceRoleId' property
     *
     * @return integer
     */
    public function getSourceRoleId()
    {
        $value = $this->get(self::SOURCEROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceRoleId()
    {
        return $this->get(self::SOURCEROLEID) !== null;
    }

    /**
     * Sets value of 'sourceHeadId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceHeadId($value)
    {
        return $this->set(self::SOURCEHEADID, $value);
    }

    /**
     * Returns value of 'sourceHeadId' property
     *
     * @return integer
     */
    public function getSourceHeadId()
    {
        $value = $this->get(self::SOURCEHEADID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceHeadId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceHeadId()
    {
        return $this->get(self::SOURCEHEADID) !== null;
    }

    /**
     * Sets value of 'sourceSex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceSex($value)
    {
        return $this->set(self::SOURCESEX, $value);
    }

    /**
     * Returns value of 'sourceSex' property
     *
     * @return integer
     */
    public function getSourceSex()
    {
        $value = $this->get(self::SOURCESEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceSex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceSex()
    {
        return $this->get(self::SOURCESEX) !== null;
    }

    /**
     * Sets value of 'sourceRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceRoleName($value)
    {
        return $this->set(self::SOURCEROLENAME, $value);
    }

    /**
     * Returns value of 'sourceRoleName' property
     *
     * @return string
     */
    public function getSourceRoleName()
    {
        $value = $this->get(self::SOURCEROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sourceRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceRoleName()
    {
        return $this->get(self::SOURCEROLENAME) !== null;
    }

    /**
     * Sets value of 'bottle' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TBBottleProp $value Property value
     *
     * @return null
     */
    public function setBottle(\Xnhd\Core\Pb\Sdo\TBBottleProp $value=null)
    {
        return $this->set(self::BOTTLE, $value);
    }

    /**
     * Returns value of 'bottle' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TBBottleProp
     */
    public function getBottle()
    {
        return $this->get(self::BOTTLE);
    }

    /**
     * Returns true if 'bottle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBottle()
    {
        return $this->get(self::BOTTLE) !== null;
    }
}
}