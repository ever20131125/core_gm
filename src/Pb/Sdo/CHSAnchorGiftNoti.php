<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSAnchorGiftNoti message
 */
class CHSAnchorGiftNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ZONEID = 1;
    const ROLEID = 2;
    const ANCHORID = 3;
    const GIFTID = 4;
    const ADDLIKE = 5;
    const NEWLIKE = 6;
    const ANCHOR = 7;
    const BEFFECT = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ZONEID => array(
            'name' => 'zoneid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANCHORID => array(
            'name' => 'anchorid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GIFTID => array(
            'name' => 'giftid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADDLIKE => array(
            'name' => 'addLike',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWLIKE => array(
            'name' => 'newLike',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANCHOR => array(
            'name' => 'anchor',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AnchorLike'
        ),
        self::BEFFECT => array(
            'default' => true,
            'name' => 'bEffect',
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
        $this->values[self::ZONEID] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::ANCHORID] = null;
        $this->values[self::GIFTID] = null;
        $this->values[self::ADDLIKE] = null;
        $this->values[self::NEWLIKE] = null;
        $this->values[self::ANCHOR] = null;
        $this->values[self::BEFFECT] = self::$fields[self::BEFFECT]['default'];
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
     * Sets value of 'zoneid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneid($value)
    {
        return $this->set(self::ZONEID, $value);
    }

    /**
     * Returns value of 'zoneid' property
     *
     * @return integer
     */
    public function getZoneid()
    {
        $value = $this->get(self::ZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneid()
    {
        return $this->get(self::ZONEID) !== null;
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
     * Sets value of 'anchorid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAnchorid($value)
    {
        return $this->set(self::ANCHORID, $value);
    }

    /**
     * Returns value of 'anchorid' property
     *
     * @return string
     */
    public function getAnchorid()
    {
        $value = $this->get(self::ANCHORID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'anchorid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnchorid()
    {
        return $this->get(self::ANCHORID) !== null;
    }

    /**
     * Sets value of 'giftid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGiftid($value)
    {
        return $this->set(self::GIFTID, $value);
    }

    /**
     * Returns value of 'giftid' property
     *
     * @return integer
     */
    public function getGiftid()
    {
        $value = $this->get(self::GIFTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'giftid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGiftid()
    {
        return $this->get(self::GIFTID) !== null;
    }

    /**
     * Sets value of 'addLike' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddLike($value)
    {
        return $this->set(self::ADDLIKE, $value);
    }

    /**
     * Returns value of 'addLike' property
     *
     * @return integer
     */
    public function getAddLike()
    {
        $value = $this->get(self::ADDLIKE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'addLike' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddLike()
    {
        return $this->get(self::ADDLIKE) !== null;
    }

    /**
     * Sets value of 'newLike' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewLike($value)
    {
        return $this->set(self::NEWLIKE, $value);
    }

    /**
     * Returns value of 'newLike' property
     *
     * @return integer
     */
    public function getNewLike()
    {
        $value = $this->get(self::NEWLIKE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newLike' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewLike()
    {
        return $this->get(self::NEWLIKE) !== null;
    }

    /**
     * Sets value of 'anchor' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AnchorLike $value Property value
     *
     * @return null
     */
    public function setAnchor(\Xnhd\Core\Pb\Sdo\AnchorLike $value=null)
    {
        return $this->set(self::ANCHOR, $value);
    }

    /**
     * Returns value of 'anchor' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AnchorLike
     */
    public function getAnchor()
    {
        return $this->get(self::ANCHOR);
    }

    /**
     * Returns true if 'anchor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnchor()
    {
        return $this->get(self::ANCHOR) !== null;
    }

    /**
     * Sets value of 'bEffect' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBEffect($value)
    {
        return $this->set(self::BEFFECT, $value);
    }

    /**
     * Returns value of 'bEffect' property
     *
     * @return boolean
     */
    public function getBEffect()
    {
        $value = $this->get(self::BEFFECT);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bEffect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBEffect()
    {
        return $this->get(self::BEFFECT) !== null;
    }
}
}