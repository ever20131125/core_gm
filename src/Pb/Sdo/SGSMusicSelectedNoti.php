<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSMusicSelectedNoti message
 */
class SGSMusicSelectedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NMUSICID = 1;
    const NTIMEOUT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMEOUT => array(
            'name' => 'nTimeout',
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
        $this->values[self::NTIMEOUT] = null;
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
     * Sets value of 'nTimeout' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeout($value)
    {
        return $this->set(self::NTIMEOUT, $value);
    }

    /**
     * Returns value of 'nTimeout' property
     *
     * @return integer
     */
    public function getNTimeout()
    {
        $value = $this->get(self::NTIMEOUT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeout' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeout()
    {
        return $this->get(self::NTIMEOUT) !== null;
    }
}
}