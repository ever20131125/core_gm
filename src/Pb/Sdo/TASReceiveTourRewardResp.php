<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASReceiveTourRewardResp message
 */
class TASReceiveTourRewardResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRITEMBASE = 2;
    const PUZZLESTATE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::PUZZLESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\TourPuzzleState::enmTourPuzzleState_Recieved,
            'name' => 'puzzleState',
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
        $this->values[self::ARRITEMBASE] = array();
        $this->values[self::PUZZLESTATE] = self::$fields[self::PUZZLESTATE]['default'];
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
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
    }

    /**
     * Sets value of 'puzzleState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPuzzleState($value)
    {
        return $this->set(self::PUZZLESTATE, $value);
    }

    /**
     * Returns value of 'puzzleState' property
     *
     * @return integer
     */
    public function getPuzzleState()
    {
        $value = $this->get(self::PUZZLESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'puzzleState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPuzzleState()
    {
        return $this->get(self::PUZZLESTATE) !== null;
    }
}
}