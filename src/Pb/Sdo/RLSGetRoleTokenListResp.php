<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetRoleTokenListResp message
 */
class RLSGetRoleTokenListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRTOKENINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRTOKENINFO => array(
            'name' => 'arrTokenInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TokenInfo'
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
        $this->values[self::ARRTOKENINFO] = array();
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
     * Appends value to 'arrTokenInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TokenInfo $value Value to append
     *
     * @return null
     */
    public function appendArrTokenInfo(\Xnhd\Core\Pb\Sdo\TokenInfo $value)
    {
        return $this->append(self::ARRTOKENINFO, $value);
    }

    /**
     * Clears 'arrTokenInfo' list
     *
     * @return null
     */
    public function clearArrTokenInfo()
    {
        return $this->clear(self::ARRTOKENINFO);
    }

    /**
     * Returns 'arrTokenInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TokenInfo[]
     */
    public function getArrTokenInfo()
    {
        return $this->get(self::ARRTOKENINFO);
    }

    /**
     * Returns true if 'arrTokenInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTokenInfo()
    {
        return count($this->get(self::ARRTOKENINFO)) !== 0;
    }

    /**
     * Returns 'arrTokenInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTokenInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTOKENINFO));
    }

    /**
     * Returns element from 'arrTokenInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TokenInfo
     */
    public function getArrTokenInfoAt($offset)
    {
        return $this->get(self::ARRTOKENINFO, $offset);
    }

    /**
     * Returns count of 'arrTokenInfo' list
     *
     * @return int
     */
    public function getArrTokenInfoCount()
    {
        return $this->count(self::ARRTOKENINFO);
    }
}
}