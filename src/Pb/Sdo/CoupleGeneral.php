<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleGeneral message
 */
class CoupleGeneral extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID1 = 1;
    const NROLEID2 = 2;
    const NRAISEID = 3;
    const STRRAISENAME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID1 => array(
            'name' => 'nRoleID1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID2 => array(
            'name' => 'nRoleID2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRAISEID => array(
            'name' => 'nRaiseID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRRAISENAME => array(
            'name' => 'strRaiseName',
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
        $this->values[self::NROLEID1] = null;
        $this->values[self::NROLEID2] = null;
        $this->values[self::NRAISEID] = null;
        $this->values[self::STRRAISENAME] = null;
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
     * Sets value of 'nRoleID1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID1($value)
    {
        return $this->set(self::NROLEID1, $value);
    }

    /**
     * Returns value of 'nRoleID1' property
     *
     * @return integer
     */
    public function getNRoleID1()
    {
        $value = $this->get(self::NROLEID1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID1()
    {
        return $this->get(self::NROLEID1) !== null;
    }

    /**
     * Sets value of 'nRoleID2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID2($value)
    {
        return $this->set(self::NROLEID2, $value);
    }

    /**
     * Returns value of 'nRoleID2' property
     *
     * @return integer
     */
    public function getNRoleID2()
    {
        $value = $this->get(self::NROLEID2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID2()
    {
        return $this->get(self::NROLEID2) !== null;
    }

    /**
     * Sets value of 'nRaiseID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaiseID($value)
    {
        return $this->set(self::NRAISEID, $value);
    }

    /**
     * Returns value of 'nRaiseID' property
     *
     * @return integer
     */
    public function getNRaiseID()
    {
        $value = $this->get(self::NRAISEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaiseID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaiseID()
    {
        return $this->get(self::NRAISEID) !== null;
    }

    /**
     * Sets value of 'strRaiseName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStrRaiseName($value)
    {
        return $this->set(self::STRRAISENAME, $value);
    }

    /**
     * Returns value of 'strRaiseName' property
     *
     * @return string
     */
    public function getStrRaiseName()
    {
        $value = $this->get(self::STRRAISENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'strRaiseName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrRaiseName()
    {
        return $this->get(self::STRRAISENAME) !== null;
    }
}
}