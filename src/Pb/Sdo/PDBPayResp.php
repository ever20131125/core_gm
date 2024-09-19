<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBPayResp message
 */
class PDBPayResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZACCOUNTID = 2;
    const NZONEID = 3;
    const SZPRODUCTID = 4;
    const NRMB = 5;
    const SOURCE = 6;
    const SZORDER = 7;
    const SZTRANSID = 8;
    const NMONEY = 9;
    const NOLDMONEY = 10;
    const NNEWMONEY = 11;

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
        self::NZONEID => array(
            'name' => 'nZoneID',
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
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_Pay,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZORDER => array(
            'name' => 'szOrder',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZTRANSID => array(
            'name' => 'szTransID',
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
        $this->values[self::NZONEID] = null;
        $this->values[self::SZPRODUCTID] = null;
        $this->values[self::NRMB] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::SZORDER] = null;
        $this->values[self::SZTRANSID] = null;
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
     * Sets value of 'szTransID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTransID($value)
    {
        return $this->set(self::SZTRANSID, $value);
    }

    /**
     * Returns value of 'szTransID' property
     *
     * @return string
     */
    public function getSzTransID()
    {
        $value = $this->get(self::SZTRANSID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTransID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTransID()
    {
        return $this->get(self::SZTRANSID) !== null;
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