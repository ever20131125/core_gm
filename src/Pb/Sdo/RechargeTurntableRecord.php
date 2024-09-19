<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RechargeTurntableRecord message
 */
class RechargeTurntableRecord extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STRNAME = 2;
    const STPRIZE = 3;
    const NTIME = 4;
    const ISBIGPRIZE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRNAME => array(
            'name' => 'strName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STPRIZE => array(
            'name' => 'stPrize',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NTIME => array(
            'name' => 'nTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISBIGPRIZE => array(
            'name' => 'isBigPrize',
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
        $this->values[self::STRNAME] = null;
        $this->values[self::STPRIZE] = null;
        $this->values[self::NTIME] = null;
        $this->values[self::ISBIGPRIZE] = null;
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
     * Sets value of 'nRoleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleId($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleId' property
     *
     * @return integer
     */
    public function getNRoleId()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleId()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'strName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStrName($value)
    {
        return $this->set(self::STRNAME, $value);
    }

    /**
     * Returns value of 'strName' property
     *
     * @return string
     */
    public function getStrName()
    {
        $value = $this->get(self::STRNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'strName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrName()
    {
        return $this->get(self::STRNAME) !== null;
    }

    /**
     * Sets value of 'stPrize' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setStPrize(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::STPRIZE, $value);
    }

    /**
     * Returns value of 'stPrize' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getStPrize()
    {
        return $this->get(self::STPRIZE);
    }

    /**
     * Returns true if 'stPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPrize()
    {
        return $this->get(self::STPRIZE) !== null;
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }

    /**
     * Sets value of 'isBigPrize' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsBigPrize($value)
    {
        return $this->set(self::ISBIGPRIZE, $value);
    }

    /**
     * Returns value of 'isBigPrize' property
     *
     * @return boolean
     */
    public function getIsBigPrize()
    {
        $value = $this->get(self::ISBIGPRIZE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isBigPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsBigPrize()
    {
        return $this->get(self::ISBIGPRIZE) !== null;
    }
}
}