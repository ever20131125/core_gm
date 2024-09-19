<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBRaffleResp message
 */
class IDBRaffleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ARRPRIZE = 3;
    const NSTARVALUE = 4;
    const NSTARMAX = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RafflePrize'
        ),
        self::NSTARVALUE => array(
            'name' => 'nStarValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARMAX => array(
            'name' => 'nStarMax',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRPRIZE] = array();
        $this->values[self::NSTARVALUE] = null;
        $this->values[self::NSTARMAX] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RafflePrize $value Value to append
     *
     * @return null
     */
    public function appendArrPrize(\Xnhd\Core\Pb\Sdo\RafflePrize $value)
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
     * @return \Xnhd\Core\Pb\Sdo\RafflePrize[]
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
     * @return \Xnhd\Core\Pb\Sdo\RafflePrize
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

    /**
     * Sets value of 'nStarValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStarValue($value)
    {
        return $this->set(self::NSTARVALUE, $value);
    }

    /**
     * Returns value of 'nStarValue' property
     *
     * @return integer
     */
    public function getNStarValue()
    {
        $value = $this->get(self::NSTARVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStarValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStarValue()
    {
        return $this->get(self::NSTARVALUE) !== null;
    }

    /**
     * Sets value of 'nStarMax' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStarMax($value)
    {
        return $this->set(self::NSTARMAX, $value);
    }

    /**
     * Returns value of 'nStarMax' property
     *
     * @return integer
     */
    public function getNStarMax()
    {
        $value = $this->get(self::NSTARMAX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStarMax' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStarMax()
    {
        return $this->get(self::NSTARMAX) !== null;
    }
}
}