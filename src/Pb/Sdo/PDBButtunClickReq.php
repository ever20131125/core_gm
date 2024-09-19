<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBButtunClickReq message
 */
class PDBButtunClickReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NBUTTUN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBUTTUN => array(
            'name' => 'nButtun',
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
        $this->values[self::NBUTTUN] = null;
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
     * Sets value of 'nButtun' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNButtun($value)
    {
        return $this->set(self::NBUTTUN, $value);
    }

    /**
     * Returns value of 'nButtun' property
     *
     * @return integer
     */
    public function getNButtun()
    {
        $value = $this->get(self::NBUTTUN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nButtun' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNButtun()
    {
        return $this->get(self::NBUTTUN) !== null;
    }
}
}