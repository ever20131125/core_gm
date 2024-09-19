<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdatePlanNameReq message
 */
class PDBUpdatePlanNameReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPLANID = 2;
    const SZPLANNAME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLANID => array(
            'name' => 'nPlanID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZPLANNAME => array(
            'name' => 'szPlanName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NPLANID] = null;
        $this->values[self::SZPLANNAME] = null;
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
     * Sets value of 'nPlanID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlanID($value)
    {
        return $this->set(self::NPLANID, $value);
    }

    /**
     * Returns value of 'nPlanID' property
     *
     * @return integer
     */
    public function getNPlanID()
    {
        $value = $this->get(self::NPLANID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlanID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlanID()
    {
        return $this->get(self::NPLANID) !== null;
    }

    /**
     * Sets value of 'szPlanName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPlanName($value)
    {
        return $this->set(self::SZPLANNAME, $value);
    }

    /**
     * Returns value of 'szPlanName' property
     *
     * @return string
     */
    public function getSzPlanName()
    {
        $value = $this->get(self::SZPLANNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPlanName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPlanName()
    {
        return $this->get(self::SZPLANNAME) !== null;
    }
}
}