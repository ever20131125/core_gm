<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSSetZoneStateReq message
 */
class COSSetZoneStateReq extends \ProtobufMessage
{
    /* Field index constants */
    const ZONESTATE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ZONESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ZoneState::enmZoneState_Normal,
            'name' => 'zoneState',
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
        $this->values[self::ZONESTATE] = self::$fields[self::ZONESTATE]['default'];
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
     * Sets value of 'zoneState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneState($value)
    {
        return $this->set(self::ZONESTATE, $value);
    }

    /**
     * Returns value of 'zoneState' property
     *
     * @return integer
     */
    public function getZoneState()
    {
        $value = $this->get(self::ZONESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneState()
    {
        return $this->get(self::ZONESTATE) !== null;
    }
}
}