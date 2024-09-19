<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningDelReq message
 */
class RLSBeckoningDelReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTARGETROLEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETROLEID => array(
            'name' => 'nTargetRoleID',
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
        $this->values[self::NTARGETROLEID] = array();
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
     * Appends value to 'nTargetRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNTargetRoleID($value)
    {
        return $this->append(self::NTARGETROLEID, $value);
    }

    /**
     * Clears 'nTargetRoleID' list
     *
     * @return null
     */
    public function clearNTargetRoleID()
    {
        return $this->clear(self::NTARGETROLEID);
    }

    /**
     * Returns 'nTargetRoleID' list
     *
     * @return integer[]
     */
    public function getNTargetRoleID()
    {
        return $this->get(self::NTARGETROLEID);
    }

    /**
     * Returns true if 'nTargetRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetRoleID()
    {
        return count($this->get(self::NTARGETROLEID)) !== 0;
    }

    /**
     * Returns 'nTargetRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getNTargetRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::NTARGETROLEID));
    }

    /**
     * Returns element from 'nTargetRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNTargetRoleIDAt($offset)
    {
        return $this->get(self::NTARGETROLEID, $offset);
    }

    /**
     * Returns count of 'nTargetRoleID' list
     *
     * @return int
     */
    public function getNTargetRoleIDCount()
    {
        return $this->count(self::NTARGETROLEID);
    }
}
}