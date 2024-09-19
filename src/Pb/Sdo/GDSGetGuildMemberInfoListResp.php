<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetGuildMemberInfoListResp message
 */
class GDSGetGuildMemberInfoListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const INFOLIST = 2;
    const PUBLICINFOLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::INFOLIST => array(
            'name' => 'infoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildMemberInfo'
        ),
        self::PUBLICINFOLIST => array(
            'name' => 'publicInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
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
        $this->values[self::INFOLIST] = array();
        $this->values[self::PUBLICINFOLIST] = array();
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
     * Appends value to 'infoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildMemberInfo $value Value to append
     *
     * @return null
     */
    public function appendInfoList(\Xnhd\Core\Pb\Sdo\GuildMemberInfo $value)
    {
        return $this->append(self::INFOLIST, $value);
    }

    /**
     * Clears 'infoList' list
     *
     * @return null
     */
    public function clearInfoList()
    {
        return $this->clear(self::INFOLIST);
    }

    /**
     * Returns 'infoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildMemberInfo[]
     */
    public function getInfoList()
    {
        return $this->get(self::INFOLIST);
    }

    /**
     * Returns true if 'infoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfoList()
    {
        return count($this->get(self::INFOLIST)) !== 0;
    }

    /**
     * Returns 'infoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::INFOLIST));
    }

    /**
     * Returns element from 'infoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildMemberInfo
     */
    public function getInfoListAt($offset)
    {
        return $this->get(self::INFOLIST, $offset);
    }

    /**
     * Returns count of 'infoList' list
     *
     * @return int
     */
    public function getInfoListCount()
    {
        return $this->count(self::INFOLIST);
    }

    /**
     * Appends value to 'publicInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Value to append
     *
     * @return null
     */
    public function appendPublicInfoList(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value)
    {
        return $this->append(self::PUBLICINFOLIST, $value);
    }

    /**
     * Clears 'publicInfoList' list
     *
     * @return null
     */
    public function clearPublicInfoList()
    {
        return $this->clear(self::PUBLICINFOLIST);
    }

    /**
     * Returns 'publicInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo[]
     */
    public function getPublicInfoList()
    {
        return $this->get(self::PUBLICINFOLIST);
    }

    /**
     * Returns true if 'publicInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPublicInfoList()
    {
        return count($this->get(self::PUBLICINFOLIST)) !== 0;
    }

    /**
     * Returns 'publicInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPublicInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::PUBLICINFOLIST));
    }

    /**
     * Returns element from 'publicInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getPublicInfoListAt($offset)
    {
        return $this->get(self::PUBLICINFOLIST, $offset);
    }

    /**
     * Returns count of 'publicInfoList' list
     *
     * @return int
     */
    public function getPublicInfoListCount()
    {
        return $this->count(self::PUBLICINFOLIST);
    }
}
}