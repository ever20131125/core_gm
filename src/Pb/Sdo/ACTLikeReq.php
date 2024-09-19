<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTLikeReq message
 */
class ACTLikeReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ACTID = 2;
    const ARRTARGETID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTARGETID => array(
            'name' => 'arrTargetID',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ACTID] = null;
        $this->values[self::ARRTARGETID] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
    }

    /**
     * Appends value to 'arrTargetID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTargetID($value)
    {
        return $this->append(self::ARRTARGETID, $value);
    }

    /**
     * Clears 'arrTargetID' list
     *
     * @return null
     */
    public function clearArrTargetID()
    {
        return $this->clear(self::ARRTARGETID);
    }

    /**
     * Returns 'arrTargetID' list
     *
     * @return integer[]
     */
    public function getArrTargetID()
    {
        return $this->get(self::ARRTARGETID);
    }

    /**
     * Returns true if 'arrTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTargetID()
    {
        return count($this->get(self::ARRTARGETID)) !== 0;
    }

    /**
     * Returns 'arrTargetID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTargetIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTARGETID));
    }

    /**
     * Returns element from 'arrTargetID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTargetIDAt($offset)
    {
        return $this->get(self::ARRTARGETID, $offset);
    }

    /**
     * Returns count of 'arrTargetID' list
     *
     * @return int
     */
    public function getArrTargetIDCount()
    {
        return $this->count(self::ARRTARGETID);
    }
}
}