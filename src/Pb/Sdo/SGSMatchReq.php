<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSMatchReq message
 */
class SGSMatchReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const GAMEPLAY = 2;
    const SOURCE = 3;
    const MINVALUE = 4;
    const MAXVALUE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMEPLAY => array(
            'default' => \Xnhd\Core\Pb\Sdo\GamePlay::enmGamePlay_DROPBALL,
            'name' => 'gamePlay',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MINVALUE => array(
            'name' => 'minValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXVALUE => array(
            'name' => 'maxValue',
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
        $this->values[self::GAMEPLAY] = self::$fields[self::GAMEPLAY]['default'];
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::MINVALUE] = null;
        $this->values[self::MAXVALUE] = null;
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
     * Sets value of 'gamePlay' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamePlay($value)
    {
        return $this->set(self::GAMEPLAY, $value);
    }

    /**
     * Returns value of 'gamePlay' property
     *
     * @return integer
     */
    public function getGamePlay()
    {
        $value = $this->get(self::GAMEPLAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGamePlay()
    {
        return $this->get(self::GAMEPLAY) !== null;
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
     * Sets value of 'minValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinValue($value)
    {
        return $this->set(self::MINVALUE, $value);
    }

    /**
     * Returns value of 'minValue' property
     *
     * @return integer
     */
    public function getMinValue()
    {
        $value = $this->get(self::MINVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'minValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMinValue()
    {
        return $this->get(self::MINVALUE) !== null;
    }

    /**
     * Sets value of 'maxValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxValue($value)
    {
        return $this->set(self::MAXVALUE, $value);
    }

    /**
     * Returns value of 'maxValue' property
     *
     * @return integer
     */
    public function getMaxValue()
    {
        $value = $this->get(self::MAXVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxValue()
    {
        return $this->get(self::MAXVALUE) !== null;
    }
}
}