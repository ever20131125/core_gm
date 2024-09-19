<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetChestReq message
 */
class GASGetChestReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const CHESTTYPE = 2;
    const NID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHESTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChestType::enmChest_SmallGame,
            'name' => 'chestType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NID => array(
            'name' => 'nID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::CHESTTYPE] = self::$fields[self::CHESTTYPE]['default'];
        $this->values[self::NID] = null;
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
     * Sets value of 'chestType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChestType($value)
    {
        return $this->set(self::CHESTTYPE, $value);
    }

    /**
     * Returns value of 'chestType' property
     *
     * @return integer
     */
    public function getChestType()
    {
        $value = $this->get(self::CHESTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chestType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChestType()
    {
        return $this->get(self::CHESTTYPE) !== null;
    }

    /**
     * Sets value of 'nID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNID($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nID' property
     *
     * @return integer
     */
    public function getNID()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNID()
    {
        return $this->get(self::NID) !== null;
    }
}
}