<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GardenWaterEvent message
 */
class GardenWaterEvent extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const AIMID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AIMID => array(
            'name' => 'aimid',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::AIMID] = null;
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
     * Sets value of 'roleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleid($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleid' property
     *
     * @return integer
     */
    public function getRoleid()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleid()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'aimid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAimid($value)
    {
        return $this->set(self::AIMID, $value);
    }

    /**
     * Returns value of 'aimid' property
     *
     * @return integer
     */
    public function getAimid()
    {
        $value = $this->get(self::AIMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'aimid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAimid()
    {
        return $this->get(self::AIMID) !== null;
    }
}
}