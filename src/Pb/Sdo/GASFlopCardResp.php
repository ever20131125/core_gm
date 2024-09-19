<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASFlopCardResp message
 */
class GASFlopCardResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NCARDID = 3;
    const STITEMBASE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCARDID => array(
            'name' => 'nCardID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STITEMBASE => array(
            'name' => 'stItembase',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NCARDID] = null;
        $this->values[self::STITEMBASE] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'nCardID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCardID($value)
    {
        return $this->set(self::NCARDID, $value);
    }

    /**
     * Returns value of 'nCardID' property
     *
     * @return integer
     */
    public function getNCardID()
    {
        $value = $this->get(self::NCARDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCardID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCardID()
    {
        return $this->get(self::NCARDID) !== null;
    }

    /**
     * Sets value of 'stItembase' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStItembase(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STITEMBASE, $value);
    }

    /**
     * Returns value of 'stItembase' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStItembase()
    {
        return $this->get(self::STITEMBASE);
    }

    /**
     * Returns true if 'stItembase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStItembase()
    {
        return $this->get(self::STITEMBASE) !== null;
    }
}
}