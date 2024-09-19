<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetApplyListResp message
 */
class GDSGetApplyListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEINFO => array(
            'name' => 'roleInfo',
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
        $this->values[self::ROLEINFO] = array();
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
     * Appends value to 'roleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Value to append
     *
     * @return null
     */
    public function appendRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value)
    {
        return $this->append(self::ROLEINFO, $value);
    }

    /**
     * Clears 'roleInfo' list
     *
     * @return null
     */
    public function clearRoleInfo()
    {
        return $this->clear(self::ROLEINFO);
    }

    /**
     * Returns 'roleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo[]
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return count($this->get(self::ROLEINFO)) !== 0;
    }

    /**
     * Returns 'roleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getRoleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ROLEINFO));
    }

    /**
     * Returns element from 'roleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getRoleInfoAt($offset)
    {
        return $this->get(self::ROLEINFO, $offset);
    }

    /**
     * Returns count of 'roleInfo' list
     *
     * @return int
     */
    public function getRoleInfoCount()
    {
        return $this->count(self::ROLEINFO);
    }
}
}