<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetMonthCardResp message
 */
class ACTGetMonthCardResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRCARD = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRCARD => array(
            'name' => 'arrCard',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CardInfo'
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
        $this->values[self::ARRCARD] = array();
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
     * Appends value to 'arrCard' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CardInfo $value Value to append
     *
     * @return null
     */
    public function appendArrCard(\Xnhd\Core\Pb\Sdo\CardInfo $value)
    {
        return $this->append(self::ARRCARD, $value);
    }

    /**
     * Clears 'arrCard' list
     *
     * @return null
     */
    public function clearArrCard()
    {
        return $this->clear(self::ARRCARD);
    }

    /**
     * Returns 'arrCard' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CardInfo[]
     */
    public function getArrCard()
    {
        return $this->get(self::ARRCARD);
    }

    /**
     * Returns true if 'arrCard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCard()
    {
        return count($this->get(self::ARRCARD)) !== 0;
    }

    /**
     * Returns 'arrCard' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCardIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCARD));
    }

    /**
     * Returns element from 'arrCard' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CardInfo
     */
    public function getArrCardAt($offset)
    {
        return $this->get(self::ARRCARD, $offset);
    }

    /**
     * Returns count of 'arrCard' list
     *
     * @return int
     */
    public function getArrCardCount()
    {
        return $this->count(self::ARRCARD);
    }
}
}