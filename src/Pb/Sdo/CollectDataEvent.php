<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CollectDataEvent message
 */
class CollectDataEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NSTORYSTAR = 2;
    const NFRIEND = 3;
    const NGUILDDONATE = 4;
    const NWEDDINGBEAUTYVALUE = 5;
    const NWUYI = 6;
    const NFOREVERCLOTHNUM = 7;
    const NPURPLEFOREVERCLOTHNUM = 8;
    const NORANGEFOREVERCLOTHNUM = 9;
    const NFOREVERWINGNUM = 10;
    const NFOREVERFACENUM = 11;
    const NFOREVERGLASSNUM = 12;
    const NFOREVERMASKNUM = 13;
    const NMARRYDAYS = 14;
    const NLOVERID = 15;
    const ISMARRIED = 16;
    const NTOTALSPENDMONEY = 17;
    const NTOTALSPENDSCORE = 18;
    const NFOREVERCLOTHADD = 19;
    const NPURPLEFOREVERCLOTHADD = 20;
    const NORANGEFOREVERCLOTHADD = 21;
    const NFOREVERWINGADD = 22;
    const NFOREVERFACEADD = 23;
    const NFOREVERGLASSADD = 24;
    const NFOREVERMASKADD = 25;
    const NMARRYNUM = 26;
    const NNORMALMARRYNUM = 27;
    const NNOBLEMARRYNUM = 28;
    const NLUXURYMARRYNUM = 29;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTORYSTAR => array(
            'name' => 'nStoryStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFRIEND => array(
            'name' => 'nFriend',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGUILDDONATE => array(
            'name' => 'nGuildDonate',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWEDDINGBEAUTYVALUE => array(
            'name' => 'nWeddingBeautyValue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWUYI => array(
            'name' => 'nWuyi',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERCLOTHNUM => array(
            'name' => 'nForeverClothNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPURPLEFOREVERCLOTHNUM => array(
            'name' => 'nPurpleForeverClothNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NORANGEFOREVERCLOTHNUM => array(
            'name' => 'nOrangeForeverClothNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERWINGNUM => array(
            'name' => 'nForeverWingNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERFACENUM => array(
            'name' => 'nForeverFaceNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERGLASSNUM => array(
            'name' => 'nForeverGlassNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERMASKNUM => array(
            'name' => 'nForeverMaskNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMARRYDAYS => array(
            'name' => 'nMarryDays',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVERID => array(
            'name' => 'nLoverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISMARRIED => array(
            'name' => 'isMarried',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NTOTALSPENDMONEY => array(
            'name' => 'nTotalSpendMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALSPENDSCORE => array(
            'name' => 'nTotalSpendScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERCLOTHADD => array(
            'name' => 'nForeverClothAdd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPURPLEFOREVERCLOTHADD => array(
            'name' => 'nPurpleForeverClothAdd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NORANGEFOREVERCLOTHADD => array(
            'name' => 'nOrangeForeverClothAdd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERWINGADD => array(
            'name' => 'nForeverWingAdd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERFACEADD => array(
            'name' => 'nForeverFaceAdd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERGLASSADD => array(
            'name' => 'nForeverGlassAdd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFOREVERMASKADD => array(
            'name' => 'nForeverMaskAdd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMARRYNUM => array(
            'name' => 'nMarryNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNORMALMARRYNUM => array(
            'name' => 'nNormalMarryNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNOBLEMARRYNUM => array(
            'name' => 'nNobleMarryNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURYMARRYNUM => array(
            'name' => 'nLuxuryMarryNum',
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
        $this->values[self::NSTORYSTAR] = null;
        $this->values[self::NFRIEND] = null;
        $this->values[self::NGUILDDONATE] = null;
        $this->values[self::NWEDDINGBEAUTYVALUE] = null;
        $this->values[self::NWUYI] = null;
        $this->values[self::NFOREVERCLOTHNUM] = null;
        $this->values[self::NPURPLEFOREVERCLOTHNUM] = null;
        $this->values[self::NORANGEFOREVERCLOTHNUM] = null;
        $this->values[self::NFOREVERWINGNUM] = null;
        $this->values[self::NFOREVERFACENUM] = null;
        $this->values[self::NFOREVERGLASSNUM] = null;
        $this->values[self::NFOREVERMASKNUM] = null;
        $this->values[self::NMARRYDAYS] = null;
        $this->values[self::NLOVERID] = null;
        $this->values[self::ISMARRIED] = null;
        $this->values[self::NTOTALSPENDMONEY] = null;
        $this->values[self::NTOTALSPENDSCORE] = null;
        $this->values[self::NFOREVERCLOTHADD] = null;
        $this->values[self::NPURPLEFOREVERCLOTHADD] = null;
        $this->values[self::NORANGEFOREVERCLOTHADD] = null;
        $this->values[self::NFOREVERWINGADD] = null;
        $this->values[self::NFOREVERFACEADD] = null;
        $this->values[self::NFOREVERGLASSADD] = null;
        $this->values[self::NFOREVERMASKADD] = null;
        $this->values[self::NMARRYNUM] = null;
        $this->values[self::NNORMALMARRYNUM] = null;
        $this->values[self::NNOBLEMARRYNUM] = null;
        $this->values[self::NLUXURYMARRYNUM] = null;
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
     * Sets value of 'nRoleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleid($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleid' property
     *
     * @return integer
     */
    public function getNRoleid()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleid()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nStoryStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStoryStar($value)
    {
        return $this->set(self::NSTORYSTAR, $value);
    }

    /**
     * Returns value of 'nStoryStar' property
     *
     * @return integer
     */
    public function getNStoryStar()
    {
        $value = $this->get(self::NSTORYSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStoryStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStoryStar()
    {
        return $this->get(self::NSTORYSTAR) !== null;
    }

    /**
     * Sets value of 'nFriend' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFriend($value)
    {
        return $this->set(self::NFRIEND, $value);
    }

    /**
     * Returns value of 'nFriend' property
     *
     * @return integer
     */
    public function getNFriend()
    {
        $value = $this->get(self::NFRIEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFriend' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFriend()
    {
        return $this->get(self::NFRIEND) !== null;
    }

    /**
     * Sets value of 'nGuildDonate' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuildDonate($value)
    {
        return $this->set(self::NGUILDDONATE, $value);
    }

    /**
     * Returns value of 'nGuildDonate' property
     *
     * @return integer
     */
    public function getNGuildDonate()
    {
        $value = $this->get(self::NGUILDDONATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuildDonate' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuildDonate()
    {
        return $this->get(self::NGUILDDONATE) !== null;
    }

    /**
     * Sets value of 'nWeddingBeautyValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingBeautyValue($value)
    {
        return $this->set(self::NWEDDINGBEAUTYVALUE, $value);
    }

    /**
     * Returns value of 'nWeddingBeautyValue' property
     *
     * @return integer
     */
    public function getNWeddingBeautyValue()
    {
        $value = $this->get(self::NWEDDINGBEAUTYVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingBeautyValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingBeautyValue()
    {
        return $this->get(self::NWEDDINGBEAUTYVALUE) !== null;
    }

    /**
     * Sets value of 'nWuyi' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWuyi($value)
    {
        return $this->set(self::NWUYI, $value);
    }

    /**
     * Returns value of 'nWuyi' property
     *
     * @return integer
     */
    public function getNWuyi()
    {
        $value = $this->get(self::NWUYI);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWuyi' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWuyi()
    {
        return $this->get(self::NWUYI) !== null;
    }

    /**
     * Sets value of 'nForeverClothNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverClothNum($value)
    {
        return $this->set(self::NFOREVERCLOTHNUM, $value);
    }

    /**
     * Returns value of 'nForeverClothNum' property
     *
     * @return integer
     */
    public function getNForeverClothNum()
    {
        $value = $this->get(self::NFOREVERCLOTHNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverClothNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverClothNum()
    {
        return $this->get(self::NFOREVERCLOTHNUM) !== null;
    }

    /**
     * Sets value of 'nPurpleForeverClothNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPurpleForeverClothNum($value)
    {
        return $this->set(self::NPURPLEFOREVERCLOTHNUM, $value);
    }

    /**
     * Returns value of 'nPurpleForeverClothNum' property
     *
     * @return integer
     */
    public function getNPurpleForeverClothNum()
    {
        $value = $this->get(self::NPURPLEFOREVERCLOTHNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPurpleForeverClothNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPurpleForeverClothNum()
    {
        return $this->get(self::NPURPLEFOREVERCLOTHNUM) !== null;
    }

    /**
     * Sets value of 'nOrangeForeverClothNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOrangeForeverClothNum($value)
    {
        return $this->set(self::NORANGEFOREVERCLOTHNUM, $value);
    }

    /**
     * Returns value of 'nOrangeForeverClothNum' property
     *
     * @return integer
     */
    public function getNOrangeForeverClothNum()
    {
        $value = $this->get(self::NORANGEFOREVERCLOTHNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOrangeForeverClothNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOrangeForeverClothNum()
    {
        return $this->get(self::NORANGEFOREVERCLOTHNUM) !== null;
    }

    /**
     * Sets value of 'nForeverWingNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverWingNum($value)
    {
        return $this->set(self::NFOREVERWINGNUM, $value);
    }

    /**
     * Returns value of 'nForeverWingNum' property
     *
     * @return integer
     */
    public function getNForeverWingNum()
    {
        $value = $this->get(self::NFOREVERWINGNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverWingNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverWingNum()
    {
        return $this->get(self::NFOREVERWINGNUM) !== null;
    }

    /**
     * Sets value of 'nForeverFaceNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverFaceNum($value)
    {
        return $this->set(self::NFOREVERFACENUM, $value);
    }

    /**
     * Returns value of 'nForeverFaceNum' property
     *
     * @return integer
     */
    public function getNForeverFaceNum()
    {
        $value = $this->get(self::NFOREVERFACENUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverFaceNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverFaceNum()
    {
        return $this->get(self::NFOREVERFACENUM) !== null;
    }

    /**
     * Sets value of 'nForeverGlassNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverGlassNum($value)
    {
        return $this->set(self::NFOREVERGLASSNUM, $value);
    }

    /**
     * Returns value of 'nForeverGlassNum' property
     *
     * @return integer
     */
    public function getNForeverGlassNum()
    {
        $value = $this->get(self::NFOREVERGLASSNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverGlassNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverGlassNum()
    {
        return $this->get(self::NFOREVERGLASSNUM) !== null;
    }

    /**
     * Sets value of 'nForeverMaskNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverMaskNum($value)
    {
        return $this->set(self::NFOREVERMASKNUM, $value);
    }

    /**
     * Returns value of 'nForeverMaskNum' property
     *
     * @return integer
     */
    public function getNForeverMaskNum()
    {
        $value = $this->get(self::NFOREVERMASKNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverMaskNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverMaskNum()
    {
        return $this->get(self::NFOREVERMASKNUM) !== null;
    }

    /**
     * Sets value of 'nMarryDays' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMarryDays($value)
    {
        return $this->set(self::NMARRYDAYS, $value);
    }

    /**
     * Returns value of 'nMarryDays' property
     *
     * @return integer
     */
    public function getNMarryDays()
    {
        $value = $this->get(self::NMARRYDAYS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMarryDays' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMarryDays()
    {
        return $this->get(self::NMARRYDAYS) !== null;
    }

    /**
     * Sets value of 'nLoverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoverID($value)
    {
        return $this->set(self::NLOVERID, $value);
    }

    /**
     * Returns value of 'nLoverID' property
     *
     * @return integer
     */
    public function getNLoverID()
    {
        $value = $this->get(self::NLOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoverID()
    {
        return $this->get(self::NLOVERID) !== null;
    }

    /**
     * Sets value of 'isMarried' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsMarried($value)
    {
        return $this->set(self::ISMARRIED, $value);
    }

    /**
     * Returns value of 'isMarried' property
     *
     * @return boolean
     */
    public function getIsMarried()
    {
        $value = $this->get(self::ISMARRIED);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isMarried' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsMarried()
    {
        return $this->get(self::ISMARRIED) !== null;
    }

    /**
     * Sets value of 'nTotalSpendMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalSpendMoney($value)
    {
        return $this->set(self::NTOTALSPENDMONEY, $value);
    }

    /**
     * Returns value of 'nTotalSpendMoney' property
     *
     * @return integer
     */
    public function getNTotalSpendMoney()
    {
        $value = $this->get(self::NTOTALSPENDMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalSpendMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalSpendMoney()
    {
        return $this->get(self::NTOTALSPENDMONEY) !== null;
    }

    /**
     * Sets value of 'nTotalSpendScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalSpendScore($value)
    {
        return $this->set(self::NTOTALSPENDSCORE, $value);
    }

    /**
     * Returns value of 'nTotalSpendScore' property
     *
     * @return integer
     */
    public function getNTotalSpendScore()
    {
        $value = $this->get(self::NTOTALSPENDSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalSpendScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalSpendScore()
    {
        return $this->get(self::NTOTALSPENDSCORE) !== null;
    }

    /**
     * Sets value of 'nForeverClothAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverClothAdd($value)
    {
        return $this->set(self::NFOREVERCLOTHADD, $value);
    }

    /**
     * Returns value of 'nForeverClothAdd' property
     *
     * @return integer
     */
    public function getNForeverClothAdd()
    {
        $value = $this->get(self::NFOREVERCLOTHADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverClothAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverClothAdd()
    {
        return $this->get(self::NFOREVERCLOTHADD) !== null;
    }

    /**
     * Sets value of 'nPurpleForeverClothAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPurpleForeverClothAdd($value)
    {
        return $this->set(self::NPURPLEFOREVERCLOTHADD, $value);
    }

    /**
     * Returns value of 'nPurpleForeverClothAdd' property
     *
     * @return integer
     */
    public function getNPurpleForeverClothAdd()
    {
        $value = $this->get(self::NPURPLEFOREVERCLOTHADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPurpleForeverClothAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPurpleForeverClothAdd()
    {
        return $this->get(self::NPURPLEFOREVERCLOTHADD) !== null;
    }

    /**
     * Sets value of 'nOrangeForeverClothAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOrangeForeverClothAdd($value)
    {
        return $this->set(self::NORANGEFOREVERCLOTHADD, $value);
    }

    /**
     * Returns value of 'nOrangeForeverClothAdd' property
     *
     * @return integer
     */
    public function getNOrangeForeverClothAdd()
    {
        $value = $this->get(self::NORANGEFOREVERCLOTHADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOrangeForeverClothAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOrangeForeverClothAdd()
    {
        return $this->get(self::NORANGEFOREVERCLOTHADD) !== null;
    }

    /**
     * Sets value of 'nForeverWingAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverWingAdd($value)
    {
        return $this->set(self::NFOREVERWINGADD, $value);
    }

    /**
     * Returns value of 'nForeverWingAdd' property
     *
     * @return integer
     */
    public function getNForeverWingAdd()
    {
        $value = $this->get(self::NFOREVERWINGADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverWingAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverWingAdd()
    {
        return $this->get(self::NFOREVERWINGADD) !== null;
    }

    /**
     * Sets value of 'nForeverFaceAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverFaceAdd($value)
    {
        return $this->set(self::NFOREVERFACEADD, $value);
    }

    /**
     * Returns value of 'nForeverFaceAdd' property
     *
     * @return integer
     */
    public function getNForeverFaceAdd()
    {
        $value = $this->get(self::NFOREVERFACEADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverFaceAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverFaceAdd()
    {
        return $this->get(self::NFOREVERFACEADD) !== null;
    }

    /**
     * Sets value of 'nForeverGlassAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverGlassAdd($value)
    {
        return $this->set(self::NFOREVERGLASSADD, $value);
    }

    /**
     * Returns value of 'nForeverGlassAdd' property
     *
     * @return integer
     */
    public function getNForeverGlassAdd()
    {
        $value = $this->get(self::NFOREVERGLASSADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverGlassAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverGlassAdd()
    {
        return $this->get(self::NFOREVERGLASSADD) !== null;
    }

    /**
     * Sets value of 'nForeverMaskAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNForeverMaskAdd($value)
    {
        return $this->set(self::NFOREVERMASKADD, $value);
    }

    /**
     * Returns value of 'nForeverMaskAdd' property
     *
     * @return integer
     */
    public function getNForeverMaskAdd()
    {
        $value = $this->get(self::NFOREVERMASKADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nForeverMaskAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNForeverMaskAdd()
    {
        return $this->get(self::NFOREVERMASKADD) !== null;
    }

    /**
     * Sets value of 'nMarryNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMarryNum($value)
    {
        return $this->set(self::NMARRYNUM, $value);
    }

    /**
     * Returns value of 'nMarryNum' property
     *
     * @return integer
     */
    public function getNMarryNum()
    {
        $value = $this->get(self::NMARRYNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMarryNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMarryNum()
    {
        return $this->get(self::NMARRYNUM) !== null;
    }

    /**
     * Sets value of 'nNormalMarryNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNormalMarryNum($value)
    {
        return $this->set(self::NNORMALMARRYNUM, $value);
    }

    /**
     * Returns value of 'nNormalMarryNum' property
     *
     * @return integer
     */
    public function getNNormalMarryNum()
    {
        $value = $this->get(self::NNORMALMARRYNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNormalMarryNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNormalMarryNum()
    {
        return $this->get(self::NNORMALMARRYNUM) !== null;
    }

    /**
     * Sets value of 'nNobleMarryNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNobleMarryNum($value)
    {
        return $this->set(self::NNOBLEMARRYNUM, $value);
    }

    /**
     * Returns value of 'nNobleMarryNum' property
     *
     * @return integer
     */
    public function getNNobleMarryNum()
    {
        $value = $this->get(self::NNOBLEMARRYNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNobleMarryNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNobleMarryNum()
    {
        return $this->get(self::NNOBLEMARRYNUM) !== null;
    }

    /**
     * Sets value of 'nLuxuryMarryNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLuxuryMarryNum($value)
    {
        return $this->set(self::NLUXURYMARRYNUM, $value);
    }

    /**
     * Returns value of 'nLuxuryMarryNum' property
     *
     * @return integer
     */
    public function getNLuxuryMarryNum()
    {
        $value = $this->get(self::NLUXURYMARRYNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLuxuryMarryNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLuxuryMarryNum()
    {
        return $this->get(self::NLUXURYMARRYNUM) !== null;
    }
}
}