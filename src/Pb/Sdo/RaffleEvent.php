<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RaffleEvent message
 */
class RaffleEvent extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const SOURCE = 2;
    const RAFFLEID = 3;
    const NTIMES = 4;
    const NBIGPRIZECOUNT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RAFFLEID => array(
            'name' => 'raffleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMES => array(
            'name' => 'nTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBIGPRIZECOUNT => array(
            'name' => 'nBigPrizeCount',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::RAFFLEID] = null;
        $this->values[self::NTIMES] = null;
        $this->values[self::NBIGPRIZECOUNT] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'raffleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRaffleID($value)
    {
        return $this->set(self::RAFFLEID, $value);
    }

    /**
     * Returns value of 'raffleID' property
     *
     * @return integer
     */
    public function getRaffleID()
    {
        $value = $this->get(self::RAFFLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'raffleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRaffleID()
    {
        return $this->get(self::RAFFLEID) !== null;
    }

    /**
     * Sets value of 'nTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimes($value)
    {
        return $this->set(self::NTIMES, $value);
    }

    /**
     * Returns value of 'nTimes' property
     *
     * @return integer
     */
    public function getNTimes()
    {
        $value = $this->get(self::NTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimes()
    {
        return $this->get(self::NTIMES) !== null;
    }

    /**
     * Sets value of 'nBigPrizeCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBigPrizeCount($value)
    {
        return $this->set(self::NBIGPRIZECOUNT, $value);
    }

    /**
     * Returns value of 'nBigPrizeCount' property
     *
     * @return integer
     */
    public function getNBigPrizeCount()
    {
        $value = $this->get(self::NBIGPRIZECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBigPrizeCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBigPrizeCount()
    {
        return $this->get(self::NBIGPRIZECOUNT) !== null;
    }
}
}