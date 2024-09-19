<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildThemeMusic message
 */
class GuildThemeMusic extends \ProtobufMessage
{
    /* Field index constants */
    const NINDEX = 1;
    const NMUSICID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NINDEX => array(
            'name' => 'nIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICID => array(
            'name' => 'nMusicID',
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
        $this->values[self::NINDEX] = null;
        $this->values[self::NMUSICID] = null;
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
}
}