<?php
/**
 * Auto generated from relationserver.proto at 2021-10-26 06:02:40
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleDiaryStatInfoResp message
 */
class RLSGetCoupleDiaryStatInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRSTATINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRSTATINFO => array(
            'name' => 'arrStatInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleDiaryStatInfo'
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
        $this->values[self::ARRSTATINFO] = array();
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
     * Appends value to 'arrStatInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleDiaryStatInfo $value Value to append
     *
     * @return null
     */
    public function appendArrStatInfo(\Xnhd\Core\Pb\Sdo\CoupleDiaryStatInfo $value)
    {
        return $this->append(self::ARRSTATINFO, $value);
    }

    /**
     * Clears 'arrStatInfo' list
     *
     * @return null
     */
    public function clearArrStatInfo()
    {
        return $this->clear(self::ARRSTATINFO);
    }

    /**
     * Returns 'arrStatInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleDiaryStatInfo[]
     */
    public function getArrStatInfo()
    {
        return $this->get(self::ARRSTATINFO);
    }

    /**
     * Returns true if 'arrStatInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStatInfo()
    {
        return count($this->get(self::ARRSTATINFO)) !== 0;
    }

    /**
     * Returns 'arrStatInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStatInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTATINFO));
    }

    /**
     * Returns element from 'arrStatInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleDiaryStatInfo
     */
    public function getArrStatInfoAt($offset)
    {
        return $this->get(self::ARRSTATINFO, $offset);
    }

    /**
     * Returns count of 'arrStatInfo' list
     *
     * @return int
     */
    public function getArrStatInfoCount()
    {
        return $this->count(self::ARRSTATINFO);
    }
}
}