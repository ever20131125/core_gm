<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASTaskRefreshReq message
 */
class TASTaskRefreshReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const TASKID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TASKID => array(
            'name' => 'taskID',
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
        $this->values[self::TASKID] = null;
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
     * Sets value of 'taskID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTaskID($value)
    {
        return $this->set(self::TASKID, $value);
    }

    /**
     * Returns value of 'taskID' property
     *
     * @return integer
     */
    public function getTaskID()
    {
        $value = $this->get(self::TASKID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'taskID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTaskID()
    {
        return $this->get(self::TASKID) !== null;
    }
}
}