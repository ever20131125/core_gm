<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetAvatarPlanResp message
 */
class PDBGetAvatarPlanResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NUSEDID = 3;
    const SZPLANNAME = 4;
    const STAVATARINFO = 5;

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
        self::NUSEDID => array(
            'name' => 'nUsedID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZPLANNAME => array(
            'name' => 'szPlanName',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NUSEDID] = null;
        $this->values[self::SZPLANNAME] = array();
        $this->values[self::STAVATARINFO] = null;
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
     * Sets value of 'nUsedID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUsedID($value)
    {
        return $this->set(self::NUSEDID, $value);
    }

    /**
     * Returns value of 'nUsedID' property
     *
     * @return integer
     */
    public function getNUsedID()
    {
        $value = $this->get(self::NUSEDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUsedID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUsedID()
    {
        return $this->get(self::NUSEDID) !== null;
    }

    /**
     * Appends value to 'szPlanName' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSzPlanName($value)
    {
        return $this->append(self::SZPLANNAME, $value);
    }

    /**
     * Clears 'szPlanName' list
     *
     * @return null
     */
    public function clearSzPlanName()
    {
        return $this->clear(self::SZPLANNAME);
    }

    /**
     * Returns 'szPlanName' list
     *
     * @return string[]
     */
    public function getSzPlanName()
    {
        return $this->get(self::SZPLANNAME);
    }

    /**
     * Returns true if 'szPlanName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPlanName()
    {
        return count($this->get(self::SZPLANNAME)) !== 0;
    }

    /**
     * Returns 'szPlanName' iterator
     *
     * @return \ArrayIterator
     */
    public function getSzPlanNameIterator()
    {
        return new \ArrayIterator($this->get(self::SZPLANNAME));
    }

    /**
     * Returns element from 'szPlanName' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSzPlanNameAt($offset)
    {
        return $this->get(self::SZPLANNAME, $offset);
    }

    /**
     * Returns count of 'szPlanName' list
     *
     * @return int
     */
    public function getSzPlanNameCount()
    {
        return $this->count(self::SZPLANNAME);
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
}
}