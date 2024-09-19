<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SkillTargetShow message
 */
class SkillTargetShow extends \ProtobufMessage
{
    /* Field index constants */
    const NTARGET = 1;
    const SKILLSHOW = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTARGET => array(
            'name' => 'nTarget',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SKILLSHOW => array(
            'default' => \Xnhd\Core\Pb\Sdo\SkillShow::enmSkillShow_None,
            'name' => 'skillShow',
            'required' => false,
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
        $this->values[self::NTARGET] = null;
        $this->values[self::SKILLSHOW] = self::$fields[self::SKILLSHOW]['default'];
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
     * Sets value of 'nTarget' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTarget($value)
    {
        return $this->set(self::NTARGET, $value);
    }

    /**
     * Returns value of 'nTarget' property
     *
     * @return integer
     */
    public function getNTarget()
    {
        $value = $this->get(self::NTARGET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTarget' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTarget()
    {
        return $this->get(self::NTARGET) !== null;
    }

    /**
     * Sets value of 'skillShow' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSkillShow($value)
    {
        return $this->set(self::SKILLSHOW, $value);
    }

    /**
     * Returns value of 'skillShow' property
     *
     * @return integer
     */
    public function getSkillShow()
    {
        $value = $this->get(self::SKILLSHOW);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'skillShow' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSkillShow()
    {
        return $this->get(self::SKILLSHOW) !== null;
    }
}
}