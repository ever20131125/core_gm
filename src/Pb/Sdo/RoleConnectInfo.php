<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleConnectInfo message
 */
class RoleConnectInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NANONYMOUS = 1;
    const SZCHANNEL = 2;
    const SZGAMEUSERID = 3;
    const SZVERSION = 4;
    const SZDEVICEID = 5;
    const SZPACKAGECHANNEL = 6;
    const NPLATFORM = 7;
    const STCONNUIN = 8;
    const NCONNECTIONINDEX = 9;
    const NSEQUENCE = 10;
    const CONNECTIONSTATE = 11;
    const NSDKID = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NANONYMOUS => array(
            'name' => 'nAnonymous',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCHANNEL => array(
            'name' => 'szChannel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZGAMEUSERID => array(
            'name' => 'szGameUserID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZVERSION => array(
            'name' => 'szVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZDEVICEID => array(
            'name' => 'szDeviceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZPACKAGECHANNEL => array(
            'name' => 'szPackageChannel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NPLATFORM => array(
            'name' => 'nPlatform',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STCONNUIN => array(
            'name' => 'stConnUin',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ConnUin'
        ),
        self::NCONNECTIONINDEX => array(
            'name' => 'nConnectionIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSEQUENCE => array(
            'name' => 'nSequence',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONNECTIONSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ConnectionState::enmConnectionState_None,
            'name' => 'connectionState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSDKID => array(
            'name' => 'nSDKID',
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
        $this->values[self::NANONYMOUS] = null;
        $this->values[self::SZCHANNEL] = null;
        $this->values[self::SZGAMEUSERID] = null;
        $this->values[self::SZVERSION] = null;
        $this->values[self::SZDEVICEID] = null;
        $this->values[self::SZPACKAGECHANNEL] = null;
        $this->values[self::NPLATFORM] = null;
        $this->values[self::STCONNUIN] = null;
        $this->values[self::NCONNECTIONINDEX] = null;
        $this->values[self::NSEQUENCE] = null;
        $this->values[self::CONNECTIONSTATE] = self::$fields[self::CONNECTIONSTATE]['default'];
        $this->values[self::NSDKID] = null;
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
     * Sets value of 'nAnonymous' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAnonymous($value)
    {
        return $this->set(self::NANONYMOUS, $value);
    }

    /**
     * Returns value of 'nAnonymous' property
     *
     * @return integer
     */
    public function getNAnonymous()
    {
        $value = $this->get(self::NANONYMOUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAnonymous' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAnonymous()
    {
        return $this->get(self::NANONYMOUS) !== null;
    }

    /**
     * Sets value of 'szChannel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzChannel($value)
    {
        return $this->set(self::SZCHANNEL, $value);
    }

    /**
     * Returns value of 'szChannel' property
     *
     * @return string
     */
    public function getSzChannel()
    {
        $value = $this->get(self::SZCHANNEL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szChannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzChannel()
    {
        return $this->get(self::SZCHANNEL) !== null;
    }

    /**
     * Sets value of 'szGameUserID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzGameUserID($value)
    {
        return $this->set(self::SZGAMEUSERID, $value);
    }

    /**
     * Returns value of 'szGameUserID' property
     *
     * @return string
     */
    public function getSzGameUserID()
    {
        $value = $this->get(self::SZGAMEUSERID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szGameUserID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzGameUserID()
    {
        return $this->get(self::SZGAMEUSERID) !== null;
    }

    /**
     * Sets value of 'szVersion' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzVersion($value)
    {
        return $this->set(self::SZVERSION, $value);
    }

    /**
     * Returns value of 'szVersion' property
     *
     * @return string
     */
    public function getSzVersion()
    {
        $value = $this->get(self::SZVERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzVersion()
    {
        return $this->get(self::SZVERSION) !== null;
    }

    /**
     * Sets value of 'szDeviceID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzDeviceID($value)
    {
        return $this->set(self::SZDEVICEID, $value);
    }

    /**
     * Returns value of 'szDeviceID' property
     *
     * @return string
     */
    public function getSzDeviceID()
    {
        $value = $this->get(self::SZDEVICEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szDeviceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzDeviceID()
    {
        return $this->get(self::SZDEVICEID) !== null;
    }

    /**
     * Sets value of 'szPackageChannel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPackageChannel($value)
    {
        return $this->set(self::SZPACKAGECHANNEL, $value);
    }

    /**
     * Returns value of 'szPackageChannel' property
     *
     * @return string
     */
    public function getSzPackageChannel()
    {
        $value = $this->get(self::SZPACKAGECHANNEL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPackageChannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPackageChannel()
    {
        return $this->get(self::SZPACKAGECHANNEL) !== null;
    }

    /**
     * Sets value of 'nPlatform' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlatform($value)
    {
        return $this->set(self::NPLATFORM, $value);
    }

    /**
     * Returns value of 'nPlatform' property
     *
     * @return integer
     */
    public function getNPlatform()
    {
        $value = $this->get(self::NPLATFORM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlatform' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlatform()
    {
        return $this->get(self::NPLATFORM) !== null;
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
     * Sets value of 'nConnectionIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNConnectionIndex($value)
    {
        return $this->set(self::NCONNECTIONINDEX, $value);
    }

    /**
     * Returns value of 'nConnectionIndex' property
     *
     * @return integer
     */
    public function getNConnectionIndex()
    {
        $value = $this->get(self::NCONNECTIONINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nConnectionIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNConnectionIndex()
    {
        return $this->get(self::NCONNECTIONINDEX) !== null;
    }

    /**
     * Sets value of 'nSequence' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSequence($value)
    {
        return $this->set(self::NSEQUENCE, $value);
    }

    /**
     * Returns value of 'nSequence' property
     *
     * @return integer
     */
    public function getNSequence()
    {
        $value = $this->get(self::NSEQUENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSequence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSequence()
    {
        return $this->get(self::NSEQUENCE) !== null;
    }

    /**
     * Sets value of 'connectionState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConnectionState($value)
    {
        return $this->set(self::CONNECTIONSTATE, $value);
    }

    /**
     * Returns value of 'connectionState' property
     *
     * @return integer
     */
    public function getConnectionState()
    {
        $value = $this->get(self::CONNECTIONSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'connectionState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConnectionState()
    {
        return $this->get(self::CONNECTIONSTATE) !== null;
    }

    /**
     * Sets value of 'nSDKID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSDKID($value)
    {
        return $this->set(self::NSDKID, $value);
    }

    /**
     * Returns value of 'nSDKID' property
     *
     * @return integer
     */
    public function getNSDKID()
    {
        $value = $this->get(self::NSDKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSDKID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSDKID()
    {
        return $this->get(self::NSDKID) !== null;
    }
}
}