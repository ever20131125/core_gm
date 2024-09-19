<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetPuzzleCollectListReq message
 */
class TASGetPuzzleCollectListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const THEMEID = 2;
    const PARTID = 3;
    const TARGETID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THEMEID => array(
            'name' => 'themeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTID => array(
            'name' => 'partID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGETID => array(
            'name' => 'targetID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::THEMEID] = null;
        $this->values[self::PARTID] = null;
        $this->values[self::TARGETID] = null;
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
     * Sets value of 'themeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThemeID($value)
    {
        return $this->set(self::THEMEID, $value);
    }

    /**
     * Returns value of 'themeID' property
     *
     * @return integer
     */
    public function getThemeID()
    {
        $value = $this->get(self::THEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'themeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThemeID()
    {
        return $this->get(self::THEMEID) !== null;
    }

    /**
     * Sets value of 'partID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPartID($value)
    {
        return $this->set(self::PARTID, $value);
    }

    /**
     * Returns value of 'partID' property
     *
     * @return integer
     */
    public function getPartID()
    {
        $value = $this->get(self::PARTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'partID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPartID()
    {
        return $this->get(self::PARTID) !== null;
    }

    /**
     * Sets value of 'targetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTargetID($value)
    {
        return $this->set(self::TARGETID, $value);
    }

    /**
     * Returns value of 'targetID' property
     *
     * @return integer
     */
    public function getTargetID()
    {
        $value = $this->get(self::TARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'targetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTargetID()
    {
        return $this->get(self::TARGETID) !== null;
    }
}
}