<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetAuctionRecordReq message
 */
class CDSGetAuctionRecordReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SALEORBUY = 2;
    const NSTARTIDX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SALEORBUY => array(
            'name' => 'saleOrBuy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTIDX => array(
            'name' => 'nStartIdx',
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
        $this->values[self::SALEORBUY] = null;
        $this->values[self::NSTARTIDX] = null;
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
     * Sets value of 'saleOrBuy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSaleOrBuy($value)
    {
        return $this->set(self::SALEORBUY, $value);
    }

    /**
     * Returns value of 'saleOrBuy' property
     *
     * @return integer
     */
    public function getSaleOrBuy()
    {
        $value = $this->get(self::SALEORBUY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'saleOrBuy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSaleOrBuy()
    {
        return $this->get(self::SALEORBUY) !== null;
    }

    /**
     * Sets value of 'nStartIdx' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartIdx($value)
    {
        return $this->set(self::NSTARTIDX, $value);
    }

    /**
     * Returns value of 'nStartIdx' property
     *
     * @return integer
     */
    public function getNStartIdx()
    {
        $value = $this->get(self::NSTARTIDX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartIdx' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartIdx()
    {
        return $this->get(self::NSTARTIDX) !== null;
    }
}
}