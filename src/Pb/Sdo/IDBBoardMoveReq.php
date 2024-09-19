<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBBoardMoveReq message
 */
class IDBBoardMoveReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTHEME = 2;
    const NITEMINSID = 3;
    const NPOSX = 4;
    const NPOSY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEME => array(
            'name' => 'nTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSX => array(
            'name' => 'nPosX',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSY => array(
            'name' => 'nPosY',
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
        $this->values[self::NTHEME] = null;
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NPOSX] = null;
        $this->values[self::NPOSY] = null;
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
     * Sets value of 'nTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTheme($value)
    {
        return $this->set(self::NTHEME, $value);
    }

    /**
     * Returns value of 'nTheme' property
     *
     * @return integer
     */
    public function getNTheme()
    {
        $value = $this->get(self::NTHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTheme()
    {
        return $this->get(self::NTHEME) !== null;
    }

    /**
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
    }

    /**
     * Sets value of 'nPosX' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosX($value)
    {
        return $this->set(self::NPOSX, $value);
    }

    /**
     * Returns value of 'nPosX' property
     *
     * @return integer
     */
    public function getNPosX()
    {
        $value = $this->get(self::NPOSX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosX' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosX()
    {
        return $this->get(self::NPOSX) !== null;
    }

    /**
     * Sets value of 'nPosY' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPosY($value)
    {
        return $this->set(self::NPOSY, $value);
    }

    /**
     * Returns value of 'nPosY' property
     *
     * @return integer
     */
    public function getNPosY()
    {
        $value = $this->get(self::NPOSY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPosY' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPosY()
    {
        return $this->get(self::NPOSY) !== null;
    }
}
}