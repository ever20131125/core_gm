<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSDeleteDiaryReq message
 */
class RLSDeleteDiaryReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NDATEID = 2;
    const NDIARYID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDATEID => array(
            'name' => 'nDateID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDIARYID => array(
            'name' => 'nDiaryID',
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
        $this->values[self::NDATEID] = null;
        $this->values[self::NDIARYID] = null;
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
     * Sets value of 'nDateID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDateID($value)
    {
        return $this->set(self::NDATEID, $value);
    }

    /**
     * Returns value of 'nDateID' property
     *
     * @return integer
     */
    public function getNDateID()
    {
        $value = $this->get(self::NDATEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDateID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDateID()
    {
        return $this->get(self::NDATEID) !== null;
    }

    /**
     * Sets value of 'nDiaryID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDiaryID($value)
    {
        return $this->set(self::NDIARYID, $value);
    }

    /**
     * Returns value of 'nDiaryID' property
     *
     * @return integer
     */
    public function getNDiaryID()
    {
        $value = $this->get(self::NDIARYID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDiaryID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDiaryID()
    {
        return $this->get(self::NDIARYID) !== null;
    }
}
}