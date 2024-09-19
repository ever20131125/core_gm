<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASProcPuzzleExchangeReq message
 */
class TASProcPuzzleExchangeReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const OTHERID = 2;
    const PARTID = 3;
    const OTHERPARTID = 4;
    const THEMEID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OTHERID => array(
            'name' => 'OtherID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARTID => array(
            'name' => 'partID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OTHERPARTID => array(
            'name' => 'otherPartID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THEMEID => array(
            'name' => 'themeID',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::OTHERID] = null;
        $this->values[self::PARTID] = null;
        $this->values[self::OTHERPARTID] = null;
        $this->values[self::THEMEID] = null;
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
     * Sets value of 'OtherID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOtherID($value)
    {
        return $this->set(self::OTHERID, $value);
    }

    /**
     * Returns value of 'OtherID' property
     *
     * @return integer
     */
    public function getOtherID()
    {
        $value = $this->get(self::OTHERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'OtherID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOtherID()
    {
        return $this->get(self::OTHERID) !== null;
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
     * Sets value of 'otherPartID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOtherPartID($value)
    {
        return $this->set(self::OTHERPARTID, $value);
    }

    /**
     * Returns value of 'otherPartID' property
     *
     * @return integer
     */
    public function getOtherPartID()
    {
        $value = $this->get(self::OTHERPARTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'otherPartID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOtherPartID()
    {
        return $this->get(self::OTHERPARTID) !== null;
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
}
}