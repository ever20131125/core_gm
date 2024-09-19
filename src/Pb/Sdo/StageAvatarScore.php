<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * StageAvatarScore message
 */
class StageAvatarScore extends \ProtobufMessage
{
    /* Field index constants */
    const CONDITION = 1;
    const NLABEL = 2;
    const ARRITEMID = 3;
    const NITEMTYPE = 4;
    const NSCORE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONDITION => array(
            'name' => 'condition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLABEL => array(
            'name' => 'nLabel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMID => array(
            'name' => 'arrItemID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMTYPE => array(
            'name' => 'nItemType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
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
        $this->values[self::CONDITION] = null;
        $this->values[self::NLABEL] = null;
        $this->values[self::ARRITEMID] = array();
        $this->values[self::NITEMTYPE] = null;
        $this->values[self::NSCORE] = null;
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
     * Sets value of 'condition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCondition($value)
    {
        return $this->set(self::CONDITION, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return integer
     */
    public function getCondition()
    {
        $value = $this->get(self::CONDITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'condition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCondition()
    {
        return $this->get(self::CONDITION) !== null;
    }

    /**
     * Sets value of 'nLabel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLabel($value)
    {
        return $this->set(self::NLABEL, $value);
    }

    /**
     * Returns value of 'nLabel' property
     *
     * @return integer
     */
    public function getNLabel()
    {
        $value = $this->get(self::NLABEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLabel()
    {
        return $this->get(self::NLABEL) !== null;
    }

    /**
     * Appends value to 'arrItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemID($value)
    {
        return $this->append(self::ARRITEMID, $value);
    }

    /**
     * Clears 'arrItemID' list
     *
     * @return null
     */
    public function clearArrItemID()
    {
        return $this->clear(self::ARRITEMID);
    }

    /**
     * Returns 'arrItemID' list
     *
     * @return integer[]
     */
    public function getArrItemID()
    {
        return $this->get(self::ARRITEMID);
    }

    /**
     * Returns true if 'arrItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemID()
    {
        return count($this->get(self::ARRITEMID)) !== 0;
    }

    /**
     * Returns 'arrItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMID));
    }

    /**
     * Returns element from 'arrItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemIDAt($offset)
    {
        return $this->get(self::ARRITEMID, $offset);
    }

    /**
     * Returns count of 'arrItemID' list
     *
     * @return int
     */
    public function getArrItemIDCount()
    {
        return $this->count(self::ARRITEMID);
    }

    /**
     * Sets value of 'nItemType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemType($value)
    {
        return $this->set(self::NITEMTYPE, $value);
    }

    /**
     * Returns value of 'nItemType' property
     *
     * @return integer
     */
    public function getNItemType()
    {
        $value = $this->get(self::NITEMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemType()
    {
        return $this->get(self::NITEMTYPE) !== null;
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
}
}