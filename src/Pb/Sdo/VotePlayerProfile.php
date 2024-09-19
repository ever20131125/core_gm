<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * VotePlayerProfile message
 */
class VotePlayerProfile extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const PICTUREURL = 2;
    const PICTUREID = 3;
    const LIKES = 4;
    const STATE = 5;
    const NAME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PICTUREURL => array(
            'name' => 'pictureURL',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PICTUREID => array(
            'name' => 'pictureID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LIKES => array(
            'name' => 'likes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
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
        $this->values[self::PICTUREURL] = null;
        $this->values[self::PICTUREID] = null;
        $this->values[self::LIKES] = null;
        $this->values[self::STATE] = null;
        $this->values[self::NAME] = null;
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
     * Sets value of 'pictureURL' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPictureURL($value)
    {
        return $this->set(self::PICTUREURL, $value);
    }

    /**
     * Returns value of 'pictureURL' property
     *
     * @return string
     */
    public function getPictureURL()
    {
        $value = $this->get(self::PICTUREURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'pictureURL' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPictureURL()
    {
        return $this->get(self::PICTUREURL) !== null;
    }

    /**
     * Sets value of 'pictureID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPictureID($value)
    {
        return $this->set(self::PICTUREID, $value);
    }

    /**
     * Returns value of 'pictureID' property
     *
     * @return string
     */
    public function getPictureID()
    {
        $value = $this->get(self::PICTUREID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'pictureID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPictureID()
    {
        return $this->get(self::PICTUREID) !== null;
    }

    /**
     * Sets value of 'likes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLikes($value)
    {
        return $this->set(self::LIKES, $value);
    }

    /**
     * Returns value of 'likes' property
     *
     * @return integer
     */
    public function getLikes()
    {
        $value = $this->get(self::LIKES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'likes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLikes()
    {
        return $this->get(self::LIKES) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }
}
}