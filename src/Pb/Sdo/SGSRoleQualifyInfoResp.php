<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSRoleQualifyInfoResp message
 */
class SGSRoleQualifyInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROLEINFO => array(
            'name' => 'arrRoleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleQualifyInfo'
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
        $this->values[self::ARRROLEINFO] = array();
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
     * Appends value to 'arrRoleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleQualifyInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleInfo(\Xnhd\Core\Pb\Sdo\RoleQualifyInfo $value)
    {
        return $this->append(self::ARRROLEINFO, $value);
    }

    /**
     * Clears 'arrRoleInfo' list
     *
     * @return null
     */
    public function clearArrRoleInfo()
    {
        return $this->clear(self::ARRROLEINFO);
    }

    /**
     * Returns 'arrRoleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleQualifyInfo[]
     */
    public function getArrRoleInfo()
    {
        return $this->get(self::ARRROLEINFO);
    }

    /**
     * Returns true if 'arrRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleInfo()
    {
        return count($this->get(self::ARRROLEINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEINFO));
    }

    /**
     * Returns element from 'arrRoleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleQualifyInfo
     */
    public function getArrRoleInfoAt($offset)
    {
        return $this->get(self::ARRROLEINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleInfo' list
     *
     * @return int
     */
    public function getArrRoleInfoCount()
    {
        return $this->count(self::ARRROLEINFO);
    }
}
}