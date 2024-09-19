<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CupRankEvent message
 */
class CupRankEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NALLRANK = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NALLRANK => array(
            'name' => 'nAllRank',
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
        $this->values[self::NALLRANK] = null;
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
     * Sets value of 'nAllRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAllRank($value)
    {
        return $this->set(self::NALLRANK, $value);
    }

    /**
     * Returns value of 'nAllRank' property
     *
     * @return integer
     */
    public function getNAllRank()
    {
        $value = $this->get(self::NALLRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAllRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAllRank()
    {
        return $this->get(self::NALLRANK) !== null;
    }
}
}