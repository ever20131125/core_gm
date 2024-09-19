<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BannerInfo message
 */
class BannerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STARTTIME = 1;
    const ENDTIME = 2;
    const BANNER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STARTTIME => array(
            'name' => 'startTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDTIME => array(
            'name' => 'endTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BANNER => array(
            'name' => 'banner',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\BannerUnit'
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
        $this->values[self::STARTTIME] = null;
        $this->values[self::ENDTIME] = null;
        $this->values[self::BANNER] = null;
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
     * Sets value of 'startTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartTime($value)
    {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return integer
     */
    public function getStartTime()
    {
        $value = $this->get(self::STARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartTime()
    {
        return $this->get(self::STARTTIME) !== null;
    }

    /**
     * Sets value of 'endTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndTime($value)
    {
        return $this->set(self::ENDTIME, $value);
    }

    /**
     * Returns value of 'endTime' property
     *
     * @return integer
     */
    public function getEndTime()
    {
        $value = $this->get(self::ENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'endTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndTime()
    {
        return $this->get(self::ENDTIME) !== null;
    }

    /**
     * Sets value of 'banner' property
     *
     * @param \Xnhd\Core\Pb\Sdo\BannerUnit $value Property value
     *
     * @return null
     */
    public function setBanner(\Xnhd\Core\Pb\Sdo\BannerUnit $value=null)
    {
        return $this->set(self::BANNER, $value);
    }

    /**
     * Returns value of 'banner' property
     *
     * @return \Xnhd\Core\Pb\Sdo\BannerUnit
     */
    public function getBanner()
    {
        return $this->get(self::BANNER);
    }

    /**
     * Returns true if 'banner' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBanner()
    {
        return $this->get(self::BANNER) !== null;
    }
}
}