<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleDiaryStatInfo message
 */
class CoupleDiaryStatInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NDATEID = 1;
    const NSTATINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NDATEID => array(
            'name' => 'nDateID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTATINFO => array(
            'name' => 'nStatInfo',
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
        $this->values[self::NDATEID] = null;
        $this->values[self::NSTATINFO] = null;
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
     * Sets value of 'nDateID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDateID($value)
    {
        return $this->set(self::NDATEID, $value);
    }

    /**
     * Returns value of 'nDateID' property
     *
     * @return integer
     */
    public function getNDateID()
    {
        $value = $this->get(self::NDATEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDateID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDateID()
    {
        return $this->get(self::NDATEID) !== null;
    }

    /**
     * Sets value of 'nStatInfo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStatInfo($value)
    {
        return $this->set(self::NSTATINFO, $value);
    }

    /**
     * Returns value of 'nStatInfo' property
     *
     * @return integer
     */
    public function getNStatInfo()
    {
        $value = $this->get(self::NSTATINFO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStatInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStatInfo()
    {
        return $this->get(self::NSTATINFO) !== null;
    }
}
}