<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SkillInfo message
 */
class SkillInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SKILLID = 1;
    const NLEVEL = 2;
    const NRANDOM = 3;
    const RARITY = 4;
    const NSLOTIDEX = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SKILLID => array(
            'name' => 'skillID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANDOM => array(
            'name' => 'nRandom',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RARITY => array(
            'name' => 'rarity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSLOTIDEX => array(
            'name' => 'nSlotIdex',
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
        $this->values[self::SKILLID] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::NRANDOM] = null;
        $this->values[self::RARITY] = null;
        $this->values[self::NSLOTIDEX] = null;
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
     * Sets value of 'skillID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSkillID($value)
    {
        return $this->set(self::SKILLID, $value);
    }

    /**
     * Returns value of 'skillID' property
     *
     * @return integer
     */
    public function getSkillID()
    {
        $value = $this->get(self::SKILLID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'skillID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSkillID()
    {
        return $this->get(self::SKILLID) !== null;
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
     * Sets value of 'rarity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRarity($value)
    {
        return $this->set(self::RARITY, $value);
    }

    /**
     * Returns value of 'rarity' property
     *
     * @return integer
     */
    public function getRarity()
    {
        $value = $this->get(self::RARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rarity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRarity()
    {
        return $this->get(self::RARITY) !== null;
    }

    /**
     * Sets value of 'nSlotIdex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSlotIdex($value)
    {
        return $this->set(self::NSLOTIDEX, $value);
    }

    /**
     * Returns value of 'nSlotIdex' property
     *
     * @return integer
     */
    public function getNSlotIdex()
    {
        $value = $this->get(self::NSLOTIDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSlotIdex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSlotIdex()
    {
        return $this->get(self::NSLOTIDEX) !== null;
    }
}
}