<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTMergeLineResp message
 */
class ACTMergeLineResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRBOARD = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRBOARD => array(
            'name' => 'arrBoard',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MergeLineInfo'
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
        $this->values[self::ARRBOARD] = array();
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
     * Appends value to 'arrBoard' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MergeLineInfo $value Value to append
     *
     * @return null
     */
    public function appendArrBoard(\Xnhd\Core\Pb\Sdo\MergeLineInfo $value)
    {
        return $this->append(self::ARRBOARD, $value);
    }

    /**
     * Clears 'arrBoard' list
     *
     * @return null
     */
    public function clearArrBoard()
    {
        return $this->clear(self::ARRBOARD);
    }

    /**
     * Returns 'arrBoard' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MergeLineInfo[]
     */
    public function getArrBoard()
    {
        return $this->get(self::ARRBOARD);
    }

    /**
     * Returns true if 'arrBoard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBoard()
    {
        return count($this->get(self::ARRBOARD)) !== 0;
    }

    /**
     * Returns 'arrBoard' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBoardIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBOARD));
    }

    /**
     * Returns element from 'arrBoard' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MergeLineInfo
     */
    public function getArrBoardAt($offset)
    {
        return $this->get(self::ARRBOARD, $offset);
    }

    /**
     * Returns count of 'arrBoard' list
     *
     * @return int
     */
    public function getArrBoardCount()
    {
        return $this->count(self::ARRBOARD);
    }
}
}