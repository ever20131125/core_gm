<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RecommendateInfo message
 */
class RecommendateInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NACTID = 1;
    const SZURL = 2;
    const NSTARTTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NACTID => array(
            'name' => 'nActID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZURL => array(
            'name' => 'szUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
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
        $this->values[self::NACTID] = null;
        $this->values[self::SZURL] = null;
        $this->values[self::NSTARTTIME] = null;
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
}
}