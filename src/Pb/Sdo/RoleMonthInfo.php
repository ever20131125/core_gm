<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleMonthInfo message
 */
class RoleMonthInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NZONEID = 2;
    const SZROLENAME = 3;
    const GENDER = 4;
    const VIPLEVEL = 5;
    const NLEVEL = 6;
    const NTOTALPAY = 7;
    const NMONTHPAY = 8;
    const NLASTMONTHPAY = 9;
    const NTHREEMONEYPAY = 10;
    const NMONTHLOGIN = 11;
    const NLASTMONTHLOGIN = 12;
    const NTHREEMONTHLOGIN = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIPLEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\VIPLevel::enmVIPLevel_Null,
            'name' => 'vipLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALPAY => array(
            'name' => 'nTotalPay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONTHPAY => array(
            'name' => 'nMonthPay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTMONTHPAY => array(
            'name' => 'nLastMonthPay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHREEMONEYPAY => array(
            'name' => 'nThreeMoneyPay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONTHLOGIN => array(
            'name' => 'nMonthLogin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTMONTHLOGIN => array(
            'name' => 'nLastMonthLogin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHREEMONTHLOGIN => array(
            'name' => 'nThreeMonthLogin',
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
        $this->values[self::NZONEID] = null;
        $this->values[self::SZROLENAME] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::VIPLEVEL] = self::$fields[self::VIPLEVEL]['default'];
        $this->values[self::NLEVEL] = null;
        $this->values[self::NTOTALPAY] = null;
        $this->values[self::NMONTHPAY] = null;
        $this->values[self::NLASTMONTHPAY] = null;
        $this->values[self::NTHREEMONEYPAY] = null;
        $this->values[self::NMONTHLOGIN] = null;
        $this->values[self::NLASTMONTHLOGIN] = null;
        $this->values[self::NTHREEMONTHLOGIN] = null;
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
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }

    /**
     * Sets value of 'vipLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVipLevel($value)
    {
        return $this->set(self::VIPLEVEL, $value);
    }

    /**
     * Returns value of 'vipLevel' property
     *
     * @return integer
     */
    public function getVipLevel()
    {
        $value = $this->get(self::VIPLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'vipLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVipLevel()
    {
        return $this->get(self::VIPLEVEL) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Sets value of 'nTotalPay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalPay($value)
    {
        return $this->set(self::NTOTALPAY, $value);
    }

    /**
     * Returns value of 'nTotalPay' property
     *
     * @return integer
     */
    public function getNTotalPay()
    {
        $value = $this->get(self::NTOTALPAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalPay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalPay()
    {
        return $this->get(self::NTOTALPAY) !== null;
    }

    /**
     * Sets value of 'nMonthPay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMonthPay($value)
    {
        return $this->set(self::NMONTHPAY, $value);
    }

    /**
     * Returns value of 'nMonthPay' property
     *
     * @return integer
     */
    public function getNMonthPay()
    {
        $value = $this->get(self::NMONTHPAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMonthPay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMonthPay()
    {
        return $this->get(self::NMONTHPAY) !== null;
    }

    /**
     * Sets value of 'nLastMonthPay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastMonthPay($value)
    {
        return $this->set(self::NLASTMONTHPAY, $value);
    }

    /**
     * Returns value of 'nLastMonthPay' property
     *
     * @return integer
     */
    public function getNLastMonthPay()
    {
        $value = $this->get(self::NLASTMONTHPAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastMonthPay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastMonthPay()
    {
        return $this->get(self::NLASTMONTHPAY) !== null;
    }

    /**
     * Sets value of 'nThreeMoneyPay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThreeMoneyPay($value)
    {
        return $this->set(self::NTHREEMONEYPAY, $value);
    }

    /**
     * Returns value of 'nThreeMoneyPay' property
     *
     * @return integer
     */
    public function getNThreeMoneyPay()
    {
        $value = $this->get(self::NTHREEMONEYPAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThreeMoneyPay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThreeMoneyPay()
    {
        return $this->get(self::NTHREEMONEYPAY) !== null;
    }

    /**
     * Sets value of 'nMonthLogin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMonthLogin($value)
    {
        return $this->set(self::NMONTHLOGIN, $value);
    }

    /**
     * Returns value of 'nMonthLogin' property
     *
     * @return integer
     */
    public function getNMonthLogin()
    {
        $value = $this->get(self::NMONTHLOGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMonthLogin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMonthLogin()
    {
        return $this->get(self::NMONTHLOGIN) !== null;
    }

    /**
     * Sets value of 'nLastMonthLogin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastMonthLogin($value)
    {
        return $this->set(self::NLASTMONTHLOGIN, $value);
    }

    /**
     * Returns value of 'nLastMonthLogin' property
     *
     * @return integer
     */
    public function getNLastMonthLogin()
    {
        $value = $this->get(self::NLASTMONTHLOGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastMonthLogin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastMonthLogin()
    {
        return $this->get(self::NLASTMONTHLOGIN) !== null;
    }

    /**
     * Sets value of 'nThreeMonthLogin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThreeMonthLogin($value)
    {
        return $this->set(self::NTHREEMONTHLOGIN, $value);
    }

    /**
     * Returns value of 'nThreeMonthLogin' property
     *
     * @return integer
     */
    public function getNThreeMonthLogin()
    {
        $value = $this->get(self::NTHREEMONTHLOGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThreeMonthLogin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThreeMonthLogin()
    {
        return $this->get(self::NTHREEMONTHLOGIN) !== null;
    }
}
}