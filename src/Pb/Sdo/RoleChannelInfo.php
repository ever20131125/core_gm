<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleChannelInfo message
 */
class RoleChannelInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NCHANNELID = 2;
    const PLAYERCHANNELSTATE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHANNELID => array(
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLAYERCHANNELSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PlayerChannelState::enmPlayerChannelState_None,
            'name' => 'playerChannelState',
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
        $this->values[self::NCHANNELID] = null;
        $this->values[self::PLAYERCHANNELSTATE] = self::$fields[self::PLAYERCHANNELSTATE]['default'];
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
     * Sets value of 'nChannelID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChannelID($value)
    {
        return $this->set(self::NCHANNELID, $value);
    }

    /**
     * Returns value of 'nChannelID' property
     *
     * @return integer
     */
    public function getNChannelID()
    {
        $value = $this->get(self::NCHANNELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChannelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChannelID()
    {
        return $this->get(self::NCHANNELID) !== null;
    }

    /**
     * Sets value of 'playerChannelState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlayerChannelState($value)
    {
        return $this->set(self::PLAYERCHANNELSTATE, $value);
    }

    /**
     * Returns value of 'playerChannelState' property
     *
     * @return integer
     */
    public function getPlayerChannelState()
    {
        $value = $this->get(self::PLAYERCHANNELSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'playerChannelState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlayerChannelState()
    {
        return $this->get(self::PLAYERCHANNELSTATE) !== null;
    }
}
}