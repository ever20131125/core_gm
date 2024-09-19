<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBReceivePrizeReq message
 */
class PDBReceivePrizeReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const PRIZETYPE = 2;
    const PRIZEID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PrizeType::enmPrizeType_AvatarGain_EachSuit,
            'name' => 'prizeType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZEID => array(
            'name' => 'prizeID',
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
        $this->values[self::PRIZETYPE] = self::$fields[self::PRIZETYPE]['default'];
        $this->values[self::PRIZEID] = null;
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
     * Sets value of 'prizeType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrizeType($value)
    {
        return $this->set(self::PRIZETYPE, $value);
    }

    /**
     * Returns value of 'prizeType' property
     *
     * @return integer
     */
    public function getPrizeType()
    {
        $value = $this->get(self::PRIZETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'prizeType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeType()
    {
        return $this->get(self::PRIZETYPE) !== null;
    }

    /**
     * Sets value of 'prizeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrizeID($value)
    {
        return $this->set(self::PRIZEID, $value);
    }

    /**
     * Returns value of 'prizeID' property
     *
     * @return integer
     */
    public function getPrizeID()
    {
        $value = $this->get(self::PRIZEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'prizeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeID()
    {
        return $this->get(self::PRIZEID) !== null;
    }
}
}