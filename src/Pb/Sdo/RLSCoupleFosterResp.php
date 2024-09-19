<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleFosterResp message
 */
class RLSCoupleFosterResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const RAISEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::RAISEINFO => array(
            'name' => 'raiseInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RaiseInfo'
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
        $this->values[self::RAISEINFO] = array();
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
     * Appends value to 'raiseInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RaiseInfo $value Value to append
     *
     * @return null
     */
    public function appendRaiseInfo(\Xnhd\Core\Pb\Sdo\RaiseInfo $value)
    {
        return $this->append(self::RAISEINFO, $value);
    }

    /**
     * Clears 'raiseInfo' list
     *
     * @return null
     */
    public function clearRaiseInfo()
    {
        return $this->clear(self::RAISEINFO);
    }

    /**
     * Returns 'raiseInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaiseInfo[]
     */
    public function getRaiseInfo()
    {
        return $this->get(self::RAISEINFO);
    }

    /**
     * Returns true if 'raiseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRaiseInfo()
    {
        return count($this->get(self::RAISEINFO)) !== 0;
    }

    /**
     * Returns 'raiseInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getRaiseInfoIterator()
    {
        return new \ArrayIterator($this->get(self::RAISEINFO));
    }

    /**
     * Returns element from 'raiseInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RaiseInfo
     */
    public function getRaiseInfoAt($offset)
    {
        return $this->get(self::RAISEINFO, $offset);
    }

    /**
     * Returns count of 'raiseInfo' list
     *
     * @return int
     */
    public function getRaiseInfoCount()
    {
        return $this->count(self::RAISEINFO);
    }
}
}