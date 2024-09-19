<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetFixupInfoResp message
 */
class COSGetFixupInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const FIXUPSTATE = 3;
    const STFIXUPAPPLY = 4;
    const NTIME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIXUPSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FixupState::enmFixupState_None,
            'name' => 'fixupState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STFIXUPAPPLY => array(
            'name' => 'stFixupApply',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\FixupApply'
        ),
        self::NTIME => array(
            'name' => 'nTime',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::FIXUPSTATE] = self::$fields[self::FIXUPSTATE]['default'];
        $this->values[self::STFIXUPAPPLY] = null;
        $this->values[self::NTIME] = null;
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
     * Sets value of 'fixupState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFixupState($value)
    {
        return $this->set(self::FIXUPSTATE, $value);
    }

    /**
     * Returns value of 'fixupState' property
     *
     * @return integer
     */
    public function getFixupState()
    {
        $value = $this->get(self::FIXUPSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fixupState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFixupState()
    {
        return $this->get(self::FIXUPSTATE) !== null;
    }

    /**
     * Sets value of 'stFixupApply' property
     *
     * @param \Xnhd\Core\Pb\Sdo\FixupApply $value Property value
     *
     * @return null
     */
    public function setStFixupApply(\Xnhd\Core\Pb\Sdo\FixupApply $value=null)
    {
        return $this->set(self::STFIXUPAPPLY, $value);
    }

    /**
     * Returns value of 'stFixupApply' property
     *
     * @return \Xnhd\Core\Pb\Sdo\FixupApply
     */
    public function getStFixupApply()
    {
        return $this->get(self::STFIXUPAPPLY);
    }

    /**
     * Returns true if 'stFixupApply' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStFixupApply()
    {
        return $this->get(self::STFIXUPAPPLY) !== null;
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }
}
}