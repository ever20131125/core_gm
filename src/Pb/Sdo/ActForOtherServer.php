<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ActForOtherServer message
 */
class ActForOtherServer extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const NSTARTTIME = 2;
    const NENDTIME = 3;
    const NEXPERI = 4;
    const NGCOIN = 5;
    const NPRIZE = 6;
    const OPTION_1 = 7;
    const OPTION_2 = 8;
    const OPTION_3 = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPERI => array(
            'name' => 'nExperi',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGCOIN => array(
            'name' => 'nGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZE => array(
            'name' => 'nPrize',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTION_1 => array(
            'name' => 'option_1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTION_2 => array(
            'name' => 'option_2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTION_3 => array(
            'name' => 'option_3',
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
        $this->values[self::TYPE] = null;
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NEXPERI] = null;
        $this->values[self::NGCOIN] = null;
        $this->values[self::NPRIZE] = null;
        $this->values[self::OPTION_1] = null;
        $this->values[self::OPTION_2] = null;
        $this->values[self::OPTION_3] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nExperi' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExperi($value)
    {
        return $this->set(self::NEXPERI, $value);
    }

    /**
     * Returns value of 'nExperi' property
     *
     * @return integer
     */
    public function getNExperi()
    {
        $value = $this->get(self::NEXPERI);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExperi' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExperi()
    {
        return $this->get(self::NEXPERI) !== null;
    }

    /**
     * Sets value of 'nGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGCoin($value)
    {
        return $this->set(self::NGCOIN, $value);
    }

    /**
     * Returns value of 'nGCoin' property
     *
     * @return integer
     */
    public function getNGCoin()
    {
        $value = $this->get(self::NGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGCoin()
    {
        return $this->get(self::NGCOIN) !== null;
    }

    /**
     * Sets value of 'nPrize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrize($value)
    {
        return $this->set(self::NPRIZE, $value);
    }

    /**
     * Returns value of 'nPrize' property
     *
     * @return integer
     */
    public function getNPrize()
    {
        $value = $this->get(self::NPRIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrize()
    {
        return $this->get(self::NPRIZE) !== null;
    }

    /**
     * Sets value of 'option_1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption1($value)
    {
        return $this->set(self::OPTION_1, $value);
    }

    /**
     * Returns value of 'option_1' property
     *
     * @return integer
     */
    public function getOption1()
    {
        $value = $this->get(self::OPTION_1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option_1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption1()
    {
        return $this->get(self::OPTION_1) !== null;
    }

    /**
     * Sets value of 'option_2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption2($value)
    {
        return $this->set(self::OPTION_2, $value);
    }

    /**
     * Returns value of 'option_2' property
     *
     * @return integer
     */
    public function getOption2()
    {
        $value = $this->get(self::OPTION_2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option_2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption2()
    {
        return $this->get(self::OPTION_2) !== null;
    }

    /**
     * Sets value of 'option_3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption3($value)
    {
        return $this->set(self::OPTION_3, $value);
    }

    /**
     * Returns value of 'option_3' property
     *
     * @return integer
     */
    public function getOption3()
    {
        $value = $this->get(self::OPTION_3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option_3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption3()
    {
        return $this->get(self::OPTION_3) !== null;
    }
}
}