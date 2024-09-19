<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBPayNoti message
 */
class IDBPayNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SZPRODUCTID = 2;
    const NRMB = 3;
    const SOURCE = 4;
    const NMONEY = 5;
    const NOLDMONEY = 6;
    const NNEWMONEY = 7;
    const STPAYINFO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZPRODUCTID => array(
            'name' => 'szProductID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NRMB => array(
            'name' => 'nRMB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONEY => array(
            'name' => 'nMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOLDMONEY => array(
            'name' => 'nOldMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWMONEY => array(
            'name' => 'nNewMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STPAYINFO => array(
            'name' => 'stPayInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PayInfo'
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
        $this->values[self::SZPRODUCTID] = null;
        $this->values[self::NRMB] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::NMONEY] = null;
        $this->values[self::NOLDMONEY] = null;
        $this->values[self::NNEWMONEY] = null;
        $this->values[self::STPAYINFO] = null;
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
     * Sets value of 'szProductID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzProductID($value)
    {
        return $this->set(self::SZPRODUCTID, $value);
    }

    /**
     * Returns value of 'szProductID' property
     *
     * @return string
     */
    public function getSzProductID()
    {
        $value = $this->get(self::SZPRODUCTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szProductID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzProductID()
    {
        return $this->get(self::SZPRODUCTID) !== null;
    }

    /**
     * Sets value of 'nRMB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRMB($value)
    {
        return $this->set(self::NRMB, $value);
    }

    /**
     * Returns value of 'nRMB' property
     *
     * @return integer
     */
    public function getNRMB()
    {
        $value = $this->get(self::NRMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRMB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRMB()
    {
        return $this->get(self::NRMB) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'nMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoney($value)
    {
        return $this->set(self::NMONEY, $value);
    }

    /**
     * Returns value of 'nMoney' property
     *
     * @return integer
     */
    public function getNMoney()
    {
        $value = $this->get(self::NMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoney()
    {
        return $this->get(self::NMONEY) !== null;
    }

    /**
     * Sets value of 'nOldMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOldMoney($value)
    {
        return $this->set(self::NOLDMONEY, $value);
    }

    /**
     * Returns value of 'nOldMoney' property
     *
     * @return integer
     */
    public function getNOldMoney()
    {
        $value = $this->get(self::NOLDMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOldMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOldMoney()
    {
        return $this->get(self::NOLDMONEY) !== null;
    }

    /**
     * Sets value of 'nNewMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewMoney($value)
    {
        return $this->set(self::NNEWMONEY, $value);
    }

    /**
     * Returns value of 'nNewMoney' property
     *
     * @return integer
     */
    public function getNNewMoney()
    {
        $value = $this->get(self::NNEWMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewMoney()
    {
        return $this->get(self::NNEWMONEY) !== null;
    }

    /**
     * Sets value of 'stPayInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PayInfo $value Property value
     *
     * @return null
     */
    public function setStPayInfo(\Xnhd\Core\Pb\Sdo\PayInfo $value=null)
    {
        return $this->set(self::STPAYINFO, $value);
    }

    /**
     * Returns value of 'stPayInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PayInfo
     */
    public function getStPayInfo()
    {
        return $this->get(self::STPAYINFO);
    }

    /**
     * Returns true if 'stPayInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPayInfo()
    {
        return $this->get(self::STPAYINFO) !== null;
    }
}
}