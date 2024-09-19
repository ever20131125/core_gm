<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetPayInfoResp message
 */
class PDBGetPayInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRPAYINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPAYINFO => array(
            'name' => 'arrPayInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PayInfo'
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
        $this->values[self::ARRPAYINFO] = array();
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
     * Appends value to 'arrPayInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PayInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPayInfo(\Xnhd\Core\Pb\Sdo\PayInfo $value)
    {
        return $this->append(self::ARRPAYINFO, $value);
    }

    /**
     * Clears 'arrPayInfo' list
     *
     * @return null
     */
    public function clearArrPayInfo()
    {
        return $this->clear(self::ARRPAYINFO);
    }

    /**
     * Returns 'arrPayInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PayInfo[]
     */
    public function getArrPayInfo()
    {
        return $this->get(self::ARRPAYINFO);
    }

    /**
     * Returns true if 'arrPayInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPayInfo()
    {
        return count($this->get(self::ARRPAYINFO)) !== 0;
    }

    /**
     * Returns 'arrPayInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPayInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPAYINFO));
    }

    /**
     * Returns element from 'arrPayInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PayInfo
     */
    public function getArrPayInfoAt($offset)
    {
        return $this->get(self::ARRPAYINFO, $offset);
    }

    /**
     * Returns count of 'arrPayInfo' list
     *
     * @return int
     */
    public function getArrPayInfoCount()
    {
        return $this->count(self::ARRPAYINFO);
    }
}
}