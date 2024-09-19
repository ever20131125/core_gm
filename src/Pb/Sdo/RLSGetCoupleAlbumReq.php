<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleAlbumReq message
 */
class RLSGetCoupleAlbumReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NMONTHID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
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
        $this->values[self::NROLEID] = null;
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