<?php
/**
 * Auto generated from relationserver.proto at 2021-10-26 06:02:40
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleDiaryStatInfoReq message
 */
class RLSGetCoupleDiaryStatInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const NCOUPLEID = 1;
    const NMONTHID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCOUPLEID => array(
            'name' => 'nCoupleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONTHID => array(
            'name' => 'nMonthID',
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
        $this->values[self::NCOUPLEID] = null;
        $this->values[self::NMONTHID] = null;
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
     * Sets value of 'nCoupleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCoupleID($value)
    {
        return $this->set(self::NCOUPLEID, $value);
    }

    /**
     * Returns value of 'nCoupleID' property
     *
     * @return integer
     */
    public function getNCoupleID()
    {
        $value = $this->get(self::NCOUPLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCoupleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCoupleID()
    {
        return $this->get(self::NCOUPLEID) !== null;
    }

    /**
     * Sets value of 'nMonthID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMonthID($value)
    {
        return $this->set(self::NMONTHID, $value);
    }

    /**
     * Returns value of 'nMonthID' property
     *
     * @return integer
     */
    public function getNMonthID()
    {
        $value = $this->get(self::NMONTHID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMonthID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMonthID()
    {
        return $this->get(self::NMONTHID) !== null;
    }
}
}