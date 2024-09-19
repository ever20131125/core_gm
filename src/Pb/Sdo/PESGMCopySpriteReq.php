<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESGMCopySpriteReq message
 */
class PESGMCopySpriteReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ARRPROPERTY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPROPERTY => array(
            'name' => 'arrProperty',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\SpriteProperty'
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
        $this->values[self::ARRPROPERTY] = array();
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
     * Sets value of 'roleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleId($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleId' property
     *
     * @return integer
     */
    public function getRoleId()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleId()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrProperty' list
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteProperty $value Value to append
     *
     * @return null
     */
    public function appendArrProperty(\Xnhd\Core\Pb\Sdo\SpriteProperty $value)
    {
        return $this->append(self::ARRPROPERTY, $value);
    }

    /**
     * Clears 'arrProperty' list
     *
     * @return null
     */
    public function clearArrProperty()
    {
        return $this->clear(self::ARRPROPERTY);
    }

    /**
     * Returns 'arrProperty' list
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty[]
     */
    public function getArrProperty()
    {
        return $this->get(self::ARRPROPERTY);
    }

    /**
     * Returns true if 'arrProperty' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrProperty()
    {
        return count($this->get(self::ARRPROPERTY)) !== 0;
    }

    /**
     * Returns 'arrProperty' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPropertyIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPROPERTY));
    }

    /**
     * Returns element from 'arrProperty' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteProperty
     */
    public function getArrPropertyAt($offset)
    {
        return $this->get(self::ARRPROPERTY, $offset);
    }

    /**
     * Returns count of 'arrProperty' list
     *
     * @return int
     */
    public function getArrPropertyCount()
    {
        return $this->count(self::ARRPROPERTY);
    }
}
}