<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetDinnerListResp message
 */
class IDBGetDinnerListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRDINNERLIST = 3;

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
        self::ARRDINNERLIST => array(
            'name' => 'arrDinnerList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\DinnerInfo'
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
        $this->values[self::ARRDINNERLIST] = array();
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
     * Appends value to 'arrDinnerList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\DinnerInfo $value Value to append
     *
     * @return null
     */
    public function appendArrDinnerList(\Xnhd\Core\Pb\Sdo\DinnerInfo $value)
    {
        return $this->append(self::ARRDINNERLIST, $value);
    }

    /**
     * Clears 'arrDinnerList' list
     *
     * @return null
     */
    public function clearArrDinnerList()
    {
        return $this->clear(self::ARRDINNERLIST);
    }

    /**
     * Returns 'arrDinnerList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\DinnerInfo[]
     */
    public function getArrDinnerList()
    {
        return $this->get(self::ARRDINNERLIST);
    }

    /**
     * Returns true if 'arrDinnerList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDinnerList()
    {
        return count($this->get(self::ARRDINNERLIST)) !== 0;
    }

    /**
     * Returns 'arrDinnerList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDinnerListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDINNERLIST));
    }

    /**
     * Returns element from 'arrDinnerList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\DinnerInfo
     */
    public function getArrDinnerListAt($offset)
    {
        return $this->get(self::ARRDINNERLIST, $offset);
    }

    /**
     * Returns count of 'arrDinnerList' list
     *
     * @return int
     */
    public function getArrDinnerListCount()
    {
        return $this->count(self::ARRDINNERLIST);
    }
}
}