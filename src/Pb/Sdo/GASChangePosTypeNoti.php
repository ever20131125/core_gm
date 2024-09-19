<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASChangePosTypeNoti message
 */
class GASChangePosTypeNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPOSTYPE = 2;
    const ARR32PARAMS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSTYPE => array(
            'name' => 'nPosType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARR32PARAMS => array(
            'name' => 'arr32Params',
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
        $this->values[self::NPOSTYPE] = null;
        $this->values[self::ARR32PARAMS] = array();
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
     * Sets value of 'nPosType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosType($value)
    {
        return $this->set(self::NPOSTYPE, $value);
    }

    /**
     * Returns value of 'nPosType' property
     *
     * @return integer
     */
    public function getNPosType()
    {
        $value = $this->get(self::NPOSTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosType()
    {
        return $this->get(self::NPOSTYPE) !== null;
    }

    /**
     * Appends value to 'arr32Params' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArr32Params($value)
    {
        return $this->append(self::ARR32PARAMS, $value);
    }

    /**
     * Clears 'arr32Params' list
     *
     * @return null
     */
    public function clearArr32Params()
    {
        return $this->clear(self::ARR32PARAMS);
    }

    /**
     * Returns 'arr32Params' list
     *
     * @return integer[]
     */
    public function getArr32Params()
    {
        return $this->get(self::ARR32PARAMS);
    }

    /**
     * Returns true if 'arr32Params' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArr32Params()
    {
        return count($this->get(self::ARR32PARAMS)) !== 0;
    }

    /**
     * Returns 'arr32Params' iterator
     *
     * @return \ArrayIterator
     */
    public function getArr32ParamsIterator()
    {
        return new \ArrayIterator($this->get(self::ARR32PARAMS));
    }

    /**
     * Returns element from 'arr32Params' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArr32ParamsAt($offset)
    {
        return $this->get(self::ARR32PARAMS, $offset);
    }

    /**
     * Returns count of 'arr32Params' list
     *
     * @return int
     */
    public function getArr32ParamsCount()
    {
        return $this->count(self::ARR32PARAMS);
    }
}
}