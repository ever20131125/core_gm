<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RolePosInfo message
 */
class RolePosInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NPOSITIONX = 1;
    const NPOSITIONY = 2;
    const NPOSITIONZ = 3;
    const NPLAYERROTATION = 4;
    const NCAMERAROTATION = 5;
    const NCAMERADISTANCE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::NPOSITIONZ => array(
            'name' => 'nPositionZ',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLAYERROTATION => array(
            'name' => 'nPlayerRotation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCAMERAROTATION => array(
            'name' => 'nCameraRotation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCAMERADISTANCE => array(
            'name' => 'nCameraDistance',
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
        $this->values[self::NPOSITIONX] = null;
        $this->values[self::NPOSITIONY] = null;
        $this->values[self::NPOSITIONZ] = null;
        $this->values[self::NPLAYERROTATION] = null;
        $this->values[self::NCAMERAROTATION] = null;
        $this->values[self::NCAMERADISTANCE] = null;
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
     * Sets value of 'nPositionZ' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionZ($value)
    {
        return $this->set(self::NPOSITIONZ, $value);
    }

    /**
     * Returns value of 'nPositionZ' property
     *
     * @return integer
     */
    public function getNPositionZ()
    {
        $value = $this->get(self::NPOSITIONZ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionZ' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionZ()
    {
        return $this->get(self::NPOSITIONZ) !== null;
    }

    /**
     * Sets value of 'nPlayerRotation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlayerRotation($value)
    {
        return $this->set(self::NPLAYERROTATION, $value);
    }

    /**
     * Returns value of 'nPlayerRotation' property
     *
     * @return integer
     */
    public function getNPlayerRotation()
    {
        $value = $this->get(self::NPLAYERROTATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlayerRotation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlayerRotation()
    {
        return $this->get(self::NPLAYERROTATION) !== null;
    }

    /**
     * Sets value of 'nCameraRotation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCameraRotation($value)
    {
        return $this->set(self::NCAMERAROTATION, $value);
    }

    /**
     * Returns value of 'nCameraRotation' property
     *
     * @return integer
     */
    public function getNCameraRotation()
    {
        $value = $this->get(self::NCAMERAROTATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCameraRotation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCameraRotation()
    {
        return $this->get(self::NCAMERAROTATION) !== null;
    }

    /**
     * Sets value of 'nCameraDistance' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCameraDistance($value)
    {
        return $this->set(self::NCAMERADISTANCE, $value);
    }

    /**
     * Returns value of 'nCameraDistance' property
     *
     * @return integer
     */
    public function getNCameraDistance()
    {
        $value = $this->get(self::NCAMERADISTANCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCameraDistance' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCameraDistance()
    {
        return $this->get(self::NCAMERADISTANCE) !== null;
    }
}
}