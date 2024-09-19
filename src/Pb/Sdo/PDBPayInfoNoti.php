<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBPayInfoNoti message
 */
class PDBPayInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STPAYINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STPAYINFO => array(
            'name' => 'stPayInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PayInfo'
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
        $this->values[self::STPAYINFO] = null;
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
     * Sets value of 'stPayInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PayInfo $value Property value
     *
     * @return null
     */
    public function setStPayInfo(\Xnhd\Core\Pb\Sdo\PayInfo $value=null)
    {
        return $this->set(self::STPAYINFO, $value);
    }

    /**
     * Returns value of 'stPayInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PayInfo
     */
    public function getStPayInfo()
    {
        return $this->get(self::STPAYINFO);
    }

    /**
     * Returns true if 'stPayInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPayInfo()
    {
        return $this->get(self::STPAYINFO) !== null;
    }
}
}