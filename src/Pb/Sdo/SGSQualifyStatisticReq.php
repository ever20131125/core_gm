<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyStatisticReq message
 */
class SGSQualifyStatisticReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NNO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNO => array(
            'default' => 0,
            'name' => 'nNo',
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
        $this->values[self::NNO] = self::$fields[self::NNO]['default'];
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
     * Sets value of 'nNo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNo($value)
    {
        return $this->set(self::NNO, $value);
    }

    /**
     * Returns value of 'nNo' property
     *
     * @return integer
     */
    public function getNNo()
    {
        $value = $this->get(self::NNO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNo()
    {
        return $this->get(self::NNO) !== null;
    }
}
}