<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RolePrivateInfo message
 */
class RolePrivateInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROLECREATETIME = 2;
    const NSELECT = 3;
    const NMONEY = 4;
    const NSCORE = 5;
    const NGCOIN = 6;
    const NQCOIN = 7;
    const NHCOIN = 8;
    const NSTAMINA = 9;
    const NEXPERIENCE = 10;
    const NACHIEVE = 11;
    const NVIPCOST = 12;
    const NCONSUMECOIN = 13;
    const NNEWOLD = 14;
    const NPLANUSED = 17;
    const NGUIDESTAGE = 22;
    const NBRANCHGUIDE = 23;
    const NTOTALLOGINCOUNT = 24;
    const NTOTALONLINETIME = 25;
    const NTODAYONLINETIME = 26;
    const NTODAYLOGINCOUNT = 27;
    const NPROFICIENCY = 28;
    const NCITY = 33;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLECREATETIME => array(
            'name' => 'nRoleCreateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSELECT => array(
            'name' => 'nSelect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMONEY => array(
            'name' => 'nMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGCOIN => array(
            'name' => 'nGCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQCOIN => array(
            'name' => 'nQCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHCOIN => array(
            'name' => 'nHCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAMINA => array(
            'name' => 'nStamina',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPERIENCE => array(
            'name' => 'nExperience',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACHIEVE => array(
            'name' => 'nAchieve',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NVIPCOST => array(
            'name' => 'nVIPCost',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCONSUMECOIN => array(
            'name' => 'nConsumeCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWOLD => array(
            'name' => 'nNewOld',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPLANUSED => array(
            'name' => 'nPlanUsed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGUIDESTAGE => array(
            'name' => 'nGuideStage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBRANCHGUIDE => array(
            'name' => 'nBranchGuide',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALLOGINCOUNT => array(
            'name' => 'nTotalLoginCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALONLINETIME => array(
            'name' => 'nTotalOnlineTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTODAYONLINETIME => array(
            'name' => 'nTodayOnlineTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTODAYLOGINCOUNT => array(
            'name' => 'nTodayLoginCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROFICIENCY => array(
            'name' => 'nProficiency',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCITY => array(
            'name' => 'nCity',
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
        $this->values[self::NROLECREATETIME] = null;
        $this->values[self::NSELECT] = null;
        $this->values[self::NMONEY] = null;
        $this->values[self::NSCORE] = null;
        $this->values[self::NGCOIN] = null;
        $this->values[self::NQCOIN] = null;
        $this->values[self::NHCOIN] = null;
        $this->values[self::NSTAMINA] = null;
        $this->values[self::NEXPERIENCE] = null;
        $this->values[self::NACHIEVE] = null;
        $this->values[self::NVIPCOST] = null;
        $this->values[self::NCONSUMECOIN] = null;
        $this->values[self::NNEWOLD] = null;
        $this->values[self::NPLANUSED] = null;
        $this->values[self::NGUIDESTAGE] = null;
        $this->values[self::NBRANCHGUIDE] = null;
        $this->values[self::NTOTALLOGINCOUNT] = null;
        $this->values[self::NTOTALONLINETIME] = null;
        $this->values[self::NTODAYONLINETIME] = null;
        $this->values[self::NTODAYLOGINCOUNT] = null;
        $this->values[self::NPROFICIENCY] = null;
        $this->values[self::NCITY] = null;
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
     * Sets value of 'nRoleCreateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleCreateTime($value)
    {
        return $this->set(self::NROLECREATETIME, $value);
    }

    /**
     * Returns value of 'nRoleCreateTime' property
     *
     * @return integer
     */
    public function getNRoleCreateTime()
    {
        $value = $this->get(self::NROLECREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleCreateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleCreateTime()
    {
        return $this->get(self::NROLECREATETIME) !== null;
    }

    /**
     * Sets value of 'nSelect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect($value)
    {
        return $this->set(self::NSELECT, $value);
    }

    /**
     * Returns value of 'nSelect' property
     *
     * @return integer
     */
    public function getNSelect()
    {
        $value = $this->get(self::NSELECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect()
    {
        return $this->get(self::NSELECT) !== null;
    }

    /**
     * Sets value of 'nMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMoney($value)
    {
        return $this->set(self::NMONEY, $value);
    }

    /**
     * Returns value of 'nMoney' property
     *
     * @return integer
     */
    public function getNMoney()
    {
        $value = $this->get(self::NMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMoney()
    {
        return $this->get(self::NMONEY) !== null;
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'nGCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGCoin($value)
    {
        return $this->set(self::NGCOIN, $value);
    }

    /**
     * Returns value of 'nGCoin' property
     *
     * @return integer
     */
    public function getNGCoin()
    {
        $value = $this->get(self::NGCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGCoin()
    {
        return $this->get(self::NGCOIN) !== null;
    }

    /**
     * Sets value of 'nQCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQCoin($value)
    {
        return $this->set(self::NQCOIN, $value);
    }

    /**
     * Returns value of 'nQCoin' property
     *
     * @return integer
     */
    public function getNQCoin()
    {
        $value = $this->get(self::NQCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQCoin()
    {
        return $this->get(self::NQCOIN) !== null;
    }

    /**
     * Sets value of 'nHCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHCoin($value)
    {
        return $this->set(self::NHCOIN, $value);
    }

    /**
     * Returns value of 'nHCoin' property
     *
     * @return integer
     */
    public function getNHCoin()
    {
        $value = $this->get(self::NHCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHCoin()
    {
        return $this->get(self::NHCOIN) !== null;
    }

    /**
     * Sets value of 'nStamina' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStamina($value)
    {
        return $this->set(self::NSTAMINA, $value);
    }

    /**
     * Returns value of 'nStamina' property
     *
     * @return integer
     */
    public function getNStamina()
    {
        $value = $this->get(self::NSTAMINA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStamina' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStamina()
    {
        return $this->get(self::NSTAMINA) !== null;
    }

    /**
     * Sets value of 'nExperience' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExperience($value)
    {
        return $this->set(self::NEXPERIENCE, $value);
    }

    /**
     * Returns value of 'nExperience' property
     *
     * @return integer
     */
    public function getNExperience()
    {
        $value = $this->get(self::NEXPERIENCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExperience' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExperience()
    {
        return $this->get(self::NEXPERIENCE) !== null;
    }

    /**
     * Sets value of 'nAchieve' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAchieve($value)
    {
        return $this->set(self::NACHIEVE, $value);
    }

    /**
     * Returns value of 'nAchieve' property
     *
     * @return integer
     */
    public function getNAchieve()
    {
        $value = $this->get(self::NACHIEVE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAchieve' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAchieve()
    {
        return $this->get(self::NACHIEVE) !== null;
    }

    /**
     * Sets value of 'nVIPCost' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVIPCost($value)
    {
        return $this->set(self::NVIPCOST, $value);
    }

    /**
     * Returns value of 'nVIPCost' property
     *
     * @return integer
     */
    public function getNVIPCost()
    {
        $value = $this->get(self::NVIPCOST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVIPCost' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVIPCost()
    {
        return $this->get(self::NVIPCOST) !== null;
    }

    /**
     * Sets value of 'nConsumeCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNConsumeCoin($value)
    {
        return $this->set(self::NCONSUMECOIN, $value);
    }

    /**
     * Returns value of 'nConsumeCoin' property
     *
     * @return integer
     */
    public function getNConsumeCoin()
    {
        $value = $this->get(self::NCONSUMECOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nConsumeCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNConsumeCoin()
    {
        return $this->get(self::NCONSUMECOIN) !== null;
    }

    /**
     * Sets value of 'nNewOld' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewOld($value)
    {
        return $this->set(self::NNEWOLD, $value);
    }

    /**
     * Returns value of 'nNewOld' property
     *
     * @return integer
     */
    public function getNNewOld()
    {
        $value = $this->get(self::NNEWOLD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewOld' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewOld()
    {
        return $this->get(self::NNEWOLD) !== null;
    }

    /**
     * Sets value of 'nPlanUsed' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlanUsed($value)
    {
        return $this->set(self::NPLANUSED, $value);
    }

    /**
     * Returns value of 'nPlanUsed' property
     *
     * @return integer
     */
    public function getNPlanUsed()
    {
        $value = $this->get(self::NPLANUSED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlanUsed' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlanUsed()
    {
        return $this->get(self::NPLANUSED) !== null;
    }

    /**
     * Sets value of 'nGuideStage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGuideStage($value)
    {
        return $this->set(self::NGUIDESTAGE, $value);
    }

    /**
     * Returns value of 'nGuideStage' property
     *
     * @return integer
     */
    public function getNGuideStage()
    {
        $value = $this->get(self::NGUIDESTAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGuideStage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGuideStage()
    {
        return $this->get(self::NGUIDESTAGE) !== null;
    }

    /**
     * Sets value of 'nBranchGuide' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBranchGuide($value)
    {
        return $this->set(self::NBRANCHGUIDE, $value);
    }

    /**
     * Returns value of 'nBranchGuide' property
     *
     * @return integer
     */
    public function getNBranchGuide()
    {
        $value = $this->get(self::NBRANCHGUIDE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBranchGuide' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBranchGuide()
    {
        return $this->get(self::NBRANCHGUIDE) !== null;
    }

    /**
     * Sets value of 'nTotalLoginCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalLoginCount($value)
    {
        return $this->set(self::NTOTALLOGINCOUNT, $value);
    }

    /**
     * Returns value of 'nTotalLoginCount' property
     *
     * @return integer
     */
    public function getNTotalLoginCount()
    {
        $value = $this->get(self::NTOTALLOGINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalLoginCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalLoginCount()
    {
        return $this->get(self::NTOTALLOGINCOUNT) !== null;
    }

    /**
     * Sets value of 'nTotalOnlineTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalOnlineTime($value)
    {
        return $this->set(self::NTOTALONLINETIME, $value);
    }

    /**
     * Returns value of 'nTotalOnlineTime' property
     *
     * @return integer
     */
    public function getNTotalOnlineTime()
    {
        $value = $this->get(self::NTOTALONLINETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalOnlineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalOnlineTime()
    {
        return $this->get(self::NTOTALONLINETIME) !== null;
    }

    /**
     * Sets value of 'nTodayOnlineTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTodayOnlineTime($value)
    {
        return $this->set(self::NTODAYONLINETIME, $value);
    }

    /**
     * Returns value of 'nTodayOnlineTime' property
     *
     * @return integer
     */
    public function getNTodayOnlineTime()
    {
        $value = $this->get(self::NTODAYONLINETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTodayOnlineTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTodayOnlineTime()
    {
        return $this->get(self::NTODAYONLINETIME) !== null;
    }

    /**
     * Sets value of 'nTodayLoginCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTodayLoginCount($value)
    {
        return $this->set(self::NTODAYLOGINCOUNT, $value);
    }

    /**
     * Returns value of 'nTodayLoginCount' property
     *
     * @return integer
     */
    public function getNTodayLoginCount()
    {
        $value = $this->get(self::NTODAYLOGINCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTodayLoginCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTodayLoginCount()
    {
        return $this->get(self::NTODAYLOGINCOUNT) !== null;
    }

    /**
     * Sets value of 'nProficiency' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNProficiency($value)
    {
        return $this->set(self::NPROFICIENCY, $value);
    }

    /**
     * Returns value of 'nProficiency' property
     *
     * @return integer
     */
    public function getNProficiency()
    {
        $value = $this->get(self::NPROFICIENCY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nProficiency' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNProficiency()
    {
        return $this->get(self::NPROFICIENCY) !== null;
    }

    /**
     * Sets value of 'nCity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCity($value)
    {
        return $this->set(self::NCITY, $value);
    }

    /**
     * Returns value of 'nCity' property
     *
     * @return integer
     */
    public function getNCity()
    {
        $value = $this->get(self::NCITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCity()
    {
        return $this->get(self::NCITY) !== null;
    }
}
}