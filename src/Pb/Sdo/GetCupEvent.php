<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GetCupEvent message
 */
class GetCupEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRROLECUPINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLECUPINFO => array(
            'name' => 'arrRoleCupInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleCupInfo'
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
        $this->values[self::ARRROLECUPINFO] = array();
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
     * Appends value to 'arrRoleCupInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleCupInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRoleCupInfo(\Xnhd\Core\Pb\Sdo\RoleCupInfo $value)
    {
        return $this->append(self::ARRROLECUPINFO, $value);
    }

    /**
     * Clears 'arrRoleCupInfo' list
     *
     * @return null
     */
    public function clearArrRoleCupInfo()
    {
        return $this->clear(self::ARRROLECUPINFO);
    }

    /**
     * Returns 'arrRoleCupInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleCupInfo[]
     */
    public function getArrRoleCupInfo()
    {
        return $this->get(self::ARRROLECUPINFO);
    }

    /**
     * Returns true if 'arrRoleCupInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleCupInfo()
    {
        return count($this->get(self::ARRROLECUPINFO)) !== 0;
    }

    /**
     * Returns 'arrRoleCupInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleCupInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLECUPINFO));
    }

    /**
     * Returns element from 'arrRoleCupInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleCupInfo
     */
    public function getArrRoleCupInfoAt($offset)
    {
        return $this->get(self::ARRROLECUPINFO, $offset);
    }

    /**
     * Returns count of 'arrRoleCupInfo' list
     *
     * @return int
     */
    public function getArrRoleCupInfoCount()
    {
        return $this->count(self::ARRROLECUPINFO);
    }
}
}