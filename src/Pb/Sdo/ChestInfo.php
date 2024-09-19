<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ChestInfo message
 */
class ChestInfo extends \ProtobufMessage
{
    /* Field index constants */
    const CHESTTYPE = 1;
    const NROLEID = 2;
    const NITEMID = 3;
    const NQUANTITY = 4;
    const NRESET = 5;
    const NTIMELIMIT = 6;
    const NCHESTID = 7;
    const BEMPTY = 8;
    const NREFRESHSEP = 9;
    const NEMPTYTIMETICK = 10;
    const NOPTION = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHESTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ChestType::enmChest_None,
            'name' => 'chestType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRESET => array(
            'name' => 'nReset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMELIMIT => array(
            'name' => 'nTimeLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCHESTID => array(
            'name' => 'nChestID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BEMPTY => array(
            'name' => 'bEmpty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NREFRESHSEP => array(
            'name' => 'nRefreshSep',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEMPTYTIMETICK => array(
            'name' => 'nEmptyTimeTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
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
        $this->values[self::CHESTTYPE] = self::$fields[self::CHESTTYPE]['default'];
        $this->values[self::NROLEID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::NRESET] = null;
        $this->values[self::NTIMELIMIT] = null;
        $this->values[self::NCHESTID] = null;
        $this->values[self::BEMPTY] = null;
        $this->values[self::NREFRESHSEP] = null;
        $this->values[self::NEMPTYTIMETICK] = null;
        $this->values[self::NOPTION] = null;
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
     * Sets value of 'chestType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChestType($value)
    {
        return $this->set(self::CHESTTYPE, $value);
    }

    /**
     * Returns value of 'chestType' property
     *
     * @return integer
     */
    public function getChestType()
    {
        $value = $this->get(self::CHESTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chestType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChestType()
    {
        return $this->get(self::CHESTTYPE) !== null;
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
     * Sets value of 'nReset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNReset($value)
    {
        return $this->set(self::NRESET, $value);
    }

    /**
     * Returns value of 'nReset' property
     *
     * @return integer
     */
    public function getNReset()
    {
        $value = $this->get(self::NRESET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nReset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNReset()
    {
        return $this->get(self::NRESET) !== null;
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
     * Sets value of 'nChestID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNChestID($value)
    {
        return $this->set(self::NCHESTID, $value);
    }

    /**
     * Returns value of 'nChestID' property
     *
     * @return integer
     */
    public function getNChestID()
    {
        $value = $this->get(self::NCHESTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nChestID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNChestID()
    {
        return $this->get(self::NCHESTID) !== null;
    }

    /**
     * Sets value of 'bEmpty' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBEmpty($value)
    {
        return $this->set(self::BEMPTY, $value);
    }

    /**
     * Returns value of 'bEmpty' property
     *
     * @return boolean
     */
    public function getBEmpty()
    {
        $value = $this->get(self::BEMPTY);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bEmpty' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBEmpty()
    {
        return $this->get(self::BEMPTY) !== null;
    }

    /**
     * Sets value of 'nRefreshSep' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRefreshSep($value)
    {
        return $this->set(self::NREFRESHSEP, $value);
    }

    /**
     * Returns value of 'nRefreshSep' property
     *
     * @return integer
     */
    public function getNRefreshSep()
    {
        $value = $this->get(self::NREFRESHSEP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRefreshSep' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRefreshSep()
    {
        return $this->get(self::NREFRESHSEP) !== null;
    }

    /**
     * Sets value of 'nEmptyTimeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEmptyTimeTick($value)
    {
        return $this->set(self::NEMPTYTIMETICK, $value);
    }

    /**
     * Returns value of 'nEmptyTimeTick' property
     *
     * @return integer
     */
    public function getNEmptyTimeTick()
    {
        $value = $this->get(self::NEMPTYTIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEmptyTimeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEmptyTimeTick()
    {
        return $this->get(self::NEMPTYTIMETICK) !== null;
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
}
}