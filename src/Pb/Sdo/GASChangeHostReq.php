<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASChangeHostReq message
 */
class GASChangeHostReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NNEWHOSTID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWHOSTID => array(
            'name' => 'nNewHostID',
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
        $this->values[self::NNEWHOSTID] = null;
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
     * Sets value of 'nNewHostID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewHostID($value)
    {
        return $this->set(self::NNEWHOSTID, $value);
    }

    /**
     * Returns value of 'nNewHostID' property
     *
     * @return integer
     */
    public function getNNewHostID()
    {
        $value = $this->get(self::NNEWHOSTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewHostID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewHostID()
    {
        return $this->get(self::NNEWHOSTID) !== null;
    }
}
}