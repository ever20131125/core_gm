<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * KeySumm message
 */
class KeySumm extends \ProtobufMessage
{
    /* Field index constants */
    const KEYINFO = 1;
    const NSPERFECT = 2;
    const NPERFECT = 3;
    const NGREAT = 4;
    const NGOOD = 5;
    const NMISS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEYINFO => array(
            'default' => \Xnhd\Core\Pb\Sdo\KeyInfo::enmKeyInfo_None,
            'name' => 'keyInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSPERFECT => array(
            'name' => 'nSPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPERFECT => array(
            'name' => 'nPerfect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGREAT => array(
            'name' => 'nGreat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGOOD => array(
            'name' => 'nGood',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMISS => array(
            'name' => 'nMiss',
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
        $this->values[self::KEYINFO] = self::$fields[self::KEYINFO]['default'];
        $this->values[self::NSPERFECT] = null;
        $this->values[self::NPERFECT] = null;
        $this->values[self::NGREAT] = null;
        $this->values[self::NGOOD] = null;
        $this->values[self::NMISS] = null;
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
     * Sets value of 'keyInfo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKeyInfo($value)
    {
        return $this->set(self::KEYINFO, $value);
    }

    /**
     * Returns value of 'keyInfo' property
     *
     * @return integer
     */
    public function getKeyInfo()
    {
        $value = $this->get(self::KEYINFO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'keyInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeyInfo()
    {
        return $this->get(self::KEYINFO) !== null;
    }

    /**
     * Sets value of 'nSPerfect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSPerfect($value)
    {
        return $this->set(self::NSPERFECT, $value);
    }

    /**
     * Returns value of 'nSPerfect' property
     *
     * @return integer
     */
    public function getNSPerfect()
    {
        $value = $this->get(self::NSPERFECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSPerfect()
    {
        return $this->get(self::NSPERFECT) !== null;
    }

    /**
     * Sets value of 'nPerfect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPerfect($value)
    {
        return $this->set(self::NPERFECT, $value);
    }

    /**
     * Returns value of 'nPerfect' property
     *
     * @return integer
     */
    public function getNPerfect()
    {
        $value = $this->get(self::NPERFECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPerfect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPerfect()
    {
        return $this->get(self::NPERFECT) !== null;
    }

    /**
     * Sets value of 'nGreat' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGreat($value)
    {
        return $this->set(self::NGREAT, $value);
    }

    /**
     * Returns value of 'nGreat' property
     *
     * @return integer
     */
    public function getNGreat()
    {
        $value = $this->get(self::NGREAT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGreat' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGreat()
    {
        return $this->get(self::NGREAT) !== null;
    }

    /**
     * Sets value of 'nGood' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGood($value)
    {
        return $this->set(self::NGOOD, $value);
    }

    /**
     * Returns value of 'nGood' property
     *
     * @return integer
     */
    public function getNGood()
    {
        $value = $this->get(self::NGOOD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGood' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGood()
    {
        return $this->get(self::NGOOD) !== null;
    }

    /**
     * Sets value of 'nMiss' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMiss($value)
    {
        return $this->set(self::NMISS, $value);
    }

    /**
     * Returns value of 'nMiss' property
     *
     * @return integer
     */
    public function getNMiss()
    {
        $value = $this->get(self::NMISS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMiss' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMiss()
    {
        return $this->get(self::NMISS) !== null;
    }
}
}