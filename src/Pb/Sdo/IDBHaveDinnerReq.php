<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBHaveDinnerReq message
 */
class IDBHaveDinnerReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NITEMINSID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
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
        $this->values[self::NITEMINSID] = null;
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
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
    }
}
}