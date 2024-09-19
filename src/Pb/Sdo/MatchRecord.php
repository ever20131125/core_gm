<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchRecord message
 */
class MatchRecord extends \ProtobufMessage
{
    /* Field index constants */
    const INFO = 1;
    const ROLE = 2;
    const BALANCE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INFO => array(
            'name' => 'info',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistory'
        ),
        self::ROLE => array(
            'name' => 'role',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistoryRole'
        ),
        self::BALANCE => array(
            'name' => 'balance',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistoryBalance'
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
        $this->values[self::INFO] = null;
        $this->values[self::ROLE] = null;
        $this->values[self::BALANCE] = null;
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
     * Sets value of 'info' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistory $value Property value
     *
     * @return null
     */
    public function setInfo(\Xnhd\Core\Pb\Sdo\MatchHistory $value=null)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistory
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }

    /**
     * Returns true if 'info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfo()
    {
        return $this->get(self::INFO) !== null;
    }

    /**
     * Sets value of 'role' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistoryRole $value Property value
     *
     * @return null
     */
    public function setRole(\Xnhd\Core\Pb\Sdo\MatchHistoryRole $value=null)
    {
        return $this->set(self::ROLE, $value);
    }

    /**
     * Returns value of 'role' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryRole
     */
    public function getRole()
    {
        return $this->get(self::ROLE);
    }

    /**
     * Returns true if 'role' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRole()
    {
        return $this->get(self::ROLE) !== null;
    }

    /**
     * Sets value of 'balance' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistoryBalance $value Property value
     *
     * @return null
     */
    public function setBalance(\Xnhd\Core\Pb\Sdo\MatchHistoryBalance $value=null)
    {
        return $this->set(self::BALANCE, $value);
    }

    /**
     * Returns value of 'balance' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryBalance
     */
    public function getBalance()
    {
        return $this->get(self::BALANCE);
    }

    /**
     * Returns true if 'balance' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBalance()
    {
        return $this->get(self::BALANCE) !== null;
    }
}
}