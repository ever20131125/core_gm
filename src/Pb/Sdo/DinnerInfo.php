<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * DinnerInfo message
 */
class DinnerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMINSID = 1;
    const NITEMID = 2;
    const NHOSTID = 3;
    const NRESET = 4;
    const NTIMERESET = 5;
    const NPOSX = 6;
    const NPOSY = 7;
    const NPOSZ = 8;
    const ARRGOTTENLIST = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRESET => array(
            'name' => 'nReset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMERESET => array(
            'name' => 'nTimeReset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSX => array(
            'name' => 'nPosX',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSY => array(
            'name' => 'nPosY',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSZ => array(
            'name' => 'nPosZ',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOTTENLIST => array(
            'name' => 'arrGottenList',
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
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NHOSTID] = null;
        $this->values[self::NRESET] = null;
        $this->values[self::NTIMERESET] = null;
        $this->values[self::NPOSX] = null;
        $this->values[self::NPOSY] = null;
        $this->values[self::NPOSZ] = null;
        $this->values[self::ARRGOTTENLIST] = array();
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
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
    }

    /**
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nHostID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHostID($value)
    {
        return $this->set(self::NHOSTID, $value);
    }

    /**
     * Returns value of 'nHostID' property
     *
     * @return integer
     */
    public function getNHostID()
    {
        $value = $this->get(self::NHOSTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHostID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHostID()
    {
        return $this->get(self::NHOSTID) !== null;
    }

    /**
     * Sets value of 'nReset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNReset($value)
    {
        return $this->set(self::NRESET, $value);
    }

    /**
     * Returns value of 'nReset' property
     *
     * @return integer
     */
    public function getNReset()
    {
        $value = $this->get(self::NRESET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nReset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNReset()
    {
        return $this->get(self::NRESET) !== null;
    }

    /**
     * Sets value of 'nTimeReset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeReset($value)
    {
        return $this->set(self::NTIMERESET, $value);
    }

    /**
     * Returns value of 'nTimeReset' property
     *
     * @return integer
     */
    public function getNTimeReset()
    {
        $value = $this->get(self::NTIMERESET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeReset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeReset()
    {
        return $this->get(self::NTIMERESET) !== null;
    }

    /**
     * Sets value of 'nPosX' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosX($value)
    {
        return $this->set(self::NPOSX, $value);
    }

    /**
     * Returns value of 'nPosX' property
     *
     * @return integer
     */
    public function getNPosX()
    {
        $value = $this->get(self::NPOSX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosX' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosX()
    {
        return $this->get(self::NPOSX) !== null;
    }

    /**
     * Sets value of 'nPosY' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosY($value)
    {
        return $this->set(self::NPOSY, $value);
    }

    /**
     * Returns value of 'nPosY' property
     *
     * @return integer
     */
    public function getNPosY()
    {
        $value = $this->get(self::NPOSY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosY' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosY()
    {
        return $this->get(self::NPOSY) !== null;
    }

    /**
     * Sets value of 'nPosZ' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosZ($value)
    {
        return $this->set(self::NPOSZ, $value);
    }

    /**
     * Returns value of 'nPosZ' property
     *
     * @return integer
     */
    public function getNPosZ()
    {
        $value = $this->get(self::NPOSZ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosZ' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosZ()
    {
        return $this->get(self::NPOSZ) !== null;
    }

    /**
     * Appends value to 'arrGottenList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGottenList($value)
    {
        return $this->append(self::ARRGOTTENLIST, $value);
    }

    /**
     * Clears 'arrGottenList' list
     *
     * @return null
     */
    public function clearArrGottenList()
    {
        return $this->clear(self::ARRGOTTENLIST);
    }

    /**
     * Returns 'arrGottenList' list
     *
     * @return integer[]
     */
    public function getArrGottenList()
    {
        return $this->get(self::ARRGOTTENLIST);
    }

    /**
     * Returns true if 'arrGottenList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGottenList()
    {
        return count($this->get(self::ARRGOTTENLIST)) !== 0;
    }

    /**
     * Returns 'arrGottenList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGottenListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOTTENLIST));
    }

    /**
     * Returns element from 'arrGottenList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGottenListAt($offset)
    {
        return $this->get(self::ARRGOTTENLIST, $offset);
    }

    /**
     * Returns count of 'arrGottenList' list
     *
     * @return int
     */
    public function getArrGottenListCount()
    {
        return $this->count(self::ARRGOTTENLIST);
    }
}
}