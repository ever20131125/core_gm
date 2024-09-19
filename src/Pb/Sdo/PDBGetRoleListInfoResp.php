<?php
/**
 * Auto generated from playerdbserver.proto at 2021-10-26 06:02:32
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRoleListInfoResp message
 */
class PDBGetRoleListInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEGENERALINFO = 2;

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
}
}