<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetRoleStateResp message
 */
class COSGetRoleStateResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEID = 2;
    const ARRSTATE = 3;
    const ARRLONGITUDE = 4;
    const ARRLATITUDE = 5;
    const ARROFFLINETIME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSTATE => array(
            'name' => 'arrState',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRLONGITUDE => array(
            'name' => 'arrLongitude',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::ARRLATITUDE => array(
            'name' => 'arrLatitude',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::ARROFFLINETIME => array(
            'name' => 'arrOfflineTime',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRSTATE] = array();
        $this->values[self::ARRLONGITUDE] = array();
        $this->values[self::ARRLATITUDE] = array();
        $this->values[self::ARROFFLINETIME] = array();
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
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Appends value to 'arrState' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrState($value)
    {
        return $this->append(self::ARRSTATE, $value);
    }

    /**
     * Clears 'arrState' list
     *
     * @return null
     */
    public function clearArrState()
    {
        return $this->clear(self::ARRSTATE);
    }

    /**
     * Returns 'arrState' list
     *
     * @return integer[]
     */
    public function getArrState()
    {
        return $this->get(self::ARRSTATE);
    }

    /**
     * Returns true if 'arrState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrState()
    {
        return count($this->get(self::ARRSTATE)) !== 0;
    }

    /**
     * Returns 'arrState' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStateIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTATE));
    }

    /**
     * Returns element from 'arrState' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrStateAt($offset)
    {
        return $this->get(self::ARRSTATE, $offset);
    }

    /**
     * Returns count of 'arrState' list
     *
     * @return int
     */
    public function getArrStateCount()
    {
        return $this->count(self::ARRSTATE);
    }

    /**
     * Appends value to 'arrLongitude' list
     *
     * @param double $value Value to append
     *
     * @return null
     */
    public function appendArrLongitude($value)
    {
        return $this->append(self::ARRLONGITUDE, $value);
    }

    /**
     * Clears 'arrLongitude' list
     *
     * @return null
     */
    public function clearArrLongitude()
    {
        return $this->clear(self::ARRLONGITUDE);
    }

    /**
     * Returns 'arrLongitude' list
     *
     * @return double[]
     */
    public function getArrLongitude()
    {
        return $this->get(self::ARRLONGITUDE);
    }

    /**
     * Returns true if 'arrLongitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLongitude()
    {
        return count($this->get(self::ARRLONGITUDE)) !== 0;
    }

    /**
     * Returns 'arrLongitude' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLongitudeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLONGITUDE));
    }

    /**
     * Returns element from 'arrLongitude' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return double
     */
    public function getArrLongitudeAt($offset)
    {
        return $this->get(self::ARRLONGITUDE, $offset);
    }

    /**
     * Returns count of 'arrLongitude' list
     *
     * @return int
     */
    public function getArrLongitudeCount()
    {
        return $this->count(self::ARRLONGITUDE);
    }

    /**
     * Appends value to 'arrLatitude' list
     *
     * @param double $value Value to append
     *
     * @return null
     */
    public function appendArrLatitude($value)
    {
        return $this->append(self::ARRLATITUDE, $value);
    }

    /**
     * Clears 'arrLatitude' list
     *
     * @return null
     */
    public function clearArrLatitude()
    {
        return $this->clear(self::ARRLATITUDE);
    }

    /**
     * Returns 'arrLatitude' list
     *
     * @return double[]
     */
    public function getArrLatitude()
    {
        return $this->get(self::ARRLATITUDE);
    }

    /**
     * Returns true if 'arrLatitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLatitude()
    {
        return count($this->get(self::ARRLATITUDE)) !== 0;
    }

    /**
     * Returns 'arrLatitude' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLatitudeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLATITUDE));
    }

    /**
     * Returns element from 'arrLatitude' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return double
     */
    public function getArrLatitudeAt($offset)
    {
        return $this->get(self::ARRLATITUDE, $offset);
    }

    /**
     * Returns count of 'arrLatitude' list
     *
     * @return int
     */
    public function getArrLatitudeCount()
    {
        return $this->count(self::ARRLATITUDE);
    }

    /**
     * Appends value to 'arrOfflineTime' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOfflineTime($value)
    {
        return $this->append(self::ARROFFLINETIME, $value);
    }

    /**
     * Clears 'arrOfflineTime' list
     *
     * @return null
     */
    public function clearArrOfflineTime()
    {
        return $this->clear(self::ARROFFLINETIME);
    }

    /**
     * Returns 'arrOfflineTime' list
     *
     * @return integer[]
     */
    public function getArrOfflineTime()
    {
        return $this->get(self::ARROFFLINETIME);
    }

    /**
     * Returns true if 'arrOfflineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOfflineTime()
    {
        return count($this->get(self::ARROFFLINETIME)) !== 0;
    }

    /**
     * Returns 'arrOfflineTime' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOfflineTimeIterator()
    {
        return new \ArrayIterator($this->get(self::ARROFFLINETIME));
    }

    /**
     * Returns element from 'arrOfflineTime' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOfflineTimeAt($offset)
    {
        return $this->get(self::ARROFFLINETIME, $offset);
    }

    /**
     * Returns count of 'arrOfflineTime' list
     *
     * @return int
     */
    public function getArrOfflineTimeCount()
    {
        return $this->count(self::ARROFFLINETIME);
    }
}
}