<?php
/**
 * Auto generated from searchserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SHSGetCupRankListReq message
 */
class SHSGetCupRankListReq extends \ProtobufMessage
{
    /* Field index constants */
    const CUPRANKKEY = 1;
    const ARRROLEIDLIST = 2;
    const BALL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CUPRANKKEY => array(
            'name' => 'cupRankKey',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CupRankKey'
        ),
        self::ARRROLEIDLIST => array(
            'name' => 'arrRoleIDList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BALL => array(
            'name' => 'ball',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::CUPRANKKEY] = null;
        $this->values[self::ARRROLEIDLIST] = array();
        $this->values[self::BALL] = null;
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
     * Sets value of 'cupRankKey' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CupRankKey $value Property value
     *
     * @return null
     */
    public function setCupRankKey(\Xnhd\Core\Pb\Sdo\CupRankKey $value=null)
    {
        return $this->set(self::CUPRANKKEY, $value);
    }

    /**
     * Returns value of 'cupRankKey' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CupRankKey
     */
    public function getCupRankKey()
    {
        return $this->get(self::CUPRANKKEY);
    }

    /**
     * Returns true if 'cupRankKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCupRankKey()
    {
        return $this->get(self::CUPRANKKEY) !== null;
    }

    /**
     * Appends value to 'arrRoleIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleIDList($value)
    {
        return $this->append(self::ARRROLEIDLIST, $value);
    }

    /**
     * Clears 'arrRoleIDList' list
     *
     * @return null
     */
    public function clearArrRoleIDList()
    {
        return $this->clear(self::ARRROLEIDLIST);
    }

    /**
     * Returns 'arrRoleIDList' list
     *
     * @return integer[]
     */
    public function getArrRoleIDList()
    {
        return $this->get(self::ARRROLEIDLIST);
    }

    /**
     * Returns true if 'arrRoleIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleIDList()
    {
        return count($this->get(self::ARRROLEIDLIST)) !== 0;
    }

    /**
     * Returns 'arrRoleIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEIDLIST));
    }

    /**
     * Returns element from 'arrRoleIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDListAt($offset)
    {
        return $this->get(self::ARRROLEIDLIST, $offset);
    }

    /**
     * Returns count of 'arrRoleIDList' list
     *
     * @return int
     */
    public function getArrRoleIDListCount()
    {
        return $this->count(self::ARRROLEIDLIST);
    }

    /**
     * Sets value of 'ball' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBall($value)
    {
        return $this->set(self::BALL, $value);
    }

    /**
     * Returns value of 'ball' property
     *
     * @return boolean
     */
    public function getBall()
    {
        $value = $this->get(self::BALL);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'ball' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBall()
    {
        return $this->get(self::BALL) !== null;
    }
}
}