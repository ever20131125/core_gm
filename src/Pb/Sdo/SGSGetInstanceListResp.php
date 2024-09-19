<?php
/**
 * Auto generated from smallgameserver.proto at 2022-09-14 02:40:01
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSGetInstanceListResp message
 */
class SGSGetInstanceListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const INSTANCETYPE = 2;
    const ARRROOMINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::INSTANCETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InstanceType::enmInstanceType_None,
            'name' => 'instanceType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROOMINFO => array(
            'name' => 'arrRoomInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\InstanceGeneral'
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
        $this->values[self::INSTANCETYPE] = self::$fields[self::INSTANCETYPE]['default'];
        $this->values[self::ARRROOMINFO] = array();
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
     * Sets value of 'instanceType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInstanceType($value)
    {
        return $this->set(self::INSTANCETYPE, $value);
    }

    /**
     * Returns value of 'instanceType' property
     *
     * @return integer
     */
    public function getInstanceType()
    {
        $value = $this->get(self::INSTANCETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'instanceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInstanceType()
    {
        return $this->get(self::INSTANCETYPE) !== null;
    }

    /**
     * Appends value to 'arrRoomInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\InstanceGeneral $value Value to append
     *
     * @return null
     */
    public function appendArrRoomInfo(\Xnhd\Core\Pb\Sdo\InstanceGeneral $value)
    {
        return $this->append(self::ARRROOMINFO, $value);
    }

    /**
     * Clears 'arrRoomInfo' list
     *
     * @return null
     */
    public function clearArrRoomInfo()
    {
        return $this->clear(self::ARRROOMINFO);
    }

    /**
     * Returns 'arrRoomInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceGeneral[]
     */
    public function getArrRoomInfo()
    {
        return $this->get(self::ARRROOMINFO);
    }

    /**
     * Returns true if 'arrRoomInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoomInfo()
    {
        return count($this->get(self::ARRROOMINFO)) !== 0;
    }

    /**
     * Returns 'arrRoomInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoomInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROOMINFO));
    }

    /**
     * Returns element from 'arrRoomInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceGeneral
     */
    public function getArrRoomInfoAt($offset)
    {
        return $this->get(self::ARRROOMINFO, $offset);
    }

    /**
     * Returns count of 'arrRoomInfo' list
     *
     * @return int
     */
    public function getArrRoomInfoCount()
    {
        return $this->count(self::ARRROOMINFO);
    }
}
}