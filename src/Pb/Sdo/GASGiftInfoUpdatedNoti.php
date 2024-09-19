<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGiftInfoUpdatedNoti message
 */
class GASGiftInfoUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NWEDDINGID = 1;
    const NROLEID = 2;
    const STGIFTINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWEDDINGID => array(
            'name' => 'nWeddingID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STGIFTINFO => array(
            'name' => 'stGiftInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingGiftInfo'
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
        $this->values[self::NWEDDINGID] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::STGIFTINFO] = null;
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
     * Sets value of 'nWeddingID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingID($value)
    {
        return $this->set(self::NWEDDINGID, $value);
    }

    /**
     * Returns value of 'nWeddingID' property
     *
     * @return integer
     */
    public function getNWeddingID()
    {
        $value = $this->get(self::NWEDDINGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingID()
    {
        return $this->get(self::NWEDDINGID) !== null;
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
     * Sets value of 'stGiftInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingGiftInfo $value Property value
     *
     * @return null
     */
    public function setStGiftInfo(\Xnhd\Core\Pb\Sdo\WeddingGiftInfo $value=null)
    {
        return $this->set(self::STGIFTINFO, $value);
    }

    /**
     * Returns value of 'stGiftInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingGiftInfo
     */
    public function getStGiftInfo()
    {
        return $this->get(self::STGIFTINFO);
    }

    /**
     * Returns true if 'stGiftInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStGiftInfo()
    {
        return $this->get(self::STGIFTINFO) !== null;
    }
}
}