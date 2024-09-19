<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTMergeLinePrizeReq message
 */
class ACTMergeLinePrizeReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NACTID = 2;
    const NSECTION = 3;
    const ARRTYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTID => array(
            'name' => 'nActID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSECTION => array(
            'name' => 'nSection',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTYPE => array(
            'name' => 'arrType',
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
        $this->values[self::NACTID] = null;
        $this->values[self::NSECTION] = null;
        $this->values[self::ARRTYPE] = array();
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
     * Sets value of 'nActID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActID($value)
    {
        return $this->set(self::NACTID, $value);
    }

    /**
     * Returns value of 'nActID' property
     *
     * @return integer
     */
    public function getNActID()
    {
        $value = $this->get(self::NACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActID()
    {
        return $this->get(self::NACTID) !== null;
    }

    /**
     * Sets value of 'nSection' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSection($value)
    {
        return $this->set(self::NSECTION, $value);
    }

    /**
     * Returns value of 'nSection' property
     *
     * @return integer
     */
    public function getNSection()
    {
        $value = $this->get(self::NSECTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSection' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSection()
    {
        return $this->get(self::NSECTION) !== null;
    }

    /**
     * Appends value to 'arrType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrType($value)
    {
        return $this->append(self::ARRTYPE, $value);
    }

    /**
     * Clears 'arrType' list
     *
     * @return null
     */
    public function clearArrType()
    {
        return $this->clear(self::ARRTYPE);
    }

    /**
     * Returns 'arrType' list
     *
     * @return integer[]
     */
    public function getArrType()
    {
        return $this->get(self::ARRTYPE);
    }

    /**
     * Returns true if 'arrType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrType()
    {
        return count($this->get(self::ARRTYPE)) !== 0;
    }

    /**
     * Returns 'arrType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTYPE));
    }

    /**
     * Returns element from 'arrType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTypeAt($offset)
    {
        return $this->get(self::ARRTYPE, $offset);
    }

    /**
     * Returns count of 'arrType' list
     *
     * @return int
     */
    public function getArrTypeCount()
    {
        return $this->count(self::ARRTYPE);
    }
}
}