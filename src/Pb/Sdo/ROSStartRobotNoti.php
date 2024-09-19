<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSStartRobotNoti message
 */
class ROSStartRobotNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STARTUSERNUM = 1;
    const LOGININTERVAL = 2;
    const BEHAVIOR = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STARTUSERNUM => array(
            'name' => 'startusernum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOGININTERVAL => array(
            'name' => 'logininterval',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BEHAVIOR => array(
            'name' => 'behavior',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::STARTUSERNUM] = null;
        $this->values[self::LOGININTERVAL] = null;
        $this->values[self::BEHAVIOR] = array();
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
     * Sets value of 'startusernum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartusernum($value)
    {
        return $this->set(self::STARTUSERNUM, $value);
    }

    /**
     * Returns value of 'startusernum' property
     *
     * @return integer
     */
    public function getStartusernum()
    {
        $value = $this->get(self::STARTUSERNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startusernum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartusernum()
    {
        return $this->get(self::STARTUSERNUM) !== null;
    }

    /**
     * Sets value of 'logininterval' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLogininterval($value)
    {
        return $this->set(self::LOGININTERVAL, $value);
    }

    /**
     * Returns value of 'logininterval' property
     *
     * @return integer
     */
    public function getLogininterval()
    {
        $value = $this->get(self::LOGININTERVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'logininterval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogininterval()
    {
        return $this->get(self::LOGININTERVAL) !== null;
    }

    /**
     * Appends value to 'behavior' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendBehavior($value)
    {
        return $this->append(self::BEHAVIOR, $value);
    }

    /**
     * Clears 'behavior' list
     *
     * @return null
     */
    public function clearBehavior()
    {
        return $this->clear(self::BEHAVIOR);
    }

    /**
     * Returns 'behavior' list
     *
     * @return string[]
     */
    public function getBehavior()
    {
        return $this->get(self::BEHAVIOR);
    }

    /**
     * Returns true if 'behavior' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBehavior()
    {
        return count($this->get(self::BEHAVIOR)) !== 0;
    }

    /**
     * Returns 'behavior' iterator
     *
     * @return \ArrayIterator
     */
    public function getBehaviorIterator()
    {
        return new \ArrayIterator($this->get(self::BEHAVIOR));
    }

    /**
     * Returns element from 'behavior' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getBehaviorAt($offset)
    {
        return $this->get(self::BEHAVIOR, $offset);
    }

    /**
     * Returns count of 'behavior' list
     *
     * @return int
     */
    public function getBehaviorCount()
    {
        return $this->count(self::BEHAVIOR);
    }
}
}