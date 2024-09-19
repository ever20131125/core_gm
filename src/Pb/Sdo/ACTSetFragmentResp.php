<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTSetFragmentResp message
 */
class ACTSetFragmentResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const FRAGMENTINFO = 3;

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
        self::FRAGMENTINFO => array(
            'name' => 'fragmentInfo',
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
        $this->values[self::FRAGMENTINFO] = array();
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
     * Appends value to 'fragmentInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo $value Value to append
     *
     * @return null
     */
    public function appendFragmentInfo(\Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo $value)
    {
        return $this->append(self::FRAGMENTINFO, $value);
    }

    /**
     * Clears 'fragmentInfo' list
     *
     * @return null
     */
    public function clearFragmentInfo()
    {
        return $this->clear(self::FRAGMENTINFO);
    }

    /**
     * Returns 'fragmentInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo[]
     */
    public function getFragmentInfo()
    {
        return $this->get(self::FRAGMENTINFO);
    }

    /**
     * Returns true if 'fragmentInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFragmentInfo()
    {
        return count($this->get(self::FRAGMENTINFO)) !== 0;
    }

    /**
     * Returns 'fragmentInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getFragmentInfoIterator()
    {
        return new \ArrayIterator($this->get(self::FRAGMENTINFO));
    }

    /**
     * Returns element from 'fragmentInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo
     */
    public function getFragmentInfoAt($offset)
    {
        return $this->get(self::FRAGMENTINFO, $offset);
    }

    /**
     * Returns count of 'fragmentInfo' list
     *
     * @return int
     */
    public function getFragmentInfoCount()
    {
        return $this->count(self::FRAGMENTINFO);
    }
}
}