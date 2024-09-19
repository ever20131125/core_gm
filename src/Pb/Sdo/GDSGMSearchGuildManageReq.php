<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGMSearchGuildManageReq message
 */
class GDSGMSearchGuildManageReq extends \ProtobufMessage
{
    /* Field index constants */
    const NTYPE = 1;
    const SZNAME = 2;
    const NLEVEL = 3;
    const NCOMP = 4;
    const NSTARTTIME = 5;
    const NENDTIME = 6;
    const NPAGENUM = 7;
    const NPAGESIZE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GMGuildSearchType::enmGMGuildSearchType_None,
            'name' => 'nType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZNAME => array(
            'name' => 'szName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOMP => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildLevelCompType::enmGuildLevelCompType_None,
            'name' => 'nComp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAGENUM => array(
            'name' => 'nPageNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAGESIZE => array(
            'name' => 'nPageSize',
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
        $this->values[self::NTYPE] = self::$fields[self::NTYPE]['default'];
        $this->values[self::SZNAME] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::NCOMP] = self::$fields[self::NCOMP]['default'];
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NPAGENUM] = null;
        $this->values[self::NPAGESIZE] = null;
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
     * Sets value of 'nType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNType($value)
    {
        return $this->set(self::NTYPE, $value);
    }

    /**
     * Returns value of 'nType' property
     *
     * @return integer
     */
    public function getNType()
    {
        $value = $this->get(self::NTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return $this->get(self::NTYPE) !== null;
    }

    /**
     * Sets value of 'szName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzName($value)
    {
        return $this->set(self::SZNAME, $value);
    }

    /**
     * Returns value of 'szName' property
     *
     * @return string
     */
    public function getSzName()
    {
        $value = $this->get(self::SZNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzName()
    {
        return $this->get(self::SZNAME) !== null;
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
     * Sets value of 'nComp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNComp($value)
    {
        return $this->set(self::NCOMP, $value);
    }

    /**
     * Returns value of 'nComp' property
     *
     * @return integer
     */
    public function getNComp()
    {
        $value = $this->get(self::NCOMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nComp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNComp()
    {
        return $this->get(self::NCOMP) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nPageNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPageNum($value)
    {
        return $this->set(self::NPAGENUM, $value);
    }

    /**
     * Returns value of 'nPageNum' property
     *
     * @return integer
     */
    public function getNPageNum()
    {
        $value = $this->get(self::NPAGENUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPageNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPageNum()
    {
        return $this->get(self::NPAGENUM) !== null;
    }

    /**
     * Sets value of 'nPageSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPageSize($value)
    {
        return $this->set(self::NPAGESIZE, $value);
    }

    /**
     * Returns value of 'nPageSize' property
     *
     * @return integer
     */
    public function getNPageSize()
    {
        $value = $this->get(self::NPAGESIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPageSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPageSize()
    {
        return $this->get(self::NPAGESIZE) !== null;
    }
}
}