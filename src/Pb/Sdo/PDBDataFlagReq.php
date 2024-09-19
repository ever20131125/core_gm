<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBDataFlagReq message
 */
class PDBDataFlagReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const DATAFLAG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATAFLAG => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameDataFlag::enmDataFlag_None,
            'name' => 'dataFlag',
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
        $this->values[self::DATAFLAG] = self::$fields[self::DATAFLAG]['default'];
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
     * Sets value of 'dataFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDataFlag($value)
    {
        return $this->set(self::DATAFLAG, $value);
    }

    /**
     * Returns value of 'dataFlag' property
     *
     * @return integer
     */
    public function getDataFlag()
    {
        $value = $this->get(self::DATAFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dataFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataFlag()
    {
        return $this->get(self::DATAFLAG) !== null;
    }
}
}