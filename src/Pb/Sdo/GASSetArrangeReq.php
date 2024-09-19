<?php
/**
 * Auto generated from gameserver.proto at 2022-06-19 02:07:56
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASSetArrangeReq message
 */
class GASSetArrangeReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRTYPE = 2;
    const STARRANGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ArrangeType::enmArrType_Invalid,
            'name' => 'arrType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARRANGE => array(
            'name' => 'stArrange',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingArrange'
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
        $this->values[self::ARRTYPE] = self::$fields[self::ARRTYPE]['default'];
        $this->values[self::STARRANGE] = null;
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
     * Sets value of 'arrType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setArrType($value)
    {
        return $this->set(self::ARRTYPE, $value);
    }

    /**
     * Returns value of 'arrType' property
     *
     * @return integer
     */
    public function getArrType()
    {
        $value = $this->get(self::ARRTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'arrType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrType()
    {
        return $this->get(self::ARRTYPE) !== null;
    }

    /**
     * Sets value of 'stArrange' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingArrange $value Property value
     *
     * @return null
     */
    public function setStArrange(\Xnhd\Core\Pb\Sdo\WeddingArrange $value=null)
    {
        return $this->set(self::STARRANGE, $value);
    }

    /**
     * Returns value of 'stArrange' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingArrange
     */
    public function getStArrange()
    {
        return $this->get(self::STARRANGE);
    }

    /**
     * Returns true if 'stArrange' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStArrange()
    {
        return $this->get(self::STARRANGE) !== null;
    }
}
}