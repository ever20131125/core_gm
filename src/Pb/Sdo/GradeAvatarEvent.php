<?php
/**
 * Auto generated from event.proto at 2021-08-23 09:18:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GradeAvatarEvent message
 */
class GradeAvatarEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const NID = 3;
    const STAVATARINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NID => array(
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAVATARINFO => array(
            'name' => 'stAvatarInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarInfo'
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
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::NID] = null;
        $this->values[self::STAVATARINFO] = null;
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'nID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNID($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nID' property
     *
     * @return integer
     */
    public function getNID()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNID()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Sets value of 'stAvatarInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarInfo $value Property value
     *
     * @return null
     */
    public function setStAvatarInfo(\Xnhd\Core\Pb\Sdo\AvatarInfo $value=null)
    {
        return $this->set(self::STAVATARINFO, $value);
    }

    /**
     * Returns value of 'stAvatarInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarInfo
     */
    public function getStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO);
    }

    /**
     * Returns true if 'stAvatarInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarInfo()
    {
        return $this->get(self::STAVATARINFO) !== null;
    }
}
}