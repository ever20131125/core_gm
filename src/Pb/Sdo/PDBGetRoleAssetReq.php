<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRoleAssetReq message
 */
class PDBGetRoleAssetReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRASSETTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        $this->values[self::ARRASSETTYPE] = array();
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
}
}