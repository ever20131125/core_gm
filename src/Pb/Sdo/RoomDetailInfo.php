<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoomDetailInfo message
 */
class RoomDetailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const STROOMGENERALINFO = 1;
    const ARRPLAYERPUBLICINFO = 2;
    const ARRPLAYERAVATARINFO = 3;
    const ARRPLAYERROOMDETAILINFO = 4;
    const ARRPLAYERPLACESTATE = 5;
    const ARROBSERVERPUBLICINFO = 6;
    const ARROBSERVERAVATARINFO = 7;
    const ARROBSERVERROOMDETAILINFO = 8;
    const ARROBSERVERPLACESTATE = 9;
    const ARRSTAGEPOSINFO = 10;
    const ARRPLAYERGUILDINFO = 11;
    const ARRPLAYERLOVERINFO = 12;
    const ARRPLAYERBUFFERINFO = 13;
    const ARROBSERVERGUILDINFO = 14;
    const ARROBSERVERLOVERINFO = 15;
    const ARROBSERVERBUFFERINFO = 16;
    const ARRVEHICLEINFO = 17;
    const ARRSTAGECHEST = 18;
    const STHOUSEINFO = 19;
    const ARRHOUSEPOSINFO = 20;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STROOMGENERALINFO => array(
            'name' => 'stRoomGeneralInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomGeneralInfo'
        ),
        self::ARRPLAYERPUBLICINFO => array(
            'name' => 'arrPlayerPublicInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::ARRPLAYERAVATARINFO => array(
            'name' => 'arrPlayerAvatarInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::ARRPLAYERROOMDETAILINFO => array(
            'name' => 'arrPlayerRoomDetailInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo'
        ),
        self::ARRPLAYERPLACESTATE => array(
            'name' => 'arrPlayerPlaceState',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROBSERVERPUBLICINFO => array(
            'name' => 'arrObserverPublicInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::ARROBSERVERAVATARINFO => array(
            'name' => 'arrObserverAvatarInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::ARROBSERVERROOMDETAILINFO => array(
            'name' => 'arrObserverRoomDetailInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo'
        ),
        self::ARROBSERVERPLACESTATE => array(
            'name' => 'arrObserverPlaceState',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSTAGEPOSINFO => array(
            'name' => 'arrStagePosInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\StagePosInfo'
        ),
        self::ARRPLAYERGUILDINFO => array(
            'name' => 'arrPlayerGuildInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGuildInfo'
        ),
        self::ARRPLAYERLOVERINFO => array(
            'name' => 'arrPlayerLoverInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleLoverInfo'
        ),
        self::ARRPLAYERBUFFERINFO => array(
            'name' => 'arrPlayerBufferInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBufferInfo'
        ),
        self::ARROBSERVERGUILDINFO => array(
            'name' => 'arrObserverGuildInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGuildInfo'
        ),
        self::ARROBSERVERLOVERINFO => array(
            'name' => 'arrObserverLoverInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleLoverInfo'
        ),
        self::ARROBSERVERBUFFERINFO => array(
            'name' => 'arrObserverBufferInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBufferInfo'
        ),
        self::ARRVEHICLEINFO => array(
            'name' => 'arrVehicleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\VehicleInfo'
        ),
        self::ARRSTAGECHEST => array(
            'name' => 'arrStageChest',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ChestInfo'
        ),
        self::STHOUSEINFO => array(
            'name' => 'stHouseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseDetailInfo'
        ),
        self::ARRHOUSEPOSINFO => array(
            'name' => 'arrHousePosInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HousePosInfo'
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
        $this->values[self::STROOMGENERALINFO] = null;
        $this->values[self::ARRPLAYERPUBLICINFO] = array();
        $this->values[self::ARRPLAYERAVATARINFO] = array();
        $this->values[self::ARRPLAYERROOMDETAILINFO] = array();
        $this->values[self::ARRPLAYERPLACESTATE] = array();
        $this->values[self::ARROBSERVERPUBLICINFO] = array();
        $this->values[self::ARROBSERVERAVATARINFO] = array();
        $this->values[self::ARROBSERVERROOMDETAILINFO] = array();
        $this->values[self::ARROBSERVERPLACESTATE] = array();
        $this->values[self::ARRSTAGEPOSINFO] = array();
        $this->values[self::ARRPLAYERGUILDINFO] = array();
        $this->values[self::ARRPLAYERLOVERINFO] = array();
        $this->values[self::ARRPLAYERBUFFERINFO] = array();
        $this->values[self::ARROBSERVERGUILDINFO] = array();
        $this->values[self::ARROBSERVERLOVERINFO] = array();
        $this->values[self::ARROBSERVERBUFFERINFO] = array();
        $this->values[self::ARRVEHICLEINFO] = array();
        $this->values[self::ARRSTAGECHEST] = array();
        $this->values[self::STHOUSEINFO] = null;
        $this->values[self::ARRHOUSEPOSINFO] = array();
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
     * Sets value of 'stRoomGeneralInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoomGeneralInfo(\Xnhd\Core\Pb\Sdo\RoomGeneralInfo $value=null)
    {
        return $this->set(self::STROOMGENERALINFO, $value);
    }

    /**
     * Returns value of 'stRoomGeneralInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomGeneralInfo
     */
    public function getStRoomGeneralInfo()
    {
        return $this->get(self::STROOMGENERALINFO);
    }

    /**
     * Returns true if 'stRoomGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoomGeneralInfo()
    {
        return $this->get(self::STROOMGENERALINFO) !== null;
    }

    /**
     * Appends value to 'arrPlayerPublicInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerPublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value)
    {
        return $this->append(self::ARRPLAYERPUBLICINFO, $value);
    }

    /**
     * Clears 'arrPlayerPublicInfo' list
     *
     * @return null
     */
    public function clearArrPlayerPublicInfo()
    {
        return $this->clear(self::ARRPLAYERPUBLICINFO);
    }

    /**
     * Returns 'arrPlayerPublicInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo[]
     */
    public function getArrPlayerPublicInfo()
    {
        return $this->get(self::ARRPLAYERPUBLICINFO);
    }

    /**
     * Returns true if 'arrPlayerPublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerPublicInfo()
    {
        return count($this->get(self::ARRPLAYERPUBLICINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerPublicInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerPublicInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERPUBLICINFO));
    }

    /**
     * Returns element from 'arrPlayerPublicInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getArrPlayerPublicInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERPUBLICINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerPublicInfo' list
     *
     * @return int
     */
    public function getArrPlayerPublicInfoCount()
    {
        return $this->count(self::ARRPLAYERPUBLICINFO);
    }

    /**
     * Appends value to 'arrPlayerAvatarInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value)
    {
        return $this->append(self::ARRPLAYERAVATARINFO, $value);
    }

    /**
     * Clears 'arrPlayerAvatarInfo' list
     *
     * @return null
     */
    public function clearArrPlayerAvatarInfo()
    {
        return $this->clear(self::ARRPLAYERAVATARINFO);
    }

    /**
     * Returns 'arrPlayerAvatarInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo[]
     */
    public function getArrPlayerAvatarInfo()
    {
        return $this->get(self::ARRPLAYERAVATARINFO);
    }

    /**
     * Returns true if 'arrPlayerAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerAvatarInfo()
    {
        return count($this->get(self::ARRPLAYERAVATARINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerAvatarInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerAvatarInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERAVATARINFO));
    }

    /**
     * Returns element from 'arrPlayerAvatarInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getArrPlayerAvatarInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERAVATARINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerAvatarInfo' list
     *
     * @return int
     */
    public function getArrPlayerAvatarInfoCount()
    {
        return $this->count(self::ARRPLAYERAVATARINFO);
    }

    /**
     * Appends value to 'arrPlayerRoomDetailInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerRoomDetailInfo(\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo $value)
    {
        return $this->append(self::ARRPLAYERROOMDETAILINFO, $value);
    }

    /**
     * Clears 'arrPlayerRoomDetailInfo' list
     *
     * @return null
     */
    public function clearArrPlayerRoomDetailInfo()
    {
        return $this->clear(self::ARRPLAYERROOMDETAILINFO);
    }

    /**
     * Returns 'arrPlayerRoomDetailInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo[]
     */
    public function getArrPlayerRoomDetailInfo()
    {
        return $this->get(self::ARRPLAYERROOMDETAILINFO);
    }

    /**
     * Returns true if 'arrPlayerRoomDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerRoomDetailInfo()
    {
        return count($this->get(self::ARRPLAYERROOMDETAILINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerRoomDetailInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerRoomDetailInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERROOMDETAILINFO));
    }

    /**
     * Returns element from 'arrPlayerRoomDetailInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo
     */
    public function getArrPlayerRoomDetailInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERROOMDETAILINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerRoomDetailInfo' list
     *
     * @return int
     */
    public function getArrPlayerRoomDetailInfoCount()
    {
        return $this->count(self::ARRPLAYERROOMDETAILINFO);
    }

    /**
     * Appends value to 'arrPlayerPlaceState' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerPlaceState($value)
    {
        return $this->append(self::ARRPLAYERPLACESTATE, $value);
    }

    /**
     * Clears 'arrPlayerPlaceState' list
     *
     * @return null
     */
    public function clearArrPlayerPlaceState()
    {
        return $this->clear(self::ARRPLAYERPLACESTATE);
    }

    /**
     * Returns 'arrPlayerPlaceState' list
     *
     * @return integer[]
     */
    public function getArrPlayerPlaceState()
    {
        return $this->get(self::ARRPLAYERPLACESTATE);
    }

    /**
     * Returns true if 'arrPlayerPlaceState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerPlaceState()
    {
        return count($this->get(self::ARRPLAYERPLACESTATE)) !== 0;
    }

    /**
     * Returns 'arrPlayerPlaceState' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerPlaceStateIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERPLACESTATE));
    }

    /**
     * Returns element from 'arrPlayerPlaceState' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPlayerPlaceStateAt($offset)
    {
        return $this->get(self::ARRPLAYERPLACESTATE, $offset);
    }

    /**
     * Returns count of 'arrPlayerPlaceState' list
     *
     * @return int
     */
    public function getArrPlayerPlaceStateCount()
    {
        return $this->count(self::ARRPLAYERPLACESTATE);
    }

    /**
     * Appends value to 'arrObserverPublicInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverPublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value)
    {
        return $this->append(self::ARROBSERVERPUBLICINFO, $value);
    }

    /**
     * Clears 'arrObserverPublicInfo' list
     *
     * @return null
     */
    public function clearArrObserverPublicInfo()
    {
        return $this->clear(self::ARROBSERVERPUBLICINFO);
    }

    /**
     * Returns 'arrObserverPublicInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo[]
     */
    public function getArrObserverPublicInfo()
    {
        return $this->get(self::ARROBSERVERPUBLICINFO);
    }

    /**
     * Returns true if 'arrObserverPublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverPublicInfo()
    {
        return count($this->get(self::ARROBSERVERPUBLICINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverPublicInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverPublicInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERPUBLICINFO));
    }

    /**
     * Returns element from 'arrObserverPublicInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getArrObserverPublicInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERPUBLICINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverPublicInfo' list
     *
     * @return int
     */
    public function getArrObserverPublicInfoCount()
    {
        return $this->count(self::ARROBSERVERPUBLICINFO);
    }

    /**
     * Appends value to 'arrObserverAvatarInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value)
    {
        return $this->append(self::ARROBSERVERAVATARINFO, $value);
    }

    /**
     * Clears 'arrObserverAvatarInfo' list
     *
     * @return null
     */
    public function clearArrObserverAvatarInfo()
    {
        return $this->clear(self::ARROBSERVERAVATARINFO);
    }

    /**
     * Returns 'arrObserverAvatarInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo[]
     */
    public function getArrObserverAvatarInfo()
    {
        return $this->get(self::ARROBSERVERAVATARINFO);
    }

    /**
     * Returns true if 'arrObserverAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverAvatarInfo()
    {
        return count($this->get(self::ARROBSERVERAVATARINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverAvatarInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverAvatarInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERAVATARINFO));
    }

    /**
     * Returns element from 'arrObserverAvatarInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getArrObserverAvatarInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERAVATARINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverAvatarInfo' list
     *
     * @return int
     */
    public function getArrObserverAvatarInfoCount()
    {
        return $this->count(self::ARROBSERVERAVATARINFO);
    }

    /**
     * Appends value to 'arrObserverRoomDetailInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverRoomDetailInfo(\Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo $value)
    {
        return $this->append(self::ARROBSERVERROOMDETAILINFO, $value);
    }

    /**
     * Clears 'arrObserverRoomDetailInfo' list
     *
     * @return null
     */
    public function clearArrObserverRoomDetailInfo()
    {
        return $this->clear(self::ARROBSERVERROOMDETAILINFO);
    }

    /**
     * Returns 'arrObserverRoomDetailInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo[]
     */
    public function getArrObserverRoomDetailInfo()
    {
        return $this->get(self::ARROBSERVERROOMDETAILINFO);
    }

    /**
     * Returns true if 'arrObserverRoomDetailInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverRoomDetailInfo()
    {
        return count($this->get(self::ARROBSERVERROOMDETAILINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverRoomDetailInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverRoomDetailInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERROOMDETAILINFO));
    }

    /**
     * Returns element from 'arrObserverRoomDetailInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleRoomDetailInfo
     */
    public function getArrObserverRoomDetailInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERROOMDETAILINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverRoomDetailInfo' list
     *
     * @return int
     */
    public function getArrObserverRoomDetailInfoCount()
    {
        return $this->count(self::ARROBSERVERROOMDETAILINFO);
    }

    /**
     * Appends value to 'arrObserverPlaceState' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrObserverPlaceState($value)
    {
        return $this->append(self::ARROBSERVERPLACESTATE, $value);
    }

    /**
     * Clears 'arrObserverPlaceState' list
     *
     * @return null
     */
    public function clearArrObserverPlaceState()
    {
        return $this->clear(self::ARROBSERVERPLACESTATE);
    }

    /**
     * Returns 'arrObserverPlaceState' list
     *
     * @return integer[]
     */
    public function getArrObserverPlaceState()
    {
        return $this->get(self::ARROBSERVERPLACESTATE);
    }

    /**
     * Returns true if 'arrObserverPlaceState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverPlaceState()
    {
        return count($this->get(self::ARROBSERVERPLACESTATE)) !== 0;
    }

    /**
     * Returns 'arrObserverPlaceState' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverPlaceStateIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERPLACESTATE));
    }

    /**
     * Returns element from 'arrObserverPlaceState' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrObserverPlaceStateAt($offset)
    {
        return $this->get(self::ARROBSERVERPLACESTATE, $offset);
    }

    /**
     * Returns count of 'arrObserverPlaceState' list
     *
     * @return int
     */
    public function getArrObserverPlaceStateCount()
    {
        return $this->count(self::ARROBSERVERPLACESTATE);
    }

    /**
     * Appends value to 'arrStagePosInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\StagePosInfo $value Value to append
     *
     * @return null
     */
    public function appendArrStagePosInfo(\Xnhd\Core\Pb\Sdo\StagePosInfo $value)
    {
        return $this->append(self::ARRSTAGEPOSINFO, $value);
    }

    /**
     * Clears 'arrStagePosInfo' list
     *
     * @return null
     */
    public function clearArrStagePosInfo()
    {
        return $this->clear(self::ARRSTAGEPOSINFO);
    }

    /**
     * Returns 'arrStagePosInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\StagePosInfo[]
     */
    public function getArrStagePosInfo()
    {
        return $this->get(self::ARRSTAGEPOSINFO);
    }

    /**
     * Returns true if 'arrStagePosInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStagePosInfo()
    {
        return count($this->get(self::ARRSTAGEPOSINFO)) !== 0;
    }

    /**
     * Returns 'arrStagePosInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStagePosInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTAGEPOSINFO));
    }

    /**
     * Returns element from 'arrStagePosInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\StagePosInfo
     */
    public function getArrStagePosInfoAt($offset)
    {
        return $this->get(self::ARRSTAGEPOSINFO, $offset);
    }

    /**
     * Returns count of 'arrStagePosInfo' list
     *
     * @return int
     */
    public function getArrStagePosInfoCount()
    {
        return $this->count(self::ARRSTAGEPOSINFO);
    }

    /**
     * Appends value to 'arrPlayerGuildInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGuildInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerGuildInfo(\Xnhd\Core\Pb\Sdo\RoleGuildInfo $value)
    {
        return $this->append(self::ARRPLAYERGUILDINFO, $value);
    }

    /**
     * Clears 'arrPlayerGuildInfo' list
     *
     * @return null
     */
    public function clearArrPlayerGuildInfo()
    {
        return $this->clear(self::ARRPLAYERGUILDINFO);
    }

    /**
     * Returns 'arrPlayerGuildInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInfo[]
     */
    public function getArrPlayerGuildInfo()
    {
        return $this->get(self::ARRPLAYERGUILDINFO);
    }

    /**
     * Returns true if 'arrPlayerGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerGuildInfo()
    {
        return count($this->get(self::ARRPLAYERGUILDINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerGuildInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerGuildInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERGUILDINFO));
    }

    /**
     * Returns element from 'arrPlayerGuildInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInfo
     */
    public function getArrPlayerGuildInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERGUILDINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerGuildInfo' list
     *
     * @return int
     */
    public function getArrPlayerGuildInfoCount()
    {
        return $this->count(self::ARRPLAYERGUILDINFO);
    }

    /**
     * Appends value to 'arrPlayerLoverInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleLoverInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerLoverInfo(\Xnhd\Core\Pb\Sdo\RoleLoverInfo $value)
    {
        return $this->append(self::ARRPLAYERLOVERINFO, $value);
    }

    /**
     * Clears 'arrPlayerLoverInfo' list
     *
     * @return null
     */
    public function clearArrPlayerLoverInfo()
    {
        return $this->clear(self::ARRPLAYERLOVERINFO);
    }

    /**
     * Returns 'arrPlayerLoverInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleLoverInfo[]
     */
    public function getArrPlayerLoverInfo()
    {
        return $this->get(self::ARRPLAYERLOVERINFO);
    }

    /**
     * Returns true if 'arrPlayerLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerLoverInfo()
    {
        return count($this->get(self::ARRPLAYERLOVERINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerLoverInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerLoverInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERLOVERINFO));
    }

    /**
     * Returns element from 'arrPlayerLoverInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleLoverInfo
     */
    public function getArrPlayerLoverInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERLOVERINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerLoverInfo' list
     *
     * @return int
     */
    public function getArrPlayerLoverInfoCount()
    {
        return $this->count(self::ARRPLAYERLOVERINFO);
    }

    /**
     * Appends value to 'arrPlayerBufferInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleBufferInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerBufferInfo(\Xnhd\Core\Pb\Sdo\RoleBufferInfo $value)
    {
        return $this->append(self::ARRPLAYERBUFFERINFO, $value);
    }

    /**
     * Clears 'arrPlayerBufferInfo' list
     *
     * @return null
     */
    public function clearArrPlayerBufferInfo()
    {
        return $this->clear(self::ARRPLAYERBUFFERINFO);
    }

    /**
     * Returns 'arrPlayerBufferInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBufferInfo[]
     */
    public function getArrPlayerBufferInfo()
    {
        return $this->get(self::ARRPLAYERBUFFERINFO);
    }

    /**
     * Returns true if 'arrPlayerBufferInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerBufferInfo()
    {
        return count($this->get(self::ARRPLAYERBUFFERINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerBufferInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerBufferInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERBUFFERINFO));
    }

    /**
     * Returns element from 'arrPlayerBufferInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBufferInfo
     */
    public function getArrPlayerBufferInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERBUFFERINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerBufferInfo' list
     *
     * @return int
     */
    public function getArrPlayerBufferInfoCount()
    {
        return $this->count(self::ARRPLAYERBUFFERINFO);
    }

    /**
     * Appends value to 'arrObserverGuildInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGuildInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverGuildInfo(\Xnhd\Core\Pb\Sdo\RoleGuildInfo $value)
    {
        return $this->append(self::ARROBSERVERGUILDINFO, $value);
    }

    /**
     * Clears 'arrObserverGuildInfo' list
     *
     * @return null
     */
    public function clearArrObserverGuildInfo()
    {
        return $this->clear(self::ARROBSERVERGUILDINFO);
    }

    /**
     * Returns 'arrObserverGuildInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInfo[]
     */
    public function getArrObserverGuildInfo()
    {
        return $this->get(self::ARROBSERVERGUILDINFO);
    }

    /**
     * Returns true if 'arrObserverGuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverGuildInfo()
    {
        return count($this->get(self::ARROBSERVERGUILDINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverGuildInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverGuildInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERGUILDINFO));
    }

    /**
     * Returns element from 'arrObserverGuildInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGuildInfo
     */
    public function getArrObserverGuildInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERGUILDINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverGuildInfo' list
     *
     * @return int
     */
    public function getArrObserverGuildInfoCount()
    {
        return $this->count(self::ARROBSERVERGUILDINFO);
    }

    /**
     * Appends value to 'arrObserverLoverInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleLoverInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverLoverInfo(\Xnhd\Core\Pb\Sdo\RoleLoverInfo $value)
    {
        return $this->append(self::ARROBSERVERLOVERINFO, $value);
    }

    /**
     * Clears 'arrObserverLoverInfo' list
     *
     * @return null
     */
    public function clearArrObserverLoverInfo()
    {
        return $this->clear(self::ARROBSERVERLOVERINFO);
    }

    /**
     * Returns 'arrObserverLoverInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleLoverInfo[]
     */
    public function getArrObserverLoverInfo()
    {
        return $this->get(self::ARROBSERVERLOVERINFO);
    }

    /**
     * Returns true if 'arrObserverLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverLoverInfo()
    {
        return count($this->get(self::ARROBSERVERLOVERINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverLoverInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverLoverInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERLOVERINFO));
    }

    /**
     * Returns element from 'arrObserverLoverInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleLoverInfo
     */
    public function getArrObserverLoverInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERLOVERINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverLoverInfo' list
     *
     * @return int
     */
    public function getArrObserverLoverInfoCount()
    {
        return $this->count(self::ARROBSERVERLOVERINFO);
    }

    /**
     * Appends value to 'arrObserverBufferInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleBufferInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverBufferInfo(\Xnhd\Core\Pb\Sdo\RoleBufferInfo $value)
    {
        return $this->append(self::ARROBSERVERBUFFERINFO, $value);
    }

    /**
     * Clears 'arrObserverBufferInfo' list
     *
     * @return null
     */
    public function clearArrObserverBufferInfo()
    {
        return $this->clear(self::ARROBSERVERBUFFERINFO);
    }

    /**
     * Returns 'arrObserverBufferInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBufferInfo[]
     */
    public function getArrObserverBufferInfo()
    {
        return $this->get(self::ARROBSERVERBUFFERINFO);
    }

    /**
     * Returns true if 'arrObserverBufferInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverBufferInfo()
    {
        return count($this->get(self::ARROBSERVERBUFFERINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverBufferInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverBufferInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERBUFFERINFO));
    }

    /**
     * Returns element from 'arrObserverBufferInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBufferInfo
     */
    public function getArrObserverBufferInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERBUFFERINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverBufferInfo' list
     *
     * @return int
     */
    public function getArrObserverBufferInfoCount()
    {
        return $this->count(self::ARROBSERVERBUFFERINFO);
    }

    /**
     * Appends value to 'arrVehicleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\VehicleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrVehicleInfo(\Xnhd\Core\Pb\Sdo\VehicleInfo $value)
    {
        return $this->append(self::ARRVEHICLEINFO, $value);
    }

    /**
     * Clears 'arrVehicleInfo' list
     *
     * @return null
     */
    public function clearArrVehicleInfo()
    {
        return $this->clear(self::ARRVEHICLEINFO);
    }

    /**
     * Returns 'arrVehicleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\VehicleInfo[]
     */
    public function getArrVehicleInfo()
    {
        return $this->get(self::ARRVEHICLEINFO);
    }

    /**
     * Returns true if 'arrVehicleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrVehicleInfo()
    {
        return count($this->get(self::ARRVEHICLEINFO)) !== 0;
    }

    /**
     * Returns 'arrVehicleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrVehicleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRVEHICLEINFO));
    }

    /**
     * Returns element from 'arrVehicleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\VehicleInfo
     */
    public function getArrVehicleInfoAt($offset)
    {
        return $this->get(self::ARRVEHICLEINFO, $offset);
    }

    /**
     * Returns count of 'arrVehicleInfo' list
     *
     * @return int
     */
    public function getArrVehicleInfoCount()
    {
        return $this->count(self::ARRVEHICLEINFO);
    }

    /**
     * Appends value to 'arrStageChest' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ChestInfo $value Value to append
     *
     * @return null
     */
    public function appendArrStageChest(\Xnhd\Core\Pb\Sdo\ChestInfo $value)
    {
        return $this->append(self::ARRSTAGECHEST, $value);
    }

    /**
     * Clears 'arrStageChest' list
     *
     * @return null
     */
    public function clearArrStageChest()
    {
        return $this->clear(self::ARRSTAGECHEST);
    }

    /**
     * Returns 'arrStageChest' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChestInfo[]
     */
    public function getArrStageChest()
    {
        return $this->get(self::ARRSTAGECHEST);
    }

    /**
     * Returns true if 'arrStageChest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStageChest()
    {
        return count($this->get(self::ARRSTAGECHEST)) !== 0;
    }

    /**
     * Returns 'arrStageChest' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStageChestIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTAGECHEST));
    }

    /**
     * Returns element from 'arrStageChest' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChestInfo
     */
    public function getArrStageChestAt($offset)
    {
        return $this->get(self::ARRSTAGECHEST, $offset);
    }

    /**
     * Returns count of 'arrStageChest' list
     *
     * @return int
     */
    public function getArrStageChestCount()
    {
        return $this->count(self::ARRSTAGECHEST);
    }

    /**
     * Sets value of 'stHouseInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseDetailInfo $value Property value
     *
     * @return null
     */
    public function setStHouseInfo(\Xnhd\Core\Pb\Sdo\HouseDetailInfo $value=null)
    {
        return $this->set(self::STHOUSEINFO, $value);
    }

    /**
     * Returns value of 'stHouseInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseDetailInfo
     */
    public function getStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO);
    }

    /**
     * Returns true if 'stHouseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHouseInfo()
    {
        return $this->get(self::STHOUSEINFO) !== null;
    }

    /**
     * Appends value to 'arrHousePosInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HousePosInfo $value Value to append
     *
     * @return null
     */
    public function appendArrHousePosInfo(\Xnhd\Core\Pb\Sdo\HousePosInfo $value)
    {
        return $this->append(self::ARRHOUSEPOSINFO, $value);
    }

    /**
     * Clears 'arrHousePosInfo' list
     *
     * @return null
     */
    public function clearArrHousePosInfo()
    {
        return $this->clear(self::ARRHOUSEPOSINFO);
    }

    /**
     * Returns 'arrHousePosInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\HousePosInfo[]
     */
    public function getArrHousePosInfo()
    {
        return $this->get(self::ARRHOUSEPOSINFO);
    }

    /**
     * Returns true if 'arrHousePosInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHousePosInfo()
    {
        return count($this->get(self::ARRHOUSEPOSINFO)) !== 0;
    }

    /**
     * Returns 'arrHousePosInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHousePosInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHOUSEPOSINFO));
    }

    /**
     * Returns element from 'arrHousePosInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\HousePosInfo
     */
    public function getArrHousePosInfoAt($offset)
    {
        return $this->get(self::ARRHOUSEPOSINFO, $offset);
    }

    /**
     * Returns count of 'arrHousePosInfo' list
     *
     * @return int
     */
    public function getArrHousePosInfoCount()
    {
        return $this->count(self::ARRHOUSEPOSINFO);
    }
}
}