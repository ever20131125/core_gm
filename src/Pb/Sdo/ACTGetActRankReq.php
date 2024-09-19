<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetActRankReq message
 */
class ACTGetActRankReq extends \ProtobufMessage
{
    /* Field index constants */
    const ACTID = 1;
    const ROLEID = 2;
    const RANKMIN = 3;
    const RANKMAX = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKMIN => array(
            'name' => 'rankmin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKMAX => array(
            'name' => 'rankmax',
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
        $this->values[self::ACTID] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::RANKMIN] = null;
        $this->values[self::RANKMAX] = null;
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
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
    }

    /**
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'rankmin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankmin($value)
    {
        return $this->set(self::RANKMIN, $value);
    }

    /**
     * Returns value of 'rankmin' property
     *
     * @return integer
     */
    public function getRankmin()
    {
        $value = $this->get(self::RANKMIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankmin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankmin()
    {
        return $this->get(self::RANKMIN) !== null;
    }

    /**
     * Sets value of 'rankmax' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankmax($value)
    {
        return $this->set(self::RANKMAX, $value);
    }

    /**
     * Returns value of 'rankmax' property
     *
     * @return integer
     */
    public function getRankmax()
    {
        $value = $this->get(self::RANKMAX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankmax' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankmax()
    {
        return $this->get(self::RANKMAX) !== null;
    }
}
}