<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdateRoleAssetResp message
 */
class PDBUpdateRoleAssetResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SOURCE = 3;
    const NASSETTYPE = 4;
    const ARROLDASSET = 5;
    const ARRNEWASSET = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
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
        self::NASSETTYPE => array(
            'name' => 'nAssetType',
            'required' => false,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::NASSETTYPE] = null;
        $this->values[self::ARROLDASSET] = array();
        $this->values[self::ARRNEWASSET] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
}
}