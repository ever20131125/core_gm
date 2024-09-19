<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSEditPostReq message
 */
class GDSEditPostReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const POSTTYPE = 2;
    const POWERTYPE = 3;
    const POSTNAME = 4;
    const TIMETICK = 5;
    const STRTOKEN = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSTTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuildPostType::enmGuildPostType_Invalid,
            'name' => 'postType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POWERTYPE => array(
            'name' => 'powerType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POSTNAME => array(
            'name' => 'postName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMETICK => array(
            'name' => 'timetick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRTOKEN => array(
            'name' => 'strtoken',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::POSTTYPE] = self::$fields[self::POSTTYPE]['default'];
        $this->values[self::POWERTYPE] = null;
        $this->values[self::POSTNAME] = null;
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
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
     * Sets value of 'timetick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimetick($value)
    {
        return $this->set(self::TIMETICK, $value);
    }

    /**
     * Returns value of 'timetick' property
     *
     * @return integer
     */
    public function getTimetick()
    {
        $value = $this->get(self::TIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timetick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimetick()
    {
        return $this->get(self::TIMETICK) !== null;
    }

    /**
     * Appends value to 'strtoken' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStrtoken($value)
    {
        return $this->append(self::STRTOKEN, $value);
    }

    /**
     * Clears 'strtoken' list
     *
     * @return null
     */
    public function clearStrtoken()
    {
        return $this->clear(self::STRTOKEN);
    }

    /**
     * Returns 'strtoken' list
     *
     * @return string[]
     */
    public function getStrtoken()
    {
        return $this->get(self::STRTOKEN);
    }

    /**
     * Returns true if 'strtoken' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrtoken()
    {
        return count($this->get(self::STRTOKEN)) !== 0;
    }

    /**
     * Returns 'strtoken' iterator
     *
     * @return \ArrayIterator
     */
    public function getStrtokenIterator()
    {
        return new \ArrayIterator($this->get(self::STRTOKEN));
    }

    /**
     * Returns element from 'strtoken' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStrtokenAt($offset)
    {
        return $this->get(self::STRTOKEN, $offset);
    }

    /**
     * Returns count of 'strtoken' list
     *
     * @return int
     */
    public function getStrtokenCount()
    {
        return $this->count(self::STRTOKEN);
    }
}
}