<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RedBagSend message
 */
class RedBagSend extends \ProtobufMessage
{
    /* Field index constants */
    const NBAGID = 1;
    const BAGTYPE = 2;
    const NRANDOM = 3;
    const NSENDTIME = 4;
    const ASSETTYPE = 5;
    const NASSETTOTAL = 6;
    const NASSETCATCH = 7;
    const NCOUNTTOTAL = 8;
    const NCOUNTCATCH = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NBAGID => array(
            'name' => 'nBagID',
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
        self::NSENDTIME => array(
            'name' => 'nSendTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSETTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AssetType::enmAssetType_None,
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASSETTOTAL => array(
            'name' => 'nAssetTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASSETCATCH => array(
            'name' => 'nAssetCatch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOUNTTOTAL => array(
            'name' => 'nCountTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOUNTCATCH => array(
            'name' => 'nCountCatch',
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
        $this->values[self::BAGTYPE] = self::$fields[self::BAGTYPE]['default'];
        $this->values[self::NRANDOM] = null;
        $this->values[self::NSENDTIME] = null;
        $this->values[self::ASSETTYPE] = self::$fields[self::ASSETTYPE]['default'];
        $this->values[self::NASSETTOTAL] = null;
        $this->values[self::NASSETCATCH] = null;
        $this->values[self::NCOUNTTOTAL] = null;
        $this->values[self::NCOUNTCATCH] = null;
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
     * Sets value of 'nSendTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSendTime($value)
    {
        return $this->set(self::NSENDTIME, $value);
    }

    /**
     * Returns value of 'nSendTime' property
     *
     * @return integer
     */
    public function getNSendTime()
    {
        $value = $this->get(self::NSENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSendTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSendTime()
    {
        return $this->get(self::NSENDTIME) !== null;
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
     * Sets value of 'nAssetTotal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAssetTotal($value)
    {
        return $this->set(self::NASSETTOTAL, $value);
    }

    /**
     * Returns value of 'nAssetTotal' property
     *
     * @return integer
     */
    public function getNAssetTotal()
    {
        $value = $this->get(self::NASSETTOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAssetTotal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAssetTotal()
    {
        return $this->get(self::NASSETTOTAL) !== null;
    }

    /**
     * Sets value of 'nAssetCatch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAssetCatch($value)
    {
        return $this->set(self::NASSETCATCH, $value);
    }

    /**
     * Returns value of 'nAssetCatch' property
     *
     * @return integer
     */
    public function getNAssetCatch()
    {
        $value = $this->get(self::NASSETCATCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAssetCatch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAssetCatch()
    {
        return $this->get(self::NASSETCATCH) !== null;
    }

    /**
     * Sets value of 'nCountTotal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCountTotal($value)
    {
        return $this->set(self::NCOUNTTOTAL, $value);
    }

    /**
     * Returns value of 'nCountTotal' property
     *
     * @return integer
     */
    public function getNCountTotal()
    {
        $value = $this->get(self::NCOUNTTOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCountTotal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCountTotal()
    {
        return $this->get(self::NCOUNTTOTAL) !== null;
    }

    /**
     * Sets value of 'nCountCatch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCountCatch($value)
    {
        return $this->set(self::NCOUNTCATCH, $value);
    }

    /**
     * Returns value of 'nCountCatch' property
     *
     * @return integer
     */
    public function getNCountCatch()
    {
        $value = $this->get(self::NCOUNTCATCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCountCatch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCountCatch()
    {
        return $this->get(self::NCOUNTCATCH) !== null;
    }
}
}