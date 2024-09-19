<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RedBagCatch message
 */
class RedBagCatch extends \ProtobufMessage
{
    /* Field index constants */
    const NBAGID = 1;
    const NSENDERID = 2;
    const BAGTYPE = 3;
    const NRANDOM = 4;
    const NCATCHTIME = 5;
    const ASSETTYPE = 6;
    const NASSET = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NBAGID => array(
            'name' => 'nBagID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSENDERID => array(
            'name' => 'nSenderID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RedBagType::enmRedBagType_None,
            'name' => 'bagType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANDOM => array(
            'name' => 'nRandom',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCATCHTIME => array(
            'name' => 'nCatchTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSETTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AssetType::enmAssetType_None,
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASSET => array(
            'name' => 'nAsset',
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
        $this->values[self::NBAGID] = null;
        $this->values[self::NSENDERID] = null;
        $this->values[self::BAGTYPE] = self::$fields[self::BAGTYPE]['default'];
        $this->values[self::NRANDOM] = null;
        $this->values[self::NCATCHTIME] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NASSET] = null;
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
     * Sets value of 'nBagID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBagID($value)
    {
        return $this->set(self::NBAGID, $value);
    }

    /**
     * Returns value of 'nBagID' property
     *
     * @return integer
     */
    public function getNBagID()
    {
        $value = $this->get(self::NBAGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBagID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBagID()
    {
        return $this->get(self::NBAGID) !== null;
    }

    /**
     * Sets value of 'nSenderID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSenderID($value)
    {
        return $this->set(self::NSENDERID, $value);
    }

    /**
     * Returns value of 'nSenderID' property
     *
     * @return integer
     */
    public function getNSenderID()
    {
        $value = $this->get(self::NSENDERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSenderID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSenderID()
    {
        return $this->get(self::NSENDERID) !== null;
    }

    /**
     * Sets value of 'bagType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBagType($value)
    {
        return $this->set(self::BAGTYPE, $value);
    }

    /**
     * Returns value of 'bagType' property
     *
     * @return integer
     */
    public function getBagType()
    {
        $value = $this->get(self::BAGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bagType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBagType()
    {
        return $this->get(self::BAGTYPE) !== null;
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
     * Sets value of 'nCatchTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCatchTime($value)
    {
        return $this->set(self::NCATCHTIME, $value);
    }

    /**
     * Returns value of 'nCatchTime' property
     *
     * @return integer
     */
    public function getNCatchTime()
    {
        $value = $this->get(self::NCATCHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCatchTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCatchTime()
    {
        return $this->get(self::NCATCHTIME) !== null;
    }

    /**
     * Sets value of 'assetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssetType($value)
    {
        return $this->set(self::ASSETTYPE, $value);
    }

    /**
     * Returns value of 'assetType' property
     *
     * @return integer
     */
    public function getAssetType()
    {
        $value = $this->get(self::ASSETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'assetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAssetType()
    {
        return $this->get(self::ASSETTYPE) !== null;
    }

    /**
     * Sets value of 'nAsset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAsset($value)
    {
        return $this->set(self::NASSET, $value);
    }

    /**
     * Returns value of 'nAsset' property
     *
     * @return integer
     */
    public function getNAsset()
    {
        $value = $this->get(self::NASSET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAsset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAsset()
    {
        return $this->get(self::NASSET) !== null;
    }
}
}