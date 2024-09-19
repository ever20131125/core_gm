<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchRoleInfo message
 */
class MatchRoleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEINFO = 1;
    const NPLACEID = 2;
    const TEAM = 3;
    const RECORDKIND = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleInfo'
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
        self::RECORDKIND => array(
            'default' => \Xnhd\Core\Pb\Sdo\RecordKind::enmRecordKind_Normal,
            'name' => 'recordKind',
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
        $this->values[self::ROLEINFO] = null;
        $this->values[self::NPLACEID] = null;
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::RECORDKIND] = self::$fields[self::RECORDKIND]['default'];
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
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\RoleInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo
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
     * Sets value of 'recordKind' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecordKind($value)
    {
        return $this->set(self::RECORDKIND, $value);
    }

    /**
     * Returns value of 'recordKind' property
     *
     * @return integer
     */
    public function getRecordKind()
    {
        $value = $this->get(self::RECORDKIND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recordKind' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecordKind()
    {
        return $this->get(self::RECORDKIND) !== null;
    }
}
}