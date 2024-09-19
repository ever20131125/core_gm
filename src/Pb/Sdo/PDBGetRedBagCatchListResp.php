<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRedBagCatchListResp message
 */
class PDBGetRedBagCatchListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRASSETTYPE = 3;
    const ARRASSETVALUE = 4;
    const NBESTCNT = 5;
    const ARRREDBAGCATCH = 6;

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
        self::ARRASSETVALUE => array(
            'name' => 'arrAssetValue',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBESTCNT => array(
            'name' => 'nBestCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRREDBAGCATCH => array(
            'name' => 'arrRedBagCatch',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RedBagCatch'
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
        $this->values[self::ARRASSETVALUE] = array();
        $this->values[self::NBESTCNT] = null;
        $this->values[self::ARRREDBAGCATCH] = array();
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
     * Appends value to 'arrAssetValue' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAssetValue($value)
    {
        return $this->append(self::ARRASSETVALUE, $value);
    }

    /**
     * Clears 'arrAssetValue' list
     *
     * @return null
     */
    public function clearArrAssetValue()
    {
        return $this->clear(self::ARRASSETVALUE);
    }

    /**
     * Returns 'arrAssetValue' list
     *
     * @return integer[]
     */
    public function getArrAssetValue()
    {
        return $this->get(self::ARRASSETVALUE);
    }

    /**
     * Returns true if 'arrAssetValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAssetValue()
    {
        return count($this->get(self::ARRASSETVALUE)) !== 0;
    }

    /**
     * Returns 'arrAssetValue' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAssetValueIterator()
    {
        return new \ArrayIterator($this->get(self::ARRASSETVALUE));
    }

    /**
     * Returns element from 'arrAssetValue' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAssetValueAt($offset)
    {
        return $this->get(self::ARRASSETVALUE, $offset);
    }

    /**
     * Returns count of 'arrAssetValue' list
     *
     * @return int
     */
    public function getArrAssetValueCount()
    {
        return $this->count(self::ARRASSETVALUE);
    }

    /**
     * Sets value of 'nBestCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBestCnt($value)
    {
        return $this->set(self::NBESTCNT, $value);
    }

    /**
     * Returns value of 'nBestCnt' property
     *
     * @return integer
     */
    public function getNBestCnt()
    {
        $value = $this->get(self::NBESTCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBestCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBestCnt()
    {
        return $this->get(self::NBESTCNT) !== null;
    }

    /**
     * Appends value to 'arrRedBagCatch' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RedBagCatch $value Value to append
     *
     * @return null
     */
    public function appendArrRedBagCatch(\Xnhd\Core\Pb\Sdo\RedBagCatch $value)
    {
        return $this->append(self::ARRREDBAGCATCH, $value);
    }

    /**
     * Clears 'arrRedBagCatch' list
     *
     * @return null
     */
    public function clearArrRedBagCatch()
    {
        return $this->clear(self::ARRREDBAGCATCH);
    }

    /**
     * Returns 'arrRedBagCatch' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagCatch[]
     */
    public function getArrRedBagCatch()
    {
        return $this->get(self::ARRREDBAGCATCH);
    }

    /**
     * Returns true if 'arrRedBagCatch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRedBagCatch()
    {
        return count($this->get(self::ARRREDBAGCATCH)) !== 0;
    }

    /**
     * Returns 'arrRedBagCatch' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRedBagCatchIterator()
    {
        return new \ArrayIterator($this->get(self::ARRREDBAGCATCH));
    }

    /**
     * Returns element from 'arrRedBagCatch' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagCatch
     */
    public function getArrRedBagCatchAt($offset)
    {
        return $this->get(self::ARRREDBAGCATCH, $offset);
    }

    /**
     * Returns count of 'arrRedBagCatch' list
     *
     * @return int
     */
    public function getArrRedBagCatchCount()
    {
        return $this->count(self::ARRREDBAGCATCH);
    }
}
}