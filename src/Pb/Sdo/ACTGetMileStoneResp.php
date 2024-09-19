<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetMileStoneResp message
 */
class ACTGetMileStoneResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NSCORE = 2;
    const NRATIO = 3;
    const ARRMILESTONEACT = 4;
    const NEXCHANGEMAX = 5;
    const NEXCHANGECOUNT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NRATIO => array(
            'name' => 'nRatio',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRMILESTONEACT => array(
            'name' => 'arrMileStoneAct',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MileStoneAct'
        ),
        self::NEXCHANGEMAX => array(
            'name' => 'nExchangeMax',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXCHANGECOUNT => array(
            'name' => 'nExchangeCount',
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
        $this->values[self::NSCORE] = null;
        $this->values[self::NRATIO] = null;
        $this->values[self::ARRMILESTONEACT] = array();
        $this->values[self::NEXCHANGEMAX] = null;
        $this->values[self::NEXCHANGECOUNT] = null;
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
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'nRatio' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRatio($value)
    {
        return $this->set(self::NRATIO, $value);
    }

    /**
     * Returns value of 'nRatio' property
     *
     * @return integer
     */
    public function getNRatio()
    {
        $value = $this->get(self::NRATIO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRatio' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRatio()
    {
        return $this->get(self::NRATIO) !== null;
    }

    /**
     * Appends value to 'arrMileStoneAct' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MileStoneAct $value Value to append
     *
     * @return null
     */
    public function appendArrMileStoneAct(\Xnhd\Core\Pb\Sdo\MileStoneAct $value)
    {
        return $this->append(self::ARRMILESTONEACT, $value);
    }

    /**
     * Clears 'arrMileStoneAct' list
     *
     * @return null
     */
    public function clearArrMileStoneAct()
    {
        return $this->clear(self::ARRMILESTONEACT);
    }

    /**
     * Returns 'arrMileStoneAct' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MileStoneAct[]
     */
    public function getArrMileStoneAct()
    {
        return $this->get(self::ARRMILESTONEACT);
    }

    /**
     * Returns true if 'arrMileStoneAct' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMileStoneAct()
    {
        return count($this->get(self::ARRMILESTONEACT)) !== 0;
    }

    /**
     * Returns 'arrMileStoneAct' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMileStoneActIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMILESTONEACT));
    }

    /**
     * Returns element from 'arrMileStoneAct' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MileStoneAct
     */
    public function getArrMileStoneActAt($offset)
    {
        return $this->get(self::ARRMILESTONEACT, $offset);
    }

    /**
     * Returns count of 'arrMileStoneAct' list
     *
     * @return int
     */
    public function getArrMileStoneActCount()
    {
        return $this->count(self::ARRMILESTONEACT);
    }

    /**
     * Sets value of 'nExchangeMax' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExchangeMax($value)
    {
        return $this->set(self::NEXCHANGEMAX, $value);
    }

    /**
     * Returns value of 'nExchangeMax' property
     *
     * @return integer
     */
    public function getNExchangeMax()
    {
        $value = $this->get(self::NEXCHANGEMAX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExchangeMax' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExchangeMax()
    {
        return $this->get(self::NEXCHANGEMAX) !== null;
    }

    /**
     * Sets value of 'nExchangeCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExchangeCount($value)
    {
        return $this->set(self::NEXCHANGECOUNT, $value);
    }

    /**
     * Returns value of 'nExchangeCount' property
     *
     * @return integer
     */
    public function getNExchangeCount()
    {
        $value = $this->get(self::NEXCHANGECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExchangeCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExchangeCount()
    {
        return $this->get(self::NEXCHANGECOUNT) !== null;
    }
}
}