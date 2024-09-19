<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CupRankKey message
 */
class CupRankKey extends \ProtobufMessage
{
    /* Field index constants */
    const NGAMEPLAY = 1;
    const NMUSICLEVEL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NGAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_Invalid,
            'name' => 'nGamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMUSICLEVEL => array(
            'default' => \Xnhd\Core\Pb\Sdo\MusicLevel::enmMusicLevel_Easy,
            'name' => 'nMusicLevel',
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
        $this->values[self::NGAMEPLAY] = self::$fields[self::NGAMEPLAY]['default'];
        $this->values[self::NMUSICLEVEL] = self::$fields[self::NMUSICLEVEL]['default'];
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
     * Sets value of 'nGamePlay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGamePlay($value)
    {
        return $this->set(self::NGAMEPLAY, $value);
    }

    /**
     * Returns value of 'nGamePlay' property
     *
     * @return integer
     */
    public function getNGamePlay()
    {
        $value = $this->get(self::NGAMEPLAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGamePlay()
    {
        return $this->get(self::NGAMEPLAY) !== null;
    }

    /**
     * Sets value of 'nMusicLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicLevel($value)
    {
        return $this->set(self::NMUSICLEVEL, $value);
    }

    /**
     * Returns value of 'nMusicLevel' property
     *
     * @return integer
     */
    public function getNMusicLevel()
    {
        $value = $this->get(self::NMUSICLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicLevel()
    {
        return $this->get(self::NMUSICLEVEL) !== null;
    }
}
}