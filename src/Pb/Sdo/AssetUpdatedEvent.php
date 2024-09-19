<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AssetUpdatedEvent message
 */
class AssetUpdatedEvent extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCETYPE = 1;
    const STROLEPUBLICINFO = 2;
    const SOURCECHANNEL = 3;
    const NASSETTYPE = 4;
    const ARROLDASSET = 5;
    const ARRNEWASSET = 6;
    const NRMB = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\EntityType::enmEntityType_None,
            'name' => 'sourceType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::SOURCECHANNEL => array(
            'name' => 'sourceChannel',
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
        self::NRMB => array(
            'name' => 'nRMB',
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
        $this->values[self::SOURCETYPE] = self::$fields[self::SOURCETYPE]['default'];
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::SOURCECHANNEL] = null;
        $this->values[self::NASSETTYPE] = null;
        $this->values[self::ARROLDASSET] = array();
        $this->values[self::ARRNEWASSET] = array();
        $this->values[self::NRMB] = null;
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
     * Sets value of 'sourceType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceType($value)
    {
        return $this->set(self::SOURCETYPE, $value);
    }

    /**
     * Returns value of 'sourceType' property
     *
     * @return integer
     */
    public function getSourceType()
    {
        $value = $this->get(self::SOURCETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceType()
    {
        return $this->get(self::SOURCETYPE) !== null;
    }

    /**
     * Sets value of 'stRolePublicInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO);
    }

    /**
     * Returns true if 'stRolePublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO) !== null;
    }

    /**
     * Sets value of 'sourceChannel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceChannel($value)
    {
        return $this->set(self::SOURCECHANNEL, $value);
    }

    /**
     * Returns value of 'sourceChannel' property
     *
     * @return integer
     */
    public function getSourceChannel()
    {
        $value = $this->get(self::SOURCECHANNEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceChannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceChannel()
    {
        return $this->get(self::SOURCECHANNEL) !== null;
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

    /**
     * Sets value of 'nRMB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRMB($value)
    {
        return $this->set(self::NRMB, $value);
    }

    /**
     * Returns value of 'nRMB' property
     *
     * @return integer
     */
    public function getNRMB()
    {
        $value = $this->get(self::NRMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRMB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRMB()
    {
        return $this->get(self::NRMB) !== null;
    }
}
}