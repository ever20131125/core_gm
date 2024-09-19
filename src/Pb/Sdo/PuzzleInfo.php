<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzleInfo message
 */
class PuzzleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NID = 1;
    const SZTITLE = 2;
    const SZOPTION1 = 3;
    const SZOPTION2 = 4;
    const SZOPTION3 = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZTITLE => array(
            'name' => 'szTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZOPTION1 => array(
            'name' => 'szOption1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZOPTION2 => array(
            'name' => 'szOption2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZOPTION3 => array(
            'name' => 'szOption3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NID] = null;
        $this->values[self::SZTITLE] = null;
        $this->values[self::SZOPTION1] = null;
        $this->values[self::SZOPTION2] = null;
        $this->values[self::SZOPTION3] = null;
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
     * Sets value of 'nID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNID($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nID' property
     *
     * @return integer
     */
    public function getNID()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNID()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Sets value of 'szTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzTitle($value)
    {
        return $this->set(self::SZTITLE, $value);
    }

    /**
     * Returns value of 'szTitle' property
     *
     * @return string
     */
    public function getSzTitle()
    {
        $value = $this->get(self::SZTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzTitle()
    {
        return $this->get(self::SZTITLE) !== null;
    }

    /**
     * Sets value of 'szOption1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOption1($value)
    {
        return $this->set(self::SZOPTION1, $value);
    }

    /**
     * Returns value of 'szOption1' property
     *
     * @return string
     */
    public function getSzOption1()
    {
        $value = $this->get(self::SZOPTION1);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOption1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOption1()
    {
        return $this->get(self::SZOPTION1) !== null;
    }

    /**
     * Sets value of 'szOption2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOption2($value)
    {
        return $this->set(self::SZOPTION2, $value);
    }

    /**
     * Returns value of 'szOption2' property
     *
     * @return string
     */
    public function getSzOption2()
    {
        $value = $this->get(self::SZOPTION2);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOption2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOption2()
    {
        return $this->get(self::SZOPTION2) !== null;
    }

    /**
     * Sets value of 'szOption3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOption3($value)
    {
        return $this->set(self::SZOPTION3, $value);
    }

    /**
     * Returns value of 'szOption3' property
     *
     * @return string
     */
    public function getSzOption3()
    {
        $value = $this->get(self::SZOPTION3);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOption3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOption3()
    {
        return $this->get(self::SZOPTION3) !== null;
    }
}
}