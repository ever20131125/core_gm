<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningNoti message
 */
class RLSBeckoningNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NTARGETROLEID = 1;
    const ARRAVATAR = 2;
    const NISOVERFLOW = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTARGETROLEID => array(
            'name' => 'nTargetRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRAVATAR => array(
            'name' => 'arrAvatar',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NISOVERFLOW => array(
            'name' => 'nIsOverFlow',
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
        $this->values[self::NTARGETROLEID] = null;
        $this->values[self::ARRAVATAR] = array();
        $this->values[self::NISOVERFLOW] = null;
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
     * Sets value of 'nTargetRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetRoleID($value)
    {
        return $this->set(self::NTARGETROLEID, $value);
    }

    /**
     * Returns value of 'nTargetRoleID' property
     *
     * @return integer
     */
    public function getNTargetRoleID()
    {
        $value = $this->get(self::NTARGETROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetRoleID()
    {
        return $this->get(self::NTARGETROLEID) !== null;
    }

    /**
     * Appends value to 'arrAvatar' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAvatar($value)
    {
        return $this->append(self::ARRAVATAR, $value);
    }

    /**
     * Clears 'arrAvatar' list
     *
     * @return null
     */
    public function clearArrAvatar()
    {
        return $this->clear(self::ARRAVATAR);
    }

    /**
     * Returns 'arrAvatar' list
     *
     * @return integer[]
     */
    public function getArrAvatar()
    {
        return $this->get(self::ARRAVATAR);
    }

    /**
     * Returns true if 'arrAvatar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAvatar()
    {
        return count($this->get(self::ARRAVATAR)) !== 0;
    }

    /**
     * Returns 'arrAvatar' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAvatarIterator()
    {
        return new \ArrayIterator($this->get(self::ARRAVATAR));
    }

    /**
     * Returns element from 'arrAvatar' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAvatarAt($offset)
    {
        return $this->get(self::ARRAVATAR, $offset);
    }

    /**
     * Returns count of 'arrAvatar' list
     *
     * @return int
     */
    public function getArrAvatarCount()
    {
        return $this->count(self::ARRAVATAR);
    }

    /**
     * Sets value of 'nIsOverFlow' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIsOverFlow($value)
    {
        return $this->set(self::NISOVERFLOW, $value);
    }

    /**
     * Returns value of 'nIsOverFlow' property
     *
     * @return integer
     */
    public function getNIsOverFlow()
    {
        $value = $this->get(self::NISOVERFLOW);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIsOverFlow' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIsOverFlow()
    {
        return $this->get(self::NISOVERFLOW) !== null;
    }
}
}