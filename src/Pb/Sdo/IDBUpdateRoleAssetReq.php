<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBUpdateRoleAssetReq message
 */
class IDBUpdateRoleAssetReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const UPDATEMEANS = 3;
    const NASSETTYPE = 4;
    const ARRASSET = 5;

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
        self::UPDATEMEANS => array(
            'default' => \Xnhd\Core\Pb\Sdo\UpdateMeans::enmUpdateMeans_None,
            'name' => 'updateMeans',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASSETTYPE => array(
            'name' => 'nAssetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRASSET => array(
            'name' => 'arrAsset',
            'repeated' => true,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::UPDATEMEANS] = self::$fields[self::UPDATEMEANS]['default'];
        $this->values[self::NASSETTYPE] = null;
        $this->values[self::ARRASSET] = array();
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
     * Sets value of 'updateMeans' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateMeans($value)
    {
        return $this->set(self::UPDATEMEANS, $value);
    }

    /**
     * Returns value of 'updateMeans' property
     *
     * @return integer
     */
    public function getUpdateMeans()
    {
        $value = $this->get(self::UPDATEMEANS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateMeans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateMeans()
    {
        return $this->get(self::UPDATEMEANS) !== null;
    }

    /**
     * Sets value of 'nAssetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAssetType($value)
    {
        return $this->set(self::NASSETTYPE, $value);
    }

    /**
     * Returns value of 'nAssetType' property
     *
     * @return integer
     */
    public function getNAssetType()
    {
        $value = $this->get(self::NASSETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAssetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAssetType()
    {
        return $this->get(self::NASSETTYPE) !== null;
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
}
}