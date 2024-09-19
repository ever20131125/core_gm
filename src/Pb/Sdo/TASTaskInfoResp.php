<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASTaskInfoResp message
 */
class TASTaskInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const TASKTYPE = 3;
    const INFOS = 4;

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
        self::TASKTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\TaskType::enmTaskType_Grow,
            'name' => 'taskType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INFOS => array(
            'name' => 'infos',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TaskInfo'
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
        $this->values[self::TASKTYPE] = self::$fields[self::TASKTYPE]['default'];
        $this->values[self::INFOS] = array();
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
     * Appends value to 'infos' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TaskInfo $value Value to append
     *
     * @return null
     */
    public function appendInfos(\Xnhd\Core\Pb\Sdo\TaskInfo $value)
    {
        return $this->append(self::INFOS, $value);
    }

    /**
     * Clears 'infos' list
     *
     * @return null
     */
    public function clearInfos()
    {
        return $this->clear(self::INFOS);
    }

    /**
     * Returns 'infos' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TaskInfo[]
     */
    public function getInfos()
    {
        return $this->get(self::INFOS);
    }

    /**
     * Returns true if 'infos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfos()
    {
        return count($this->get(self::INFOS)) !== 0;
    }

    /**
     * Returns 'infos' iterator
     *
     * @return \ArrayIterator
     */
    public function getInfosIterator()
    {
        return new \ArrayIterator($this->get(self::INFOS));
    }

    /**
     * Returns element from 'infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TaskInfo
     */
    public function getInfosAt($offset)
    {
        return $this->get(self::INFOS, $offset);
    }

    /**
     * Returns count of 'infos' list
     *
     * @return int
     */
    public function getInfosCount()
    {
        return $this->count(self::INFOS);
    }
}
}