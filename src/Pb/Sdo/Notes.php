<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * Notes message
 */
class Notes extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const LISTID = 2;
    const TIME = 3;
    const POSTION = 4;
    const COSTCARD = 5;
    const ROLENAME = 6;
    const MESSAGE = 7;
    const TYPE = 8;
    const ISATTENTION = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LISTID => array(
            'name' => 'listID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSTION => array(
            'name' => 'postion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COSTCARD => array(
            'name' => 'costCard',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLENAME => array(
            'name' => 'roleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISATTENTION => array(
            'name' => 'isAttention',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::LISTID] = null;
        $this->values[self::TIME] = null;
        $this->values[self::POSTION] = null;
        $this->values[self::COSTCARD] = null;
        $this->values[self::ROLENAME] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::ISATTENTION] = null;
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
     * Sets value of 'listID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setListID($value)
    {
        return $this->set(self::LISTID, $value);
    }

    /**
     * Returns value of 'listID' property
     *
     * @return integer
     */
    public function getListID()
    {
        $value = $this->get(self::LISTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'listID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasListID()
    {
        return $this->get(self::LISTID) !== null;
    }

    /**
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTime()
    {
        return $this->get(self::TIME) !== null;
    }

    /**
     * Sets value of 'postion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPostion($value)
    {
        return $this->set(self::POSTION, $value);
    }

    /**
     * Returns value of 'postion' property
     *
     * @return integer
     */
    public function getPostion()
    {
        $value = $this->get(self::POSTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'postion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostion()
    {
        return $this->get(self::POSTION) !== null;
    }

    /**
     * Sets value of 'costCard' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCostCard($value)
    {
        return $this->set(self::COSTCARD, $value);
    }

    /**
     * Returns value of 'costCard' property
     *
     * @return integer
     */
    public function getCostCard()
    {
        $value = $this->get(self::COSTCARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'costCard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCostCard()
    {
        return $this->get(self::COSTCARD) !== null;
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
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        $value = $this->get(self::MESSAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'message' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessage()
    {
        return $this->get(self::MESSAGE) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'isAttention' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsAttention($value)
    {
        return $this->set(self::ISATTENTION, $value);
    }

    /**
     * Returns value of 'isAttention' property
     *
     * @return boolean
     */
    public function getIsAttention()
    {
        $value = $this->get(self::ISATTENTION);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isAttention' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsAttention()
    {
        return $this->get(self::ISATTENTION) !== null;
    }
}
}