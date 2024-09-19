<?php
/**
 * Auto generated from searchserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SHSGetRoleListInfoResp message
 */
class SHSGetRoleListInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEGENERALINFO = 2;
    const ARRAVATARINFO = 3;
    const ARRPERSONINFO = 4;
    const ARRTITLEINFO = 5;
    const ARRHOUSEINFO = 6;
    const ARRCOUPLEINFO = 7;
    const ARRCOUPLEHOUSEINFO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROLEGENERALINFO => array(
            'name' => 'arrRoleGeneralInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::ARRAVATARINFO => array(
            'name' => 'arrAvatarInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::ARRPERSONINFO => array(
            'name' => 'arrPersonInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePersonInfo'
        ),
        self::ARRTITLEINFO => array(
            'name' => 'arrTitleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::ARRHOUSEINFO => array(
            'name' => 'arrHouseInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseGeneralInfo'
        ),
        self::ARRCOUPLEINFO => array(
            'name' => 'arrCoupleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleSimple'
        ),
        self::ARRCOUPLEHOUSEINFO => array(
            'name' => 'arrCoupleHouseInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseGeneralInfo'
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
        $this->values[self::ARRROLEGENERALINFO] = array();
        $this->values[self::ARRAVATARINFO] = array();
        $this->values[self::ARRPERSONINFO] = array();
        $this->values[self::ARRTITLEINFO] = array();
        $this->values[self::ARRHOUSEINFO] = array();
        $this->values[self::ARRCOUPLEINFO] = array();
        $this->values[self::ARRCOUPLEHOUSEINFO] = array();
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
     * Appends value to 'arrRoleGeneralInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleGeneralInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value)
    {
        return $this->append(self::ARRROLEGENERALINFO, $value);
    }

    /**
     * Clears 'arrRoleGeneralInfo' list
     *
     * @return null
     */
    public function clearArrRoleGeneralInfo()
    {
        return $this->clear(self::ARRROLEGENERALINFO);
    }

    /**
     * Returns 'arrRoleGeneralInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo[]
     */
    public function getArrRoleGeneralInfo()
    {
        return $this->get(self::ARRROLEGENERALINFO);
    }

    /**
     * Returns true if 'arrRoleGeneralInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleGeneralInfo()
    {
        return count($this->get(self::ARRROLEGENERALINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleGeneralInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleGeneralInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEGENERALINFO));
    }

    /**
     * Returns element from 'arrRoleGeneralInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getArrRoleGeneralInfoAt($offset)
    {
        return $this->get(self::ARRROLEGENERALINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleGeneralInfo' list
     *
     * @return int
     */
    public function getArrRoleGeneralInfoCount()
    {
        return $this->count(self::ARRROLEGENERALINFO);
    }

    /**
     * Appends value to 'arrAvatarInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Value to append
     *
     * @return null
     */
    public function appendArrAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value)
    {
        return $this->append(self::ARRAVATARINFO, $value);
    }

    /**
     * Clears 'arrAvatarInfo' list
     *
     * @return null
     */
    public function clearArrAvatarInfo()
    {
        return $this->clear(self::ARRAVATARINFO);
    }

    /**
     * Returns 'arrAvatarInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo[]
     */
    public function getArrAvatarInfo()
    {
        return $this->get(self::ARRAVATARINFO);
    }

    /**
     * Returns true if 'arrAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAvatarInfo()
    {
        return count($this->get(self::ARRAVATARINFO)) !== 0;
    }

    /**
     * Returns 'arrAvatarInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAvatarInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRAVATARINFO));
    }

    /**
     * Returns element from 'arrAvatarInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getArrAvatarInfoAt($offset)
    {
        return $this->get(self::ARRAVATARINFO, $offset);
    }

    /**
     * Returns count of 'arrAvatarInfo' list
     *
     * @return int
     */
    public function getArrAvatarInfoCount()
    {
        return $this->count(self::ARRAVATARINFO);
    }

    /**
     * Appends value to 'arrPersonInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePersonInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPersonInfo(\Xnhd\Core\Pb\Sdo\RolePersonInfo $value)
    {
        return $this->append(self::ARRPERSONINFO, $value);
    }

    /**
     * Clears 'arrPersonInfo' list
     *
     * @return null
     */
    public function clearArrPersonInfo()
    {
        return $this->clear(self::ARRPERSONINFO);
    }

    /**
     * Returns 'arrPersonInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePersonInfo[]
     */
    public function getArrPersonInfo()
    {
        return $this->get(self::ARRPERSONINFO);
    }

    /**
     * Returns true if 'arrPersonInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPersonInfo()
    {
        return count($this->get(self::ARRPERSONINFO)) !== 0;
    }

    /**
     * Returns 'arrPersonInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPersonInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPERSONINFO));
    }

    /**
     * Returns element from 'arrPersonInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePersonInfo
     */
    public function getArrPersonInfoAt($offset)
    {
        return $this->get(self::ARRPERSONINFO, $offset);
    }

    /**
     * Returns count of 'arrPersonInfo' list
     *
     * @return int
     */
    public function getArrPersonInfoCount()
    {
        return $this->count(self::ARRPERSONINFO);
    }

    /**
     * Appends value to 'arrTitleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrTitleInfo(\Xnhd\Core\Pb\Sdo\TitleInfo $value)
    {
        return $this->append(self::ARRTITLEINFO, $value);
    }

    /**
     * Clears 'arrTitleInfo' list
     *
     * @return null
     */
    public function clearArrTitleInfo()
    {
        return $this->clear(self::ARRTITLEINFO);
    }

    /**
     * Returns 'arrTitleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo[]
     */
    public function getArrTitleInfo()
    {
        return $this->get(self::ARRTITLEINFO);
    }

    /**
     * Returns true if 'arrTitleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTitleInfo()
    {
        return count($this->get(self::ARRTITLEINFO)) !== 0;
    }

    /**
     * Returns 'arrTitleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTitleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTITLEINFO));
    }

    /**
     * Returns element from 'arrTitleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getArrTitleInfoAt($offset)
    {
        return $this->get(self::ARRTITLEINFO, $offset);
    }

    /**
     * Returns count of 'arrTitleInfo' list
     *
     * @return int
     */
    public function getArrTitleInfoCount()
    {
        return $this->count(self::ARRTITLEINFO);
    }

    /**
     * Appends value to 'arrHouseInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrHouseInfo(\Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value)
    {
        return $this->append(self::ARRHOUSEINFO, $value);
    }

    /**
     * Clears 'arrHouseInfo' list
     *
     * @return null
     */
    public function clearArrHouseInfo()
    {
        return $this->clear(self::ARRHOUSEINFO);
    }

    /**
     * Returns 'arrHouseInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo[]
     */
    public function getArrHouseInfo()
    {
        return $this->get(self::ARRHOUSEINFO);
    }

    /**
     * Returns true if 'arrHouseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHouseInfo()
    {
        return count($this->get(self::ARRHOUSEINFO)) !== 0;
    }

    /**
     * Returns 'arrHouseInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHouseInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHOUSEINFO));
    }

    /**
     * Returns element from 'arrHouseInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo
     */
    public function getArrHouseInfoAt($offset)
    {
        return $this->get(self::ARRHOUSEINFO, $offset);
    }

    /**
     * Returns count of 'arrHouseInfo' list
     *
     * @return int
     */
    public function getArrHouseInfoCount()
    {
        return $this->count(self::ARRHOUSEINFO);
    }

    /**
     * Appends value to 'arrCoupleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleSimple $value Value to append
     *
     * @return null
     */
    public function appendArrCoupleInfo(\Xnhd\Core\Pb\Sdo\CoupleSimple $value)
    {
        return $this->append(self::ARRCOUPLEINFO, $value);
    }

    /**
     * Clears 'arrCoupleInfo' list
     *
     * @return null
     */
    public function clearArrCoupleInfo()
    {
        return $this->clear(self::ARRCOUPLEINFO);
    }

    /**
     * Returns 'arrCoupleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleSimple[]
     */
    public function getArrCoupleInfo()
    {
        return $this->get(self::ARRCOUPLEINFO);
    }

    /**
     * Returns true if 'arrCoupleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCoupleInfo()
    {
        return count($this->get(self::ARRCOUPLEINFO)) !== 0;
    }

    /**
     * Returns 'arrCoupleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCoupleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOUPLEINFO));
    }

    /**
     * Returns element from 'arrCoupleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleSimple
     */
    public function getArrCoupleInfoAt($offset)
    {
        return $this->get(self::ARRCOUPLEINFO, $offset);
    }

    /**
     * Returns count of 'arrCoupleInfo' list
     *
     * @return int
     */
    public function getArrCoupleInfoCount()
    {
        return $this->count(self::ARRCOUPLEINFO);
    }

    /**
     * Appends value to 'arrCoupleHouseInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrCoupleHouseInfo(\Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value)
    {
        return $this->append(self::ARRCOUPLEHOUSEINFO, $value);
    }

    /**
     * Clears 'arrCoupleHouseInfo' list
     *
     * @return null
     */
    public function clearArrCoupleHouseInfo()
    {
        return $this->clear(self::ARRCOUPLEHOUSEINFO);
    }

    /**
     * Returns 'arrCoupleHouseInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo[]
     */
    public function getArrCoupleHouseInfo()
    {
        return $this->get(self::ARRCOUPLEHOUSEINFO);
    }

    /**
     * Returns true if 'arrCoupleHouseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCoupleHouseInfo()
    {
        return count($this->get(self::ARRCOUPLEHOUSEINFO)) !== 0;
    }

    /**
     * Returns 'arrCoupleHouseInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCoupleHouseInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOUPLEHOUSEINFO));
    }

    /**
     * Returns element from 'arrCoupleHouseInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo
     */
    public function getArrCoupleHouseInfoAt($offset)
    {
        return $this->get(self::ARRCOUPLEHOUSEINFO, $offset);
    }

    /**
     * Returns count of 'arrCoupleHouseInfo' list
     *
     * @return int
     */
    public function getArrCoupleHouseInfoCount()
    {
        return $this->count(self::ARRCOUPLEHOUSEINFO);
    }
}
}