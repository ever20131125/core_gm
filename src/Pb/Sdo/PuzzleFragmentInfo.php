<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzleFragmentInfo message
 */
class PuzzleFragmentInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NFRAGMENTTYPE = 1;
    const NFRAGMENTSETTYPE = 2;
    const NNUM = 3;
    const NTIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NFRAGMENTTYPE => array(
            'name' => 'nFragmentType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFRAGMENTSETTYPE => array(
            'name' => 'nFragmentSetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNUM => array(
            'name' => 'nNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIME => array(
            'name' => 'nTime',
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
        $this->values[self::NFRAGMENTTYPE] = null;
        $this->values[self::NFRAGMENTSETTYPE] = null;
        $this->values[self::NNUM] = null;
        $this->values[self::NTIME] = null;
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
     * Sets value of 'nFragmentType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFragmentType($value)
    {
        return $this->set(self::NFRAGMENTTYPE, $value);
    }

    /**
     * Returns value of 'nFragmentType' property
     *
     * @return integer
     */
    public function getNFragmentType()
    {
        $value = $this->get(self::NFRAGMENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFragmentType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFragmentType()
    {
        return $this->get(self::NFRAGMENTTYPE) !== null;
    }

    /**
     * Sets value of 'nFragmentSetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFragmentSetType($value)
    {
        return $this->set(self::NFRAGMENTSETTYPE, $value);
    }

    /**
     * Returns value of 'nFragmentSetType' property
     *
     * @return integer
     */
    public function getNFragmentSetType()
    {
        $value = $this->get(self::NFRAGMENTSETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFragmentSetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFragmentSetType()
    {
        return $this->get(self::NFRAGMENTSETTYPE) !== null;
    }

    /**
     * Sets value of 'nNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNum($value)
    {
        return $this->set(self::NNUM, $value);
    }

    /**
     * Returns value of 'nNum' property
     *
     * @return integer
     */
    public function getNNum()
    {
        $value = $this->get(self::NNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNum()
    {
        return $this->get(self::NNUM) !== null;
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }
}
}