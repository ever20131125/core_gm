<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBBuySaleListReq message
 */
class PDBBuySaleListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const MALLTYPE = 2;
    const ARRGOODSINDEX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MALLTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MallType::enmMallType_Normal,
            'name' => 'mallType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSINDEX => array(
            'name' => 'arrGoodsIndex',
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
        $this->values[self::MALLTYPE] = self::$fields[self::MALLTYPE]['default'];
        $this->values[self::ARRGOODSINDEX] = array();
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
     * Sets value of 'mallType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMallType($value)
    {
        return $this->set(self::MALLTYPE, $value);
    }

    /**
     * Returns value of 'mallType' property
     *
     * @return integer
     */
    public function getMallType()
    {
        $value = $this->get(self::MALLTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mallType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMallType()
    {
        return $this->get(self::MALLTYPE) !== null;
    }

    /**
     * Appends value to 'arrGoodsIndex' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsIndex($value)
    {
        return $this->append(self::ARRGOODSINDEX, $value);
    }

    /**
     * Clears 'arrGoodsIndex' list
     *
     * @return null
     */
    public function clearArrGoodsIndex()
    {
        return $this->clear(self::ARRGOODSINDEX);
    }

    /**
     * Returns 'arrGoodsIndex' list
     *
     * @return integer[]
     */
    public function getArrGoodsIndex()
    {
        return $this->get(self::ARRGOODSINDEX);
    }

    /**
     * Returns true if 'arrGoodsIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoodsIndex()
    {
        return count($this->get(self::ARRGOODSINDEX)) !== 0;
    }

    /**
     * Returns 'arrGoodsIndex' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoodsIndexIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOODSINDEX));
    }

    /**
     * Returns element from 'arrGoodsIndex' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGoodsIndexAt($offset)
    {
        return $this->get(self::ARRGOODSINDEX, $offset);
    }

    /**
     * Returns count of 'arrGoodsIndex' list
     *
     * @return int
     */
    public function getArrGoodsIndexCount()
    {
        return $this->count(self::ARRGOODSINDEX);
    }
}
}