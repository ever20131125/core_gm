<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PuzzleCollect message
 */
class PuzzleCollect extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ARRPARTID = 2;
    const ROLEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPARTID => array(
            'name' => 'arrPartID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleInfo'
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
        $this->values[self::ARRPARTID] = array();
        $this->values[self::ROLEINFO] = null;
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
     * Appends value to 'arrPartID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPartID($value)
    {
        return $this->append(self::ARRPARTID, $value);
    }

    /**
     * Clears 'arrPartID' list
     *
     * @return null
     */
    public function clearArrPartID()
    {
        return $this->clear(self::ARRPARTID);
    }

    /**
     * Returns 'arrPartID' list
     *
     * @return integer[]
     */
    public function getArrPartID()
    {
        return $this->get(self::ARRPARTID);
    }

    /**
     * Returns true if 'arrPartID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPartID()
    {
        return count($this->get(self::ARRPARTID)) !== 0;
    }

    /**
     * Returns 'arrPartID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPartIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPARTID));
    }

    /**
     * Returns element from 'arrPartID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPartIDAt($offset)
    {
        return $this->get(self::ARRPARTID, $offset);
    }

    /**
     * Returns count of 'arrPartID' list
     *
     * @return int
     */
    public function getArrPartIDCount()
    {
        return $this->count(self::ARRPARTID);
    }

    /**
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\RoleInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return $this->get(self::ROLEINFO) !== null;
    }
}
}