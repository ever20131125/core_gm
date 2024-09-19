<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBGetBeTipOffListResp message
 */
class RDBGetBeTipOffListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRBETIPOFF = 2;
    const NTOTALCOUNT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRBETIPOFF => array(
            'name' => 'arrBeTipOff',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BeTipOffInfo'
        ),
        self::NTOTALCOUNT => array(
            'name' => 'nTotalCount',
            'required' => false,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRBETIPOFF] = array();
        $this->values[self::NTOTALCOUNT] = null;
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
     * Appends value to 'arrBeTipOff' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BeTipOffInfo $value Value to append
     *
     * @return null
     */
    public function appendArrBeTipOff(\Xnhd\Core\Pb\Sdo\BeTipOffInfo $value)
    {
        return $this->append(self::ARRBETIPOFF, $value);
    }

    /**
     * Clears 'arrBeTipOff' list
     *
     * @return null
     */
    public function clearArrBeTipOff()
    {
        return $this->clear(self::ARRBETIPOFF);
    }

    /**
     * Returns 'arrBeTipOff' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BeTipOffInfo[]
     */
    public function getArrBeTipOff()
    {
        return $this->get(self::ARRBETIPOFF);
    }

    /**
     * Returns true if 'arrBeTipOff' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBeTipOff()
    {
        return count($this->get(self::ARRBETIPOFF)) !== 0;
    }

    /**
     * Returns 'arrBeTipOff' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBeTipOffIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBETIPOFF));
    }

    /**
     * Returns element from 'arrBeTipOff' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BeTipOffInfo
     */
    public function getArrBeTipOffAt($offset)
    {
        return $this->get(self::ARRBETIPOFF, $offset);
    }

    /**
     * Returns count of 'arrBeTipOff' list
     *
     * @return int
     */
    public function getArrBeTipOffCount()
    {
        return $this->count(self::ARRBETIPOFF);
    }

    /**
     * Sets value of 'nTotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalCount($value)
    {
        return $this->set(self::NTOTALCOUNT, $value);
    }

    /**
     * Returns value of 'nTotalCount' property
     *
     * @return integer
     */
    public function getNTotalCount()
    {
        $value = $this->get(self::NTOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalCount()
    {
        return $this->get(self::NTOTALCOUNT) !== null;
    }
}
}