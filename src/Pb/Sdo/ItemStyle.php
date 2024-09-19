<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemStyle message
 */
class ItemStyle extends \ProtobufMessage
{
    /* Field index constants */
    const NSTYLE1 = 1;
    const NSTYLE2 = 2;
    const NSTYLE3 = 3;
    const NLABEL1 = 4;
    const NLABEL2 = 5;
    const NLABEL3 = 6;
    const NMATEL1 = 7;
    const NMATEL2 = 8;
    const NMATEL3 = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSTYLE1 => array(
            'name' => 'nStyle1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTYLE2 => array(
            'name' => 'nStyle2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTYLE3 => array(
            'name' => 'nStyle3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLABEL1 => array(
            'name' => 'nLabel1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLABEL2 => array(
            'name' => 'nLabel2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLABEL3 => array(
            'name' => 'nLabel3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATEL1 => array(
            'name' => 'nMatel1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATEL2 => array(
            'name' => 'nMatel2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATEL3 => array(
            'name' => 'nMatel3',
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
        $this->values[self::NSTYLE1] = null;
        $this->values[self::NSTYLE2] = null;
        $this->values[self::NSTYLE3] = null;
        $this->values[self::NLABEL1] = null;
        $this->values[self::NLABEL2] = null;
        $this->values[self::NLABEL3] = null;
        $this->values[self::NMATEL1] = null;
        $this->values[self::NMATEL2] = null;
        $this->values[self::NMATEL3] = null;
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
     * Sets value of 'nStyle1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStyle1($value)
    {
        return $this->set(self::NSTYLE1, $value);
    }

    /**
     * Returns value of 'nStyle1' property
     *
     * @return integer
     */
    public function getNStyle1()
    {
        $value = $this->get(self::NSTYLE1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStyle1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStyle1()
    {
        return $this->get(self::NSTYLE1) !== null;
    }

    /**
     * Sets value of 'nStyle2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStyle2($value)
    {
        return $this->set(self::NSTYLE2, $value);
    }

    /**
     * Returns value of 'nStyle2' property
     *
     * @return integer
     */
    public function getNStyle2()
    {
        $value = $this->get(self::NSTYLE2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStyle2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStyle2()
    {
        return $this->get(self::NSTYLE2) !== null;
    }

    /**
     * Sets value of 'nStyle3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStyle3($value)
    {
        return $this->set(self::NSTYLE3, $value);
    }

    /**
     * Returns value of 'nStyle3' property
     *
     * @return integer
     */
    public function getNStyle3()
    {
        $value = $this->get(self::NSTYLE3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStyle3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStyle3()
    {
        return $this->get(self::NSTYLE3) !== null;
    }

    /**
     * Sets value of 'nLabel1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLabel1($value)
    {
        return $this->set(self::NLABEL1, $value);
    }

    /**
     * Returns value of 'nLabel1' property
     *
     * @return integer
     */
    public function getNLabel1()
    {
        $value = $this->get(self::NLABEL1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLabel1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLabel1()
    {
        return $this->get(self::NLABEL1) !== null;
    }

    /**
     * Sets value of 'nLabel2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLabel2($value)
    {
        return $this->set(self::NLABEL2, $value);
    }

    /**
     * Returns value of 'nLabel2' property
     *
     * @return integer
     */
    public function getNLabel2()
    {
        $value = $this->get(self::NLABEL2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLabel2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLabel2()
    {
        return $this->get(self::NLABEL2) !== null;
    }

    /**
     * Sets value of 'nLabel3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLabel3($value)
    {
        return $this->set(self::NLABEL3, $value);
    }

    /**
     * Returns value of 'nLabel3' property
     *
     * @return integer
     */
    public function getNLabel3()
    {
        $value = $this->get(self::NLABEL3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLabel3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLabel3()
    {
        return $this->get(self::NLABEL3) !== null;
    }

    /**
     * Sets value of 'nMatel1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatel1($value)
    {
        return $this->set(self::NMATEL1, $value);
    }

    /**
     * Returns value of 'nMatel1' property
     *
     * @return integer
     */
    public function getNMatel1()
    {
        $value = $this->get(self::NMATEL1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatel1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatel1()
    {
        return $this->get(self::NMATEL1) !== null;
    }

    /**
     * Sets value of 'nMatel2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatel2($value)
    {
        return $this->set(self::NMATEL2, $value);
    }

    /**
     * Returns value of 'nMatel2' property
     *
     * @return integer
     */
    public function getNMatel2()
    {
        $value = $this->get(self::NMATEL2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatel2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatel2()
    {
        return $this->get(self::NMATEL2) !== null;
    }

    /**
     * Sets value of 'nMatel3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatel3($value)
    {
        return $this->set(self::NMATEL3, $value);
    }

    /**
     * Returns value of 'nMatel3' property
     *
     * @return integer
     */
    public function getNMatel3()
    {
        $value = $this->get(self::NMATEL3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatel3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatel3()
    {
        return $this->get(self::NMATEL3) !== null;
    }
}
}