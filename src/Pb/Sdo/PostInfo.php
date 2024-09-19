<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PostInfo message
 */
class PostInfo extends \ProtobufMessage
{
    /* Field index constants */
    const POSTTYPE = 1;
    const POSTNAME = 2;
    const POWERTYPE = 3;
    const MEMBERCOUNT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::POSTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildPostType::enmGuildPostType_Invalid,
            'name' => 'postType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSTNAME => array(
            'name' => 'postName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::POWERTYPE => array(
            'name' => 'powerType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEMBERCOUNT => array(
            'name' => 'memberCount',
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
        $this->values[self::POSTTYPE] = self::$fields[self::POSTTYPE]['default'];
        $this->values[self::POSTNAME] = null;
        $this->values[self::POWERTYPE] = null;
        $this->values[self::MEMBERCOUNT] = null;
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
     * Sets value of 'postType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPostType($value)
    {
        return $this->set(self::POSTTYPE, $value);
    }

    /**
     * Returns value of 'postType' property
     *
     * @return integer
     */
    public function getPostType()
    {
        $value = $this->get(self::POSTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'postType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostType()
    {
        return $this->get(self::POSTTYPE) !== null;
    }

    /**
     * Sets value of 'postName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPostName($value)
    {
        return $this->set(self::POSTNAME, $value);
    }

    /**
     * Returns value of 'postName' property
     *
     * @return string
     */
    public function getPostName()
    {
        $value = $this->get(self::POSTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'postName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostName()
    {
        return $this->get(self::POSTNAME) !== null;
    }

    /**
     * Sets value of 'powerType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPowerType($value)
    {
        return $this->set(self::POWERTYPE, $value);
    }

    /**
     * Returns value of 'powerType' property
     *
     * @return integer
     */
    public function getPowerType()
    {
        $value = $this->get(self::POWERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'powerType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPowerType()
    {
        return $this->get(self::POWERTYPE) !== null;
    }

    /**
     * Sets value of 'memberCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemberCount($value)
    {
        return $this->set(self::MEMBERCOUNT, $value);
    }

    /**
     * Returns value of 'memberCount' property
     *
     * @return integer
     */
    public function getMemberCount()
    {
        $value = $this->get(self::MEMBERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'memberCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberCount()
    {
        return $this->get(self::MEMBERCOUNT) !== null;
    }
}
}