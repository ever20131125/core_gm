<?php
/**
 * Auto generated from searchserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SHSGetRoleInfoByNameReq message
 */
class SHSGetRoleInfoByNameReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZROLENAME = 1;
    const NZONEID = 2;
    const FUZZY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FUZZY => array(
            'default' => 0,
            'name' => 'fuzzy',
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
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::FUZZY] = self::$fields[self::FUZZY]['default'];
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
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Sets value of 'fuzzy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFuzzy($value)
    {
        return $this->set(self::FUZZY, $value);
    }

    /**
     * Returns value of 'fuzzy' property
     *
     * @return integer
     */
    public function getFuzzy()
    {
        $value = $this->get(self::FUZZY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fuzzy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFuzzy()
    {
        return $this->get(self::FUZZY) !== null;
    }
}
}