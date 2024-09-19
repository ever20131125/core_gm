<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetMallActInfoResp message
 */
class PDBGetMallActInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRGOODSLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGOODSLIST => array(
            'name' => 'arrGoodsList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActGoodsInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRGOODSLIST] = array();
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
     * Appends value to 'arrGoodsList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActGoodsInfo $value Value to append
     *
     * @return null
     */
    public function appendArrGoodsList(\Xnhd\Core\Pb\Sdo\ActGoodsInfo $value)
    {
        return $this->append(self::ARRGOODSLIST, $value);
    }

    /**
     * Clears 'arrGoodsList' list
     *
     * @return null
     */
    public function clearArrGoodsList()
    {
        return $this->clear(self::ARRGOODSLIST);
    }

    /**
     * Returns 'arrGoodsList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActGoodsInfo[]
     */
    public function getArrGoodsList()
    {
        return $this->get(self::ARRGOODSLIST);
    }

    /**
     * Returns true if 'arrGoodsList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGoodsList()
    {
        return count($this->get(self::ARRGOODSLIST)) !== 0;
    }

    /**
     * Returns 'arrGoodsList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGoodsListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGOODSLIST));
    }

    /**
     * Returns element from 'arrGoodsList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActGoodsInfo
     */
    public function getArrGoodsListAt($offset)
    {
        return $this->get(self::ARRGOODSLIST, $offset);
    }

    /**
     * Returns count of 'arrGoodsList' list
     *
     * @return int
     */
    public function getArrGoodsListCount()
    {
        return $this->count(self::ARRGOODSLIST);
    }
}
}