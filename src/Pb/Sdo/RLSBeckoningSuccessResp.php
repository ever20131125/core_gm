<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningSuccessResp message
 */
class RLSBeckoningSuccessResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NTARGETIDS = 3;

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
        self::NTARGETIDS => array(
            'name' => 'nTargetIDs',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NTARGETIDS] = array();
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
     * Appends value to 'nTargetIDs' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNTargetIDs($value)
    {
        return $this->append(self::NTARGETIDS, $value);
    }

    /**
     * Clears 'nTargetIDs' list
     *
     * @return null
     */
    public function clearNTargetIDs()
    {
        return $this->clear(self::NTARGETIDS);
    }

    /**
     * Returns 'nTargetIDs' list
     *
     * @return integer[]
     */
    public function getNTargetIDs()
    {
        return $this->get(self::NTARGETIDS);
    }

    /**
     * Returns true if 'nTargetIDs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetIDs()
    {
        return count($this->get(self::NTARGETIDS)) !== 0;
    }

    /**
     * Returns 'nTargetIDs' iterator
     *
     * @return \ArrayIterator
     */
    public function getNTargetIDsIterator()
    {
        return new \ArrayIterator($this->get(self::NTARGETIDS));
    }

    /**
     * Returns element from 'nTargetIDs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNTargetIDsAt($offset)
    {
        return $this->get(self::NTARGETIDS, $offset);
    }

    /**
     * Returns count of 'nTargetIDs' list
     *
     * @return int
     */
    public function getNTargetIDsCount()
    {
        return $this->count(self::NTARGETIDS);
    }
}
}