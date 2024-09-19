<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASDoActionNoti message
 */
class GASDoActionNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROOMINSTANCEID = 2;
    const ACTIONID = 3;
    const ARR32PARAMS = 4;
    const ARR64PARAMS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTIONID => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActionID::enmActionID_None,
            'name' => 'actionID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARR32PARAMS => array(
            'name' => 'arr32Params',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARR64PARAMS => array(
            'name' => 'arr64Params',
            'repeated' => true,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::ACTIONID] = self::$fields[self::ACTIONID]['default'];
        $this->values[self::ARR32PARAMS] = array();
        $this->values[self::ARR64PARAMS] = array();
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
     * Sets value of 'nRoomInstanceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoomInstanceID($value)
    {
        return $this->set(self::NROOMINSTANCEID, $value);
    }

    /**
     * Returns value of 'nRoomInstanceID' property
     *
     * @return integer
     */
    public function getNRoomInstanceID()
    {
        $value = $this->get(self::NROOMINSTANCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoomInstanceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoomInstanceID()
    {
        return $this->get(self::NROOMINSTANCEID) !== null;
    }

    /**
     * Sets value of 'actionID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActionID($value)
    {
        return $this->set(self::ACTIONID, $value);
    }

    /**
     * Returns value of 'actionID' property
     *
     * @return integer
     */
    public function getActionID()
    {
        $value = $this->get(self::ACTIONID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actionID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActionID()
    {
        return $this->get(self::ACTIONID) !== null;
    }

    /**
     * Appends value to 'arr32Params' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArr32Params($value)
    {
        return $this->append(self::ARR32PARAMS, $value);
    }

    /**
     * Clears 'arr32Params' list
     *
     * @return null
     */
    public function clearArr32Params()
    {
        return $this->clear(self::ARR32PARAMS);
    }

    /**
     * Returns 'arr32Params' list
     *
     * @return integer[]
     */
    public function getArr32Params()
    {
        return $this->get(self::ARR32PARAMS);
    }

    /**
     * Returns true if 'arr32Params' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArr32Params()
    {
        return count($this->get(self::ARR32PARAMS)) !== 0;
    }

    /**
     * Returns 'arr32Params' iterator
     *
     * @return \ArrayIterator
     */
    public function getArr32ParamsIterator()
    {
        return new \ArrayIterator($this->get(self::ARR32PARAMS));
    }

    /**
     * Returns element from 'arr32Params' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArr32ParamsAt($offset)
    {
        return $this->get(self::ARR32PARAMS, $offset);
    }

    /**
     * Returns count of 'arr32Params' list
     *
     * @return int
     */
    public function getArr32ParamsCount()
    {
        return $this->count(self::ARR32PARAMS);
    }

    /**
     * Appends value to 'arr64Params' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArr64Params($value)
    {
        return $this->append(self::ARR64PARAMS, $value);
    }

    /**
     * Clears 'arr64Params' list
     *
     * @return null
     */
    public function clearArr64Params()
    {
        return $this->clear(self::ARR64PARAMS);
    }

    /**
     * Returns 'arr64Params' list
     *
     * @return integer[]
     */
    public function getArr64Params()
    {
        return $this->get(self::ARR64PARAMS);
    }

    /**
     * Returns true if 'arr64Params' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArr64Params()
    {
        return count($this->get(self::ARR64PARAMS)) !== 0;
    }

    /**
     * Returns 'arr64Params' iterator
     *
     * @return \ArrayIterator
     */
    public function getArr64ParamsIterator()
    {
        return new \ArrayIterator($this->get(self::ARR64PARAMS));
    }

    /**
     * Returns element from 'arr64Params' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArr64ParamsAt($offset)
    {
        return $this->get(self::ARR64PARAMS, $offset);
    }

    /**
     * Returns count of 'arr64Params' list
     *
     * @return int
     */
    public function getArr64ParamsCount()
    {
        return $this->count(self::ARR64PARAMS);
    }
}
}