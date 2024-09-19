<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetRoleDataResp message
 */
class CDSGetRoleDataResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const WAYS = 2;
    const ROLEIDLIST = 3;
    const ROLEGENINFOLIST = 4;
    const AVATARINFOLIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::WAYS => array(
            'name' => 'ways',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEIDLIST => array(
            'name' => 'roleIDList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEGENINFOLIST => array(
            'name' => 'roleGenInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::AVATARINFOLIST => array(
            'name' => 'avatarInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
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
        $this->values[self::WAYS] = null;
        $this->values[self::ROLEIDLIST] = array();
        $this->values[self::ROLEGENINFOLIST] = array();
        $this->values[self::AVATARINFOLIST] = array();
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
     * Sets value of 'ways' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWays($value)
    {
        return $this->set(self::WAYS, $value);
    }

    /**
     * Returns value of 'ways' property
     *
     * @return integer
     */
    public function getWays()
    {
        $value = $this->get(self::WAYS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ways' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWays()
    {
        return $this->get(self::WAYS) !== null;
    }

    /**
     * Appends value to 'roleIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRoleIDList($value)
    {
        return $this->append(self::ROLEIDLIST, $value);
    }

    /**
     * Clears 'roleIDList' list
     *
     * @return null
     */
    public function clearRoleIDList()
    {
        return $this->clear(self::ROLEIDLIST);
    }

    /**
     * Returns 'roleIDList' list
     *
     * @return integer[]
     */
    public function getRoleIDList()
    {
        return $this->get(self::ROLEIDLIST);
    }

    /**
     * Returns true if 'roleIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleIDList()
    {
        return count($this->get(self::ROLEIDLIST)) !== 0;
    }

    /**
     * Returns 'roleIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getRoleIDListIterator()
    {
        return new \ArrayIterator($this->get(self::ROLEIDLIST));
    }

    /**
     * Returns element from 'roleIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRoleIDListAt($offset)
    {
        return $this->get(self::ROLEIDLIST, $offset);
    }

    /**
     * Returns count of 'roleIDList' list
     *
     * @return int
     */
    public function getRoleIDListCount()
    {
        return $this->count(self::ROLEIDLIST);
    }

    /**
     * Appends value to 'roleGenInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendRoleGenInfoList(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value)
    {
        return $this->append(self::ROLEGENINFOLIST, $value);
    }

    /**
     * Clears 'roleGenInfoList' list
     *
     * @return null
     */
    public function clearRoleGenInfoList()
    {
        return $this->clear(self::ROLEGENINFOLIST);
    }

    /**
     * Returns 'roleGenInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo[]
     */
    public function getRoleGenInfoList()
    {
        return $this->get(self::ROLEGENINFOLIST);
    }

    /**
     * Returns true if 'roleGenInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleGenInfoList()
    {
        return count($this->get(self::ROLEGENINFOLIST)) !== 0;
    }

    /**
     * Returns 'roleGenInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getRoleGenInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::ROLEGENINFOLIST));
    }

    /**
     * Returns element from 'roleGenInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getRoleGenInfoListAt($offset)
    {
        return $this->get(self::ROLEGENINFOLIST, $offset);
    }

    /**
     * Returns count of 'roleGenInfoList' list
     *
     * @return int
     */
    public function getRoleGenInfoListCount()
    {
        return $this->count(self::ROLEGENINFOLIST);
    }

    /**
     * Appends value to 'avatarInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Value to append
     *
     * @return null
     */
    public function appendAvatarInfoList(\Xnhd\Core\Pb\Sdo\AvatarInfo $value)
    {
        return $this->append(self::AVATARINFOLIST, $value);
    }

    /**
     * Clears 'avatarInfoList' list
     *
     * @return null
     */
    public function clearAvatarInfoList()
    {
        return $this->clear(self::AVATARINFOLIST);
    }

    /**
     * Returns 'avatarInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo[]
     */
    public function getAvatarInfoList()
    {
        return $this->get(self::AVATARINFOLIST);
    }

    /**
     * Returns true if 'avatarInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAvatarInfoList()
    {
        return count($this->get(self::AVATARINFOLIST)) !== 0;
    }

    /**
     * Returns 'avatarInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getAvatarInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::AVATARINFOLIST));
    }

    /**
     * Returns element from 'avatarInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getAvatarInfoListAt($offset)
    {
        return $this->get(self::AVATARINFOLIST, $offset);
    }

    /**
     * Returns count of 'avatarInfoList' list
     *
     * @return int
     */
    public function getAvatarInfoListCount()
    {
        return $this->count(self::AVATARINFOLIST);
    }
}
}