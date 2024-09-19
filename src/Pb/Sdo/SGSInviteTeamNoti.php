<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSInviteTeamNoti message
 */
class SGSInviteTeamNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NINVITEID = 1;
    const STROLEPUBLICINFO = 2;
    const SOURCE = 3;
    const ARROPTION = 4;
    const NTARGETID = 5;
    const NPOSID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NINVITEID => array(
            'name' => 'nInviteID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPUBLICINFO => array(
            'name' => 'stRolePublicInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSID => array(
            'name' => 'nPosID',
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
        $this->values[self::NINVITEID] = null;
        $this->values[self::STROLEPUBLICINFO] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::ARROPTION] = array();
        $this->values[self::NTARGETID] = null;
        $this->values[self::NPOSID] = null;
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
     * Sets value of 'nInviteID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNInviteID($value)
    {
        return $this->set(self::NINVITEID, $value);
    }

    /**
     * Returns value of 'nInviteID' property
     *
     * @return integer
     */
    public function getNInviteID()
    {
        $value = $this->get(self::NINVITEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nInviteID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNInviteID()
    {
        return $this->get(self::NINVITEID) !== null;
    }

    /**
     * Sets value of 'stRolePublicInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO);
    }

    /**
     * Returns true if 'stRolePublicInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo()
    {
        return $this->get(self::STROLEPUBLICINFO) !== null;
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
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }

    /**
     * Sets value of 'nPosID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosID($value)
    {
        return $this->set(self::NPOSID, $value);
    }

    /**
     * Returns value of 'nPosID' property
     *
     * @return integer
     */
    public function getNPosID()
    {
        $value = $this->get(self::NPOSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosID()
    {
        return $this->get(self::NPOSID) !== null;
    }
}
}