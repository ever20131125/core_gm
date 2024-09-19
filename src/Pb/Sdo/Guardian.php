<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * Guardian message
 */
class Guardian extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const EXPR = 2;
    const LEVEL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'ID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXPR => array(
            'name' => 'Expr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'Level',
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
        $this->values[self::ID] = null;
        $this->values[self::EXPR] = null;
        $this->values[self::LEVEL] = null;
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
     * Sets value of 'ID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setID($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'ID' property
     *
     * @return integer
     */
    public function getID()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasID()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'Expr' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpr($value)
    {
        return $this->set(self::EXPR, $value);
    }

    /**
     * Returns value of 'Expr' property
     *
     * @return integer
     */
    public function getExpr()
    {
        $value = $this->get(self::EXPR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Expr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExpr()
    {
        return $this->get(self::EXPR) !== null;
    }

    /**
     * Sets value of 'Level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'Level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }
}
}