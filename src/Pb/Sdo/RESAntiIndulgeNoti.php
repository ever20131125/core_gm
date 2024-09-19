<?php
/**
 * Auto generated from recordserver.proto at 2021-10-26 06:02:43
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESAntiIndulgeNoti message
 */
class RESAntiIndulgeNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const INDULGELEVEL = 2;
    const ONLINETIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INDULGELEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\IndulgeLevel::enmIndulgeLevel_None,
            'name' => 'indulgeLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLINETIME => array(
            'name' => 'onlineTime',
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
        $this->values[self::INDULGELEVEL] = self::$fields[self::INDULGELEVEL]['default'];
        $this->values[self::ONLINETIME] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'indulgeLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndulgeLevel($value)
    {
        return $this->set(self::INDULGELEVEL, $value);
    }

    /**
     * Returns value of 'indulgeLevel' property
     *
     * @return integer
     */
    public function getIndulgeLevel()
    {
        $value = $this->get(self::INDULGELEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'indulgeLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIndulgeLevel()
    {
        return $this->get(self::INDULGELEVEL) !== null;
    }

    /**
     * Sets value of 'onlineTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineTime($value)
    {
        return $this->set(self::ONLINETIME, $value);
    }

    /**
     * Returns value of 'onlineTime' property
     *
     * @return integer
     */
    public function getOnlineTime()
    {
        $value = $this->get(self::ONLINETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineTime()
    {
        return $this->get(self::ONLINETIME) !== null;
    }
}
}