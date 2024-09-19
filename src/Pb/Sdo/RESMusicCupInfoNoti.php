<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESMusicCupInfoNoti message
 */
class RESMusicCupInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const MUSICID = 2;
    const CUPINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MUSICID => array(
            'name' => 'musicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CUPINFO => array(
            'name' => 'cupInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CupInfo'
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
        $this->values[self::MUSICID] = null;
        $this->values[self::CUPINFO] = null;
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
     * Sets value of 'musicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMusicID($value)
    {
        return $this->set(self::MUSICID, $value);
    }

    /**
     * Returns value of 'musicID' property
     *
     * @return integer
     */
    public function getMusicID()
    {
        $value = $this->get(self::MUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'musicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMusicID()
    {
        return $this->get(self::MUSICID) !== null;
    }

    /**
     * Sets value of 'cupInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CupInfo $value Property value
     *
     * @return null
     */
    public function setCupInfo(\Xnhd\Core\Pb\Sdo\CupInfo $value=null)
    {
        return $this->set(self::CUPINFO, $value);
    }

    /**
     * Returns value of 'cupInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CupInfo
     */
    public function getCupInfo()
    {
        return $this->get(self::CUPINFO);
    }

    /**
     * Returns true if 'cupInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCupInfo()
    {
        return $this->get(self::CUPINFO) !== null;
    }
}
}