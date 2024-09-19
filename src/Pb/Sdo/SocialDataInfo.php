<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SocialDataInfo message
 */
class SocialDataInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const FRIENDID = 2;
    const SOCIALDATAUNIT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOCIALDATAUNIT => array(
            'name' => 'socialDataUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\SocialDataUnit'
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
        $this->values[self::FRIENDID] = null;
        $this->values[self::SOCIALDATAUNIT] = array();
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
     * Sets value of 'friendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendID($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendID' property
     *
     * @return integer
     */
    public function getFriendID()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Appends value to 'socialDataUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\SocialDataUnit $value Value to append
     *
     * @return null
     */
    public function appendSocialDataUnit(\Xnhd\Core\Pb\Sdo\SocialDataUnit $value)
    {
        return $this->append(self::SOCIALDATAUNIT, $value);
    }

    /**
     * Clears 'socialDataUnit' list
     *
     * @return null
     */
    public function clearSocialDataUnit()
    {
        return $this->clear(self::SOCIALDATAUNIT);
    }

    /**
     * Returns 'socialDataUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\SocialDataUnit[]
     */
    public function getSocialDataUnit()
    {
        return $this->get(self::SOCIALDATAUNIT);
    }

    /**
     * Returns true if 'socialDataUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSocialDataUnit()
    {
        return count($this->get(self::SOCIALDATAUNIT)) !== 0;
    }

    /**
     * Returns 'socialDataUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getSocialDataUnitIterator()
    {
        return new \ArrayIterator($this->get(self::SOCIALDATAUNIT));
    }

    /**
     * Returns element from 'socialDataUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\SocialDataUnit
     */
    public function getSocialDataUnitAt($offset)
    {
        return $this->get(self::SOCIALDATAUNIT, $offset);
    }

    /**
     * Returns count of 'socialDataUnit' list
     *
     * @return int
     */
    public function getSocialDataUnitCount()
    {
        return $this->count(self::SOCIALDATAUNIT);
    }
}
}