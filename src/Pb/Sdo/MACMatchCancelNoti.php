<?php
/**
 * Auto generated from matchserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MACMatchCancelNoti message
 */
class MACMatchCancelNoti extends \ProtobufMessage
{
    /* Field index constants */
    const TEAMID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
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