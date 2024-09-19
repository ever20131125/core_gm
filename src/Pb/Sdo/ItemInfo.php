<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemInfo message
 */
class ItemInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const NITEMTYPE = 2;
    const USEMEANS = 3;
    const RARITY = 4;
    const NKIND = 5;
    const NSUITID = 6;
    const NOPTIONAL = 7;
    const SZNAME = 8;
    const SZICON = 9;
    const NCHIPID = 13;
    const NTIMELIMIT = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMTYPE => array(
            'name' => 'nItemType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USEMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\UseMeans::enmUseMeans_None,
            'name' => 'useMeans',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RARITY => array(
            'default' => \Xnhd\Core\Pb\Sdo\ItemRarity::enmItemRarity_Lv1,
            'name' => 'rarity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NKIND => array(
            'name' => 'nKind',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSUITID => array(
            'name' => 'nSuitID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTIONAL => array(
            'name' => 'nOptional',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZNAME => array(
            'name' => 'szName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZICON => array(
            'name' => 'szIcon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NCHIPID => array(
            'name' => 'nChipID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMELIMIT => array(
            'name' => 'nTimeLimit',
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
        $this->values[self::NITEMID] = null;
        $this->values[self::NITEMTYPE] = null;
        $this->values[self::USEMEANS] = self::$fields[self::USEMEANS]['default'];
        $this->values[self::RARITY] = self::$fields[self::RARITY]['default'];
        $this->values[self::NKIND] = null;
        $this->values[self::NSUITID] = null;
        $this->values[self::NOPTIONAL] = null;
        $this->values[self::SZNAME] = null;
        $this->values[self::SZICON] = null;
        $this->values[self::NCHIPID] = null;
        $this->values[self::NTIMELIMIT] = null;
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
     * Sets value of 'nItemType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemType($value)
    {
        return $this->set(self::NITEMTYPE, $value);
    }

    /**
     * Returns value of 'nItemType' property
     *
     * @return integer
     */
    public function getNItemType()
    {
        $value = $this->get(self::NITEMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemType()
    {
        return $this->get(self::NITEMTYPE) !== null;
    }

    /**
     * Sets value of 'useMeans' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUseMeans($value)
    {
        return $this->set(self::USEMEANS, $value);
    }

    /**
     * Returns value of 'useMeans' property
     *
     * @return integer
     */
    public function getUseMeans()
    {
        $value = $this->get(self::USEMEANS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'useMeans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUseMeans()
    {
        return $this->get(self::USEMEANS) !== null;
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
     * Sets value of 'nKind' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNKind($value)
    {
        return $this->set(self::NKIND, $value);
    }

    /**
     * Returns value of 'nKind' property
     *
     * @return integer
     */
    public function getNKind()
    {
        $value = $this->get(self::NKIND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nKind' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNKind()
    {
        return $this->get(self::NKIND) !== null;
    }

    /**
     * Sets value of 'nSuitID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSuitID($value)
    {
        return $this->set(self::NSUITID, $value);
    }

    /**
     * Returns value of 'nSuitID' property
     *
     * @return integer
     */
    public function getNSuitID()
    {
        $value = $this->get(self::NSUITID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSuitID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSuitID()
    {
        return $this->get(self::NSUITID) !== null;
    }

    /**
     * Sets value of 'nOptional' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOptional($value)
    {
        return $this->set(self::NOPTIONAL, $value);
    }

    /**
     * Returns value of 'nOptional' property
     *
     * @return integer
     */
    public function getNOptional()
    {
        $value = $this->get(self::NOPTIONAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOptional' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOptional()
    {
        return $this->get(self::NOPTIONAL) !== null;
    }

    /**
     * Sets value of 'szName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzName($value)
    {
        return $this->set(self::SZNAME, $value);
    }

    /**
     * Returns value of 'szName' property
     *
     * @return string
     */
    public function getSzName()
    {
        $value = $this->get(self::SZNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzName()
    {
        return $this->get(self::SZNAME) !== null;
    }

    /**
     * Sets value of 'szIcon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzIcon($value)
    {
        return $this->set(self::SZICON, $value);
    }

    /**
     * Returns value of 'szIcon' property
     *
     * @return string
     */
    public function getSzIcon()
    {
        $value = $this->get(self::SZICON);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szIcon' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzIcon()
    {
        return $this->get(self::SZICON) !== null;
    }

    /**
     * Sets value of 'nChipID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChipID($value)
    {
        return $this->set(self::NCHIPID, $value);
    }

    /**
     * Returns value of 'nChipID' property
     *
     * @return integer
     */
    public function getNChipID()
    {
        $value = $this->get(self::NCHIPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChipID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChipID()
    {
        return $this->get(self::NCHIPID) !== null;
    }

    /**
     * Sets value of 'nTimeLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeLimit($value)
    {
        return $this->set(self::NTIMELIMIT, $value);
    }

    /**
     * Returns value of 'nTimeLimit' property
     *
     * @return integer
     */
    public function getNTimeLimit()
    {
        $value = $this->get(self::NTIMELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeLimit()
    {
        return $this->get(self::NTIMELIMIT) !== null;
    }
}
}