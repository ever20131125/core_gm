<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSUpdateLoverValueResp message
 */
class RLSUpdateLoverValueResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const LOVERID = 3;
    const CURRENTLOVERVALUE = 4;

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
        self::LOVERID => array(
            'name' => 'loverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRENTLOVERVALUE => array(
            'name' => 'currentLoverValue',
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
        $this->values[self::LOVERID] = null;
        $this->values[self::CURRENTLOVERVALUE] = null;
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
     * Sets value of 'loverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverID($value)
    {
        return $this->set(self::LOVERID, $value);
    }

    /**
     * Returns value of 'loverID' property
     *
     * @return integer
     */
    public function getLoverID()
    {
        $value = $this->get(self::LOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverID()
    {
        return $this->get(self::LOVERID) !== null;
    }

    /**
     * Sets value of 'currentLoverValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentLoverValue($value)
    {
        return $this->set(self::CURRENTLOVERVALUE, $value);
    }

    /**
     * Returns value of 'currentLoverValue' property
     *
     * @return integer
     */
    public function getCurrentLoverValue()
    {
        $value = $this->get(self::CURRENTLOVERVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'currentLoverValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentLoverValue()
    {
        return $this->get(self::CURRENTLOVERVALUE) !== null;
    }
}
}