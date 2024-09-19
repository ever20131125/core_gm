<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetPrizeNoti message
 */
class ACTGetPrizeNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ROLENAME = 2;
    const ROLEGENDER = 3;
    const ACTID = 4;
    const ACTTYPE = 5;
    const TIMETICK = 6;
    const PRIZELIST = 7;
    const OPTION1 = 8;
    const OPTION2 = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLENAME => array(
            'name' => 'roleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ROLEGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'roleGender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActType::enmActType_None,
            'name' => 'actType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMETICK => array(
            'name' => 'timeTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::OPTION1 => array(
            'name' => 'option1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTION2 => array(
            'name' => 'option2',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ROLENAME] = null;
        $this->values[self::ROLEGENDER] = self::$fields[self::ROLEGENDER]['default'];
        $this->values[self::ACTID] = null;
        $this->values[self::ACTTYPE] = self::$fields[self::ACTTYPE]['default'];
        $this->values[self::TIMETICK] = null;
        $this->values[self::PRIZELIST] = array();
        $this->values[self::OPTION1] = null;
        $this->values[self::OPTION2] = null;
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
     * Sets value of 'roleGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleGender($value)
    {
        return $this->set(self::ROLEGENDER, $value);
    }

    /**
     * Returns value of 'roleGender' property
     *
     * @return integer
     */
    public function getRoleGender()
    {
        $value = $this->get(self::ROLEGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleGender()
    {
        return $this->get(self::ROLEGENDER) !== null;
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
     * Sets value of 'actType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActType($value)
    {
        return $this->set(self::ACTTYPE, $value);
    }

    /**
     * Returns value of 'actType' property
     *
     * @return integer
     */
    public function getActType()
    {
        $value = $this->get(self::ACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActType()
    {
        return $this->get(self::ACTTYPE) !== null;
    }

    /**
     * Sets value of 'timeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeTick($value)
    {
        return $this->set(self::TIMETICK, $value);
    }

    /**
     * Returns value of 'timeTick' property
     *
     * @return integer
     */
    public function getTimeTick()
    {
        $value = $this->get(self::TIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeTick()
    {
        return $this->get(self::TIMETICK) !== null;
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendPrizeList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::PRIZELIST, $value);
    }

    /**
     * Clears 'prizeList' list
     *
     * @return null
     */
    public function clearPrizeList()
    {
        return $this->clear(self::PRIZELIST);
    }

    /**
     * Returns 'prizeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getPrizeList()
    {
        return $this->get(self::PRIZELIST);
    }

    /**
     * Returns true if 'prizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeList()
    {
        return count($this->get(self::PRIZELIST)) !== 0;
    }

    /**
     * Returns 'prizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZELIST));
    }

    /**
     * Returns element from 'prizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getPrizeListAt($offset)
    {
        return $this->get(self::PRIZELIST, $offset);
    }

    /**
     * Returns count of 'prizeList' list
     *
     * @return int
     */
    public function getPrizeListCount()
    {
        return $this->count(self::PRIZELIST);
    }

    /**
     * Sets value of 'option1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption1($value)
    {
        return $this->set(self::OPTION1, $value);
    }

    /**
     * Returns value of 'option1' property
     *
     * @return integer
     */
    public function getOption1()
    {
        $value = $this->get(self::OPTION1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption1()
    {
        return $this->get(self::OPTION1) !== null;
    }

    /**
     * Sets value of 'option2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOption2($value)
    {
        return $this->set(self::OPTION2, $value);
    }

    /**
     * Returns value of 'option2' property
     *
     * @return integer
     */
    public function getOption2()
    {
        $value = $this->get(self::OPTION2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'option2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOption2()
    {
        return $this->get(self::OPTION2) !== null;
    }
}
}