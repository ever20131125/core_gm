<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTSetFragmentReq message
 */
class ACTSetFragmentReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NACTID = 2;
    const NSETFRAGMENTTYPE = 3;
    const NFRAGMENTTYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTID => array(
            'name' => 'nActID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSETFRAGMENTTYPE => array(
            'name' => 'nSetFragmentType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFRAGMENTTYPE => array(
            'name' => 'nFragmentType',
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
        $this->values[self::NACTID] = null;
        $this->values[self::NSETFRAGMENTTYPE] = null;
        $this->values[self::NFRAGMENTTYPE] = null;
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
     * Sets value of 'nActID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActID($value)
    {
        return $this->set(self::NACTID, $value);
    }

    /**
     * Returns value of 'nActID' property
     *
     * @return integer
     */
    public function getNActID()
    {
        $value = $this->get(self::NACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActID()
    {
        return $this->get(self::NACTID) !== null;
    }

    /**
     * Sets value of 'nSetFragmentType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSetFragmentType($value)
    {
        return $this->set(self::NSETFRAGMENTTYPE, $value);
    }

    /**
     * Returns value of 'nSetFragmentType' property
     *
     * @return integer
     */
    public function getNSetFragmentType()
    {
        $value = $this->get(self::NSETFRAGMENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSetFragmentType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSetFragmentType()
    {
        return $this->get(self::NSETFRAGMENTTYPE) !== null;
    }

    /**
     * Sets value of 'nFragmentType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFragmentType($value)
    {
        return $this->set(self::NFRAGMENTTYPE, $value);
    }

    /**
     * Returns value of 'nFragmentType' property
     *
     * @return integer
     */
    public function getNFragmentType()
    {
        $value = $this->get(self::NFRAGMENTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFragmentType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFragmentType()
    {
        return $this->get(self::NFRAGMENTTYPE) !== null;
    }
}
}