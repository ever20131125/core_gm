<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TitleInfo message
 */
class TitleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TITLE = 1;
    const NSRANK = 2;
    const NSTAR = 3;
    const NPOINT = 4;
    const NMAXPOINT = 5;
    const NTOTALPOINT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TITLE => array(
            'default' => \Xnhd\Core\Pb\Sdo\QualifyTitle::enmQualifyTitle_1,
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSRANK => array(
            'name' => 'nSRank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAR => array(
            'name' => 'nStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOINT => array(
            'name' => 'nPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXPOINT => array(
            'name' => 'nMaxPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALPOINT => array(
            'name' => 'nTotalPoint',
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
        $this->values[self::TITLE] = self::$fields[self::TITLE]['default'];
        $this->values[self::NSRANK] = null;
        $this->values[self::NSTAR] = null;
        $this->values[self::NPOINT] = null;
        $this->values[self::NMAXPOINT] = null;
        $this->values[self::NTOTALPOINT] = null;
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
     * Sets value of 'title' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return integer
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'title' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitle()
    {
        return $this->get(self::TITLE) !== null;
    }

    /**
     * Sets value of 'nSRank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSRank($value)
    {
        return $this->set(self::NSRANK, $value);
    }

    /**
     * Returns value of 'nSRank' property
     *
     * @return integer
     */
    public function getNSRank()
    {
        $value = $this->get(self::NSRANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSRank()
    {
        return $this->get(self::NSRANK) !== null;
    }

    /**
     * Sets value of 'nStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStar($value)
    {
        return $this->set(self::NSTAR, $value);
    }

    /**
     * Returns value of 'nStar' property
     *
     * @return integer
     */
    public function getNStar()
    {
        $value = $this->get(self::NSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStar()
    {
        return $this->get(self::NSTAR) !== null;
    }

    /**
     * Sets value of 'nPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPoint($value)
    {
        return $this->set(self::NPOINT, $value);
    }

    /**
     * Returns value of 'nPoint' property
     *
     * @return integer
     */
    public function getNPoint()
    {
        $value = $this->get(self::NPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPoint()
    {
        return $this->get(self::NPOINT) !== null;
    }

    /**
     * Sets value of 'nMaxPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxPoint($value)
    {
        return $this->set(self::NMAXPOINT, $value);
    }

    /**
     * Returns value of 'nMaxPoint' property
     *
     * @return integer
     */
    public function getNMaxPoint()
    {
        $value = $this->get(self::NMAXPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxPoint()
    {
        return $this->get(self::NMAXPOINT) !== null;
    }

    /**
     * Sets value of 'nTotalPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalPoint($value)
    {
        return $this->set(self::NTOTALPOINT, $value);
    }

    /**
     * Returns value of 'nTotalPoint' property
     *
     * @return integer
     */
    public function getNTotalPoint()
    {
        $value = $this->get(self::NTOTALPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalPoint()
    {
        return $this->get(self::NTOTALPOINT) !== null;
    }
}
}