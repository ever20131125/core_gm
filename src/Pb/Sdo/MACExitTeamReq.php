<?php
/**
 * Auto generated from matchserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MACExitTeamReq message
 */
class MACExitTeamReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const TEAMID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEAMID => array(
            'name' => 'teamID',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::TEAMID] = null;
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
     * Sets value of 'teamID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTeamID($value)
    {
        return $this->set(self::TEAMID, $value);
    }

    /**
     * Returns value of 'teamID' property
     *
     * @return integer
     */
    public function getTeamID()
    {
        $value = $this->get(self::TEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'teamID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTeamID()
    {
        return $this->get(self::TEAMID) !== null;
    }
}
}