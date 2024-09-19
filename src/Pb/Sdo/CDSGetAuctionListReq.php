<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetAuctionListReq message
 */
class CDSGetAuctionListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMID = 1;
    const STARTBIDID = 2;
    const ORDER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTBIDID => array(
            'default' => -1,
            'name' => 'startBidID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ORDER => array(
            'default' => 0,
            'name' => 'order',
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
        $this->values[self::STARTBIDID] = self::$fields[self::STARTBIDID]['default'];
        $this->values[self::ORDER] = self::$fields[self::ORDER]['default'];
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
     * Sets value of 'startBidID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartBidID($value)
    {
        return $this->set(self::STARTBIDID, $value);
    }

    /**
     * Returns value of 'startBidID' property
     *
     * @return integer
     */
    public function getStartBidID()
    {
        $value = $this->get(self::STARTBIDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startBidID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartBidID()
    {
        return $this->get(self::STARTBIDID) !== null;
    }

    /**
     * Sets value of 'order' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrder($value)
    {
        return $this->set(self::ORDER, $value);
    }

    /**
     * Returns value of 'order' property
     *
     * @return integer
     */
    public function getOrder()
    {
        $value = $this->get(self::ORDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'order' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOrder()
    {
        return $this->get(self::ORDER) !== null;
    }
}
}