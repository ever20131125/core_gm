<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSGetRealmInfoResp message
 */
class STSGetRealmInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRREALMINFO = 3;

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
        self::ARRREALMINFO => array(
            'name' => 'arrRealmInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RealmInfo'
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
        $this->values[self::ARRREALMINFO] = array();
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
     * Appends value to 'arrRealmInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RealmInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRealmInfo(\Xnhd\Core\Pb\Sdo\RealmInfo $value)
    {
        return $this->append(self::ARRREALMINFO, $value);
    }

    /**
     * Clears 'arrRealmInfo' list
     *
     * @return null
     */
    public function clearArrRealmInfo()
    {
        return $this->clear(self::ARRREALMINFO);
    }

    /**
     * Returns 'arrRealmInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RealmInfo[]
     */
    public function getArrRealmInfo()
    {
        return $this->get(self::ARRREALMINFO);
    }

    /**
     * Returns true if 'arrRealmInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRealmInfo()
    {
        return count($this->get(self::ARRREALMINFO)) !== 0;
    }

    /**
     * Returns 'arrRealmInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRealmInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRREALMINFO));
    }

    /**
     * Returns element from 'arrRealmInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RealmInfo
     */
    public function getArrRealmInfoAt($offset)
    {
        return $this->get(self::ARRREALMINFO, $offset);
    }

    /**
     * Returns count of 'arrRealmInfo' list
     *
     * @return int
     */
    public function getArrRealmInfoCount()
    {
        return $this->count(self::ARRREALMINFO);
    }
}
}