<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BarrageInfo message
 */
class BarrageInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NCOLOR = 1;
    const NID = 2;
    const SZCONTENT = 3;
    const NTIMETICK = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCOLOR => array(
            'name' => 'nColor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NID => array(
            'default' => -1,
            'name' => 'nID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCONTENT => array(
            'name' => 'szContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NTIMETICK => array(
            'name' => 'nTimeTick',
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
        $this->values[self::NCOLOR] = null;
        $this->values[self::NID] = self::$fields[self::NID]['default'];
        $this->values[self::SZCONTENT] = null;
        $this->values[self::NTIMETICK] = null;
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
     * Sets value of 'nColor' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNColor($value)
    {
        return $this->set(self::NCOLOR, $value);
    }

    /**
     * Returns value of 'nColor' property
     *
     * @return integer
     */
    public function getNColor()
    {
        $value = $this->get(self::NCOLOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nColor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNColor()
    {
        return $this->get(self::NCOLOR) !== null;
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
     * Sets value of 'szContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzContent($value)
    {
        return $this->set(self::SZCONTENT, $value);
    }

    /**
     * Returns value of 'szContent' property
     *
     * @return string
     */
    public function getSzContent()
    {
        $value = $this->get(self::SZCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzContent()
    {
        return $this->get(self::SZCONTENT) !== null;
    }

    /**
     * Sets value of 'nTimeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeTick($value)
    {
        return $this->set(self::NTIMETICK, $value);
    }

    /**
     * Returns value of 'nTimeTick' property
     *
     * @return integer
     */
    public function getNTimeTick()
    {
        $value = $this->get(self::NTIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeTick()
    {
        return $this->get(self::NTIMETICK) !== null;
    }
}
}