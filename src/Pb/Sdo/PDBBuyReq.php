<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBBuyReq message
 */
class PDBBuyReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const BUYTYPE = 2;
    const ARRGOODSINFO = 3;
    const ARRTICKETS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUYTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BuyType::enmBuyType_None,
            'name' => 'buyType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSINFO => array(
            'name' => 'arrGoodsInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemExtra'
        ),
        self::ARRTICKETS => array(
            'name' => 'arrTickets',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::BUYTYPE] = self::$fields[self::BUYTYPE]['default'];
        $this->values[self::ARRGOODSINFO] = array();
        $this->values[self::ARRTICKETS] = array();
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'buyType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBuyType($value)
    {
        return $this->set(self::BUYTYPE, $value);
    }

    /**
     * Returns value of 'buyType' property
     *
     * @return integer
     */
    public function getBuyType()
    {
        $value = $this->get(self::BUYTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'buyType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuyType()
    {
        return $this->get(self::BUYTYPE) !== null;
    }

    /**
     * Appends value to 'arrGoodsInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemExtra $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsInfo(\Xnhd\Core\Pb\Sdo\ItemExtra $value)
    {
        return $this->append(self::ARRGOODSINFO, $value);
    }

    /**
     * Clears 'arrGoodsInfo' list
     *
     * @return null
     */
    public function clearArrGoodsInfo()
    {
        return $this->clear(self::ARRGOODSINFO);
    }

    /**
     * Returns 'arrGoodsInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra[]
     */
    public function getArrGoodsInfo()
    {
        return $this->get(self::ARRGOODSINFO);
    }

    /**
     * Returns true if 'arrGoodsInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoodsInfo()
    {
        return count($this->get(self::ARRGOODSINFO)) !== 0;
    }

    /**
     * Returns 'arrGoodsInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoodsInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOODSINFO));
    }

    /**
     * Returns element from 'arrGoodsInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra
     */
    public function getArrGoodsInfoAt($offset)
    {
        return $this->get(self::ARRGOODSINFO, $offset);
    }

    /**
     * Returns count of 'arrGoodsInfo' list
     *
     * @return int
     */
    public function getArrGoodsInfoCount()
    {
        return $this->count(self::ARRGOODSINFO);
    }

    /**
     * Appends value to 'arrTickets' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTickets($value)
    {
        return $this->append(self::ARRTICKETS, $value);
    }

    /**
     * Clears 'arrTickets' list
     *
     * @return null
     */
    public function clearArrTickets()
    {
        return $this->clear(self::ARRTICKETS);
    }

    /**
     * Returns 'arrTickets' list
     *
     * @return integer[]
     */
    public function getArrTickets()
    {
        return $this->get(self::ARRTICKETS);
    }

    /**
     * Returns true if 'arrTickets' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTickets()
    {
        return count($this->get(self::ARRTICKETS)) !== 0;
    }

    /**
     * Returns 'arrTickets' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTicketsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTICKETS));
    }

    /**
     * Returns element from 'arrTickets' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTicketsAt($offset)
    {
        return $this->get(self::ARRTICKETS, $offset);
    }

    /**
     * Returns count of 'arrTickets' list
     *
     * @return int
     */
    public function getArrTicketsCount()
    {
        return $this->count(self::ARRTICKETS);
    }
}
}