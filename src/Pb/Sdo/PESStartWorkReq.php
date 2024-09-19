<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESStartWorkReq message
 */
class PESStartWorkReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const UUID = 2;
    const WAY = 3;
    const RANK = 4;
    const ISWORKING = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\SpriteWorkWay::enmWorkWay_NULL,
            'name' => 'way',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISWORKING => array(
            'name' => 'isWorking',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::UUID] = null;
        $this->values[self::WAY] = self::$fields[self::WAY]['default'];
        $this->values[self::RANK] = null;
        $this->values[self::ISWORKING] = null;
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
     * Sets value of 'roleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleId($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleId' property
     *
     * @return integer
     */
    public function getRoleId()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleId()
    {
        return $this->get(self::ROLEID) !== null;
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

    /**
     * Sets value of 'rank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRank($value)
    {
        return $this->set(self::RANK, $value);
    }

    /**
     * Returns value of 'rank' property
     *
     * @return integer
     */
    public function getRank()
    {
        $value = $this->get(self::RANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRank()
    {
        return $this->get(self::RANK) !== null;
    }

    /**
     * Sets value of 'isWorking' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsWorking($value)
    {
        return $this->set(self::ISWORKING, $value);
    }

    /**
     * Returns value of 'isWorking' property
     *
     * @return boolean
     */
    public function getIsWorking()
    {
        $value = $this->get(self::ISWORKING);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isWorking' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsWorking()
    {
        return $this->get(self::ISWORKING) !== null;
    }
}
}