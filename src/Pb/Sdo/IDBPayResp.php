<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBPayResp message
 */
class IDBPayResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZACCOUNTID = 2;
    const SZPRODUCTID = 3;
    const NRMB = 4;
    const SOURCE = 5;
    const NROLEID = 6;
    const SZORDER = 7;
    const NMONEY = 8;
    const NOLDMONEY = 9;
    const NNEWMONEY = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZORDER => array(
            'name' => 'szOrder',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::SZPRODUCTID] = null;
        $this->values[self::NRMB] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SZORDER] = null;
        $this->values[self::NMONEY] = null;
        $this->values[self::NOLDMONEY] = null;
        $this->values[self::NNEWMONEY] = null;
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
     * Sets value of 'szOrder' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOrder($value)
    {
        return $this->set(self::SZORDER, $value);
    }

    /**
     * Returns value of 'szOrder' property
     *
     * @return string
     */
    public function getSzOrder()
    {
        $value = $this->get(self::SZORDER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOrder' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOrder()
    {
        return $this->get(self::SZORDER) !== null;
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
}
}