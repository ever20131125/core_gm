<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CouplesSkill message
 */
class CouplesSkill extends \ProtobufMessage
{
    /* Field index constants */
    const ITEMINSID = 1;
    const ITEMID = 2;
    const EFFECTENDTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEMINSID => array(
            'name' => 'itemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMID => array(
            'name' => 'itemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EFFECTENDTIME => array(
            'name' => 'effectEndTime',
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
        $this->values[self::ITEMINSID] = null;
        $this->values[self::ITEMID] = null;
        $this->values[self::EFFECTENDTIME] = null;
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
     * Sets value of 'itemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemInsID($value)
    {
        return $this->set(self::ITEMINSID, $value);
    }

    /**
     * Returns value of 'itemInsID' property
     *
     * @return integer
     */
    public function getItemInsID()
    {
        $value = $this->get(self::ITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'itemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemInsID()
    {
        return $this->get(self::ITEMINSID) !== null;
    }

    /**
     * Sets value of 'itemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemID($value)
    {
        return $this->set(self::ITEMID, $value);
    }

    /**
     * Returns value of 'itemID' property
     *
     * @return integer
     */
    public function getItemID()
    {
        $value = $this->get(self::ITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'itemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemID()
    {
        return $this->get(self::ITEMID) !== null;
    }

    /**
     * Sets value of 'effectEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEffectEndTime($value)
    {
        return $this->set(self::EFFECTENDTIME, $value);
    }

    /**
     * Returns value of 'effectEndTime' property
     *
     * @return integer
     */
    public function getEffectEndTime()
    {
        $value = $this->get(self::EFFECTENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'effectEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEffectEndTime()
    {
        return $this->get(self::EFFECTENDTIME) !== null;
    }
}
}