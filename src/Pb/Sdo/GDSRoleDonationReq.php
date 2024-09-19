<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSRoleDonationReq message
 */
class GDSRoleDonationReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const DONATIONTYPE = 2;
    const ITEMID = 3;
    const NQUANTITY = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DONATIONTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\DonationType::enmDonationType_Invalid,
            'name' => 'donationType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMID => array(
            'name' => 'itemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::DONATIONTYPE] = self::$fields[self::DONATIONTYPE]['default'];
        $this->values[self::ITEMID] = null;
        $this->values[self::NQUANTITY] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'donationType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDonationType($value)
    {
        return $this->set(self::DONATIONTYPE, $value);
    }

    /**
     * Returns value of 'donationType' property
     *
     * @return integer
     */
    public function getDonationType()
    {
        $value = $this->get(self::DONATIONTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'donationType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDonationType()
    {
        return $this->get(self::DONATIONTYPE) !== null;
    }

    /**
     * Sets value of 'itemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemID($value)
    {
        return $this->set(self::ITEMID, $value);
    }

    /**
     * Returns value of 'itemID' property
     *
     * @return integer
     */
    public function getItemID()
    {
        $value = $this->get(self::ITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'itemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemID()
    {
        return $this->get(self::ITEMID) !== null;
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
}
}