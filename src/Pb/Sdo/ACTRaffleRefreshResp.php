<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTRaffleRefreshResp message
 */
class ACTRaffleRefreshResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ACTTYPE = 3;
    const NSTARTTIME = 4;
    const NREFRESHCOST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActType::enmActType_None,
            'name' => 'actType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NREFRESHCOST => array(
            'name' => 'nRefreshCost',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::ACTTYPE] = self::$fields[self::ACTTYPE]['default'];
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NREFRESHCOST] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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
     * Sets value of 'actType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActType($value)
    {
        return $this->set(self::ACTTYPE, $value);
    }

    /**
     * Returns value of 'actType' property
     *
     * @return integer
     */
    public function getActType()
    {
        $value = $this->get(self::ACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActType()
    {
        return $this->get(self::ACTTYPE) !== null;
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nRefreshCost' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRefreshCost($value)
    {
        return $this->set(self::NREFRESHCOST, $value);
    }

    /**
     * Returns value of 'nRefreshCost' property
     *
     * @return integer
     */
    public function getNRefreshCost()
    {
        $value = $this->get(self::NREFRESHCOST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRefreshCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRefreshCost()
    {
        return $this->get(self::NREFRESHCOST) !== null;
    }
}
}