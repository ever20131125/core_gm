<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSBanResp message
 */
class STSBanResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRBANINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRBANINFO => array(
            'name' => 'arrBanInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BanInfo'
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
        $this->values[self::ARRBANINFO] = array();
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
     * Appends value to 'arrBanInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BanInfo $value Value to append
     *
     * @return null
     */
    public function appendArrBanInfo(\Xnhd\Core\Pb\Sdo\BanInfo $value)
    {
        return $this->append(self::ARRBANINFO, $value);
    }

    /**
     * Clears 'arrBanInfo' list
     *
     * @return null
     */
    public function clearArrBanInfo()
    {
        return $this->clear(self::ARRBANINFO);
    }

    /**
     * Returns 'arrBanInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BanInfo[]
     */
    public function getArrBanInfo()
    {
        return $this->get(self::ARRBANINFO);
    }

    /**
     * Returns true if 'arrBanInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBanInfo()
    {
        return count($this->get(self::ARRBANINFO)) !== 0;
    }

    /**
     * Returns 'arrBanInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBanInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBANINFO));
    }

    /**
     * Returns element from 'arrBanInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BanInfo
     */
    public function getArrBanInfoAt($offset)
    {
        return $this->get(self::ARRBANINFO, $offset);
    }

    /**
     * Returns count of 'arrBanInfo' list
     *
     * @return int
     */
    public function getArrBanInfoCount()
    {
        return $this->count(self::ARRBANINFO);
    }
}
}