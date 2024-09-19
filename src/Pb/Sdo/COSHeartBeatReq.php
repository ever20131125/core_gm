<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSHeartBeatReq message
 */
class COSHeartBeatReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZACCOUNTID = 1;
    const NZONEID = 2;
    const FLONGITUDE = 3;
    const FLATITUDE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::FLONGITUDE => array(
            'name' => 'fLongitude',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::FLATITUDE => array(
            'name' => 'fLatitude',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::FLONGITUDE] = null;
        $this->values[self::FLATITUDE] = null;
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
     * Sets value of 'fLongitude' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setFLongitude($value)
    {
        return $this->set(self::FLONGITUDE, $value);
    }

    /**
     * Returns value of 'fLongitude' property
     *
     * @return double
     */
    public function getFLongitude()
    {
        $value = $this->get(self::FLONGITUDE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'fLongitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFLongitude()
    {
        return $this->get(self::FLONGITUDE) !== null;
    }

    /**
     * Sets value of 'fLatitude' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setFLatitude($value)
    {
        return $this->set(self::FLATITUDE, $value);
    }

    /**
     * Returns value of 'fLatitude' property
     *
     * @return double
     */
    public function getFLatitude()
    {
        $value = $this->get(self::FLATITUDE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'fLatitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFLatitude()
    {
        return $this->get(self::FLATITUDE) !== null;
    }
}
}