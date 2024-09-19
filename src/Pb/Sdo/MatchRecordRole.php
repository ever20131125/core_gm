<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchRecordRole message
 */
class MatchRecordRole extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STROLEINFO = 2;
    const STTITLEINFO = 3;
    const STAVATARINFO = 4;
    const TEAM = 5;
    const ARRCOMMITINDEX = 6;
    const ARRCOMMITKEY = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEINFO => array(
            'name' => 'stRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::STTITLEINFO => array(
            'name' => 'stTitleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
        ),
        self::TEAM => array(
            'default' => \Xnhd\Core\Pb\Sdo\Team::enmTeam_Red,
            'name' => 'team',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCOMMITINDEX => array(
            'name' => 'arrCommitIndex',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCOMMITKEY => array(
            'name' => 'arrCommitKey',
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
        $this->values[self::STROLEINFO] = null;
        $this->values[self::STTITLEINFO] = null;
        $this->values[self::STAVATARINFO] = null;
        $this->values[self::TEAM] = self::$fields[self::TEAM]['default'];
        $this->values[self::ARRCOMMITINDEX] = array();
        $this->values[self::ARRCOMMITKEY] = array();
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
     * Sets value of 'stRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Property value
     *
     * @return null
     */
    public function setStRoleInfo(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value=null)
    {
        return $this->set(self::STROLEINFO, $value);
    }

    /**
     * Returns value of 'stRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getStRoleInfo()
    {
        return $this->get(self::STROLEINFO);
    }

    /**
     * Returns true if 'stRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleInfo()
    {
        return $this->get(self::STROLEINFO) !== null;
    }

    /**
     * Sets value of 'stTitleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setStTitleInfo(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::STTITLEINFO, $value);
    }

    /**
     * Returns value of 'stTitleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getStTitleInfo()
    {
        return $this->get(self::STTITLEINFO);
    }

    /**
     * Returns true if 'stTitleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStTitleInfo()
    {
        return $this->get(self::STTITLEINFO) !== null;
    }

    /**
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }

    /**
     * Sets value of 'team' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTeam($value)
    {
        return $this->set(self::TEAM, $value);
    }

    /**
     * Returns value of 'team' property
     *
     * @return integer
     */
    public function getTeam()
    {
        $value = $this->get(self::TEAM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'team' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTeam()
    {
        return $this->get(self::TEAM) !== null;
    }

    /**
     * Appends value to 'arrCommitIndex' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCommitIndex($value)
    {
        return $this->append(self::ARRCOMMITINDEX, $value);
    }

    /**
     * Clears 'arrCommitIndex' list
     *
     * @return null
     */
    public function clearArrCommitIndex()
    {
        return $this->clear(self::ARRCOMMITINDEX);
    }

    /**
     * Returns 'arrCommitIndex' list
     *
     * @return integer[]
     */
    public function getArrCommitIndex()
    {
        return $this->get(self::ARRCOMMITINDEX);
    }

    /**
     * Returns true if 'arrCommitIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCommitIndex()
    {
        return count($this->get(self::ARRCOMMITINDEX)) !== 0;
    }

    /**
     * Returns 'arrCommitIndex' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCommitIndexIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOMMITINDEX));
    }

    /**
     * Returns element from 'arrCommitIndex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCommitIndexAt($offset)
    {
        return $this->get(self::ARRCOMMITINDEX, $offset);
    }

    /**
     * Returns count of 'arrCommitIndex' list
     *
     * @return int
     */
    public function getArrCommitIndexCount()
    {
        return $this->count(self::ARRCOMMITINDEX);
    }

    /**
     * Appends value to 'arrCommitKey' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCommitKey($value)
    {
        return $this->append(self::ARRCOMMITKEY, $value);
    }

    /**
     * Clears 'arrCommitKey' list
     *
     * @return null
     */
    public function clearArrCommitKey()
    {
        return $this->clear(self::ARRCOMMITKEY);
    }

    /**
     * Returns 'arrCommitKey' list
     *
     * @return integer[]
     */
    public function getArrCommitKey()
    {
        return $this->get(self::ARRCOMMITKEY);
    }

    /**
     * Returns true if 'arrCommitKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCommitKey()
    {
        return count($this->get(self::ARRCOMMITKEY)) !== 0;
    }

    /**
     * Returns 'arrCommitKey' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCommitKeyIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOMMITKEY));
    }

    /**
     * Returns element from 'arrCommitKey' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCommitKeyAt($offset)
    {
        return $this->get(self::ARRCOMMITKEY, $offset);
    }

    /**
     * Returns count of 'arrCommitKey' list
     *
     * @return int
     */
    public function getArrCommitKeyCount()
    {
        return $this->count(self::ARRCOMMITKEY);
    }
}
}