<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetWorkInfoListResp message
 */
class TASGetWorkInfoListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRWORKINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRWORKINFO => array(
            'name' => 'arrWorkInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkSimpleInfo'
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
        $this->values[self::ARRWORKINFO] = array();
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
     * Appends value to 'arrWorkInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkSimpleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrWorkInfo(\Xnhd\Core\Pb\Sdo\WorkSimpleInfo $value)
    {
        return $this->append(self::ARRWORKINFO, $value);
    }

    /**
     * Clears 'arrWorkInfo' list
     *
     * @return null
     */
    public function clearArrWorkInfo()
    {
        return $this->clear(self::ARRWORKINFO);
    }

    /**
     * Returns 'arrWorkInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkSimpleInfo[]
     */
    public function getArrWorkInfo()
    {
        return $this->get(self::ARRWORKINFO);
    }

    /**
     * Returns true if 'arrWorkInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWorkInfo()
    {
        return count($this->get(self::ARRWORKINFO)) !== 0;
    }

    /**
     * Returns 'arrWorkInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWorkInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWORKINFO));
    }

    /**
     * Returns element from 'arrWorkInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkSimpleInfo
     */
    public function getArrWorkInfoAt($offset)
    {
        return $this->get(self::ARRWORKINFO, $offset);
    }

    /**
     * Returns count of 'arrWorkInfo' list
     *
     * @return int
     */
    public function getArrWorkInfoCount()
    {
        return $this->count(self::ARRWORKINFO);
    }
}
}