<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBRoleInfoUpdateNoti message
 */
class IDBRoleInfoUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROLEDATATYPE = 2;
    const SZROLENAME = 3;
    const NFACEID = 4;
    const NUSETHEME = 5;
    const NSHOWTHEME = 6;
    const NHEADFRAME = 7;
    const NTITLE = 8;
    const STAVATARINFO = 9;
    const SZVERSION = 10;
    const SZDEVICEID = 11;
    const STHOUSEDETAILINFO = 12;
    const NCROWNEND = 13;
    const NCROWNYEAREND = 14;
    const STROLEBUFFERINFO = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEDATATYPE => array(
            'name' => 'nRoleDataType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NFACEID => array(
            'name' => 'nFaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUSETHEME => array(
            'name' => 'nUseTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSHOWTHEME => array(
            'name' => 'nShowTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHEADFRAME => array(
            'name' => 'nHeadFrame',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTITLE => array(
            'name' => 'nTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
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
        self::STHOUSEDETAILINFO => array(
            'name' => 'stHouseDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
        ),
        self::NCROWNEND => array(
            'name' => 'nCrownEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCROWNYEAREND => array(
            'name' => 'nCrownYearEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEBUFFERINFO => array(
            'name' => 'stRoleBufferInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBufferInfo'
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
        $this->values[self::NROLEDATATYPE] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NFACEID] = null;
        $this->values[self::NUSETHEME] = null;
        $this->values[self::NSHOWTHEME] = null;
        $this->values[self::NHEADFRAME] = null;
        $this->values[self::NTITLE] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::SZVERSION] = null;
        $this->values[self::SZDEVICEID] = null;
        $this->values[self::STHOUSEDETAILINFO] = null;
        $this->values[self::NCROWNEND] = null;
        $this->values[self::NCROWNYEAREND] = null;
        $this->values[self::STROLEBUFFERINFO] = null;
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
     * Sets value of 'nRoleDataType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleDataType($value)
    {
        return $this->set(self::NROLEDATATYPE, $value);
    }

    /**
     * Returns value of 'nRoleDataType' property
     *
     * @return integer
     */
    public function getNRoleDataType()
    {
        $value = $this->get(self::NROLEDATATYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleDataType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleDataType()
    {
        return $this->get(self::NROLEDATATYPE) !== null;
    }

    /**
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
    }

    /**
     * Sets value of 'nFaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceID($value)
    {
        return $this->set(self::NFACEID, $value);
    }

    /**
     * Returns value of 'nFaceID' property
     *
     * @return integer
     */
    public function getNFaceID()
    {
        $value = $this->get(self::NFACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceID()
    {
        return $this->get(self::NFACEID) !== null;
    }

    /**
     * Sets value of 'nUseTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUseTheme($value)
    {
        return $this->set(self::NUSETHEME, $value);
    }

    /**
     * Returns value of 'nUseTheme' property
     *
     * @return integer
     */
    public function getNUseTheme()
    {
        $value = $this->get(self::NUSETHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUseTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUseTheme()
    {
        return $this->get(self::NUSETHEME) !== null;
    }

    /**
     * Sets value of 'nShowTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShowTheme($value)
    {
        return $this->set(self::NSHOWTHEME, $value);
    }

    /**
     * Returns value of 'nShowTheme' property
     *
     * @return integer
     */
    public function getNShowTheme()
    {
        $value = $this->get(self::NSHOWTHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShowTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShowTheme()
    {
        return $this->get(self::NSHOWTHEME) !== null;
    }

    /**
     * Sets value of 'nHeadFrame' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHeadFrame($value)
    {
        return $this->set(self::NHEADFRAME, $value);
    }

    /**
     * Returns value of 'nHeadFrame' property
     *
     * @return integer
     */
    public function getNHeadFrame()
    {
        $value = $this->get(self::NHEADFRAME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHeadFrame' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHeadFrame()
    {
        return $this->get(self::NHEADFRAME) !== null;
    }

    /**
     * Sets value of 'nTitle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTitle($value)
    {
        return $this->set(self::NTITLE, $value);
    }

    /**
     * Returns value of 'nTitle' property
     *
     * @return integer
     */
    public function getNTitle()
    {
        $value = $this->get(self::NTITLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTitle()
    {
        return $this->get(self::NTITLE) !== null;
    }

    /**
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
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
     * Sets value of 'stHouseDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDetailInfo $value Property value
     *
     * @return null
     */
    public function setStHouseDetailInfo(\Xnhd\Core\Pb\Sdo\HouseDetailInfo $value=null)
    {
        return $this->set(self::STHOUSEDETAILINFO, $value);
    }

    /**
     * Returns value of 'stHouseDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDetailInfo
     */
    public function getStHouseDetailInfo()
    {
        return $this->get(self::STHOUSEDETAILINFO);
    }

    /**
     * Returns true if 'stHouseDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHouseDetailInfo()
    {
        return $this->get(self::STHOUSEDETAILINFO) !== null;
    }

    /**
     * Sets value of 'nCrownEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCrownEnd($value)
    {
        return $this->set(self::NCROWNEND, $value);
    }

    /**
     * Returns value of 'nCrownEnd' property
     *
     * @return integer
     */
    public function getNCrownEnd()
    {
        $value = $this->get(self::NCROWNEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCrownEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCrownEnd()
    {
        return $this->get(self::NCROWNEND) !== null;
    }

    /**
     * Sets value of 'nCrownYearEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCrownYearEnd($value)
    {
        return $this->set(self::NCROWNYEAREND, $value);
    }

    /**
     * Returns value of 'nCrownYearEnd' property
     *
     * @return integer
     */
    public function getNCrownYearEnd()
    {
        $value = $this->get(self::NCROWNYEAREND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCrownYearEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCrownYearEnd()
    {
        return $this->get(self::NCROWNYEAREND) !== null;
    }

    /**
     * Sets value of 'stRoleBufferInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleBufferInfo $value Property value
     *
     * @return null
     */
    public function setStRoleBufferInfo(\Xnhd\Core\Pb\Sdo\RoleBufferInfo $value=null)
    {
        return $this->set(self::STROLEBUFFERINFO, $value);
    }

    /**
     * Returns value of 'stRoleBufferInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBufferInfo
     */
    public function getStRoleBufferInfo()
    {
        return $this->get(self::STROLEBUFFERINFO);
    }

    /**
     * Returns true if 'stRoleBufferInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleBufferInfo()
    {
        return $this->get(self::STROLEBUFFERINFO) !== null;
    }
}
}