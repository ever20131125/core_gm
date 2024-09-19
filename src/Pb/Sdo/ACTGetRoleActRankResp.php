<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetRoleActRankResp message
 */
class ACTGetRoleActRankResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ACTID = 2;
    const ARRACTRANK = 3;
    const ARRRANKPRIZE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTRANK => array(
            'name' => 'arrActRank',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActRankUnit'
        ),
        self::ARRRANKPRIZE => array(
            'name' => 'arrRankPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
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
        $this->values[self::ACTID] = null;
        $this->values[self::ARRACTRANK] = array();
        $this->values[self::ARRRANKPRIZE] = array();
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
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
    }

    /**
     * Appends value to 'arrActRank' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActRankUnit $value Value to append
     *
     * @return null
     */
    public function appendArrActRank(\Xnhd\Core\Pb\Sdo\ActRankUnit $value)
    {
        return $this->append(self::ARRACTRANK, $value);
    }

    /**
     * Clears 'arrActRank' list
     *
     * @return null
     */
    public function clearArrActRank()
    {
        return $this->clear(self::ARRACTRANK);
    }

    /**
     * Returns 'arrActRank' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActRankUnit[]
     */
    public function getArrActRank()
    {
        return $this->get(self::ARRACTRANK);
    }

    /**
     * Returns true if 'arrActRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActRank()
    {
        return count($this->get(self::ARRACTRANK)) !== 0;
    }

    /**
     * Returns 'arrActRank' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActRankIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTRANK));
    }

    /**
     * Returns element from 'arrActRank' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActRankUnit
     */
    public function getArrActRankAt($offset)
    {
        return $this->get(self::ARRACTRANK, $offset);
    }

    /**
     * Returns count of 'arrActRank' list
     *
     * @return int
     */
    public function getArrActRankCount()
    {
        return $this->count(self::ARRACTRANK);
    }

    /**
     * Appends value to 'arrRankPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Value to append
     *
     * @return null
     */
    public function appendArrRankPrize(\Xnhd\Core\Pb\Sdo\ItemGained $value)
    {
        return $this->append(self::ARRRANKPRIZE, $value);
    }

    /**
     * Clears 'arrRankPrize' list
     *
     * @return null
     */
    public function clearArrRankPrize()
    {
        return $this->clear(self::ARRRANKPRIZE);
    }

    /**
     * Returns 'arrRankPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained[]
     */
    public function getArrRankPrize()
    {
        return $this->get(self::ARRRANKPRIZE);
    }

    /**
     * Returns true if 'arrRankPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRankPrize()
    {
        return count($this->get(self::ARRRANKPRIZE)) !== 0;
    }

    /**
     * Returns 'arrRankPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRankPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRANKPRIZE));
    }

    /**
     * Returns element from 'arrRankPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
     */
    public function getArrRankPrizeAt($offset)
    {
        return $this->get(self::ARRRANKPRIZE, $offset);
    }

    /**
     * Returns count of 'arrRankPrize' list
     *
     * @return int
     */
    public function getArrRankPrizeCount()
    {
        return $this->count(self::ARRRANKPRIZE);
    }
}
}