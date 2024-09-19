<?php
/**
 * Auto generated from smallgameserver.proto at 2021-07-29 01:54:29
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSHistoryDetailReq message
 */
class SGSHistoryDetailReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const MATCHID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATCHID => array(
            'name' => 'matchID',
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
        $this->values[self::MATCHID] = null;
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
     * Sets value of 'matchID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMatchID($value)
    {
        return $this->set(self::MATCHID, $value);
    }

    /**
     * Returns value of 'matchID' property
     *
     * @return integer
     */
    public function getMatchID()
    {
        $value = $this->get(self::MATCHID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'matchID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMatchID()
    {
        return $this->get(self::MATCHID) !== null;
    }
}
}