<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetNearbyPeopleResp message
 */
class RLSGetNearbyPeopleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRPEOPLEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRPEOPLEINFO => array(
            'name' => 'arrPeopleInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\NearbyPeopleInfo'
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
        $this->values[self::ARRPEOPLEINFO] = array();
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
     * Appends value to 'arrPeopleInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\NearbyPeopleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPeopleInfo(\Xnhd\Core\Pb\Sdo\NearbyPeopleInfo $value)
    {
        return $this->append(self::ARRPEOPLEINFO, $value);
    }

    /**
     * Clears 'arrPeopleInfo' list
     *
     * @return null
     */
    public function clearArrPeopleInfo()
    {
        return $this->clear(self::ARRPEOPLEINFO);
    }

    /**
     * Returns 'arrPeopleInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\NearbyPeopleInfo[]
     */
    public function getArrPeopleInfo()
    {
        return $this->get(self::ARRPEOPLEINFO);
    }

    /**
     * Returns true if 'arrPeopleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPeopleInfo()
    {
        return count($this->get(self::ARRPEOPLEINFO)) !== 0;
    }

    /**
     * Returns 'arrPeopleInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPeopleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPEOPLEINFO));
    }

    /**
     * Returns element from 'arrPeopleInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\NearbyPeopleInfo
     */
    public function getArrPeopleInfoAt($offset)
    {
        return $this->get(self::ARRPEOPLEINFO, $offset);
    }

    /**
     * Returns count of 'arrPeopleInfo' list
     *
     * @return int
     */
    public function getArrPeopleInfoCount()
    {
        return $this->count(self::ARRPEOPLEINFO);
    }
}
}