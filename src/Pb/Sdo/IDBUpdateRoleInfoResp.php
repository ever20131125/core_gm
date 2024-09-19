<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBUpdateRoleInfoResp message
 */
class IDBUpdateRoleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NROLEDATATYPE = 3;
    const SZROLENAME = 4;
    const NFACEID = 5;
    const NUSETHEME = 6;
    const NSHOWTHEME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NROLEDATATYPE] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NFACEID] = null;
        $this->values[self::NUSETHEME] = null;
        $this->values[self::NSHOWTHEME] = null;
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
}
}