<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESGetFeedStatusReq message
 */
class PESGetFeedStatusReq extends \ProtobufMessage
{
    /* Field index constants */
    const SRCROLEID = 1;
    const DSTROLEID = 2;
    const UUID = 3;
    const WAY = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SRCROLEID => array(
            'name' => 'srcRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DSTROLEID => array(
            'name' => 'dstRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\SpriteFeedWay::enmSpriteStrongWayNull,
            'name' => 'way',
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
        $this->values[self::SRCROLEID] = null;
        $this->values[self::DSTROLEID] = null;
        $this->values[self::UUID] = null;
        $this->values[self::WAY] = self::$fields[self::WAY]['default'];
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
     * Sets value of 'srcRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSrcRoleId($value)
    {
        return $this->set(self::SRCROLEID, $value);
    }

    /**
     * Returns value of 'srcRoleId' property
     *
     * @return integer
     */
    public function getSrcRoleId()
    {
        $value = $this->get(self::SRCROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'srcRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSrcRoleId()
    {
        return $this->get(self::SRCROLEID) !== null;
    }

    /**
     * Sets value of 'dstRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDstRoleId($value)
    {
        return $this->set(self::DSTROLEID, $value);
    }

    /**
     * Returns value of 'dstRoleId' property
     *
     * @return integer
     */
    public function getDstRoleId()
    {
        $value = $this->get(self::DSTROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dstRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDstRoleId()
    {
        return $this->get(self::DSTROLEID) !== null;
    }

    /**
     * Sets value of 'uuid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return integer
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }

    /**
     * Sets value of 'way' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWay($value)
    {
        return $this->set(self::WAY, $value);
    }

    /**
     * Returns value of 'way' property
     *
     * @return integer
     */
    public function getWay()
    {
        $value = $this->get(self::WAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'way' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWay()
    {
        return $this->get(self::WAY) !== null;
    }
}
}