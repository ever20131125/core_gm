<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetRoomTipsResp message
 */
class GASGetRoomTipsResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROOMINSTANCEID = 2;
    const ARRROLELIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROOMINSTANCEID => array(
            'name' => 'nRoomInstanceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLELIST => array(
            'name' => 'arrRoleList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomTipsInfo'
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
        $this->values[self::NROOMINSTANCEID] = null;
        $this->values[self::ARRROLELIST] = array();
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
     * Appends value to 'arrRoleList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomTipsInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleList(\Xnhd\Core\Pb\Sdo\RoleRoomTipsInfo $value)
    {
        return $this->append(self::ARRROLELIST, $value);
    }

    /**
     * Clears 'arrRoleList' list
     *
     * @return null
     */
    public function clearArrRoleList()
    {
        return $this->clear(self::ARRROLELIST);
    }

    /**
     * Returns 'arrRoleList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomTipsInfo[]
     */
    public function getArrRoleList()
    {
        return $this->get(self::ARRROLELIST);
    }

    /**
     * Returns true if 'arrRoleList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleList()
    {
        return count($this->get(self::ARRROLELIST)) !== 0;
    }

    /**
     * Returns 'arrRoleList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLELIST));
    }

    /**
     * Returns element from 'arrRoleList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomTipsInfo
     */
    public function getArrRoleListAt($offset)
    {
        return $this->get(self::ARRROLELIST, $offset);
    }

    /**
     * Returns count of 'arrRoleList' list
     *
     * @return int
     */
    public function getArrRoleListCount()
    {
        return $this->count(self::ARRROLELIST);
    }
}
}