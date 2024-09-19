<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyHistoryReq message
 */
class SGSQualifyHistoryReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NSTARTIDEX = 2;
    const NENDIDEX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTIDEX => array(
            'name' => 'nStartIdex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDIDEX => array(
            'name' => 'nEndIdex',
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
        $this->values[self::NSTARTIDEX] = null;
        $this->values[self::NENDIDEX] = null;
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
     * Sets value of 'nStartIdex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartIdex($value)
    {
        return $this->set(self::NSTARTIDEX, $value);
    }

    /**
     * Returns value of 'nStartIdex' property
     *
     * @return integer
     */
    public function getNStartIdex()
    {
        $value = $this->get(self::NSTARTIDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartIdex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartIdex()
    {
        return $this->get(self::NSTARTIDEX) !== null;
    }

    /**
     * Sets value of 'nEndIdex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndIdex($value)
    {
        return $this->set(self::NENDIDEX, $value);
    }

    /**
     * Returns value of 'nEndIdex' property
     *
     * @return integer
     */
    public function getNEndIdex()
    {
        $value = $this->get(self::NENDIDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndIdex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndIdex()
    {
        return $this->get(self::NENDIDEX) !== null;
    }
}
}