<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSLoginReq message
 */
class COSLoginReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZACCOUNTID = 1;
    const NZONEID = 2;
    const NSDKID = 3;
    const NANONYMOUS = 4;
    const SZCHANNEL = 5;
    const SZGAMEUSERID = 6;
    const SZVERSION = 7;
    const SZDEVICEID = 8;
    const SZPACKAGECHANNEL = 9;
    const NPLATFORM = 10;
    const NRELOGIN = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSDKID => array(
            'name' => 'nSDKID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::NRELOGIN => array(
            'name' => 'nRelogin',
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
        $this->values[self::NZONEID] = null;
        $this->values[self::NSDKID] = null;
        $this->values[self::NANONYMOUS] = null;
        $this->values[self::SZCHANNEL] = null;
        $this->values[self::SZGAMEUSERID] = null;
        $this->values[self::SZVERSION] = null;
        $this->values[self::SZDEVICEID] = null;
        $this->values[self::SZPACKAGECHANNEL] = null;
        $this->values[self::NPLATFORM] = null;
        $this->values[self::NRELOGIN] = null;
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
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
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
     * Sets value of 'nRelogin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRelogin($value)
    {
        return $this->set(self::NRELOGIN, $value);
    }

    /**
     * Returns value of 'nRelogin' property
     *
     * @return integer
     */
    public function getNRelogin()
    {
        $value = $this->get(self::NRELOGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRelogin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRelogin()
    {
        return $this->get(self::NRELOGIN) !== null;
    }
}
}