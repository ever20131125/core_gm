<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetRealmInfoReq message
 */
class COSGetRealmInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRREALMTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRREALMTYPE => array(
            'name' => 'arrRealmType',
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
        $this->values[self::ARRREALMTYPE] = array();
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
     * Appends value to 'arrRealmType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRealmType($value)
    {
        return $this->append(self::ARRREALMTYPE, $value);
    }

    /**
     * Clears 'arrRealmType' list
     *
     * @return null
     */
    public function clearArrRealmType()
    {
        return $this->clear(self::ARRREALMTYPE);
    }

    /**
     * Returns 'arrRealmType' list
     *
     * @return integer[]
     */
    public function getArrRealmType()
    {
        return $this->get(self::ARRREALMTYPE);
    }

    /**
     * Returns true if 'arrRealmType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRealmType()
    {
        return count($this->get(self::ARRREALMTYPE)) !== 0;
    }

    /**
     * Returns 'arrRealmType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRealmTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRREALMTYPE));
    }

    /**
     * Returns element from 'arrRealmType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRealmTypeAt($offset)
    {
        return $this->get(self::ARRREALMTYPE, $offset);
    }

    /**
     * Returns count of 'arrRealmType' list
     *
     * @return int
     */
    public function getArrRealmTypeCount()
    {
        return $this->count(self::ARRREALMTYPE);
    }
}
}