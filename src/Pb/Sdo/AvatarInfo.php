<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AvatarInfo message
 */
class AvatarInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const AVATARTYPE = 2;
    const ARRAVATARITEM = 3;
    const NSCORE = 4;
    const GRADE = 5;
    const BRENT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AVATARTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\AvatarType::enmAvatarType_Normal,
            'name' => 'avatarType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRAVATARITEM => array(
            'name' => 'arrAvatarItem',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarItem'
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GRADE => array(
            'name' => 'grade',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BRENT => array(
            'name' => 'bRent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::AVATARTYPE] = self::$fields[self::AVATARTYPE]['default'];
        $this->values[self::ARRAVATARITEM] = array();
        $this->values[self::NSCORE] = null;
        $this->values[self::GRADE] = null;
        $this->values[self::BRENT] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'avatarType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAvatarType($value)
    {
        return $this->set(self::AVATARTYPE, $value);
    }

    /**
     * Returns value of 'avatarType' property
     *
     * @return integer
     */
    public function getAvatarType()
    {
        $value = $this->get(self::AVATARTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'avatarType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAvatarType()
    {
        return $this->get(self::AVATARTYPE) !== null;
    }

    /**
     * Appends value to 'arrAvatarItem' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarItem $value Value to append
     *
     * @return null
     */
    public function appendArrAvatarItem(\Xnhd\Core\Pb\Sdo\AvatarItem $value)
    {
        return $this->append(self::ARRAVATARITEM, $value);
    }

    /**
     * Clears 'arrAvatarItem' list
     *
     * @return null
     */
    public function clearArrAvatarItem()
    {
        return $this->clear(self::ARRAVATARITEM);
    }

    /**
     * Returns 'arrAvatarItem' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarItem[]
     */
    public function getArrAvatarItem()
    {
        return $this->get(self::ARRAVATARITEM);
    }

    /**
     * Returns true if 'arrAvatarItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAvatarItem()
    {
        return count($this->get(self::ARRAVATARITEM)) !== 0;
    }

    /**
     * Returns 'arrAvatarItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAvatarItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRAVATARITEM));
    }

    /**
     * Returns element from 'arrAvatarItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarItem
     */
    public function getArrAvatarItemAt($offset)
    {
        return $this->get(self::ARRAVATARITEM, $offset);
    }

    /**
     * Returns count of 'arrAvatarItem' list
     *
     * @return int
     */
    public function getArrAvatarItemCount()
    {
        return $this->count(self::ARRAVATARITEM);
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'grade' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGrade($value)
    {
        return $this->set(self::GRADE, $value);
    }

    /**
     * Returns value of 'grade' property
     *
     * @return integer
     */
    public function getGrade()
    {
        $value = $this->get(self::GRADE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'grade' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGrade()
    {
        return $this->get(self::GRADE) !== null;
    }

    /**
     * Sets value of 'bRent' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBRent($value)
    {
        return $this->set(self::BRENT, $value);
    }

    /**
     * Returns value of 'bRent' property
     *
     * @return boolean
     */
    public function getBRent()
    {
        $value = $this->get(self::BRENT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bRent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBRent()
    {
        return $this->get(self::BRENT) !== null;
    }
}
}