<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleSkillInfo message
 */
class RoleSkillInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ARRSKILLINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRSKILLINFO => array(
            'name' => 'arrSkillInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\SkillInfo'
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
        $this->values[self::ARRSKILLINFO] = array();
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
     * Appends value to 'arrSkillInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\SkillInfo $value Value to append
     *
     * @return null
     */
    public function appendArrSkillInfo(\Xnhd\Core\Pb\Sdo\SkillInfo $value)
    {
        return $this->append(self::ARRSKILLINFO, $value);
    }

    /**
     * Clears 'arrSkillInfo' list
     *
     * @return null
     */
    public function clearArrSkillInfo()
    {
        return $this->clear(self::ARRSKILLINFO);
    }

    /**
     * Returns 'arrSkillInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\SkillInfo[]
     */
    public function getArrSkillInfo()
    {
        return $this->get(self::ARRSKILLINFO);
    }

    /**
     * Returns true if 'arrSkillInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrSkillInfo()
    {
        return count($this->get(self::ARRSKILLINFO)) !== 0;
    }

    /**
     * Returns 'arrSkillInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrSkillInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSKILLINFO));
    }

    /**
     * Returns element from 'arrSkillInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\SkillInfo
     */
    public function getArrSkillInfoAt($offset)
    {
        return $this->get(self::ARRSKILLINFO, $offset);
    }

    /**
     * Returns count of 'arrSkillInfo' list
     *
     * @return int
     */
    public function getArrSkillInfoCount()
    {
        return $this->count(self::ARRSKILLINFO);
    }
}
}