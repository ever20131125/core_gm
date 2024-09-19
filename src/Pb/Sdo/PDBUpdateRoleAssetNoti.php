<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdateRoleAssetNoti message
 */
class PDBUpdateRoleAssetNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const ARRASSETTYPE = 3;
    const ARROLDASSET = 4;
    const ARRNEWASSET = 5;
    const ARRASSET = 6;
    const SZORDER = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRASSETTYPE => array(
            'name' => 'arrAssetType',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROLDASSET => array(
            'name' => 'arrOldAsset',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRNEWASSET => array(
            'name' => 'arrNewAsset',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRASSET => array(
            'name' => 'arrAsset',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZORDER => array(
            'name' => 'szOrder',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::ARRASSETTYPE] = array();
        $this->values[self::ARROLDASSET] = array();
        $this->values[self::ARRNEWASSET] = array();
        $this->values[self::ARRASSET] = array();
        $this->values[self::SZORDER] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Appends value to 'arrAssetType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAssetType($value)
    {
        return $this->append(self::ARRASSETTYPE, $value);
    }

    /**
     * Clears 'arrAssetType' list
     *
     * @return null
     */
    public function clearArrAssetType()
    {
        return $this->clear(self::ARRASSETTYPE);
    }

    /**
     * Returns 'arrAssetType' list
     *
     * @return integer[]
     */
    public function getArrAssetType()
    {
        return $this->get(self::ARRASSETTYPE);
    }

    /**
     * Returns true if 'arrAssetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAssetType()
    {
        return count($this->get(self::ARRASSETTYPE)) !== 0;
    }

    /**
     * Returns 'arrAssetType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAssetTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRASSETTYPE));
    }

    /**
     * Returns element from 'arrAssetType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAssetTypeAt($offset)
    {
        return $this->get(self::ARRASSETTYPE, $offset);
    }

    /**
     * Returns count of 'arrAssetType' list
     *
     * @return int
     */
    public function getArrAssetTypeCount()
    {
        return $this->count(self::ARRASSETTYPE);
    }

    /**
     * Appends value to 'arrOldAsset' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOldAsset($value)
    {
        return $this->append(self::ARROLDASSET, $value);
    }

    /**
     * Clears 'arrOldAsset' list
     *
     * @return null
     */
    public function clearArrOldAsset()
    {
        return $this->clear(self::ARROLDASSET);
    }

    /**
     * Returns 'arrOldAsset' list
     *
     * @return integer[]
     */
    public function getArrOldAsset()
    {
        return $this->get(self::ARROLDASSET);
    }

    /**
     * Returns true if 'arrOldAsset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOldAsset()
    {
        return count($this->get(self::ARROLDASSET)) !== 0;
    }

    /**
     * Returns 'arrOldAsset' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOldAssetIterator()
    {
        return new \ArrayIterator($this->get(self::ARROLDASSET));
    }

    /**
     * Returns element from 'arrOldAsset' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOldAssetAt($offset)
    {
        return $this->get(self::ARROLDASSET, $offset);
    }

    /**
     * Returns count of 'arrOldAsset' list
     *
     * @return int
     */
    public function getArrOldAssetCount()
    {
        return $this->count(self::ARROLDASSET);
    }

    /**
     * Appends value to 'arrNewAsset' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrNewAsset($value)
    {
        return $this->append(self::ARRNEWASSET, $value);
    }

    /**
     * Clears 'arrNewAsset' list
     *
     * @return null
     */
    public function clearArrNewAsset()
    {
        return $this->clear(self::ARRNEWASSET);
    }

    /**
     * Returns 'arrNewAsset' list
     *
     * @return integer[]
     */
    public function getArrNewAsset()
    {
        return $this->get(self::ARRNEWASSET);
    }

    /**
     * Returns true if 'arrNewAsset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNewAsset()
    {
        return count($this->get(self::ARRNEWASSET)) !== 0;
    }

    /**
     * Returns 'arrNewAsset' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNewAssetIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNEWASSET));
    }

    /**
     * Returns element from 'arrNewAsset' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrNewAssetAt($offset)
    {
        return $this->get(self::ARRNEWASSET, $offset);
    }

    /**
     * Returns count of 'arrNewAsset' list
     *
     * @return int
     */
    public function getArrNewAssetCount()
    {
        return $this->count(self::ARRNEWASSET);
    }

    /**
     * Appends value to 'arrAsset' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAsset($value)
    {
        return $this->append(self::ARRASSET, $value);
    }

    /**
     * Clears 'arrAsset' list
     *
     * @return null
     */
    public function clearArrAsset()
    {
        return $this->clear(self::ARRASSET);
    }

    /**
     * Returns 'arrAsset' list
     *
     * @return integer[]
     */
    public function getArrAsset()
    {
        return $this->get(self::ARRASSET);
    }

    /**
     * Returns true if 'arrAsset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAsset()
    {
        return count($this->get(self::ARRASSET)) !== 0;
    }

    /**
     * Returns 'arrAsset' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAssetIterator()
    {
        return new \ArrayIterator($this->get(self::ARRASSET));
    }

    /**
     * Returns element from 'arrAsset' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAssetAt($offset)
    {
        return $this->get(self::ARRASSET, $offset);
    }

    /**
     * Returns count of 'arrAsset' list
     *
     * @return int
     */
    public function getArrAssetCount()
    {
        return $this->count(self::ARRASSET);
    }

    /**
     * Sets value of 'szOrder' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOrder($value)
    {
        return $this->set(self::SZORDER, $value);
    }

    /**
     * Returns value of 'szOrder' property
     *
     * @return string
     */
    public function getSzOrder()
    {
        $value = $this->get(self::SZORDER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOrder' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOrder()
    {
        return $this->get(self::SZORDER) !== null;
    }
}
}