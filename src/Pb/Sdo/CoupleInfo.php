<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CoupleInfo message
 */
class CoupleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NCOUPLEID = 1;
    const NROLEID1 = 2;
    const STROLEPUBLICINFO1 = 3;
    const NROLEID2 = 4;
    const STROLEPUBLICINFO2 = 5;
    const NLOVETIME = 6;
    const NWEDDINGTIME = 7;
    const NBREAKROLEID = 8;
    const NBREAKTIMEDEADLINE = 9;
    const NLOVELV = 10;
    const NLOVEEXP = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCOUPLEID => array(
            'name' => 'nCoupleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID1 => array(
            'name' => 'nRoleID1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPUBLICINFO1 => array(
            'name' => 'stRolePublicInfo1',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::NROLEID2 => array(
            'name' => 'nRoleID2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEPUBLICINFO2 => array(
            'name' => 'stRolePublicInfo2',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::NLOVETIME => array(
            'name' => 'nLoveTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWEDDINGTIME => array(
            'name' => 'nWeddingTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBREAKROLEID => array(
            'name' => 'nBreakRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBREAKTIMEDEADLINE => array(
            'name' => 'nBreakTimeDeadLine',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVELV => array(
            'name' => 'nLoveLv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVEEXP => array(
            'name' => 'nLoveExp',
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
        $this->values[self::NCOUPLEID] = null;
        $this->values[self::NROLEID1] = null;
        $this->values[self::STROLEPUBLICINFO1] = null;
        $this->values[self::NROLEID2] = null;
        $this->values[self::STROLEPUBLICINFO2] = null;
        $this->values[self::NLOVETIME] = null;
        $this->values[self::NWEDDINGTIME] = null;
        $this->values[self::NBREAKROLEID] = null;
        $this->values[self::NBREAKTIMEDEADLINE] = null;
        $this->values[self::NLOVELV] = null;
        $this->values[self::NLOVEEXP] = null;
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
     * Sets value of 'nCoupleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCoupleID($value)
    {
        return $this->set(self::NCOUPLEID, $value);
    }

    /**
     * Returns value of 'nCoupleID' property
     *
     * @return integer
     */
    public function getNCoupleID()
    {
        $value = $this->get(self::NCOUPLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCoupleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCoupleID()
    {
        return $this->get(self::NCOUPLEID) !== null;
    }

    /**
     * Sets value of 'nRoleID1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID1($value)
    {
        return $this->set(self::NROLEID1, $value);
    }

    /**
     * Returns value of 'nRoleID1' property
     *
     * @return integer
     */
    public function getNRoleID1()
    {
        $value = $this->get(self::NROLEID1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID1()
    {
        return $this->get(self::NROLEID1) !== null;
    }

    /**
     * Sets value of 'stRolePublicInfo1' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo1(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO1, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo1' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo1()
    {
        return $this->get(self::STROLEPUBLICINFO1);
    }

    /**
     * Returns true if 'stRolePublicInfo1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo1()
    {
        return $this->get(self::STROLEPUBLICINFO1) !== null;
    }

    /**
     * Sets value of 'nRoleID2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID2($value)
    {
        return $this->set(self::NROLEID2, $value);
    }

    /**
     * Returns value of 'nRoleID2' property
     *
     * @return integer
     */
    public function getNRoleID2()
    {
        $value = $this->get(self::NROLEID2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID2()
    {
        return $this->get(self::NROLEID2) !== null;
    }

    /**
     * Sets value of 'stRolePublicInfo2' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStRolePublicInfo2(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STROLEPUBLICINFO2, $value);
    }

    /**
     * Returns value of 'stRolePublicInfo2' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStRolePublicInfo2()
    {
        return $this->get(self::STROLEPUBLICINFO2);
    }

    /**
     * Returns true if 'stRolePublicInfo2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRolePublicInfo2()
    {
        return $this->get(self::STROLEPUBLICINFO2) !== null;
    }

    /**
     * Sets value of 'nLoveTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoveTime($value)
    {
        return $this->set(self::NLOVETIME, $value);
    }

    /**
     * Returns value of 'nLoveTime' property
     *
     * @return integer
     */
    public function getNLoveTime()
    {
        $value = $this->get(self::NLOVETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoveTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoveTime()
    {
        return $this->get(self::NLOVETIME) !== null;
    }

    /**
     * Sets value of 'nWeddingTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingTime($value)
    {
        return $this->set(self::NWEDDINGTIME, $value);
    }

    /**
     * Returns value of 'nWeddingTime' property
     *
     * @return integer
     */
    public function getNWeddingTime()
    {
        $value = $this->get(self::NWEDDINGTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingTime()
    {
        return $this->get(self::NWEDDINGTIME) !== null;
    }

    /**
     * Sets value of 'nBreakRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBreakRoleID($value)
    {
        return $this->set(self::NBREAKROLEID, $value);
    }

    /**
     * Returns value of 'nBreakRoleID' property
     *
     * @return integer
     */
    public function getNBreakRoleID()
    {
        $value = $this->get(self::NBREAKROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBreakRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBreakRoleID()
    {
        return $this->get(self::NBREAKROLEID) !== null;
    }

    /**
     * Sets value of 'nBreakTimeDeadLine' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBreakTimeDeadLine($value)
    {
        return $this->set(self::NBREAKTIMEDEADLINE, $value);
    }

    /**
     * Returns value of 'nBreakTimeDeadLine' property
     *
     * @return integer
     */
    public function getNBreakTimeDeadLine()
    {
        $value = $this->get(self::NBREAKTIMEDEADLINE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBreakTimeDeadLine' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBreakTimeDeadLine()
    {
        return $this->get(self::NBREAKTIMEDEADLINE) !== null;
    }

    /**
     * Sets value of 'nLoveLv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoveLv($value)
    {
        return $this->set(self::NLOVELV, $value);
    }

    /**
     * Returns value of 'nLoveLv' property
     *
     * @return integer
     */
    public function getNLoveLv()
    {
        $value = $this->get(self::NLOVELV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoveLv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoveLv()
    {
        return $this->get(self::NLOVELV) !== null;
    }

    /**
     * Sets value of 'nLoveExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoveExp($value)
    {
        return $this->set(self::NLOVEEXP, $value);
    }

    /**
     * Returns value of 'nLoveExp' property
     *
     * @return integer
     */
    public function getNLoveExp()
    {
        $value = $this->get(self::NLOVEEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoveExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoveExp()
    {
        return $this->get(self::NLOVEEXP) !== null;
    }
}
}