<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BoxPrizeUnit message
 */
class BoxPrizeUnit extends \ProtobufMessage
{
    /* Field index constants */
    const STPRIZE = 1;
    const NRANDOM = 2;
    const NSHOW = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STPRIZE => array(
            'name' => 'stPrize',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NRANDOM => array(
            'name' => 'nRandom',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSHOW => array(
            'name' => 'nShow',
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
        $this->values[self::STPRIZE] = null;
        $this->values[self::NRANDOM] = null;
        $this->values[self::NSHOW] = null;
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
     * Sets value of 'stPrize' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStPrize(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STPRIZE, $value);
    }

    /**
     * Returns value of 'stPrize' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStPrize()
    {
        return $this->get(self::STPRIZE);
    }

    /**
     * Returns true if 'stPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPrize()
    {
        return $this->get(self::STPRIZE) !== null;
    }

    /**
     * Sets value of 'nRandom' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRandom($value)
    {
        return $this->set(self::NRANDOM, $value);
    }

    /**
     * Returns value of 'nRandom' property
     *
     * @return integer
     */
    public function getNRandom()
    {
        $value = $this->get(self::NRANDOM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRandom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRandom()
    {
        return $this->get(self::NRANDOM) !== null;
    }

    /**
     * Sets value of 'nShow' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShow($value)
    {
        return $this->set(self::NSHOW, $value);
    }

    /**
     * Returns value of 'nShow' property
     *
     * @return integer
     */
    public function getNShow()
    {
        $value = $this->get(self::NSHOW);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShow' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShow()
    {
        return $this->get(self::NSHOW) !== null;
    }
}
}