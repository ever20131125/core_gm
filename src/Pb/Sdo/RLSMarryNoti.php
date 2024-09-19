<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSMarryNoti message
 */
class RLSMarryNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const LOVERID = 2;
    const ROLENAME = 3;
    const LOVERNAME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::ROLENAME => array(
            'name' => 'roleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOVERNAME => array(
            'name' => 'loverName',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::LOVERID] = null;
        $this->values[self::ROLENAME] = null;
        $this->values[self::LOVERNAME] = null;
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
     * Sets value of 'roleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoleName($value)
    {
        return $this->set(self::ROLENAME, $value);
    }

    /**
     * Returns value of 'roleName' property
     *
     * @return string
     */
    public function getRoleName()
    {
        $value = $this->get(self::ROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'roleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleName()
    {
        return $this->get(self::ROLENAME) !== null;
    }

    /**
     * Sets value of 'loverName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoverName($value)
    {
        return $this->set(self::LOVERNAME, $value);
    }

    /**
     * Returns value of 'loverName' property
     *
     * @return string
     */
    public function getLoverName()
    {
        $value = $this->get(self::LOVERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loverName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverName()
    {
        return $this->get(self::LOVERNAME) !== null;
    }
}
}