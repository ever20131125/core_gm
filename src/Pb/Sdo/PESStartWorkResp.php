<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESStartWorkResp message
 */
class PESStartWorkResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STATUS = 2;
    const SPRITEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkStatus'
        ),
        self::SPRITEINFO => array(
            'name' => 'spriteinfo',
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
        $this->values[self::STATUS] = null;
        $this->values[self::SPRITEINFO] = null;
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
     * Sets value of 'status' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkStatus $value Property value
     *
     * @return null
     */
    public function setStatus(\Xnhd\Core\Pb\Sdo\WorkStatus $value=null)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkStatus
     */
    public function getStatus()
    {
        return $this->get(self::STATUS);
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Sets value of 'spriteinfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Property value
     *
     * @return null
     */
    public function setSpriteinfo(\Xnhd\Core\Pb\Sdo\SpriteProperty $value=null)
    {
        return $this->set(self::SPRITEINFO, $value);
    }

    /**
     * Returns value of 'spriteinfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getSpriteinfo()
    {
        return $this->get(self::SPRITEINFO);
    }

    /**
     * Returns true if 'spriteinfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpriteinfo()
    {
        return $this->get(self::SPRITEINFO) !== null;
    }
}
}