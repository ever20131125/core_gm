<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGMGetAccountInfoResp message
 */
class PDBGMGetAccountInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEGMINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROLEGMINFO => array(
            'name' => 'arrRoleGMInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGMInfo'
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
        $this->values[self::ARRROLEGMINFO] = array();
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
     * Appends value to 'arrRoleGMInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGMInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleGMInfo(\Xnhd\Core\Pb\Sdo\RoleGMInfo $value)
    {
        return $this->append(self::ARRROLEGMINFO, $value);
    }

    /**
     * Clears 'arrRoleGMInfo' list
     *
     * @return null
     */
    public function clearArrRoleGMInfo()
    {
        return $this->clear(self::ARRROLEGMINFO);
    }

    /**
     * Returns 'arrRoleGMInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGMInfo[]
     */
    public function getArrRoleGMInfo()
    {
        return $this->get(self::ARRROLEGMINFO);
    }

    /**
     * Returns true if 'arrRoleGMInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleGMInfo()
    {
        return count($this->get(self::ARRROLEGMINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleGMInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleGMInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEGMINFO));
    }

    /**
     * Returns element from 'arrRoleGMInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGMInfo
     */
    public function getArrRoleGMInfoAt($offset)
    {
        return $this->get(self::ARRROLEGMINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleGMInfo' list
     *
     * @return int
     */
    public function getArrRoleGMInfoCount()
    {
        return $this->count(self::ARRROLEGMINFO);
    }
}
}