<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CupInfo message
 */
class CupInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NCUPNUM1 = 1;
    const NCUPNUM2 = 2;
    const NCUPNUM3 = 3;
    const NCUPNUM4 = 4;
    const NCUPSCORE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCUPNUM1 => array(
            'name' => 'nCupNum1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUPNUM2 => array(
            'name' => 'nCupNum2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUPNUM3 => array(
            'name' => 'nCupNum3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUPNUM4 => array(
            'name' => 'nCupNum4',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCUPSCORE => array(
            'name' => 'nCupScore',
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
        $this->values[self::NCUPNUM1] = null;
        $this->values[self::NCUPNUM2] = null;
        $this->values[self::NCUPNUM3] = null;
        $this->values[self::NCUPNUM4] = null;
        $this->values[self::NCUPSCORE] = null;
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
     * Sets value of 'nCupNum1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupNum1($value)
    {
        return $this->set(self::NCUPNUM1, $value);
    }

    /**
     * Returns value of 'nCupNum1' property
     *
     * @return integer
     */
    public function getNCupNum1()
    {
        $value = $this->get(self::NCUPNUM1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupNum1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupNum1()
    {
        return $this->get(self::NCUPNUM1) !== null;
    }

    /**
     * Sets value of 'nCupNum2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupNum2($value)
    {
        return $this->set(self::NCUPNUM2, $value);
    }

    /**
     * Returns value of 'nCupNum2' property
     *
     * @return integer
     */
    public function getNCupNum2()
    {
        $value = $this->get(self::NCUPNUM2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupNum2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupNum2()
    {
        return $this->get(self::NCUPNUM2) !== null;
    }

    /**
     * Sets value of 'nCupNum3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupNum3($value)
    {
        return $this->set(self::NCUPNUM3, $value);
    }

    /**
     * Returns value of 'nCupNum3' property
     *
     * @return integer
     */
    public function getNCupNum3()
    {
        $value = $this->get(self::NCUPNUM3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupNum3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupNum3()
    {
        return $this->get(self::NCUPNUM3) !== null;
    }

    /**
     * Sets value of 'nCupNum4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupNum4($value)
    {
        return $this->set(self::NCUPNUM4, $value);
    }

    /**
     * Returns value of 'nCupNum4' property
     *
     * @return integer
     */
    public function getNCupNum4()
    {
        $value = $this->get(self::NCUPNUM4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupNum4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupNum4()
    {
        return $this->get(self::NCUPNUM4) !== null;
    }

    /**
     * Sets value of 'nCupScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCupScore($value)
    {
        return $this->set(self::NCUPSCORE, $value);
    }

    /**
     * Returns value of 'nCupScore' property
     *
     * @return integer
     */
    public function getNCupScore()
    {
        $value = $this->get(self::NCUPSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCupScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCupScore()
    {
        return $this->get(self::NCUPSCORE) !== null;
    }
}
}