<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleSimple message
 */
class CoupleSimple extends \ProtobufMessage
{
    /* Field index constants */
    const NCOUPLEID = 1;
    const NLOVELV = 2;
    const ISMARRIED = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCOUPLEID => array(
            'name' => 'nCoupleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVELV => array(
            'name' => 'nLoveLv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISMARRIED => array(
            'name' => 'isMarried',
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
        $this->values[self::NCOUPLEID] = null;
        $this->values[self::NLOVELV] = null;
        $this->values[self::ISMARRIED] = null;
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
     * Sets value of 'nCoupleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCoupleID($value)
    {
        return $this->set(self::NCOUPLEID, $value);
    }

    /**
     * Returns value of 'nCoupleID' property
     *
     * @return integer
     */
    public function getNCoupleID()
    {
        $value = $this->get(self::NCOUPLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCoupleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCoupleID()
    {
        return $this->get(self::NCOUPLEID) !== null;
    }

    /**
     * Sets value of 'nLoveLv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoveLv($value)
    {
        return $this->set(self::NLOVELV, $value);
    }

    /**
     * Returns value of 'nLoveLv' property
     *
     * @return integer
     */
    public function getNLoveLv()
    {
        $value = $this->get(self::NLOVELV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoveLv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoveLv()
    {
        return $this->get(self::NLOVELV) !== null;
    }

    /**
     * Sets value of 'isMarried' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsMarried($value)
    {
        return $this->set(self::ISMARRIED, $value);
    }

    /**
     * Returns value of 'isMarried' property
     *
     * @return integer
     */
    public function getIsMarried()
    {
        $value = $this->get(self::ISMARRIED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'isMarried' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsMarried()
    {
        return $this->get(self::ISMARRIED) !== null;
    }
}
}