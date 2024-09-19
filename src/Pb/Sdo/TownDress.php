<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TownDress message
 */
class TownDress extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMINSID = 1;
    const NITEMID = 2;
    const NLEVEL = 3;
    const NPOSITIONX = 4;
    const NPOSITIONY = 5;
    const NROTATION = 6;
    const NFINISHTIME = 7;
    const NSEEDID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::NROTATION => array(
            'name' => 'nRotation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFINISHTIME => array(
            'name' => 'nFinishTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSEEDID => array(
            'name' => 'nSeedID',
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
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::NPOSITIONX] = null;
        $this->values[self::NPOSITIONY] = null;
        $this->values[self::NROTATION] = null;
        $this->values[self::NFINISHTIME] = null;
        $this->values[self::NSEEDID] = null;
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
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
    }

    /**
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
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
     * Sets value of 'nRotation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRotation($value)
    {
        return $this->set(self::NROTATION, $value);
    }

    /**
     * Returns value of 'nRotation' property
     *
     * @return integer
     */
    public function getNRotation()
    {
        $value = $this->get(self::NROTATION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRotation' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRotation()
    {
        return $this->get(self::NROTATION) !== null;
    }

    /**
     * Sets value of 'nFinishTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFinishTime($value)
    {
        return $this->set(self::NFINISHTIME, $value);
    }

    /**
     * Returns value of 'nFinishTime' property
     *
     * @return integer
     */
    public function getNFinishTime()
    {
        $value = $this->get(self::NFINISHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFinishTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFinishTime()
    {
        return $this->get(self::NFINISHTIME) !== null;
    }

    /**
     * Sets value of 'nSeedID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSeedID($value)
    {
        return $this->set(self::NSEEDID, $value);
    }

    /**
     * Returns value of 'nSeedID' property
     *
     * @return integer
     */
    public function getNSeedID()
    {
        $value = $this->get(self::NSEEDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSeedID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSeedID()
    {
        return $this->get(self::NSEEDID) !== null;
    }
}
}