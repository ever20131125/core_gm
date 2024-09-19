<?php
/**
 * Auto generated from gameserver.proto at 2022-06-19 02:07:56
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASBarrageReq message
 */
class GASBarrageReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STBARRAGEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STBARRAGEINFO => array(
            'name' => 'stBarrageInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\BarrageInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STBARRAGEINFO] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'stBarrageInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\BarrageInfo $value Property value
     *
     * @return null
     */
    public function setStBarrageInfo(\Xnhd\Core\Pb\Sdo\BarrageInfo $value=null)
    {
        return $this->set(self::STBARRAGEINFO, $value);
    }

    /**
     * Returns value of 'stBarrageInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\BarrageInfo
     */
    public function getStBarrageInfo()
    {
        return $this->get(self::STBARRAGEINFO);
    }

    /**
     * Returns true if 'stBarrageInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBarrageInfo()
    {
        return $this->get(self::STBARRAGEINFO) !== null;
    }
}
}