<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleMedalNoti message
 */
class RLSCoupleMedalNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NINDEX = 1;
    const NMEDAL = 2;
    const NMEDALUNIX = 3;
    const ARRPRIZE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NINDEX => array(
            'name' => 'nIndex',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMEDAL => array(
            'name' => 'nMedal',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMEDALUNIX => array(
            'name' => 'nMedalUnix',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
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
        $this->values[self::NINDEX] = array();
        $this->values[self::NMEDAL] = array();
        $this->values[self::NMEDALUNIX] = array();
        $this->values[self::ARRPRIZE] = array();
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
     * Appends value to 'nIndex' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNIndex($value)
    {
        return $this->append(self::NINDEX, $value);
    }

    /**
     * Clears 'nIndex' list
     *
     * @return null
     */
    public function clearNIndex()
    {
        return $this->clear(self::NINDEX);
    }

    /**
     * Returns 'nIndex' list
     *
     * @return integer[]
     */
    public function getNIndex()
    {
        return $this->get(self::NINDEX);
    }

    /**
     * Returns true if 'nIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIndex()
    {
        return count($this->get(self::NINDEX)) !== 0;
    }

    /**
     * Returns 'nIndex' iterator
     *
     * @return \ArrayIterator
     */
    public function getNIndexIterator()
    {
        return new \ArrayIterator($this->get(self::NINDEX));
    }

    /**
     * Returns element from 'nIndex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNIndexAt($offset)
    {
        return $this->get(self::NINDEX, $offset);
    }

    /**
     * Returns count of 'nIndex' list
     *
     * @return int
     */
    public function getNIndexCount()
    {
        return $this->count(self::NINDEX);
    }

    /**
     * Appends value to 'nMedal' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNMedal($value)
    {
        return $this->append(self::NMEDAL, $value);
    }

    /**
     * Clears 'nMedal' list
     *
     * @return null
     */
    public function clearNMedal()
    {
        return $this->clear(self::NMEDAL);
    }

    /**
     * Returns 'nMedal' list
     *
     * @return integer[]
     */
    public function getNMedal()
    {
        return $this->get(self::NMEDAL);
    }

    /**
     * Returns true if 'nMedal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMedal()
    {
        return count($this->get(self::NMEDAL)) !== 0;
    }

    /**
     * Returns 'nMedal' iterator
     *
     * @return \ArrayIterator
     */
    public function getNMedalIterator()
    {
        return new \ArrayIterator($this->get(self::NMEDAL));
    }

    /**
     * Returns element from 'nMedal' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNMedalAt($offset)
    {
        return $this->get(self::NMEDAL, $offset);
    }

    /**
     * Returns count of 'nMedal' list
     *
     * @return int
     */
    public function getNMedalCount()
    {
        return $this->count(self::NMEDAL);
    }

    /**
     * Appends value to 'nMedalUnix' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNMedalUnix($value)
    {
        return $this->append(self::NMEDALUNIX, $value);
    }

    /**
     * Clears 'nMedalUnix' list
     *
     * @return null
     */
    public function clearNMedalUnix()
    {
        return $this->clear(self::NMEDALUNIX);
    }

    /**
     * Returns 'nMedalUnix' list
     *
     * @return integer[]
     */
    public function getNMedalUnix()
    {
        return $this->get(self::NMEDALUNIX);
    }

    /**
     * Returns true if 'nMedalUnix' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMedalUnix()
    {
        return count($this->get(self::NMEDALUNIX)) !== 0;
    }

    /**
     * Returns 'nMedalUnix' iterator
     *
     * @return \ArrayIterator
     */
    public function getNMedalUnixIterator()
    {
        return new \ArrayIterator($this->get(self::NMEDALUNIX));
    }

    /**
     * Returns element from 'nMedalUnix' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNMedalUnixAt($offset)
    {
        return $this->get(self::NMEDALUNIX, $offset);
    }

    /**
     * Returns count of 'nMedalUnix' list
     *
     * @return int
     */
    public function getNMedalUnixCount()
    {
        return $this->count(self::NMEDALUNIX);
    }

    /**
     * Appends value to 'arrPrize' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPrize($value)
    {
        return $this->append(self::ARRPRIZE, $value);
    }

    /**
     * Clears 'arrPrize' list
     *
     * @return null
     */
    public function clearArrPrize()
    {
        return $this->clear(self::ARRPRIZE);
    }

    /**
     * Returns 'arrPrize' list
     *
     * @return integer[]
     */
    public function getArrPrize()
    {
        return $this->get(self::ARRPRIZE);
    }

    /**
     * Returns true if 'arrPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrize()
    {
        return count($this->get(self::ARRPRIZE)) !== 0;
    }

    /**
     * Returns 'arrPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZE));
    }

    /**
     * Returns element from 'arrPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPrizeAt($offset)
    {
        return $this->get(self::ARRPRIZE, $offset);
    }

    /**
     * Returns count of 'arrPrize' list
     *
     * @return int
     */
    public function getArrPrizeCount()
    {
        return $this->count(self::ARRPRIZE);
    }
}
}