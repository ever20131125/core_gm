<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * HouseEvent message
 */
class HouseEvent extends \ProtobufMessage
{
    /* Field index constants */
    const HOUSETYPE = 1;
    const ROLEID = 2;
    const THEMEID = 3;
    const ARROPTION = 4;
    const ARROPTION2 = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HOUSETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\HouseEventType::enmHouseEvent_None,
            'name' => 'houseType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THEMEID => array(
            'name' => 'themeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPTION2 => array(
            'name' => 'arrOption2',
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
        $this->values[self::HOUSETYPE] = self::$fields[self::HOUSETYPE]['default'];
        $this->values[self::ROLEID] = null;
        $this->values[self::THEMEID] = null;
        $this->values[self::ARROPTION] = array();
        $this->values[self::ARROPTION2] = array();
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
     * Sets value of 'houseType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHouseType($value)
    {
        return $this->set(self::HOUSETYPE, $value);
    }

    /**
     * Returns value of 'houseType' property
     *
     * @return integer
     */
    public function getHouseType()
    {
        $value = $this->get(self::HOUSETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'houseType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHouseType()
    {
        return $this->get(self::HOUSETYPE) !== null;
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
     * Sets value of 'themeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThemeID($value)
    {
        return $this->set(self::THEMEID, $value);
    }

    /**
     * Returns value of 'themeID' property
     *
     * @return integer
     */
    public function getThemeID()
    {
        $value = $this->get(self::THEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'themeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThemeID()
    {
        return $this->get(self::THEMEID) !== null;
    }

    /**
     * Appends value to 'arrOption' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOption($value)
    {
        return $this->append(self::ARROPTION, $value);
    }

    /**
     * Clears 'arrOption' list
     *
     * @return null
     */
    public function clearArrOption()
    {
        return $this->clear(self::ARROPTION);
    }

    /**
     * Returns 'arrOption' list
     *
     * @return integer[]
     */
    public function getArrOption()
    {
        return $this->get(self::ARROPTION);
    }

    /**
     * Returns true if 'arrOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption()
    {
        return count($this->get(self::ARROPTION)) !== 0;
    }

    /**
     * Returns 'arrOption' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOptionIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION));
    }

    /**
     * Returns element from 'arrOption' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOptionAt($offset)
    {
        return $this->get(self::ARROPTION, $offset);
    }

    /**
     * Returns count of 'arrOption' list
     *
     * @return int
     */
    public function getArrOptionCount()
    {
        return $this->count(self::ARROPTION);
    }

    /**
     * Appends value to 'arrOption2' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOption2($value)
    {
        return $this->append(self::ARROPTION2, $value);
    }

    /**
     * Clears 'arrOption2' list
     *
     * @return null
     */
    public function clearArrOption2()
    {
        return $this->clear(self::ARROPTION2);
    }

    /**
     * Returns 'arrOption2' list
     *
     * @return integer[]
     */
    public function getArrOption2()
    {
        return $this->get(self::ARROPTION2);
    }

    /**
     * Returns true if 'arrOption2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption2()
    {
        return count($this->get(self::ARROPTION2)) !== 0;
    }

    /**
     * Returns 'arrOption2' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOption2Iterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION2));
    }

    /**
     * Returns element from 'arrOption2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOption2At($offset)
    {
        return $this->get(self::ARROPTION2, $offset);
    }

    /**
     * Returns count of 'arrOption2' list
     *
     * @return int
     */
    public function getArrOption2Count()
    {
        return $this->count(self::ARROPTION2);
    }
}
}