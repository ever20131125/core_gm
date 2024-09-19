<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FriendGroupInfo message
 */
class FriendGroupInfo extends \ProtobufMessage
{
    /* Field index constants */
    const GROUPID = 1;
    const GROUPNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GROUPID => array(
            'name' => 'groupID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPNAME => array(
            'name' => 'groupName',
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
        $this->values[self::GROUPID] = null;
        $this->values[self::GROUPNAME] = null;
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
     * Sets value of 'groupID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupID($value)
    {
        return $this->set(self::GROUPID, $value);
    }

    /**
     * Returns value of 'groupID' property
     *
     * @return integer
     */
    public function getGroupID()
    {
        $value = $this->get(self::GROUPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupID()
    {
        return $this->get(self::GROUPID) !== null;
    }

    /**
     * Sets value of 'groupName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGroupName($value)
    {
        return $this->set(self::GROUPNAME, $value);
    }

    /**
     * Returns value of 'groupName' property
     *
     * @return string
     */
    public function getGroupName()
    {
        $value = $this->get(self::GROUPNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'groupName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupName()
    {
        return $this->get(self::GROUPNAME) !== null;
    }
}
}