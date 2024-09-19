<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetRoleDataReq message
 */
class CDSGetRoleDataReq extends \ProtobufMessage
{
    /* Field index constants */
    const WAYS = 1;
    const ROLEIDLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::WAYS => array(
            'name' => 'ways',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEIDLIST => array(
            'name' => 'roleIDList',
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
        $this->values[self::WAYS] = null;
        $this->values[self::ROLEIDLIST] = array();
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
     * Sets value of 'ways' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWays($value)
    {
        return $this->set(self::WAYS, $value);
    }

    /**
     * Returns value of 'ways' property
     *
     * @return integer
     */
    public function getWays()
    {
        $value = $this->get(self::WAYS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ways' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWays()
    {
        return $this->get(self::WAYS) !== null;
    }

    /**
     * Appends value to 'roleIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRoleIDList($value)
    {
        return $this->append(self::ROLEIDLIST, $value);
    }

    /**
     * Clears 'roleIDList' list
     *
     * @return null
     */
    public function clearRoleIDList()
    {
        return $this->clear(self::ROLEIDLIST);
    }

    /**
     * Returns 'roleIDList' list
     *
     * @return integer[]
     */
    public function getRoleIDList()
    {
        return $this->get(self::ROLEIDLIST);
    }

    /**
     * Returns true if 'roleIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleIDList()
    {
        return count($this->get(self::ROLEIDLIST)) !== 0;
    }

    /**
     * Returns 'roleIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getRoleIDListIterator()
    {
        return new \ArrayIterator($this->get(self::ROLEIDLIST));
    }

    /**
     * Returns element from 'roleIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRoleIDListAt($offset)
    {
        return $this->get(self::ROLEIDLIST, $offset);
    }

    /**
     * Returns count of 'roleIDList' list
     *
     * @return int
     */
    public function getRoleIDListCount()
    {
        return $this->count(self::ROLEIDLIST);
    }
}
}