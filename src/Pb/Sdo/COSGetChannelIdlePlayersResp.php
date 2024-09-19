<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetChannelIdlePlayersResp message
 */
class COSGetChannelIdlePlayersResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRROLECHANNELIDLEINFO = 3;

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
        self::ARRROLECHANNELIDLEINFO => array(
            'name' => 'arrRoleChannelIdleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleChannelIdleInfo'
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
        $this->values[self::ARRROLECHANNELIDLEINFO] = array();
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
     * Appends value to 'arrRoleChannelIdleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleChannelIdleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleChannelIdleInfo(\Xnhd\Core\Pb\Sdo\RoleChannelIdleInfo $value)
    {
        return $this->append(self::ARRROLECHANNELIDLEINFO, $value);
    }

    /**
     * Clears 'arrRoleChannelIdleInfo' list
     *
     * @return null
     */
    public function clearArrRoleChannelIdleInfo()
    {
        return $this->clear(self::ARRROLECHANNELIDLEINFO);
    }

    /**
     * Returns 'arrRoleChannelIdleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleChannelIdleInfo[]
     */
    public function getArrRoleChannelIdleInfo()
    {
        return $this->get(self::ARRROLECHANNELIDLEINFO);
    }

    /**
     * Returns true if 'arrRoleChannelIdleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleChannelIdleInfo()
    {
        return count($this->get(self::ARRROLECHANNELIDLEINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleChannelIdleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleChannelIdleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLECHANNELIDLEINFO));
    }

    /**
     * Returns element from 'arrRoleChannelIdleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleChannelIdleInfo
     */
    public function getArrRoleChannelIdleInfoAt($offset)
    {
        return $this->get(self::ARRROLECHANNELIDLEINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleChannelIdleInfo' list
     *
     * @return int
     */
    public function getArrRoleChannelIdleInfoCount()
    {
        return $this->count(self::ARRROLECHANNELIDLEINFO);
    }
}
}