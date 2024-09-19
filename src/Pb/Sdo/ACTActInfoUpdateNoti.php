<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTActInfoUpdateNoti message
 */
class ACTActInfoUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ARRACTINFO = 2;
    const ROLEACTINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTINFO => array(
            'name' => 'arrActInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActInfo'
        ),
        self::ROLEACTINFO => array(
            'name' => 'roleActInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleActInfo'
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
        $this->values[self::ARRACTINFO] = array();
        $this->values[self::ROLEACTINFO] = null;
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
     * Appends value to 'arrActInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActInfo $value Value to append
     *
     * @return null
     */
    public function appendArrActInfo(\Xnhd\Core\Pb\Sdo\ActInfo $value)
    {
        return $this->append(self::ARRACTINFO, $value);
    }

    /**
     * Clears 'arrActInfo' list
     *
     * @return null
     */
    public function clearArrActInfo()
    {
        return $this->clear(self::ARRACTINFO);
    }

    /**
     * Returns 'arrActInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActInfo[]
     */
    public function getArrActInfo()
    {
        return $this->get(self::ARRACTINFO);
    }

    /**
     * Returns true if 'arrActInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActInfo()
    {
        return count($this->get(self::ARRACTINFO)) !== 0;
    }

    /**
     * Returns 'arrActInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTINFO));
    }

    /**
     * Returns element from 'arrActInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActInfo
     */
    public function getArrActInfoAt($offset)
    {
        return $this->get(self::ARRACTINFO, $offset);
    }

    /**
     * Returns count of 'arrActInfo' list
     *
     * @return int
     */
    public function getArrActInfoCount()
    {
        return $this->count(self::ARRACTINFO);
    }

    /**
     * Sets value of 'roleActInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleActInfo $value Property value
     *
     * @return null
     */
    public function setRoleActInfo(\Xnhd\Core\Pb\Sdo\RoleActInfo $value=null)
    {
        return $this->set(self::ROLEACTINFO, $value);
    }

    /**
     * Returns value of 'roleActInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleActInfo
     */
    public function getRoleActInfo()
    {
        return $this->get(self::ROLEACTINFO);
    }

    /**
     * Returns true if 'roleActInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleActInfo()
    {
        return $this->get(self::ROLEACTINFO) !== null;
    }
}
}