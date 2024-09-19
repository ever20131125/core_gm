<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTPuzzleNoti message
 */
class ACTPuzzleNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NBATCH = 1;
    const NMONEY = 2;
    const STATE = 3;
    const NSECONDS = 4;
    const STPUZZLE = 5;
    const STRESULT = 6;
    const ARRWINNER = 7;
    const NWINNERCNT = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NBATCH => array(
            'name' => 'nBatch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONEY => array(
            'name' => 'nMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSECONDS => array(
            'name' => 'nSeconds',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STPUZZLE => array(
            'name' => 'stPuzzle',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PuzzleInfo'
        ),
        self::STRESULT => array(
            'name' => 'stResult',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PuzzleResult'
        ),
        self::ARRWINNER => array(
            'name' => 'arrWinner',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWINNERCNT => array(
            'name' => 'nWinnerCnt',
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
        $this->values[self::NBATCH] = null;
        $this->values[self::NMONEY] = null;
        $this->values[self::STATE] = null;
        $this->values[self::NSECONDS] = null;
        $this->values[self::STPUZZLE] = null;
        $this->values[self::STRESULT] = null;
        $this->values[self::ARRWINNER] = array();
        $this->values[self::NWINNERCNT] = null;
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
     * Sets value of 'nBatch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBatch($value)
    {
        return $this->set(self::NBATCH, $value);
    }

    /**
     * Returns value of 'nBatch' property
     *
     * @return integer
     */
    public function getNBatch()
    {
        $value = $this->get(self::NBATCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBatch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBatch()
    {
        return $this->get(self::NBATCH) !== null;
    }

    /**
     * Sets value of 'nMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoney($value)
    {
        return $this->set(self::NMONEY, $value);
    }

    /**
     * Returns value of 'nMoney' property
     *
     * @return integer
     */
    public function getNMoney()
    {
        $value = $this->get(self::NMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoney()
    {
        return $this->get(self::NMONEY) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'nSeconds' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSeconds($value)
    {
        return $this->set(self::NSECONDS, $value);
    }

    /**
     * Returns value of 'nSeconds' property
     *
     * @return integer
     */
    public function getNSeconds()
    {
        $value = $this->get(self::NSECONDS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSeconds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSeconds()
    {
        return $this->get(self::NSECONDS) !== null;
    }

    /**
     * Sets value of 'stPuzzle' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PuzzleInfo $value Property value
     *
     * @return null
     */
    public function setStPuzzle(\Xnhd\Core\Pb\Sdo\PuzzleInfo $value=null)
    {
        return $this->set(self::STPUZZLE, $value);
    }

    /**
     * Returns value of 'stPuzzle' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleInfo
     */
    public function getStPuzzle()
    {
        return $this->get(self::STPUZZLE);
    }

    /**
     * Returns true if 'stPuzzle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPuzzle()
    {
        return $this->get(self::STPUZZLE) !== null;
    }

    /**
     * Sets value of 'stResult' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PuzzleResult $value Property value
     *
     * @return null
     */
    public function setStResult(\Xnhd\Core\Pb\Sdo\PuzzleResult $value=null)
    {
        return $this->set(self::STRESULT, $value);
    }

    /**
     * Returns value of 'stResult' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleResult
     */
    public function getStResult()
    {
        return $this->get(self::STRESULT);
    }

    /**
     * Returns true if 'stResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStResult()
    {
        return $this->get(self::STRESULT) !== null;
    }

    /**
     * Appends value to 'arrWinner' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrWinner($value)
    {
        return $this->append(self::ARRWINNER, $value);
    }

    /**
     * Clears 'arrWinner' list
     *
     * @return null
     */
    public function clearArrWinner()
    {
        return $this->clear(self::ARRWINNER);
    }

    /**
     * Returns 'arrWinner' list
     *
     * @return integer[]
     */
    public function getArrWinner()
    {
        return $this->get(self::ARRWINNER);
    }

    /**
     * Returns true if 'arrWinner' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWinner()
    {
        return count($this->get(self::ARRWINNER)) !== 0;
    }

    /**
     * Returns 'arrWinner' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWinnerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWINNER));
    }

    /**
     * Returns element from 'arrWinner' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrWinnerAt($offset)
    {
        return $this->get(self::ARRWINNER, $offset);
    }

    /**
     * Returns count of 'arrWinner' list
     *
     * @return int
     */
    public function getArrWinnerCount()
    {
        return $this->count(self::ARRWINNER);
    }

    /**
     * Sets value of 'nWinnerCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWinnerCnt($value)
    {
        return $this->set(self::NWINNERCNT, $value);
    }

    /**
     * Returns value of 'nWinnerCnt' property
     *
     * @return integer
     */
    public function getNWinnerCnt()
    {
        $value = $this->get(self::NWINNERCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWinnerCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWinnerCnt()
    {
        return $this->get(self::NWINNERCNT) !== null;
    }
}
}