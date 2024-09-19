<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRoleAssetResp message
 */
class PDBGetRoleAssetResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRASSETTYPE = 3;
    const ARRASSET = 4;

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
        self::ARRASSETTYPE => array(
            'name' => 'arrAssetType',
            'repeated' => true,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRASSETTYPE] = array();
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