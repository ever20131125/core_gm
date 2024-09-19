<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BannerUnit message
 */
class BannerUnit extends \ProtobufMessage
{
    /* Field index constants */
    const BANNERID = 1;
    const SZURL1 = 2;
    const SZURL2 = 3;
    const SZBUTTON = 4;
    const NPOSX = 5;
    const NPOSY = 6;
    const NGOTO = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BANNERID => array(
            'name' => 'bannerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZURL1 => array(
            'name' => 'szUrl1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZURL2 => array(
            'name' => 'szUrl2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZBUTTON => array(
            'name' => 'szButton',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::NGOTO => array(
            'name' => 'nGoto',
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
        $this->values[self::BANNERID] = null;
        $this->values[self::SZURL1] = null;
        $this->values[self::SZURL2] = null;
        $this->values[self::SZBUTTON] = null;
        $this->values[self::NPOSX] = null;
        $this->values[self::NPOSY] = null;
        $this->values[self::NGOTO] = null;
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
     * Sets value of 'bannerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBannerID($value)
    {
        return $this->set(self::BANNERID, $value);
    }

    /**
     * Returns value of 'bannerID' property
     *
     * @return integer
     */
    public function getBannerID()
    {
        $value = $this->get(self::BANNERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bannerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBannerID()
    {
        return $this->get(self::BANNERID) !== null;
    }

    /**
     * Sets value of 'szUrl1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzUrl1($value)
    {
        return $this->set(self::SZURL1, $value);
    }

    /**
     * Returns value of 'szUrl1' property
     *
     * @return string
     */
    public function getSzUrl1()
    {
        $value = $this->get(self::SZURL1);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szUrl1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzUrl1()
    {
        return $this->get(self::SZURL1) !== null;
    }

    /**
     * Sets value of 'szUrl2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzUrl2($value)
    {
        return $this->set(self::SZURL2, $value);
    }

    /**
     * Returns value of 'szUrl2' property
     *
     * @return string
     */
    public function getSzUrl2()
    {
        $value = $this->get(self::SZURL2);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szUrl2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzUrl2()
    {
        return $this->get(self::SZURL2) !== null;
    }

    /**
     * Sets value of 'szButton' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzButton($value)
    {
        return $this->set(self::SZBUTTON, $value);
    }

    /**
     * Returns value of 'szButton' property
     *
     * @return string
     */
    public function getSzButton()
    {
        $value = $this->get(self::SZBUTTON);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szButton' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzButton()
    {
        return $this->get(self::SZBUTTON) !== null;
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

    /**
     * Sets value of 'nGoto' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGoto($value)
    {
        return $this->set(self::NGOTO, $value);
    }

    /**
     * Returns value of 'nGoto' property
     *
     * @return integer
     */
    public function getNGoto()
    {
        $value = $this->get(self::NGOTO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGoto' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGoto()
    {
        return $this->get(self::NGOTO) !== null;
    }
}
}