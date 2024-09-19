<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetWeddingRankResp message
 */
class GASGetWeddingRankResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRWEDDINGINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRWEDDINGINFO => array(
            'name' => 'arrWeddingInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingRankInfo'
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
        $this->values[self::ARRWEDDINGINFO] = array();
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
     * Appends value to 'arrWeddingInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingRankInfo $value Value to append
     *
     * @return null
     */
    public function appendArrWeddingInfo(\Xnhd\Core\Pb\Sdo\WeddingRankInfo $value)
    {
        return $this->append(self::ARRWEDDINGINFO, $value);
    }

    /**
     * Clears 'arrWeddingInfo' list
     *
     * @return null
     */
    public function clearArrWeddingInfo()
    {
        return $this->clear(self::ARRWEDDINGINFO);
    }

    /**
     * Returns 'arrWeddingInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingRankInfo[]
     */
    public function getArrWeddingInfo()
    {
        return $this->get(self::ARRWEDDINGINFO);
    }

    /**
     * Returns true if 'arrWeddingInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWeddingInfo()
    {
        return count($this->get(self::ARRWEDDINGINFO)) !== 0;
    }

    /**
     * Returns 'arrWeddingInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWeddingInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWEDDINGINFO));
    }

    /**
     * Returns element from 'arrWeddingInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingRankInfo
     */
    public function getArrWeddingInfoAt($offset)
    {
        return $this->get(self::ARRWEDDINGINFO, $offset);
    }

    /**
     * Returns count of 'arrWeddingInfo' list
     *
     * @return int
     */
    public function getArrWeddingInfoCount()
    {
        return $this->count(self::ARRWEDDINGINFO);
    }
}
}