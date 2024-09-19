<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBExchangeInfoNoti message
 */
class PDBExchangeInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STINFO => array(
            'name' => 'stInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ExchangeInfo'
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
        $this->values[self::STINFO] = null;
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
     * Sets value of 'stInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ExchangeInfo $value Property value
     *
     * @return null
     */
    public function setStInfo(\Xnhd\Core\Pb\Sdo\ExchangeInfo $value=null)
    {
        return $this->set(self::STINFO, $value);
    }

    /**
     * Returns value of 'stInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ExchangeInfo
     */
    public function getStInfo()
    {
        return $this->get(self::STINFO);
    }

    /**
     * Returns true if 'stInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStInfo()
    {
        return $this->get(self::STINFO) !== null;
    }
}
}