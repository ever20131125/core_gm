<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ExchangeInfo message
 */
class ExchangeInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NTHEME = 1;
    const NID = 2;
    const NITEMID = 3;
    const NQUANTITY = 4;
    const STITEMGAIN = 5;
    const NREQLEVEL = 6;
    const NREQTITLE = 7;
    const NSEASONLIMIT = 8;
    const NWEEKLIMIT = 9;
    const NDAYLIMIT = 10;
    const NLIMIT = 11;
    const NRESET = 12;
    const NSTARTTIME = 13;
    const NENDTIME = 14;
    const NSHOWPRICE = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTHEME => array(
            'name' => 'nTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STITEMGAIN => array(
            'name' => 'stItemGain',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
        ),
        self::NREQLEVEL => array(
            'name' => 'nReqLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NREQTITLE => array(
            'name' => 'nReqTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSEASONLIMIT => array(
            'name' => 'nSeasonLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWEEKLIMIT => array(
            'name' => 'nWeekLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDAYLIMIT => array(
            'name' => 'nDayLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIMIT => array(
            'name' => 'nLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRESET => array(
            'name' => 'nReset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSHOWPRICE => array(
            'name' => 'nShowPrice',
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
        $this->values[self::NTHEME] = null;
        $this->values[self::NID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::STITEMGAIN] = null;
        $this->values[self::NREQLEVEL] = null;
        $this->values[self::NREQTITLE] = null;
        $this->values[self::NSEASONLIMIT] = null;
        $this->values[self::NWEEKLIMIT] = null;
        $this->values[self::NDAYLIMIT] = null;
        $this->values[self::NLIMIT] = null;
        $this->values[self::NRESET] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NSHOWPRICE] = null;
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
     * Sets value of 'nTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTheme($value)
    {
        return $this->set(self::NTHEME, $value);
    }

    /**
     * Returns value of 'nTheme' property
     *
     * @return integer
     */
    public function getNTheme()
    {
        $value = $this->get(self::NTHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTheme()
    {
        return $this->get(self::NTHEME) !== null;
    }

    /**
     * Sets value of 'nID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNID($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nID' property
     *
     * @return integer
     */
    public function getNID()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNID()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
    }

    /**
     * Sets value of 'stItemGain' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Property value
     *
     * @return null
     */
    public function setStItemGain(\Xnhd\Core\Pb\Sdo\ItemGained $value=null)
    {
        return $this->set(self::STITEMGAIN, $value);
    }

    /**
     * Returns value of 'stItemGain' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
     */
    public function getStItemGain()
    {
        return $this->get(self::STITEMGAIN);
    }

    /**
     * Returns true if 'stItemGain' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStItemGain()
    {
        return $this->get(self::STITEMGAIN) !== null;
    }

    /**
     * Sets value of 'nReqLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNReqLevel($value)
    {
        return $this->set(self::NREQLEVEL, $value);
    }

    /**
     * Returns value of 'nReqLevel' property
     *
     * @return integer
     */
    public function getNReqLevel()
    {
        $value = $this->get(self::NREQLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nReqLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNReqLevel()
    {
        return $this->get(self::NREQLEVEL) !== null;
    }

    /**
     * Sets value of 'nReqTitle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNReqTitle($value)
    {
        return $this->set(self::NREQTITLE, $value);
    }

    /**
     * Returns value of 'nReqTitle' property
     *
     * @return integer
     */
    public function getNReqTitle()
    {
        $value = $this->get(self::NREQTITLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nReqTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNReqTitle()
    {
        return $this->get(self::NREQTITLE) !== null;
    }

    /**
     * Sets value of 'nSeasonLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSeasonLimit($value)
    {
        return $this->set(self::NSEASONLIMIT, $value);
    }

    /**
     * Returns value of 'nSeasonLimit' property
     *
     * @return integer
     */
    public function getNSeasonLimit()
    {
        $value = $this->get(self::NSEASONLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSeasonLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSeasonLimit()
    {
        return $this->get(self::NSEASONLIMIT) !== null;
    }

    /**
     * Sets value of 'nWeekLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeekLimit($value)
    {
        return $this->set(self::NWEEKLIMIT, $value);
    }

    /**
     * Returns value of 'nWeekLimit' property
     *
     * @return integer
     */
    public function getNWeekLimit()
    {
        $value = $this->get(self::NWEEKLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeekLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeekLimit()
    {
        return $this->get(self::NWEEKLIMIT) !== null;
    }

    /**
     * Sets value of 'nDayLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDayLimit($value)
    {
        return $this->set(self::NDAYLIMIT, $value);
    }

    /**
     * Returns value of 'nDayLimit' property
     *
     * @return integer
     */
    public function getNDayLimit()
    {
        $value = $this->get(self::NDAYLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDayLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDayLimit()
    {
        return $this->get(self::NDAYLIMIT) !== null;
    }

    /**
     * Sets value of 'nLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLimit($value)
    {
        return $this->set(self::NLIMIT, $value);
    }

    /**
     * Returns value of 'nLimit' property
     *
     * @return integer
     */
    public function getNLimit()
    {
        $value = $this->get(self::NLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLimit()
    {
        return $this->get(self::NLIMIT) !== null;
    }

    /**
     * Sets value of 'nReset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNReset($value)
    {
        return $this->set(self::NRESET, $value);
    }

    /**
     * Returns value of 'nReset' property
     *
     * @return integer
     */
    public function getNReset()
    {
        $value = $this->get(self::NRESET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nReset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNReset()
    {
        return $this->get(self::NRESET) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nShowPrice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShowPrice($value)
    {
        return $this->set(self::NSHOWPRICE, $value);
    }

    /**
     * Returns value of 'nShowPrice' property
     *
     * @return integer
     */
    public function getNShowPrice()
    {
        $value = $this->get(self::NSHOWPRICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShowPrice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShowPrice()
    {
        return $this->get(self::NSHOWPRICE) !== null;
    }
}
}