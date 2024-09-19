<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WorldPrize message
 */
class WorldPrize extends \ProtobufMessage
{
    /* Field index constants */
    const NACTTYPE = 1;
    const NRANK = 2;
    const SZPATH = 3;
    const STROLEINFO1 = 4;
    const STROLEINFO2 = 5;
    const NGUILDID = 6;
    const NROUNDTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NACTTYPE => array(
            'name' => 'nActType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANK => array(
            'name' => 'nRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZPATH => array(
            'name' => 'szPath',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STROLEINFO1 => array(
            'name' => 'stRoleInfo1',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::STROLEINFO2 => array(
            'name' => 'stRoleInfo2',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::NGUILDID => array(
            'name' => 'nGuildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROUNDTIME => array(
            'name' => 'nRoundTime',
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
        $this->values[self::NACTTYPE] = null;
        $this->values[self::NRANK] = null;
        $this->values[self::SZPATH] = null;
        $this->values[self::STROLEINFO1] = null;
        $this->values[self::STROLEINFO2] = null;
        $this->values[self::NGUILDID] = null;
        $this->values[self::NROUNDTIME] = null;
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
     * Sets value of 'nActType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActType($value)
    {
        return $this->set(self::NACTTYPE, $value);
    }

    /**
     * Returns value of 'nActType' property
     *
     * @return integer
     */
    public function getNActType()
    {
        $value = $this->get(self::NACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActType()
    {
        return $this->get(self::NACTTYPE) !== null;
    }

    /**
     * Sets value of 'nRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRank($value)
    {
        return $this->set(self::NRANK, $value);
    }

    /**
     * Returns value of 'nRank' property
     *
     * @return integer
     */
    public function getNRank()
    {
        $value = $this->get(self::NRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRank()
    {
        return $this->get(self::NRANK) !== null;
    }

    /**
     * Sets value of 'szPath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPath($value)
    {
        return $this->set(self::SZPATH, $value);
    }

    /**
     * Returns value of 'szPath' property
     *
     * @return string
     */
    public function getSzPath()
    {
        $value = $this->get(self::SZPATH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPath' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPath()
    {
        return $this->get(self::SZPATH) !== null;
    }

    /**
     * Sets value of 'stRoleInfo1' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoleInfo1(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::STROLEINFO1, $value);
    }

    /**
     * Returns value of 'stRoleInfo1' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getStRoleInfo1()
    {
        return $this->get(self::STROLEINFO1);
    }

    /**
     * Returns true if 'stRoleInfo1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleInfo1()
    {
        return $this->get(self::STROLEINFO1) !== null;
    }

    /**
     * Sets value of 'stRoleInfo2' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoleInfo2(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::STROLEINFO2, $value);
    }

    /**
     * Returns value of 'stRoleInfo2' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getStRoleInfo2()
    {
        return $this->get(self::STROLEINFO2);
    }

    /**
     * Returns true if 'stRoleInfo2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleInfo2()
    {
        return $this->get(self::STROLEINFO2) !== null;
    }

    /**
     * Sets value of 'nGuildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuildID($value)
    {
        return $this->set(self::NGUILDID, $value);
    }

    /**
     * Returns value of 'nGuildID' property
     *
     * @return integer
     */
    public function getNGuildID()
    {
        $value = $this->get(self::NGUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuildID()
    {
        return $this->get(self::NGUILDID) !== null;
    }

    /**
     * Sets value of 'nRoundTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoundTime($value)
    {
        return $this->set(self::NROUNDTIME, $value);
    }

    /**
     * Returns value of 'nRoundTime' property
     *
     * @return integer
     */
    public function getNRoundTime()
    {
        $value = $this->get(self::NROUNDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoundTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoundTime()
    {
        return $this->get(self::NROUNDTIME) !== null;
    }
}
}