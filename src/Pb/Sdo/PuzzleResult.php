<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzleResult message
 */
class PuzzleResult extends \ProtobufMessage
{
    /* Field index constants */
    const NID = 1;
    const NANSWER = 2;
    const NSELECT1CNT = 3;
    const NSELECT2CNT = 4;
    const NSELECT3CNT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NANSWER => array(
            'name' => 'nAnswer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSELECT1CNT => array(
            'name' => 'nSelect1Cnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSELECT2CNT => array(
            'name' => 'nSelect2Cnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSELECT3CNT => array(
            'name' => 'nSelect3Cnt',
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
        $this->values[self::NID] = null;
        $this->values[self::NANSWER] = null;
        $this->values[self::NSELECT1CNT] = null;
        $this->values[self::NSELECT2CNT] = null;
        $this->values[self::NSELECT3CNT] = null;
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
     * Sets value of 'nAnswer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAnswer($value)
    {
        return $this->set(self::NANSWER, $value);
    }

    /**
     * Returns value of 'nAnswer' property
     *
     * @return integer
     */
    public function getNAnswer()
    {
        $value = $this->get(self::NANSWER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAnswer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAnswer()
    {
        return $this->get(self::NANSWER) !== null;
    }

    /**
     * Sets value of 'nSelect1Cnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect1Cnt($value)
    {
        return $this->set(self::NSELECT1CNT, $value);
    }

    /**
     * Returns value of 'nSelect1Cnt' property
     *
     * @return integer
     */
    public function getNSelect1Cnt()
    {
        $value = $this->get(self::NSELECT1CNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect1Cnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect1Cnt()
    {
        return $this->get(self::NSELECT1CNT) !== null;
    }

    /**
     * Sets value of 'nSelect2Cnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect2Cnt($value)
    {
        return $this->set(self::NSELECT2CNT, $value);
    }

    /**
     * Returns value of 'nSelect2Cnt' property
     *
     * @return integer
     */
    public function getNSelect2Cnt()
    {
        $value = $this->get(self::NSELECT2CNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect2Cnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect2Cnt()
    {
        return $this->get(self::NSELECT2CNT) !== null;
    }

    /**
     * Sets value of 'nSelect3Cnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect3Cnt($value)
    {
        return $this->set(self::NSELECT3CNT, $value);
    }

    /**
     * Returns value of 'nSelect3Cnt' property
     *
     * @return integer
     */
    public function getNSelect3Cnt()
    {
        $value = $this->get(self::NSELECT3CNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect3Cnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect3Cnt()
    {
        return $this->get(self::NSELECT3CNT) !== null;
    }
}
}