<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASSetRoomParamNoti message
 */
class GASSetRoomParamNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROOMINSTANCEID = 2;
    const ARRPARAMTYPE = 3;
    const ARRPARAMS = 4;

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
        self::ARRPARAMTYPE => array(
            'name' => 'arrParamType',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPARAMS => array(
            'name' => 'arrParams',
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
        $this->values[self::ARRPARAMTYPE] = array();
        $this->values[self::ARRPARAMS] = array();
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
     * Appends value to 'arrParamType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrParamType($value)
    {
        return $this->append(self::ARRPARAMTYPE, $value);
    }

    /**
     * Clears 'arrParamType' list
     *
     * @return null
     */
    public function clearArrParamType()
    {
        return $this->clear(self::ARRPARAMTYPE);
    }

    /**
     * Returns 'arrParamType' list
     *
     * @return integer[]
     */
    public function getArrParamType()
    {
        return $this->get(self::ARRPARAMTYPE);
    }

    /**
     * Returns true if 'arrParamType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrParamType()
    {
        return count($this->get(self::ARRPARAMTYPE)) !== 0;
    }

    /**
     * Returns 'arrParamType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrParamTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPARAMTYPE));
    }

    /**
     * Returns element from 'arrParamType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrParamTypeAt($offset)
    {
        return $this->get(self::ARRPARAMTYPE, $offset);
    }

    /**
     * Returns count of 'arrParamType' list
     *
     * @return int
     */
    public function getArrParamTypeCount()
    {
        return $this->count(self::ARRPARAMTYPE);
    }

    /**
     * Appends value to 'arrParams' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrParams($value)
    {
        return $this->append(self::ARRPARAMS, $value);
    }

    /**
     * Clears 'arrParams' list
     *
     * @return null
     */
    public function clearArrParams()
    {
        return $this->clear(self::ARRPARAMS);
    }

    /**
     * Returns 'arrParams' list
     *
     * @return integer[]
     */
    public function getArrParams()
    {
        return $this->get(self::ARRPARAMS);
    }

    /**
     * Returns true if 'arrParams' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrParams()
    {
        return count($this->get(self::ARRPARAMS)) !== 0;
    }

    /**
     * Returns 'arrParams' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrParamsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPARAMS));
    }

    /**
     * Returns element from 'arrParams' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrParamsAt($offset)
    {
        return $this->get(self::ARRPARAMS, $offset);
    }

    /**
     * Returns count of 'arrParams' list
     *
     * @return int
     */
    public function getArrParamsCount()
    {
        return $this->count(self::ARRPARAMS);
    }
}
}