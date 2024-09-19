<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSTransferAddItemReq message
 */
class COSTransferAddItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STTRANSFERITEM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STTRANSFERITEM => array(
            'name' => 'stTransferItem',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemExtra'
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
        $this->values[self::STTRANSFERITEM] = null;
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
     * Sets value of 'stTransferItem' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemExtra $value Property value
     *
     * @return null
     */
    public function setStTransferItem(\Xnhd\Core\Pb\Sdo\ItemExtra $value=null)
    {
        return $this->set(self::STTRANSFERITEM, $value);
    }

    /**
     * Returns value of 'stTransferItem' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra
     */
    public function getStTransferItem()
    {
        return $this->get(self::STTRANSFERITEM);
    }

    /**
     * Returns true if 'stTransferItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTransferItem()
    {
        return $this->get(self::STTRANSFERITEM) !== null;
    }
}
}