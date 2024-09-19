<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSAskChangePosReq message
 */
class SGSAskChangePosReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPOSID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSID => array(
            'name' => 'nPosID',
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
        $this->values[self::NPOSID] = null;
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
}
}