<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AlbumInfo message
 */
class AlbumInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NALBUMID = 1;
    const NWORKCOUNT = 2;
    const NPASSCOUNT = 3;
    const SZNAME = 4;
    const NSTARCOUNT = 5;
    const NHIGHSTAGE1 = 6;
    const NHIGHSTAGE2 = 7;
    const NHIGHSTAGE3 = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NALBUMID => array(
            'name' => 'nAlbumID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWORKCOUNT => array(
            'name' => 'nWorkCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPASSCOUNT => array(
            'name' => 'nPassCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZNAME => array(
            'name' => 'szName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NSTARCOUNT => array(
            'name' => 'nStarCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHIGHSTAGE1 => array(
            'name' => 'nHighStage1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHIGHSTAGE2 => array(
            'name' => 'nHighStage2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHIGHSTAGE3 => array(
            'name' => 'nHighStage3',
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
        $this->values[self::NALBUMID] = null;
        $this->values[self::NWORKCOUNT] = null;
        $this->values[self::NPASSCOUNT] = null;
        $this->values[self::SZNAME] = null;
        $this->values[self::NSTARCOUNT] = null;
        $this->values[self::NHIGHSTAGE1] = null;
        $this->values[self::NHIGHSTAGE2] = null;
        $this->values[self::NHIGHSTAGE3] = null;
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
     * Sets value of 'nAlbumID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAlbumID($value)
    {
        return $this->set(self::NALBUMID, $value);
    }

    /**
     * Returns value of 'nAlbumID' property
     *
     * @return integer
     */
    public function getNAlbumID()
    {
        $value = $this->get(self::NALBUMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAlbumID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAlbumID()
    {
        return $this->get(self::NALBUMID) !== null;
    }

    /**
     * Sets value of 'nWorkCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWorkCount($value)
    {
        return $this->set(self::NWORKCOUNT, $value);
    }

    /**
     * Returns value of 'nWorkCount' property
     *
     * @return integer
     */
    public function getNWorkCount()
    {
        $value = $this->get(self::NWORKCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWorkCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWorkCount()
    {
        return $this->get(self::NWORKCOUNT) !== null;
    }

    /**
     * Sets value of 'nPassCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPassCount($value)
    {
        return $this->set(self::NPASSCOUNT, $value);
    }

    /**
     * Returns value of 'nPassCount' property
     *
     * @return integer
     */
    public function getNPassCount()
    {
        $value = $this->get(self::NPASSCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPassCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPassCount()
    {
        return $this->get(self::NPASSCOUNT) !== null;
    }

    /**
     * Sets value of 'szName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzName($value)
    {
        return $this->set(self::SZNAME, $value);
    }

    /**
     * Returns value of 'szName' property
     *
     * @return string
     */
    public function getSzName()
    {
        $value = $this->get(self::SZNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzName()
    {
        return $this->get(self::SZNAME) !== null;
    }

    /**
     * Sets value of 'nStarCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStarCount($value)
    {
        return $this->set(self::NSTARCOUNT, $value);
    }

    /**
     * Returns value of 'nStarCount' property
     *
     * @return integer
     */
    public function getNStarCount()
    {
        $value = $this->get(self::NSTARCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStarCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStarCount()
    {
        return $this->get(self::NSTARCOUNT) !== null;
    }

    /**
     * Sets value of 'nHighStage1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHighStage1($value)
    {
        return $this->set(self::NHIGHSTAGE1, $value);
    }

    /**
     * Returns value of 'nHighStage1' property
     *
     * @return integer
     */
    public function getNHighStage1()
    {
        $value = $this->get(self::NHIGHSTAGE1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHighStage1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHighStage1()
    {
        return $this->get(self::NHIGHSTAGE1) !== null;
    }

    /**
     * Sets value of 'nHighStage2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHighStage2($value)
    {
        return $this->set(self::NHIGHSTAGE2, $value);
    }

    /**
     * Returns value of 'nHighStage2' property
     *
     * @return integer
     */
    public function getNHighStage2()
    {
        $value = $this->get(self::NHIGHSTAGE2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHighStage2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHighStage2()
    {
        return $this->get(self::NHIGHSTAGE2) !== null;
    }

    /**
     * Sets value of 'nHighStage3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHighStage3($value)
    {
        return $this->set(self::NHIGHSTAGE3, $value);
    }

    /**
     * Returns value of 'nHighStage3' property
     *
     * @return integer
     */
    public function getNHighStage3()
    {
        $value = $this->get(self::NHIGHSTAGE3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHighStage3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHighStage3()
    {
        return $this->get(self::NHIGHSTAGE3) !== null;
    }
}
}