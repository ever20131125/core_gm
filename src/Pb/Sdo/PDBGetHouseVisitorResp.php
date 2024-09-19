<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetHouseVisitorResp message
 */
class PDBGetHouseVisitorResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRHOUSEINFO = 3;

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
        self::ARRHOUSEINFO => array(
            'name' => 'arrHouseInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HouseGeneralInfo'
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
        $this->values[self::ARRHOUSEINFO] = array();
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
     * Appends value to 'arrHouseInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrHouseInfo(\Xnhd\Core\Pb\Sdo\HouseGeneralInfo $value)
    {
        return $this->append(self::ARRHOUSEINFO, $value);
    }

    /**
     * Clears 'arrHouseInfo' list
     *
     * @return null
     */
    public function clearArrHouseInfo()
    {
        return $this->clear(self::ARRHOUSEINFO);
    }

    /**
     * Returns 'arrHouseInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo[]
     */
    public function getArrHouseInfo()
    {
        return $this->get(self::ARRHOUSEINFO);
    }

    /**
     * Returns true if 'arrHouseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHouseInfo()
    {
        return count($this->get(self::ARRHOUSEINFO)) !== 0;
    }

    /**
     * Returns 'arrHouseInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHouseInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHOUSEINFO));
    }

    /**
     * Returns element from 'arrHouseInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\HouseGeneralInfo
     */
    public function getArrHouseInfoAt($offset)
    {
        return $this->get(self::ARRHOUSEINFO, $offset);
    }

    /**
     * Returns count of 'arrHouseInfo' list
     *
     * @return int
     */
    public function getArrHouseInfoCount()
    {
        return $this->count(self::ARRHOUSEINFO);
    }
}
}