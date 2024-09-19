<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESCarrySpriteResp message
 */
class PESCarrySpriteResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const PRECARRIEDSPRITE = 2;
    const CURCARRIEDSPRITE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::PRECARRIEDSPRITE => array(
            'name' => 'preCarriedSprite',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\SpriteProperty'
        ),
        self::CURCARRIEDSPRITE => array(
            'name' => 'curCarriedSprite',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::PRECARRIEDSPRITE] = null;
        $this->values[self::CURCARRIEDSPRITE] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'preCarriedSprite' property
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Property value
     *
     * @return null
     */
    public function setPreCarriedSprite(\Xnhd\Core\Pb\Sdo\SpriteProperty $value=null)
    {
        return $this->set(self::PRECARRIEDSPRITE, $value);
    }

    /**
     * Returns value of 'preCarriedSprite' property
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getPreCarriedSprite()
    {
        return $this->get(self::PRECARRIEDSPRITE);
    }

    /**
     * Returns true if 'preCarriedSprite' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPreCarriedSprite()
    {
        return $this->get(self::PRECARRIEDSPRITE) !== null;
    }

    /**
     * Sets value of 'curCarriedSprite' property
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Property value
     *
     * @return null
     */
    public function setCurCarriedSprite(\Xnhd\Core\Pb\Sdo\SpriteProperty $value=null)
    {
        return $this->set(self::CURCARRIEDSPRITE, $value);
    }

    /**
     * Returns value of 'curCarriedSprite' property
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getCurCarriedSprite()
    {
        return $this->get(self::CURCARRIEDSPRITE);
    }

    /**
     * Returns true if 'curCarriedSprite' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurCarriedSprite()
    {
        return $this->get(self::CURCARRIEDSPRITE) !== null;
    }
}
}