<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSEnterInstanceRoomResp message
 */
class SGSEnterInstanceRoomResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STDETAILINFO = 3;
    const ARRPOSINFO = 4;

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
        self::STDETAILINFO => array(
            'name' => 'stDetailInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\InstanceDetail'
        ),
        self::ARRPOSINFO => array(
            'name' => 'arrPosInfo',
            'required' => false,
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
        $this->values[self::STDETAILINFO] = null;
        $this->values[self::ARRPOSINFO] = null;
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
     * Sets value of 'stDetailInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\InstanceDetail $value Property value
     *
     * @return null
     */
    public function setStDetailInfo(\Xnhd\Core\Pb\Sdo\InstanceDetail $value=null)
    {
        return $this->set(self::STDETAILINFO, $value);
    }

    /**
     * Returns value of 'stDetailInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceDetail
     */
    public function getStDetailInfo()
    {
        return $this->get(self::STDETAILINFO);
    }

    /**
     * Returns true if 'stDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStDetailInfo()
    {
        return $this->get(self::STDETAILINFO) !== null;
    }

    /**
     * Sets value of 'arrPosInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePosInfo $value Property value
     *
     * @return null
     */
    public function setArrPosInfo(\Xnhd\Core\Pb\Sdo\RolePosInfo $value=null)
    {
        return $this->set(self::ARRPOSINFO, $value);
    }

    /**
     * Returns value of 'arrPosInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePosInfo
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
        return $this->get(self::ARRPOSINFO) !== null;
    }
}
}