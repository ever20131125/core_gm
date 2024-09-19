<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASStartPlayNoti message
 */
class GASStartPlayNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRTIMEOUTPLAYERS = 2;
    const ARRTIMEOUTOBSERVERS = 3;
    const NTIMETICK = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRTIMEOUTPLAYERS => array(
            'name' => 'arrTimeoutPlayers',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTIMEOUTOBSERVERS => array(
            'name' => 'arrTimeoutObservers',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMETICK => array(
            'name' => 'nTimeTick',
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
        $this->values[self::ARRTIMEOUTPLAYERS] = array();
        $this->values[self::ARRTIMEOUTOBSERVERS] = array();
        $this->values[self::NTIMETICK] = null;
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
     * Appends value to 'arrTimeoutPlayers' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTimeoutPlayers($value)
    {
        return $this->append(self::ARRTIMEOUTPLAYERS, $value);
    }

    /**
     * Clears 'arrTimeoutPlayers' list
     *
     * @return null
     */
    public function clearArrTimeoutPlayers()
    {
        return $this->clear(self::ARRTIMEOUTPLAYERS);
    }

    /**
     * Returns 'arrTimeoutPlayers' list
     *
     * @return integer[]
     */
    public function getArrTimeoutPlayers()
    {
        return $this->get(self::ARRTIMEOUTPLAYERS);
    }

    /**
     * Returns true if 'arrTimeoutPlayers' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTimeoutPlayers()
    {
        return count($this->get(self::ARRTIMEOUTPLAYERS)) !== 0;
    }

    /**
     * Returns 'arrTimeoutPlayers' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTimeoutPlayersIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTIMEOUTPLAYERS));
    }

    /**
     * Returns element from 'arrTimeoutPlayers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTimeoutPlayersAt($offset)
    {
        return $this->get(self::ARRTIMEOUTPLAYERS, $offset);
    }

    /**
     * Returns count of 'arrTimeoutPlayers' list
     *
     * @return int
     */
    public function getArrTimeoutPlayersCount()
    {
        return $this->count(self::ARRTIMEOUTPLAYERS);
    }

    /**
     * Appends value to 'arrTimeoutObservers' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTimeoutObservers($value)
    {
        return $this->append(self::ARRTIMEOUTOBSERVERS, $value);
    }

    /**
     * Clears 'arrTimeoutObservers' list
     *
     * @return null
     */
    public function clearArrTimeoutObservers()
    {
        return $this->clear(self::ARRTIMEOUTOBSERVERS);
    }

    /**
     * Returns 'arrTimeoutObservers' list
     *
     * @return integer[]
     */
    public function getArrTimeoutObservers()
    {
        return $this->get(self::ARRTIMEOUTOBSERVERS);
    }

    /**
     * Returns true if 'arrTimeoutObservers' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTimeoutObservers()
    {
        return count($this->get(self::ARRTIMEOUTOBSERVERS)) !== 0;
    }

    /**
     * Returns 'arrTimeoutObservers' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTimeoutObserversIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTIMEOUTOBSERVERS));
    }

    /**
     * Returns element from 'arrTimeoutObservers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTimeoutObserversAt($offset)
    {
        return $this->get(self::ARRTIMEOUTOBSERVERS, $offset);
    }

    /**
     * Returns count of 'arrTimeoutObservers' list
     *
     * @return int
     */
    public function getArrTimeoutObserversCount()
    {
        return $this->count(self::ARRTIMEOUTOBSERVERS);
    }

    /**
     * Sets value of 'nTimeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeTick($value)
    {
        return $this->set(self::NTIMETICK, $value);
    }

    /**
     * Returns value of 'nTimeTick' property
     *
     * @return integer
     */
    public function getNTimeTick()
    {
        $value = $this->get(self::NTIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeTick()
    {
        return $this->get(self::NTIMETICK) !== null;
    }
}
}