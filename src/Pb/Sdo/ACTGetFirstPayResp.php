<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetFirstPayResp message
 */
class ACTGetFirstPayResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NFIRSTMONEY = 2;
    const STATE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NFIRSTMONEY => array(
            'name' => 'nFirstMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FirstPayState::enmFirstPayState_Received,
            'name' => 'state',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NFIRSTMONEY] = null;
        $this->values[self::STATE] = self::$fields[self::STATE]['default'];
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'nFirstMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFirstMoney($value)
    {
        return $this->set(self::NFIRSTMONEY, $value);
    }

    /**
     * Returns value of 'nFirstMoney' property
     *
     * @return integer
     */
    public function getNFirstMoney()
    {
        $value = $this->get(self::NFIRSTMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFirstMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFirstMoney()
    {
        return $this->get(self::NFIRSTMONEY) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }
}
}