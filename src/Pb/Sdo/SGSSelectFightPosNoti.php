<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSSelectFightPosNoti message
 */
class SGSSelectFightPosNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NFIGHTPOS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFIGHTPOS => array(
            'name' => 'nFightPos',
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
        $this->values[self::NFIGHTPOS] = null;
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
     * Sets value of 'nFightPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFightPos($value)
    {
        return $this->set(self::NFIGHTPOS, $value);
    }

    /**
     * Returns value of 'nFightPos' property
     *
     * @return integer
     */
    public function getNFightPos()
    {
        $value = $this->get(self::NFIGHTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFightPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFightPos()
    {
        return $this->get(self::NFIGHTPOS) !== null;
    }
}
}