<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleCupInfo message
 */
class RoleCupInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NMUSICID = 1;
    const NCUPID = 2;
    const NCUPNUM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUPID => array(
            'name' => 'nCupID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUPNUM => array(
            'name' => 'nCupNum',
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
        $this->values[self::NMUSICID] = null;
        $this->values[self::NCUPID] = null;
        $this->values[self::NCUPNUM] = null;
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
     * Sets value of 'nMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicID($value)
    {
        return $this->set(self::NMUSICID, $value);
    }

    /**
     * Returns value of 'nMusicID' property
     *
     * @return integer
     */
    public function getNMusicID()
    {
        $value = $this->get(self::NMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicID()
    {
        return $this->get(self::NMUSICID) !== null;
    }

    /**
     * Sets value of 'nCupID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupID($value)
    {
        return $this->set(self::NCUPID, $value);
    }

    /**
     * Returns value of 'nCupID' property
     *
     * @return integer
     */
    public function getNCupID()
    {
        $value = $this->get(self::NCUPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupID()
    {
        return $this->get(self::NCUPID) !== null;
    }

    /**
     * Sets value of 'nCupNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupNum($value)
    {
        return $this->set(self::NCUPNUM, $value);
    }

    /**
     * Returns value of 'nCupNum' property
     *
     * @return integer
     */
    public function getNCupNum()
    {
        $value = $this->get(self::NCUPNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupNum()
    {
        return $this->get(self::NCUPNUM) !== null;
    }
}
}