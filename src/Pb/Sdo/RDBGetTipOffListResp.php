<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBGetTipOffListResp message
 */
class RDBGetTipOffListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRTIPOFF = 2;
    const NTOTALCOUNT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRTIPOFF => array(
            'name' => 'arrTipOff',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TipOffInfo'
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
        $this->values[self::ARRTIPOFF] = array();
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
     * Appends value to 'arrTipOff' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TipOffInfo $value Value to append
     *
     * @return null
     */
    public function appendArrTipOff(\Xnhd\Core\Pb\Sdo\TipOffInfo $value)
    {
        return $this->append(self::ARRTIPOFF, $value);
    }

    /**
     * Clears 'arrTipOff' list
     *
     * @return null
     */
    public function clearArrTipOff()
    {
        return $this->clear(self::ARRTIPOFF);
    }

    /**
     * Returns 'arrTipOff' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TipOffInfo[]
     */
    public function getArrTipOff()
    {
        return $this->get(self::ARRTIPOFF);
    }

    /**
     * Returns true if 'arrTipOff' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTipOff()
    {
        return count($this->get(self::ARRTIPOFF)) !== 0;
    }

    /**
     * Returns 'arrTipOff' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTipOffIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTIPOFF));
    }

    /**
     * Returns element from 'arrTipOff' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TipOffInfo
     */
    public function getArrTipOffAt($offset)
    {
        return $this->get(self::ARRTIPOFF, $offset);
    }

    /**
     * Returns count of 'arrTipOff' list
     *
     * @return int
     */
    public function getArrTipOffCount()
    {
        return $this->count(self::ARRTIPOFF);
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