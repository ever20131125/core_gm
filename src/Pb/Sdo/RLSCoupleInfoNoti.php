<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleInfoNoti message
 */
class RLSCoupleInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID1 = 1;
    const NROLEID2 = 2;
    const STCOUPLEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID1 => array(
            'name' => 'nRoleID1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID2 => array(
            'name' => 'nRoleID2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STCOUPLEINFO => array(
            'name' => 'stCoupleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleInfo'
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
        $this->values[self::NROLEID1] = null;
        $this->values[self::NROLEID2] = null;
        $this->values[self::STCOUPLEINFO] = null;
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
     * Sets value of 'nRoleID1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID1($value)
    {
        return $this->set(self::NROLEID1, $value);
    }

    /**
     * Returns value of 'nRoleID1' property
     *
     * @return integer
     */
    public function getNRoleID1()
    {
        $value = $this->get(self::NROLEID1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID1()
    {
        return $this->get(self::NROLEID1) !== null;
    }

    /**
     * Sets value of 'nRoleID2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID2($value)
    {
        return $this->set(self::NROLEID2, $value);
    }

    /**
     * Returns value of 'nRoleID2' property
     *
     * @return integer
     */
    public function getNRoleID2()
    {
        $value = $this->get(self::NROLEID2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID2()
    {
        return $this->get(self::NROLEID2) !== null;
    }

    /**
     * Sets value of 'stCoupleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleInfo $value Property value
     *
     * @return null
     */
    public function setStCoupleInfo(\Xnhd\Core\Pb\Sdo\CoupleInfo $value=null)
    {
        return $this->set(self::STCOUPLEINFO, $value);
    }

    /**
     * Returns value of 'stCoupleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleInfo
     */
    public function getStCoupleInfo()
    {
        return $this->get(self::STCOUPLEINFO);
    }

    /**
     * Returns true if 'stCoupleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStCoupleInfo()
    {
        return $this->get(self::STCOUPLEINFO) !== null;
    }
}
}