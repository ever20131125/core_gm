<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSStartBanMusicNoti message
 */
class SGSStartBanMusicNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NTIMEOUT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
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