<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBCoupleUpdateNoti message
 */
class IDBCoupleUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NLOVE = 2;
    const NPAYMENT = 3;
    const NEXP = 4;
    const NPETHOUSE = 5;
    const SOURCE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVE => array(
            'name' => 'nLove',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAYMENT => array(
            'name' => 'nPayment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXP => array(
            'name' => 'nExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPETHOUSE => array(
            'name' => 'nPetHouse',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NLOVE] = null;
        $this->values[self::NPAYMENT] = null;
        $this->values[self::NEXP] = null;
        $this->values[self::NPETHOUSE] = null;
        $this->values[self::SOURCE] = null;
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
     * Sets value of 'nLove' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLove($value)
    {
        return $this->set(self::NLOVE, $value);
    }

    /**
     * Returns value of 'nLove' property
     *
     * @return integer
     */
    public function getNLove()
    {
        $value = $this->get(self::NLOVE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLove' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLove()
    {
        return $this->get(self::NLOVE) !== null;
    }

    /**
     * Sets value of 'nPayment' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPayment($value)
    {
        return $this->set(self::NPAYMENT, $value);
    }

    /**
     * Returns value of 'nPayment' property
     *
     * @return integer
     */
    public function getNPayment()
    {
        $value = $this->get(self::NPAYMENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPayment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPayment()
    {
        return $this->get(self::NPAYMENT) !== null;
    }

    /**
     * Sets value of 'nExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExp($value)
    {
        return $this->set(self::NEXP, $value);
    }

    /**
     * Returns value of 'nExp' property
     *
     * @return integer
     */
    public function getNExp()
    {
        $value = $this->get(self::NEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExp()
    {
        return $this->get(self::NEXP) !== null;
    }

    /**
     * Sets value of 'nPetHouse' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPetHouse($value)
    {
        return $this->set(self::NPETHOUSE, $value);
    }

    /**
     * Returns value of 'nPetHouse' property
     *
     * @return integer
     */
    public function getNPetHouse()
    {
        $value = $this->get(self::NPETHOUSE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPetHouse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPetHouse()
    {
        return $this->get(self::NPETHOUSE) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }
}
}