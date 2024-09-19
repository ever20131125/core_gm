<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemUnit message
 */
class ItemUnit extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMINSID = 1;
    const BAGTYPE = 2;
    const NITEMID = 3;
    const NITEMTYPE = 4;
    const NKIND = 5;
    const USEMEANS = 6;
    const NQUANTITY = 7;
    const NOWNTICK = 8;
    const NITEMSTATE = 9;
    const RARITY = 10;
    const NLUXURY = 11;
    const STITEMSTYLE = 12;
    const NTIMELIMIT = 13;
    const NOPTION = 14;
    const NBINDID = 15;
    const NADDQUANTITY = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BagType::enmBagType_Normal,
            'name' => 'bagType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::NKIND => array(
            'name' => 'nKind',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USEMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\UseMeans::enmUseMeans_None,
            'name' => 'useMeans',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOWNTICK => array(
            'name' => 'nOwnTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMSTATE => array(
            'name' => 'nItemState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RARITY => array(
            'default' => \Xnhd\Core\Pb\Sdo\ItemRarity::enmItemRarity_Lv1,
            'name' => 'rarity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STITEMSTYLE => array(
            'name' => 'stItemStyle',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemStyle'
        ),
        self::NTIMELIMIT => array(
            'name' => 'nTimeLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBINDID => array(
            'name' => 'nBindID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NADDQUANTITY => array(
            'name' => 'nAddQuantity',
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
        $this->values[self::BAGTYPE] = self::$fields[self::BAGTYPE]['default'];
        $this->values[self::NITEMID] = null;
        $this->values[self::NITEMTYPE] = null;
        $this->values[self::NKIND] = null;
        $this->values[self::USEMEANS] = self::$fields[self::USEMEANS]['default'];
        $this->values[self::NQUANTITY] = null;
        $this->values[self::NOWNTICK] = null;
        $this->values[self::NITEMSTATE] = null;
        $this->values[self::RARITY] = self::$fields[self::RARITY]['default'];
        $this->values[self::NLUXURY] = null;
        $this->values[self::STITEMSTYLE] = null;
        $this->values[self::NTIMELIMIT] = null;
        $this->values[self::NOPTION] = null;
        $this->values[self::NBINDID] = null;
        $this->values[self::NADDQUANTITY] = null;
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
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
    }

    /**
     * Sets value of 'nOwnTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOwnTick($value)
    {
        return $this->set(self::NOWNTICK, $value);
    }

    /**
     * Returns value of 'nOwnTick' property
     *
     * @return integer
     */
    public function getNOwnTick()
    {
        $value = $this->get(self::NOWNTICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOwnTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOwnTick()
    {
        return $this->get(self::NOWNTICK) !== null;
    }

    /**
     * Sets value of 'nItemState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemState($value)
    {
        return $this->set(self::NITEMSTATE, $value);
    }

    /**
     * Returns value of 'nItemState' property
     *
     * @return integer
     */
    public function getNItemState()
    {
        $value = $this->get(self::NITEMSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemState()
    {
        return $this->get(self::NITEMSTATE) !== null;
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
     * Sets value of 'nLuxury' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLuxury($value)
    {
        return $this->set(self::NLUXURY, $value);
    }

    /**
     * Returns value of 'nLuxury' property
     *
     * @return integer
     */
    public function getNLuxury()
    {
        $value = $this->get(self::NLUXURY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLuxury' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLuxury()
    {
        return $this->get(self::NLUXURY) !== null;
    }

    /**
     * Sets value of 'stItemStyle' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemStyle $value Property value
     *
     * @return null
     */
    public function setStItemStyle(\Xnhd\Core\Pb\Sdo\ItemStyle $value=null)
    {
        return $this->set(self::STITEMSTYLE, $value);
    }

    /**
     * Returns value of 'stItemStyle' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemStyle
     */
    public function getStItemStyle()
    {
        return $this->get(self::STITEMSTYLE);
    }

    /**
     * Returns true if 'stItemStyle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStItemStyle()
    {
        return $this->get(self::STITEMSTYLE) !== null;
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

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
    }

    /**
     * Sets value of 'nBindID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBindID($value)
    {
        return $this->set(self::NBINDID, $value);
    }

    /**
     * Returns value of 'nBindID' property
     *
     * @return integer
     */
    public function getNBindID()
    {
        $value = $this->get(self::NBINDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBindID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBindID()
    {
        return $this->get(self::NBINDID) !== null;
    }

    /**
     * Sets value of 'nAddQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAddQuantity($value)
    {
        return $this->set(self::NADDQUANTITY, $value);
    }

    /**
     * Returns value of 'nAddQuantity' property
     *
     * @return integer
     */
    public function getNAddQuantity()
    {
        $value = $this->get(self::NADDQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAddQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAddQuantity()
    {
        return $this->get(self::NADDQUANTITY) !== null;
    }
}
}