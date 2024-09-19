<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESSpriteInfoChangeInSceneNoti message
 */
class PESSpriteInfoChangeInSceneNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STSPRITEPROPERTY = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STSPRITEPROPERTY => array(
            'name' => 'stSpriteProperty',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\SpriteProperty'
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
        $this->values[self::STSPRITEPROPERTY] = null;
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
     * Sets value of 'stSpriteProperty' property
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Property value
     *
     * @return null
     */
    public function setStSpriteProperty(\Xnhd\Core\Pb\Sdo\SpriteProperty $value=null)
    {
        return $this->set(self::STSPRITEPROPERTY, $value);
    }

    /**
     * Returns value of 'stSpriteProperty' property
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getStSpriteProperty()
    {
        return $this->get(self::STSPRITEPROPERTY);
    }

    /**
     * Returns true if 'stSpriteProperty' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStSpriteProperty()
    {
        return $this->get(self::STSPRITEPROPERTY) !== null;
    }
}
}