<?php
/**
 * Auto generated from itemdbserver.proto at 2022-06-18 10:46:39
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBLimitGiftInfoNoti message
 */
class IDBLimitGiftInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STLIMITGIFT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STLIMITGIFT => array(
            'name' => 'stLimitGift',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\LimitGiftInfo'
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
        $this->values[self::STLIMITGIFT] = null;
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
     * Sets value of 'stLimitGift' property
     *
     * @param \Xnhd\Core\Pb\Sdo\LimitGiftInfo $value Property value
     *
     * @return null
     */
    public function setStLimitGift(\Xnhd\Core\Pb\Sdo\LimitGiftInfo $value=null)
    {
        return $this->set(self::STLIMITGIFT, $value);
    }

    /**
     * Returns value of 'stLimitGift' property
     *
     * @return \Xnhd\Core\Pb\Sdo\LimitGiftInfo
     */
    public function getStLimitGift()
    {
        return $this->get(self::STLIMITGIFT);
    }

    /**
     * Returns true if 'stLimitGift' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStLimitGift()
    {
        return $this->get(self::STLIMITGIFT) !== null;
    }
}
}