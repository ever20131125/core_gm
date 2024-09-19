<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleItemStage message
 */
class RoleItemStage extends \ProtobufMessage
{
    /* Field index constants */
    const NPOSID = 1;
    const NENDTIME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NPOSID => array(
            'name' => 'nPosID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
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
        $this->values[self::NPOSID] = null;
        $this->values[self::NENDTIME] = null;
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
     * Sets value of 'nPosID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosID($value)
    {
        return $this->set(self::NPOSID, $value);
    }

    /**
     * Returns value of 'nPosID' property
     *
     * @return integer
     */
    public function getNPosID()
    {
        $value = $this->get(self::NPOSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosID()
    {
        return $this->get(self::NPOSID) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }
}
}