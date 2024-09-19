<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSBidResp message
 */
class CDSBidResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NBIDID = 3;
    const NPRICE = 4;
    const BIDRET = 5;

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
        self::NBIDID => array(
            'name' => 'nBidID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRICE => array(
            'name' => 'nPrice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BIDRET => array(
            'default' => \Xnhd\Core\Pb\Sdo\BidResult::enmBidRet_None,
            'name' => 'bidRet',
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
        $this->values[self::NBIDID] = null;
        $this->values[self::NPRICE] = null;
        $this->values[self::BIDRET] = self::$fields[self::BIDRET]['default'];
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
     * Sets value of 'nBidID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBidID($value)
    {
        return $this->set(self::NBIDID, $value);
    }

    /**
     * Returns value of 'nBidID' property
     *
     * @return integer
     */
    public function getNBidID()
    {
        $value = $this->get(self::NBIDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBidID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBidID()
    {
        return $this->get(self::NBIDID) !== null;
    }

    /**
     * Sets value of 'nPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrice($value)
    {
        return $this->set(self::NPRICE, $value);
    }

    /**
     * Returns value of 'nPrice' property
     *
     * @return integer
     */
    public function getNPrice()
    {
        $value = $this->get(self::NPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrice()
    {
        return $this->get(self::NPRICE) !== null;
    }

    /**
     * Sets value of 'bidRet' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBidRet($value)
    {
        return $this->set(self::BIDRET, $value);
    }

    /**
     * Returns value of 'bidRet' property
     *
     * @return integer
     */
    public function getBidRet()
    {
        $value = $this->get(self::BIDRET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bidRet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBidRet()
    {
        return $this->get(self::BIDRET) !== null;
    }
}
}