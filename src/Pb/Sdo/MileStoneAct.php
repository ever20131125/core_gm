<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MileStoneAct message
 */
class MileStoneAct extends \ProtobufMessage
{
    /* Field index constants */
    const NACTDAYID = 1;
    const NACTID = 2;
    const SZURL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NACTDAYID => array(
            'name' => 'nActDayID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NACTID => array(
            'name' => 'nActID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SZURL => array(
            'name' => 'szUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NACTDAYID] = null;
        $this->values[self::NACTID] = null;
        $this->values[self::SZURL] = null;
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
     * Sets value of 'nActDayID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActDayID($value)
    {
        return $this->set(self::NACTDAYID, $value);
    }

    /**
     * Returns value of 'nActDayID' property
     *
     * @return integer
     */
    public function getNActDayID()
    {
        $value = $this->get(self::NACTDAYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActDayID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActDayID()
    {
        return $this->get(self::NACTDAYID) !== null;
    }

    /**
     * Sets value of 'nActID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActID($value)
    {
        return $this->set(self::NACTID, $value);
    }

    /**
     * Returns value of 'nActID' property
     *
     * @return integer
     */
    public function getNActID()
    {
        $value = $this->get(self::NACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActID()
    {
        return $this->get(self::NACTID) !== null;
    }

    /**
     * Sets value of 'szUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzUrl($value)
    {
        return $this->set(self::SZURL, $value);
    }

    /**
     * Returns value of 'szUrl' property
     *
     * @return string
     */
    public function getSzUrl()
    {
        $value = $this->get(self::SZURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzUrl()
    {
        return $this->get(self::SZURL) !== null;
    }
}
}