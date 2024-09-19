<?php
/**
 * Auto generated from smallgameserver.proto at 2022-09-14 02:40:01
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSEnterInstanceResp message
 */
class SGSEnterInstanceResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NMATCHROOMID = 3;
    const ARRROLEINFO = 4;
    const ARRPOSINFO = 5;

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
        self::NMATCHROOMID => array(
            'name' => 'nMatchRoomID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEINFO => array(
            'name' => 'arrRoleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchRoleInfo'
        ),
        self::ARRPOSINFO => array(
            'name' => 'arrPosInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePosInfo'
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
        $this->values[self::NMATCHROOMID] = null;
        $this->values[self::ARRROLEINFO] = array();
        $this->values[self::ARRPOSINFO] = array();
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
     * Sets value of 'nMatchRoomID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchRoomID($value)
    {
        return $this->set(self::NMATCHROOMID, $value);
    }

    /**
     * Returns value of 'nMatchRoomID' property
     *
     * @return integer
     */
    public function getNMatchRoomID()
    {
        $value = $this->get(self::NMATCHROOMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchRoomID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchRoomID()
    {
        return $this->get(self::NMATCHROOMID) !== null;
    }

    /**
     * Appends value to 'arrRoleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchRoleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleInfo(\Xnhd\Core\Pb\Sdo\MatchRoleInfo $value)
    {
        return $this->append(self::ARRROLEINFO, $value);
    }

    /**
     * Clears 'arrRoleInfo' list
     *
     * @return null
     */
    public function clearArrRoleInfo()
    {
        return $this->clear(self::ARRROLEINFO);
    }

    /**
     * Returns 'arrRoleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRoleInfo[]
     */
    public function getArrRoleInfo()
    {
        return $this->get(self::ARRROLEINFO);
    }

    /**
     * Returns true if 'arrRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleInfo()
    {
        return count($this->get(self::ARRROLEINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEINFO));
    }

    /**
     * Returns element from 'arrRoleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRoleInfo
     */
    public function getArrRoleInfoAt($offset)
    {
        return $this->get(self::ARRROLEINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleInfo' list
     *
     * @return int
     */
    public function getArrRoleInfoCount()
    {
        return $this->count(self::ARRROLEINFO);
    }

    /**
     * Appends value to 'arrPosInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePosInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPosInfo(\Xnhd\Core\Pb\Sdo\RolePosInfo $value)
    {
        return $this->append(self::ARRPOSINFO, $value);
    }

    /**
     * Clears 'arrPosInfo' list
     *
     * @return null
     */
    public function clearArrPosInfo()
    {
        return $this->clear(self::ARRPOSINFO);
    }

    /**
     * Returns 'arrPosInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePosInfo[]
     */
    public function getArrPosInfo()
    {
        return $this->get(self::ARRPOSINFO);
    }

    /**
     * Returns true if 'arrPosInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPosInfo()
    {
        return count($this->get(self::ARRPOSINFO)) !== 0;
    }

    /**
     * Returns 'arrPosInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPosInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPOSINFO));
    }

    /**
     * Returns element from 'arrPosInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePosInfo
     */
    public function getArrPosInfoAt($offset)
    {
        return $this->get(self::ARRPOSINFO, $offset);
    }

    /**
     * Returns count of 'arrPosInfo' list
     *
     * @return int
     */
    public function getArrPosInfoCount()
    {
        return $this->count(self::ARRPOSINFO);
    }
}
}