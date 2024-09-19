<?php
/**
 * Auto generated from event.proto at 2021-08-23 09:18:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CompetitionEvent message
 */
class CompetitionEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const TYPE = 2;
    const ISWIN = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FeteEventType::enmFeteEventType_GameEnd,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISWIN => array(
            'name' => 'isWin',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::ISWIN] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'isWin' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsWin($value)
    {
        return $this->set(self::ISWIN, $value);
    }

    /**
     * Returns value of 'isWin' property
     *
     * @return boolean
     */
    public function getIsWin()
    {
        $value = $this->get(self::ISWIN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isWin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsWin()
    {
        return $this->get(self::ISWIN) !== null;
    }
}
}