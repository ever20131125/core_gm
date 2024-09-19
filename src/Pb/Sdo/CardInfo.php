<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CardInfo message
 */
class CardInfo extends \ProtobufMessage
{
    /* Field index constants */
    const CARDTYPE = 1;
    const RECEIVED = 2;
    const NSTARTTIME = 3;
    const NENDTIME = 4;
    const NCURRDAY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CARDTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MonthCardType::enmMonthCardType_white,
            'name' => 'cardType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECEIVED => array(
            'name' => 'received',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDTIME => array(
            'name' => 'nEndTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCURRDAY => array(
            'name' => 'nCurrDay',
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
        $this->values[self::CARDTYPE] = self::$fields[self::CARDTYPE]['default'];
        $this->values[self::RECEIVED] = array();
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NENDTIME] = null;
        $this->values[self::NCURRDAY] = null;
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
     * Sets value of 'cardType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCardType($value)
    {
        return $this->set(self::CARDTYPE, $value);
    }

    /**
     * Returns value of 'cardType' property
     *
     * @return integer
     */
    public function getCardType()
    {
        $value = $this->get(self::CARDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cardType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCardType()
    {
        return $this->get(self::CARDTYPE) !== null;
    }

    /**
     * Appends value to 'received' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendReceived($value)
    {
        return $this->append(self::RECEIVED, $value);
    }

    /**
     * Clears 'received' list
     *
     * @return null
     */
    public function clearReceived()
    {
        return $this->clear(self::RECEIVED);
    }

    /**
     * Returns 'received' list
     *
     * @return integer[]
     */
    public function getReceived()
    {
        return $this->get(self::RECEIVED);
    }

    /**
     * Returns true if 'received' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReceived()
    {
        return count($this->get(self::RECEIVED)) !== 0;
    }

    /**
     * Returns 'received' iterator
     *
     * @return \ArrayIterator
     */
    public function getReceivedIterator()
    {
        return new \ArrayIterator($this->get(self::RECEIVED));
    }

    /**
     * Returns element from 'received' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getReceivedAt($offset)
    {
        return $this->get(self::RECEIVED, $offset);
    }

    /**
     * Returns count of 'received' list
     *
     * @return int
     */
    public function getReceivedCount()
    {
        return $this->count(self::RECEIVED);
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nEndTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndTime($value)
    {
        return $this->set(self::NENDTIME, $value);
    }

    /**
     * Returns value of 'nEndTime' property
     *
     * @return integer
     */
    public function getNEndTime()
    {
        $value = $this->get(self::NENDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndTime()
    {
        return $this->get(self::NENDTIME) !== null;
    }

    /**
     * Sets value of 'nCurrDay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCurrDay($value)
    {
        return $this->set(self::NCURRDAY, $value);
    }

    /**
     * Returns value of 'nCurrDay' property
     *
     * @return integer
     */
    public function getNCurrDay()
    {
        $value = $this->get(self::NCURRDAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCurrDay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCurrDay()
    {
        return $this->get(self::NCURRDAY) !== null;
    }
}
}