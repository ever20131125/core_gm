<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzlePartEvent message
 */
class PuzzlePartEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NALLCNT = 2;
    const NPARTID = 3;
    const NADDCNT = 4;
    const SOURCECHANNEL = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NALLCNT => array(
            'name' => 'nAllCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPARTID => array(
            'name' => 'nPartID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NADDCNT => array(
            'name' => 'nAddCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCECHANNEL => array(
            'name' => 'sourceChannel',
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
        $this->values[self::NALLCNT] = null;
        $this->values[self::NPARTID] = null;
        $this->values[self::NADDCNT] = null;
        $this->values[self::SOURCECHANNEL] = null;
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
     * Sets value of 'nAllCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAllCnt($value)
    {
        return $this->set(self::NALLCNT, $value);
    }

    /**
     * Returns value of 'nAllCnt' property
     *
     * @return integer
     */
    public function getNAllCnt()
    {
        $value = $this->get(self::NALLCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAllCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAllCnt()
    {
        return $this->get(self::NALLCNT) !== null;
    }

    /**
     * Sets value of 'nPartID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPartID($value)
    {
        return $this->set(self::NPARTID, $value);
    }

    /**
     * Returns value of 'nPartID' property
     *
     * @return integer
     */
    public function getNPartID()
    {
        $value = $this->get(self::NPARTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPartID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPartID()
    {
        return $this->get(self::NPARTID) !== null;
    }

    /**
     * Sets value of 'nAddCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAddCnt($value)
    {
        return $this->set(self::NADDCNT, $value);
    }

    /**
     * Returns value of 'nAddCnt' property
     *
     * @return integer
     */
    public function getNAddCnt()
    {
        $value = $this->get(self::NADDCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAddCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAddCnt()
    {
        return $this->get(self::NADDCNT) !== null;
    }

    /**
     * Sets value of 'sourceChannel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceChannel($value)
    {
        return $this->set(self::SOURCECHANNEL, $value);
    }

    /**
     * Returns value of 'sourceChannel' property
     *
     * @return integer
     */
    public function getSourceChannel()
    {
        $value = $this->get(self::SOURCECHANNEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceChannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceChannel()
    {
        return $this->get(self::SOURCECHANNEL) !== null;
    }
}
}