<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSGetBanListReq message
 */
class CHSGetBanListReq extends \ProtobufMessage
{
    /* Field index constants */
    const BANTYPE = 1;
    const NZONEID = 2;
    const NSTARTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BANTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BanType::enmBanType_None,
            'name' => 'banType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTID => array(
            'name' => 'nStartID',
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
        $this->values[self::BANTYPE] = self::$fields[self::BANTYPE]['default'];
        $this->values[self::NZONEID] = null;
        $this->values[self::NSTARTID] = null;
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
     * Sets value of 'banType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBanType($value)
    {
        return $this->set(self::BANTYPE, $value);
    }

    /**
     * Returns value of 'banType' property
     *
     * @return integer
     */
    public function getBanType()
    {
        $value = $this->get(self::BANTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'banType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBanType()
    {
        return $this->get(self::BANTYPE) !== null;
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
     * Sets value of 'nStartID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartID($value)
    {
        return $this->set(self::NSTARTID, $value);
    }

    /**
     * Returns value of 'nStartID' property
     *
     * @return integer
     */
    public function getNStartID()
    {
        $value = $this->get(self::NSTARTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartID()
    {
        return $this->get(self::NSTARTID) !== null;
    }
}
}