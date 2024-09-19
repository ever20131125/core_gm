<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetWeddingRankReq message
 */
class GASGetWeddingRankReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRWEDDINGID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRWEDDINGID => array(
            'name' => 'arrWeddingID',
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
        $this->values[self::ARRWEDDINGID] = array();
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
     * Appends value to 'arrWeddingID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrWeddingID($value)
    {
        return $this->append(self::ARRWEDDINGID, $value);
    }

    /**
     * Clears 'arrWeddingID' list
     *
     * @return null
     */
    public function clearArrWeddingID()
    {
        return $this->clear(self::ARRWEDDINGID);
    }

    /**
     * Returns 'arrWeddingID' list
     *
     * @return integer[]
     */
    public function getArrWeddingID()
    {
        return $this->get(self::ARRWEDDINGID);
    }

    /**
     * Returns true if 'arrWeddingID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWeddingID()
    {
        return count($this->get(self::ARRWEDDINGID)) !== 0;
    }

    /**
     * Returns 'arrWeddingID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWeddingIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWEDDINGID));
    }

    /**
     * Returns element from 'arrWeddingID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrWeddingIDAt($offset)
    {
        return $this->get(self::ARRWEDDINGID, $offset);
    }

    /**
     * Returns count of 'arrWeddingID' list
     *
     * @return int
     */
    public function getArrWeddingIDCount()
    {
        return $this->count(self::ARRWEDDINGID);
    }
}
}