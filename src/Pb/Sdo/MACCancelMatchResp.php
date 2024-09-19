<?php
/**
 * Auto generated from matchserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MACCancelMatchResp message
 */
class MACCancelMatchResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const TEAMID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
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
        $this->values[self::NERRORCODE] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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