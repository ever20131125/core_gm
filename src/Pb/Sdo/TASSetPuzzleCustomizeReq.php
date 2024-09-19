<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASSetPuzzleCustomizeReq message
 */
class TASSetPuzzleCustomizeReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const THEMEID = 2;
    const TYPE = 3;
    const LOCKED = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PuzzleLockType::enmPuzzleLockType_Invalid,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCKED => array(
            'name' => 'locked',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::THEMEID] = null;
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::LOCKED] = array();
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
     * Appends value to 'locked' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendLocked($value)
    {
        return $this->append(self::LOCKED, $value);
    }

    /**
     * Clears 'locked' list
     *
     * @return null
     */
    public function clearLocked()
    {
        return $this->clear(self::LOCKED);
    }

    /**
     * Returns 'locked' list
     *
     * @return integer[]
     */
    public function getLocked()
    {
        return $this->get(self::LOCKED);
    }

    /**
     * Returns true if 'locked' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLocked()
    {
        return count($this->get(self::LOCKED)) !== 0;
    }

    /**
     * Returns 'locked' iterator
     *
     * @return \ArrayIterator
     */
    public function getLockedIterator()
    {
        return new \ArrayIterator($this->get(self::LOCKED));
    }

    /**
     * Returns element from 'locked' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getLockedAt($offset)
    {
        return $this->get(self::LOCKED, $offset);
    }

    /**
     * Returns count of 'locked' list
     *
     * @return int
     */
    public function getLockedCount()
    {
        return $this->count(self::LOCKED);
    }
}
}