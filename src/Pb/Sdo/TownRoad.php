<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TownRoad message
 */
class TownRoad extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const NPOSITIONX = 2;
    const NPOSITIONY = 3;
    const NROTATION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSITIONX => array(
            'name' => 'nPositionX',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSITIONY => array(
            'name' => 'nPositionY',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROTATION => array(
            'name' => 'nRotation',
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
        $this->values[self::NITEMID] = null;
        $this->values[self::NPOSITIONX] = null;
        $this->values[self::NPOSITIONY] = null;
        $this->values[self::NROTATION] = null;
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
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nPositionX' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionX($value)
    {
        return $this->set(self::NPOSITIONX, $value);
    }

    /**
     * Returns value of 'nPositionX' property
     *
     * @return integer
     */
    public function getNPositionX()
    {
        $value = $this->get(self::NPOSITIONX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionX' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionX()
    {
        return $this->get(self::NPOSITIONX) !== null;
    }

    /**
     * Sets value of 'nPositionY' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionY($value)
    {
        return $this->set(self::NPOSITIONY, $value);
    }

    /**
     * Returns value of 'nPositionY' property
     *
     * @return integer
     */
    public function getNPositionY()
    {
        $value = $this->get(self::NPOSITIONY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionY' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionY()
    {
        return $this->get(self::NPOSITIONY) !== null;
    }

    /**
     * Sets value of 'nRotation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRotation($value)
    {
        return $this->set(self::NROTATION, $value);
    }

    /**
     * Returns value of 'nRotation' property
     *
     * @return integer
     */
    public function getNRotation()
    {
        $value = $this->get(self::NROTATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRotation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRotation()
    {
        return $this->get(self::NROTATION) !== null;
    }
}
}