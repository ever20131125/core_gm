<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSLoginReq message
 */
class STSLoginReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZACCOUNTID = 1;
    const SZPLAYERSIGNATURE = 2;
    const NTIMETICK = 3;
    const NSDKID = 11;
    const SZCHANNEL = 12;
    const SZGAMEUSERID = 13;
    const SZVERSION = 14;
    const SZDEVICEID = 15;
    const SZPACKAGECHANNEL = 16;
    const NPLATFORM = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZPLAYERSIGNATURE => array(
            'name' => 'szPlayerSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NTIMETICK => array(
            'name' => 'nTimeTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSDKID => array(
            'name' => 'nSDKID',
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::SZPLAYERSIGNATURE] = null;
        $this->values[self::NTIMETICK] = null;
        $this->values[self::NSDKID] = null;
        $this->values[self::SZCHANNEL] = null;
        $this->values[self::SZGAMEUSERID] = null;
        $this->values[self::SZVERSION] = null;
        $this->values[self::SZDEVICEID] = null;
        $this->values[self::SZPACKAGECHANNEL] = null;
        $this->values[self::NPLATFORM] = null;
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
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'szPlayerSignature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPlayerSignature($value)
    {
        return $this->set(self::SZPLAYERSIGNATURE, $value);
    }

    /**
     * Returns value of 'szPlayerSignature' property
     *
     * @return string
     */
    public function getSzPlayerSignature()
    {
        $value = $this->get(self::SZPLAYERSIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPlayerSignature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPlayerSignature()
    {
        return $this->get(self::SZPLAYERSIGNATURE) !== null;
    }

    /**
     * Sets value of 'nTimeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeTick($value)
    {
        return $this->set(self::NTIMETICK, $value);
    }

    /**
     * Returns value of 'nTimeTick' property
     *
     * @return integer
     */
    public function getNTimeTick()
    {
        $value = $this->get(self::NTIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeTick()
    {
        return $this->get(self::NTIMETICK) !== null;
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
}
}