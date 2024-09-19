<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SocialPrize message
 */
class SocialPrize extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const TYPE = 2;
    const TIME = 3;
    const PRIZEID = 4;
    const ROLENAME = 5;
    const PRIZE = 6;
    const GREETINGS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZEID => array(
            'name' => 'prizeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLENAME => array(
            'name' => 'roleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRIZE => array(
            'name' => 'prize',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
        ),
        self::GREETINGS => array(
            'name' => 'greetings',
            'required' => false,
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
        $this->values[self::ROLEID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::TIME] = null;
        $this->values[self::PRIZEID] = null;
        $this->values[self::ROLENAME] = null;
        $this->values[self::PRIZE] = null;
        $this->values[self::GREETINGS] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTime()
    {
        return $this->get(self::TIME) !== null;
    }

    /**
     * Sets value of 'prizeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrizeID($value)
    {
        return $this->set(self::PRIZEID, $value);
    }

    /**
     * Returns value of 'prizeID' property
     *
     * @return integer
     */
    public function getPrizeID()
    {
        $value = $this->get(self::PRIZEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'prizeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeID()
    {
        return $this->get(self::PRIZEID) !== null;
    }

    /**
     * Sets value of 'roleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoleName($value)
    {
        return $this->set(self::ROLENAME, $value);
    }

    /**
     * Returns value of 'roleName' property
     *
     * @return string
     */
    public function getRoleName()
    {
        $value = $this->get(self::ROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'roleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleName()
    {
        return $this->get(self::ROLENAME) !== null;
    }

    /**
     * Sets value of 'prize' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Property value
     *
     * @return null
     */
    public function setPrize(\Xnhd\Core\Pb\Sdo\ItemGained $value=null)
    {
        return $this->set(self::PRIZE, $value);
    }

    /**
     * Returns value of 'prize' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
     */
    public function getPrize()
    {
        return $this->get(self::PRIZE);
    }

    /**
     * Returns true if 'prize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrize()
    {
        return $this->get(self::PRIZE) !== null;
    }

    /**
     * Sets value of 'greetings' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGreetings($value)
    {
        return $this->set(self::GREETINGS, $value);
    }

    /**
     * Returns value of 'greetings' property
     *
     * @return string
     */
    public function getGreetings()
    {
        $value = $this->get(self::GREETINGS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'greetings' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGreetings()
    {
        return $this->get(self::GREETINGS) !== null;
    }
}
}