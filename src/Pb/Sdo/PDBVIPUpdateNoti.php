<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBVIPUpdateNoti message
 */
class PDBVIPUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const OLDVIP = 2;
    const NEWVIP = 3;
    const NCOST = 4;
    const BSVIP = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OLDVIP => array(
            'default' => \Xnhd\Core\Pb\Sdo\VIPLevel::enmVIPLevel_Null,
            'name' => 'oldVIP',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWVIP => array(
            'default' => \Xnhd\Core\Pb\Sdo\VIPLevel::enmVIPLevel_Null,
            'name' => 'newVIP',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCOST => array(
            'name' => 'nCost',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BSVIP => array(
            'name' => 'bSVIP',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::OLDVIP] = self::$fields[self::OLDVIP]['default'];
        $this->values[self::NEWVIP] = self::$fields[self::NEWVIP]['default'];
        $this->values[self::NCOST] = null;
        $this->values[self::BSVIP] = null;
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
     * Sets value of 'oldVIP' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOldVIP($value)
    {
        return $this->set(self::OLDVIP, $value);
    }

    /**
     * Returns value of 'oldVIP' property
     *
     * @return integer
     */
    public function getOldVIP()
    {
        $value = $this->get(self::OLDVIP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'oldVIP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOldVIP()
    {
        return $this->get(self::OLDVIP) !== null;
    }

    /**
     * Sets value of 'newVIP' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewVIP($value)
    {
        return $this->set(self::NEWVIP, $value);
    }

    /**
     * Returns value of 'newVIP' property
     *
     * @return integer
     */
    public function getNewVIP()
    {
        $value = $this->get(self::NEWVIP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newVIP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewVIP()
    {
        return $this->get(self::NEWVIP) !== null;
    }

    /**
     * Sets value of 'nCost' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCost($value)
    {
        return $this->set(self::NCOST, $value);
    }

    /**
     * Returns value of 'nCost' property
     *
     * @return integer
     */
    public function getNCost()
    {
        $value = $this->get(self::NCOST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCost()
    {
        return $this->get(self::NCOST) !== null;
    }

    /**
     * Sets value of 'bSVIP' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBSVIP($value)
    {
        return $this->set(self::BSVIP, $value);
    }

    /**
     * Returns value of 'bSVIP' property
     *
     * @return boolean
     */
    public function getBSVIP()
    {
        $value = $this->get(self::BSVIP);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bSVIP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBSVIP()
    {
        return $this->get(self::BSVIP) !== null;
    }
}
}