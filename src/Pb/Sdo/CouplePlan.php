<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CouplePlan message
 */
class CouplePlan extends \ProtobufMessage
{
    /* Field index constants */
    const BISCOMMON = 1;
    const NINDEX = 2;
    const STATUS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BISCOMMON => array(
            'name' => 'bIsCommon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NINDEX => array(
            'name' => 'nIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeStatus::enmPrizeStatus_UnReceive,
            'name' => 'status',
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
        $this->values[self::BISCOMMON] = null;
        $this->values[self::NINDEX] = null;
        $this->values[self::STATUS] = self::$fields[self::STATUS]['default'];
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
     * Sets value of 'bIsCommon' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBIsCommon($value)
    {
        return $this->set(self::BISCOMMON, $value);
    }

    /**
     * Returns value of 'bIsCommon' property
     *
     * @return boolean
     */
    public function getBIsCommon()
    {
        $value = $this->get(self::BISCOMMON);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bIsCommon' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBIsCommon()
    {
        return $this->get(self::BISCOMMON) !== null;
    }

    /**
     * Sets value of 'nIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIndex($value)
    {
        return $this->set(self::NINDEX, $value);
    }

    /**
     * Returns value of 'nIndex' property
     *
     * @return integer
     */
    public function getNIndex()
    {
        $value = $this->get(self::NINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIndex()
    {
        return $this->get(self::NINDEX) !== null;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }
}
}