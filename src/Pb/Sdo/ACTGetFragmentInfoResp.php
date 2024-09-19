<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetFragmentInfoResp message
 */
class ACTGetFragmentInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRFRAGMENTINFO = 3;

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
        self::ARRFRAGMENTINFO => array(
            'name' => 'arrFragmentInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo'
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
        $this->values[self::ARRFRAGMENTINFO] = array();
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
     * Appends value to 'arrFragmentInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo $value Value to append
     *
     * @return null
     */
    public function appendArrFragmentInfo(\Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo $value)
    {
        return $this->append(self::ARRFRAGMENTINFO, $value);
    }

    /**
     * Clears 'arrFragmentInfo' list
     *
     * @return null
     */
    public function clearArrFragmentInfo()
    {
        return $this->clear(self::ARRFRAGMENTINFO);
    }

    /**
     * Returns 'arrFragmentInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo[]
     */
    public function getArrFragmentInfo()
    {
        return $this->get(self::ARRFRAGMENTINFO);
    }

    /**
     * Returns true if 'arrFragmentInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFragmentInfo()
    {
        return count($this->get(self::ARRFRAGMENTINFO)) !== 0;
    }

    /**
     * Returns 'arrFragmentInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFragmentInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFRAGMENTINFO));
    }

    /**
     * Returns element from 'arrFragmentInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo
     */
    public function getArrFragmentInfoAt($offset)
    {
        return $this->get(self::ARRFRAGMENTINFO, $offset);
    }

    /**
     * Returns count of 'arrFragmentInfo' list
     *
     * @return int
     */
    public function getArrFragmentInfoCount()
    {
        return $this->count(self::ARRFRAGMENTINFO);
    }
}
}