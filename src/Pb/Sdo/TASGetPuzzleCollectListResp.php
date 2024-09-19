<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetPuzzleCollectListResp message
 */
class TASGetPuzzleCollectListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRCOLLECT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRCOLLECT => array(
            'name' => 'arrCollect',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PuzzleCollect'
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
        $this->values[self::ARRCOLLECT] = array();
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
     * Appends value to 'arrCollect' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PuzzleCollect $value Value to append
     *
     * @return null
     */
    public function appendArrCollect(\Xnhd\Core\Pb\Sdo\PuzzleCollect $value)
    {
        return $this->append(self::ARRCOLLECT, $value);
    }

    /**
     * Clears 'arrCollect' list
     *
     * @return null
     */
    public function clearArrCollect()
    {
        return $this->clear(self::ARRCOLLECT);
    }

    /**
     * Returns 'arrCollect' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleCollect[]
     */
    public function getArrCollect()
    {
        return $this->get(self::ARRCOLLECT);
    }

    /**
     * Returns true if 'arrCollect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCollect()
    {
        return count($this->get(self::ARRCOLLECT)) !== 0;
    }

    /**
     * Returns 'arrCollect' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCollectIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOLLECT));
    }

    /**
     * Returns element from 'arrCollect' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleCollect
     */
    public function getArrCollectAt($offset)
    {
        return $this->get(self::ARRCOLLECT, $offset);
    }

    /**
     * Returns count of 'arrCollect' list
     *
     * @return int
     */
    public function getArrCollectCount()
    {
        return $this->count(self::ARRCOLLECT);
    }
}
}