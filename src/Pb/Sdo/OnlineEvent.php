<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * OnlineEvent message
 */
class OnlineEvent extends \ProtobufMessage
{
    /* Field index constants */
    const ONLINETYPE = 1;
    const NROLEID = 2;
    const ONLINESTATE = 3;
    const STCONNUIN = 4;
    const NCHANNELID = 5;
    const NCLOGINCOUNT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ONLINETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\OnlineType::enmOnlineType_HeartBeat,
            'name' => 'onlineType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLINESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\OnlineState::enmOnlineState_Normal,
            'name' => 'onlineState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STCONNUIN => array(
            'name' => 'stConnUin',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ConnUin'
        ),
        self::NCHANNELID => array(
            'name' => 'nChannelID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCLOGINCOUNT => array(
            'name' => 'nCLoginCount',
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
        $this->values[self::ONLINETYPE] = self::$fields[self::ONLINETYPE]['default'];
        $this->values[self::NROLEID] = null;
        $this->values[self::ONLINESTATE] = self::$fields[self::ONLINESTATE]['default'];
        $this->values[self::STCONNUIN] = null;
        $this->values[self::NCHANNELID] = null;
        $this->values[self::NCLOGINCOUNT] = null;
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
     * Sets value of 'onlineType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineType($value)
    {
        return $this->set(self::ONLINETYPE, $value);
    }

    /**
     * Returns value of 'onlineType' property
     *
     * @return integer
     */
    public function getOnlineType()
    {
        $value = $this->get(self::ONLINETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlineType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineType()
    {
        return $this->get(self::ONLINETYPE) !== null;
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
     * Sets value of 'onlineState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineState($value)
    {
        return $this->set(self::ONLINESTATE, $value);
    }

    /**
     * Returns value of 'onlineState' property
     *
     * @return integer
     */
    public function getOnlineState()
    {
        $value = $this->get(self::ONLINESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlineState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineState()
    {
        return $this->get(self::ONLINESTATE) !== null;
    }

    /**
     * Sets value of 'stConnUin' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ConnUin $value Property value
     *
     * @return null
     */
    public function setStConnUin(\Xnhd\Core\Pb\Sdo\ConnUin $value=null)
    {
        return $this->set(self::STCONNUIN, $value);
    }

    /**
     * Returns value of 'stConnUin' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ConnUin
     */
    public function getStConnUin()
    {
        return $this->get(self::STCONNUIN);
    }

    /**
     * Returns true if 'stConnUin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStConnUin()
    {
        return $this->get(self::STCONNUIN) !== null;
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
     * Sets value of 'nCLoginCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCLoginCount($value)
    {
        return $this->set(self::NCLOGINCOUNT, $value);
    }

    /**
     * Returns value of 'nCLoginCount' property
     *
     * @return integer
     */
    public function getNCLoginCount()
    {
        $value = $this->get(self::NCLOGINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCLoginCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCLoginCount()
    {
        return $this->get(self::NCLOGINCOUNT) !== null;
    }
}
}