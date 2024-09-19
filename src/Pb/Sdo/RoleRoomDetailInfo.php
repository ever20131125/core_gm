<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleRoomDetailInfo message
 */
class RoleRoomDetailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STROLEROOMGENERALINFO = 1;
    const PLAYERGAMESTATE = 2;
    const ARR32PARAMS = 3;
    const ARR64PARAMS = 4;
    const NACTIONSTAGEPOSID = 5;
    const NSTAGEPOSIDEX = 6;
    const NACTIONITEMINSID = 7;
    const NITEMPOSIDEX = 8;
    const NPLANEROLEID = 9;
    const NVEHICLEID = 10;
    const NVEHICLEPOSID = 11;
    const NDRIVERID = 12;
    const NVOICEID = 13;
    const ARRCAMERAPARAMS = 14;
    const NACTIONPOSEID = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROLEROOMGENERALINFO => array(
            'name' => 'stRoleRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo'
        ),
        self::PLAYERGAMESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PlayerGameState::enmPlayerGameState_None,
            'name' => 'playerGameState',
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
        self::NACTIONSTAGEPOSID => array(
            'name' => 'nActionStagePosID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAGEPOSIDEX => array(
            'name' => 'nStagePosIdex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTIONITEMINSID => array(
            'name' => 'nActionItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMPOSIDEX => array(
            'name' => 'nItemPosIdex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLANEROLEID => array(
            'name' => 'nPlaneRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVEHICLEID => array(
            'name' => 'nVehicleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVEHICLEPOSID => array(
            'name' => 'nVehiclePosID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDRIVERID => array(
            'name' => 'nDriverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVOICEID => array(
            'name' => 'nVoiceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCAMERAPARAMS => array(
            'name' => 'arrCameraParams',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTIONPOSEID => array(
            'name' => 'nActionPoseID',
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
        $this->values[self::STROLEROOMGENERALINFO] = null;
        $this->values[self::PLAYERGAMESTATE] = self::$fields[self::PLAYERGAMESTATE]['default'];
        $this->values[self::ARR32PARAMS] = array();
        $this->values[self::ARR64PARAMS] = array();
        $this->values[self::NACTIONSTAGEPOSID] = null;
        $this->values[self::NSTAGEPOSIDEX] = null;
        $this->values[self::NACTIONITEMINSID] = null;
        $this->values[self::NITEMPOSIDEX] = null;
        $this->values[self::NPLANEROLEID] = null;
        $this->values[self::NVEHICLEID] = null;
        $this->values[self::NVEHICLEPOSID] = null;
        $this->values[self::NDRIVERID] = null;
        $this->values[self::NVOICEID] = null;
        $this->values[self::ARRCAMERAPARAMS] = array();
        $this->values[self::NACTIONPOSEID] = null;
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
     * Sets value of 'stRoleRoomGeneralInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoleRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo $value=null)
    {
        return $this->set(self::STROLEROOMGENERALINFO, $value);
    }

    /**
     * Returns value of 'stRoleRoomGeneralInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomGeneralInfo
     */
    public function getStRoleRoomGeneralInfo()
    {
        return $this->get(self::STROLEROOMGENERALINFO);
    }

    /**
     * Returns true if 'stRoleRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleRoomGeneralInfo()
    {
        return $this->get(self::STROLEROOMGENERALINFO) !== null;
    }

    /**
     * Sets value of 'playerGameState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlayerGameState($value)
    {
        return $this->set(self::PLAYERGAMESTATE, $value);
    }

    /**
     * Returns value of 'playerGameState' property
     *
     * @return integer
     */
    public function getPlayerGameState()
    {
        $value = $this->get(self::PLAYERGAMESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'playerGameState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlayerGameState()
    {
        return $this->get(self::PLAYERGAMESTATE) !== null;
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

    /**
     * Sets value of 'nActionStagePosID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActionStagePosID($value)
    {
        return $this->set(self::NACTIONSTAGEPOSID, $value);
    }

    /**
     * Returns value of 'nActionStagePosID' property
     *
     * @return integer
     */
    public function getNActionStagePosID()
    {
        $value = $this->get(self::NACTIONSTAGEPOSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActionStagePosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActionStagePosID()
    {
        return $this->get(self::NACTIONSTAGEPOSID) !== null;
    }

    /**
     * Sets value of 'nStagePosIdex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStagePosIdex($value)
    {
        return $this->set(self::NSTAGEPOSIDEX, $value);
    }

    /**
     * Returns value of 'nStagePosIdex' property
     *
     * @return integer
     */
    public function getNStagePosIdex()
    {
        $value = $this->get(self::NSTAGEPOSIDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStagePosIdex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStagePosIdex()
    {
        return $this->get(self::NSTAGEPOSIDEX) !== null;
    }

    /**
     * Sets value of 'nActionItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActionItemInsID($value)
    {
        return $this->set(self::NACTIONITEMINSID, $value);
    }

    /**
     * Returns value of 'nActionItemInsID' property
     *
     * @return integer
     */
    public function getNActionItemInsID()
    {
        $value = $this->get(self::NACTIONITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActionItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActionItemInsID()
    {
        return $this->get(self::NACTIONITEMINSID) !== null;
    }

    /**
     * Sets value of 'nItemPosIdex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemPosIdex($value)
    {
        return $this->set(self::NITEMPOSIDEX, $value);
    }

    /**
     * Returns value of 'nItemPosIdex' property
     *
     * @return integer
     */
    public function getNItemPosIdex()
    {
        $value = $this->get(self::NITEMPOSIDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemPosIdex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemPosIdex()
    {
        return $this->get(self::NITEMPOSIDEX) !== null;
    }

    /**
     * Sets value of 'nPlaneRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlaneRoleID($value)
    {
        return $this->set(self::NPLANEROLEID, $value);
    }

    /**
     * Returns value of 'nPlaneRoleID' property
     *
     * @return integer
     */
    public function getNPlaneRoleID()
    {
        $value = $this->get(self::NPLANEROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlaneRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlaneRoleID()
    {
        return $this->get(self::NPLANEROLEID) !== null;
    }

    /**
     * Sets value of 'nVehicleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVehicleID($value)
    {
        return $this->set(self::NVEHICLEID, $value);
    }

    /**
     * Returns value of 'nVehicleID' property
     *
     * @return integer
     */
    public function getNVehicleID()
    {
        $value = $this->get(self::NVEHICLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVehicleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVehicleID()
    {
        return $this->get(self::NVEHICLEID) !== null;
    }

    /**
     * Sets value of 'nVehiclePosID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVehiclePosID($value)
    {
        return $this->set(self::NVEHICLEPOSID, $value);
    }

    /**
     * Returns value of 'nVehiclePosID' property
     *
     * @return integer
     */
    public function getNVehiclePosID()
    {
        $value = $this->get(self::NVEHICLEPOSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVehiclePosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVehiclePosID()
    {
        return $this->get(self::NVEHICLEPOSID) !== null;
    }

    /**
     * Sets value of 'nDriverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDriverID($value)
    {
        return $this->set(self::NDRIVERID, $value);
    }

    /**
     * Returns value of 'nDriverID' property
     *
     * @return integer
     */
    public function getNDriverID()
    {
        $value = $this->get(self::NDRIVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDriverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDriverID()
    {
        return $this->get(self::NDRIVERID) !== null;
    }

    /**
     * Sets value of 'nVoiceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVoiceID($value)
    {
        return $this->set(self::NVOICEID, $value);
    }

    /**
     * Returns value of 'nVoiceID' property
     *
     * @return integer
     */
    public function getNVoiceID()
    {
        $value = $this->get(self::NVOICEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVoiceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVoiceID()
    {
        return $this->get(self::NVOICEID) !== null;
    }

    /**
     * Appends value to 'arrCameraParams' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCameraParams($value)
    {
        return $this->append(self::ARRCAMERAPARAMS, $value);
    }

    /**
     * Clears 'arrCameraParams' list
     *
     * @return null
     */
    public function clearArrCameraParams()
    {
        return $this->clear(self::ARRCAMERAPARAMS);
    }

    /**
     * Returns 'arrCameraParams' list
     *
     * @return integer[]
     */
    public function getArrCameraParams()
    {
        return $this->get(self::ARRCAMERAPARAMS);
    }

    /**
     * Returns true if 'arrCameraParams' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCameraParams()
    {
        return count($this->get(self::ARRCAMERAPARAMS)) !== 0;
    }

    /**
     * Returns 'arrCameraParams' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCameraParamsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCAMERAPARAMS));
    }

    /**
     * Returns element from 'arrCameraParams' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCameraParamsAt($offset)
    {
        return $this->get(self::ARRCAMERAPARAMS, $offset);
    }

    /**
     * Returns count of 'arrCameraParams' list
     *
     * @return int
     */
    public function getArrCameraParamsCount()
    {
        return $this->count(self::ARRCAMERAPARAMS);
    }

    /**
     * Sets value of 'nActionPoseID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActionPoseID($value)
    {
        return $this->set(self::NACTIONPOSEID, $value);
    }

    /**
     * Returns value of 'nActionPoseID' property
     *
     * @return integer
     */
    public function getNActionPoseID()
    {
        $value = $this->get(self::NACTIONPOSEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActionPoseID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActionPoseID()
    {
        return $this->get(self::NACTIONPOSEID) !== null;
    }
}
}