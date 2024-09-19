<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchHistoryBalance message
 */
class MatchHistoryBalance extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const WINLOSE = 2;
    const BAC = 3;
    const BAP = 4;
    const BMVP = 5;
    const NOLDPOINT = 6;
    const NNEWPOINT = 7;
    const OLDTITLEINFO = 8;
    const NEWTITLEINFO = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WINLOSE => array(
            'default' => \Xnhd\Core\Pb\Sdo\WinLose::enmWinLose_Win,
            'name' => 'winLose',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAC => array(
            'name' => 'bAC',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAP => array(
            'name' => 'bAP',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BMVP => array(
            'name' => 'bMVP',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOLDPOINT => array(
            'name' => 'nOldPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWPOINT => array(
            'name' => 'nNewPoint',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OLDTITLEINFO => array(
            'name' => 'oldTitleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::NEWTITLEINFO => array(
            'name' => 'newTitleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
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
        $this->values[self::WINLOSE] = self::$fields[self::WINLOSE]['default'];
        $this->values[self::BAC] = null;
        $this->values[self::BAP] = null;
        $this->values[self::BMVP] = null;
        $this->values[self::NOLDPOINT] = null;
        $this->values[self::NNEWPOINT] = null;
        $this->values[self::OLDTITLEINFO] = null;
        $this->values[self::NEWTITLEINFO] = null;
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
     * Sets value of 'winLose' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWinLose($value)
    {
        return $this->set(self::WINLOSE, $value);
    }

    /**
     * Returns value of 'winLose' property
     *
     * @return integer
     */
    public function getWinLose()
    {
        $value = $this->get(self::WINLOSE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'winLose' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWinLose()
    {
        return $this->get(self::WINLOSE) !== null;
    }

    /**
     * Sets value of 'bAC' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBAC($value)
    {
        return $this->set(self::BAC, $value);
    }

    /**
     * Returns value of 'bAC' property
     *
     * @return integer
     */
    public function getBAC()
    {
        $value = $this->get(self::BAC);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bAC' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAC()
    {
        return $this->get(self::BAC) !== null;
    }

    /**
     * Sets value of 'bAP' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBAP($value)
    {
        return $this->set(self::BAP, $value);
    }

    /**
     * Returns value of 'bAP' property
     *
     * @return integer
     */
    public function getBAP()
    {
        $value = $this->get(self::BAP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bAP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAP()
    {
        return $this->get(self::BAP) !== null;
    }

    /**
     * Sets value of 'bMVP' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBMVP($value)
    {
        return $this->set(self::BMVP, $value);
    }

    /**
     * Returns value of 'bMVP' property
     *
     * @return integer
     */
    public function getBMVP()
    {
        $value = $this->get(self::BMVP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bMVP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBMVP()
    {
        return $this->get(self::BMVP) !== null;
    }

    /**
     * Sets value of 'nOldPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOldPoint($value)
    {
        return $this->set(self::NOLDPOINT, $value);
    }

    /**
     * Returns value of 'nOldPoint' property
     *
     * @return integer
     */
    public function getNOldPoint()
    {
        $value = $this->get(self::NOLDPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOldPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOldPoint()
    {
        return $this->get(self::NOLDPOINT) !== null;
    }

    /**
     * Sets value of 'nNewPoint' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewPoint($value)
    {
        return $this->set(self::NNEWPOINT, $value);
    }

    /**
     * Returns value of 'nNewPoint' property
     *
     * @return integer
     */
    public function getNNewPoint()
    {
        $value = $this->get(self::NNEWPOINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewPoint' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewPoint()
    {
        return $this->get(self::NNEWPOINT) !== null;
    }

    /**
     * Sets value of 'oldTitleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setOldTitleInfo(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::OLDTITLEINFO, $value);
    }

    /**
     * Returns value of 'oldTitleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getOldTitleInfo()
    {
        return $this->get(self::OLDTITLEINFO);
    }

    /**
     * Returns true if 'oldTitleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOldTitleInfo()
    {
        return $this->get(self::OLDTITLEINFO) !== null;
    }

    /**
     * Sets value of 'newTitleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setNewTitleInfo(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::NEWTITLEINFO, $value);
    }

    /**
     * Returns value of 'newTitleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getNewTitleInfo()
    {
        return $this->get(self::NEWTITLEINFO);
    }

    /**
     * Returns true if 'newTitleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewTitleInfo()
    {
        return $this->get(self::NEWTITLEINFO) !== null;
    }
}
}