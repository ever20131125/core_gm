<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WorkRecord message
 */
class WorkRecord extends \ProtobufMessage
{
    /* Field index constants */
    const NWORKID = 1;
    const NROLEID = 2;
    const NSTARS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWORKID => array(
            'name' => 'nWorkID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARS => array(
            'name' => 'nStars',
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
        $this->values[self::NWORKID] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NSTARS] = null;
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
     * Sets value of 'nWorkID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWorkID($value)
    {
        return $this->set(self::NWORKID, $value);
    }

    /**
     * Returns value of 'nWorkID' property
     *
     * @return integer
     */
    public function getNWorkID()
    {
        $value = $this->get(self::NWORKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWorkID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWorkID()
    {
        return $this->get(self::NWORKID) !== null;
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
     * Sets value of 'nStars' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStars($value)
    {
        return $this->set(self::NSTARS, $value);
    }

    /**
     * Returns value of 'nStars' property
     *
     * @return integer
     */
    public function getNStars()
    {
        $value = $this->get(self::NSTARS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStars' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStars()
    {
        return $this->get(self::NSTARS) !== null;
    }
}
}