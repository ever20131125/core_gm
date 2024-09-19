<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TBGoods message
 */
class TBGoods extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const ID = 2;
    const NUM = 3;
    const BOTTLEINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUM => array(
            'name' => 'num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BOTTLEINFO => array(
            'name' => 'bottleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TBBottleInfo'
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
        $this->values[self::TYPE] = null;
        $this->values[self::ID] = null;
        $this->values[self::NUM] = null;
        $this->values[self::BOTTLEINFO] = null;
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNum($value)
    {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return integer
     */
    public function getNum()
    {
        $value = $this->get(self::NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'num' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNum()
    {
        return $this->get(self::NUM) !== null;
    }

    /**
     * Sets value of 'bottleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TBBottleInfo $value Property value
     *
     * @return null
     */
    public function setBottleInfo(\Xnhd\Core\Pb\Sdo\TBBottleInfo $value=null)
    {
        return $this->set(self::BOTTLEINFO, $value);
    }

    /**
     * Returns value of 'bottleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TBBottleInfo
     */
    public function getBottleInfo()
    {
        return $this->get(self::BOTTLEINFO);
    }

    /**
     * Returns true if 'bottleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBottleInfo()
    {
        return $this->get(self::BOTTLEINFO) !== null;
    }
}
}