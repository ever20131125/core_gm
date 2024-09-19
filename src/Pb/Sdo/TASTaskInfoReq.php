<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASTaskInfoReq message
 */
class TASTaskInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const TASKTYPE = 2;
    const THEME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TASKTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\TaskType::enmTaskType_Grow,
            'name' => 'taskType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THEME => array(
            'name' => 'theme',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::TASKTYPE] = self::$fields[self::TASKTYPE]['default'];
        $this->values[self::THEME] = null;
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
     * Sets value of 'taskType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTaskType($value)
    {
        return $this->set(self::TASKTYPE, $value);
    }

    /**
     * Returns value of 'taskType' property
     *
     * @return integer
     */
    public function getTaskType()
    {
        $value = $this->get(self::TASKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'taskType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTaskType()
    {
        return $this->get(self::TASKTYPE) !== null;
    }

    /**
     * Sets value of 'theme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTheme($value)
    {
        return $this->set(self::THEME, $value);
    }

    /**
     * Returns value of 'theme' property
     *
     * @return integer
     */
    public function getTheme()
    {
        $value = $this->get(self::THEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'theme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTheme()
    {
        return $this->get(self::THEME) !== null;
    }
}
}