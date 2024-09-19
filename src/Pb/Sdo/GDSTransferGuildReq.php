<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSTransferGuildReq message
 */
class GDSTransferGuildReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ENABLE = 2;
    const TRANSFERREDID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENABLE => array(
            'name' => 'enable',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::TRANSFERREDID => array(
            'name' => 'transferredID',
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
        $this->values[self::ENABLE] = null;
        $this->values[self::TRANSFERREDID] = null;
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
     * Sets value of 'enable' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEnable($value)
    {
        return $this->set(self::ENABLE, $value);
    }

    /**
     * Returns value of 'enable' property
     *
     * @return boolean
     */
    public function getEnable()
    {
        $value = $this->get(self::ENABLE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'enable' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnable()
    {
        return $this->get(self::ENABLE) !== null;
    }

    /**
     * Sets value of 'transferredID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTransferredID($value)
    {
        return $this->set(self::TRANSFERREDID, $value);
    }

    /**
     * Returns value of 'transferredID' property
     *
     * @return integer
     */
    public function getTransferredID()
    {
        $value = $this->get(self::TRANSFERREDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'transferredID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTransferredID()
    {
        return $this->get(self::TRANSFERREDID) !== null;
    }
}
}