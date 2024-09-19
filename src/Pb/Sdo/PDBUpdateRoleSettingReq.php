<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdateRoleSettingReq message
 */
class PDBUpdateRoleSettingReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROLEDATATYPE = 2;
    const SZQQ = 3;
    const NNAMERGB = 4;
    const NUSETHEME = 5;
    const NSHOWTHEME = 6;
    const NSHOWPOSTYPE = 7;

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
        self::SZQQ => array(
            'name' => 'szQQ',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NNAMERGB => array(
            'name' => 'nNameRGB',
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
        self::NSHOWPOSTYPE => array(
            'name' => 'nShowPosType',
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
        $this->values[self::NROLEDATATYPE] = null;
        $this->values[self::SZQQ] = null;
        $this->values[self::NNAMERGB] = null;
        $this->values[self::NUSETHEME] = null;
        $this->values[self::NSHOWTHEME] = null;
        $this->values[self::NSHOWPOSTYPE] = null;
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
     * Sets value of 'szQQ' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzQQ($value)
    {
        return $this->set(self::SZQQ, $value);
    }

    /**
     * Returns value of 'szQQ' property
     *
     * @return string
     */
    public function getSzQQ()
    {
        $value = $this->get(self::SZQQ);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szQQ' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzQQ()
    {
        return $this->get(self::SZQQ) !== null;
    }

    /**
     * Sets value of 'nNameRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNameRGB($value)
    {
        return $this->set(self::NNAMERGB, $value);
    }

    /**
     * Returns value of 'nNameRGB' property
     *
     * @return integer
     */
    public function getNNameRGB()
    {
        $value = $this->get(self::NNAMERGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNameRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNameRGB()
    {
        return $this->get(self::NNAMERGB) !== null;
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
     * Sets value of 'nShowPosType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShowPosType($value)
    {
        return $this->set(self::NSHOWPOSTYPE, $value);
    }

    /**
     * Returns value of 'nShowPosType' property
     *
     * @return integer
     */
    public function getNShowPosType()
    {
        $value = $this->get(self::NSHOWPOSTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShowPosType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShowPosType()
    {
        return $this->get(self::NSHOWPOSTYPE) !== null;
    }
}
}