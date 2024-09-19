<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TourPart message
 */
class TourPart extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const PARAM = 2;
    const STATE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARAM => array(
            'name' => 'param',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PuzzlePartState::enmPuzzlePartState_Completed,
            'name' => 'state',
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
        $this->values[self::ID] = null;
        $this->values[self::PARAM] = null;
        $this->values[self::STATE] = self::$fields[self::STATE]['default'];
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'param' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setParam($value)
    {
        return $this->set(self::PARAM, $value);
    }

    /**
     * Returns value of 'param' property
     *
     * @return integer
     */
    public function getParam()
    {
        $value = $this->get(self::PARAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'param' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasParam()
    {
        return $this->get(self::PARAM) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }
}
}