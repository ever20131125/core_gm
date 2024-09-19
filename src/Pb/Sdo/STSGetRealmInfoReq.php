<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSGetRealmInfoReq message
 */
class STSGetRealmInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPROVICE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROVICE => array(
            'name' => 'nProvice',
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
        $this->values[self::NPROVICE] = null;
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
     * Sets value of 'nProvice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNProvice($value)
    {
        return $this->set(self::NPROVICE, $value);
    }

    /**
     * Returns value of 'nProvice' property
     *
     * @return integer
     */
    public function getNProvice()
    {
        $value = $this->get(self::NPROVICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nProvice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNProvice()
    {
        return $this->get(self::NPROVICE) !== null;
    }
}
}