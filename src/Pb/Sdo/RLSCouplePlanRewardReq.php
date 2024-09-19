<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCouplePlanRewardReq message
 */
class RLSCouplePlanRewardReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const BISCOMMON = 2;
    const NINDEX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BISCOMMON => array(
            'name' => 'bIsCommon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NINDEX => array(
            'name' => 'nIndex',
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
        $this->values[self::BISCOMMON] = null;
        $this->values[self::NINDEX] = null;
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
     * Sets value of 'bIsCommon' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBIsCommon($value)
    {
        return $this->set(self::BISCOMMON, $value);
    }

    /**
     * Returns value of 'bIsCommon' property
     *
     * @return boolean
     */
    public function getBIsCommon()
    {
        $value = $this->get(self::BISCOMMON);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bIsCommon' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBIsCommon()
    {
        return $this->get(self::BISCOMMON) !== null;
    }

    /**
     * Sets value of 'nIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIndex($value)
    {
        return $this->set(self::NINDEX, $value);
    }

    /**
     * Returns value of 'nIndex' property
     *
     * @return integer
     */
    public function getNIndex()
    {
        $value = $this->get(self::NINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIndex()
    {
        return $this->get(self::NINDEX) !== null;
    }
}
}