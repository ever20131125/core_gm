<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASFeverTimeInfoNoti message
 */
class GASFeverTimeInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NLASTTIME = 2;
    const NFEVERTIMECOUNTLIMIT = 3;
    const NFEVERTIMESCORE = 4;
    const NSPERFECTADDITION = 5;
    const NPERFECTADDITION = 6;
    const NGREATEADDITION = 7;
    const NMISSADDITION = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLASTTIME => array(
            'name' => 'nLastTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFEVERTIMECOUNTLIMIT => array(
            'name' => 'nFeverTimeCountLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFEVERTIMESCORE => array(
            'name' => 'nFeverTimeScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSPERFECTADDITION => array(
            'name' => 'nSPerfectAddition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPERFECTADDITION => array(
            'name' => 'nPerfectAddition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGREATEADDITION => array(
            'name' => 'nGreateAddition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMISSADDITION => array(
            'name' => 'nMissAddition',
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
        $this->values[self::NLASTTIME] = null;
        $this->values[self::NFEVERTIMECOUNTLIMIT] = null;
        $this->values[self::NFEVERTIMESCORE] = null;
        $this->values[self::NSPERFECTADDITION] = null;
        $this->values[self::NPERFECTADDITION] = null;
        $this->values[self::NGREATEADDITION] = null;
        $this->values[self::NMISSADDITION] = null;
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
     * Sets value of 'nLastTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLastTime($value)
    {
        return $this->set(self::NLASTTIME, $value);
    }

    /**
     * Returns value of 'nLastTime' property
     *
     * @return integer
     */
    public function getNLastTime()
    {
        $value = $this->get(self::NLASTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLastTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLastTime()
    {
        return $this->get(self::NLASTTIME) !== null;
    }

    /**
     * Sets value of 'nFeverTimeCountLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFeverTimeCountLimit($value)
    {
        return $this->set(self::NFEVERTIMECOUNTLIMIT, $value);
    }

    /**
     * Returns value of 'nFeverTimeCountLimit' property
     *
     * @return integer
     */
    public function getNFeverTimeCountLimit()
    {
        $value = $this->get(self::NFEVERTIMECOUNTLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFeverTimeCountLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFeverTimeCountLimit()
    {
        return $this->get(self::NFEVERTIMECOUNTLIMIT) !== null;
    }

    /**
     * Sets value of 'nFeverTimeScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFeverTimeScore($value)
    {
        return $this->set(self::NFEVERTIMESCORE, $value);
    }

    /**
     * Returns value of 'nFeverTimeScore' property
     *
     * @return integer
     */
    public function getNFeverTimeScore()
    {
        $value = $this->get(self::NFEVERTIMESCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFeverTimeScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFeverTimeScore()
    {
        return $this->get(self::NFEVERTIMESCORE) !== null;
    }

    /**
     * Sets value of 'nSPerfectAddition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSPerfectAddition($value)
    {
        return $this->set(self::NSPERFECTADDITION, $value);
    }

    /**
     * Returns value of 'nSPerfectAddition' property
     *
     * @return integer
     */
    public function getNSPerfectAddition()
    {
        $value = $this->get(self::NSPERFECTADDITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSPerfectAddition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSPerfectAddition()
    {
        return $this->get(self::NSPERFECTADDITION) !== null;
    }

    /**
     * Sets value of 'nPerfectAddition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPerfectAddition($value)
    {
        return $this->set(self::NPERFECTADDITION, $value);
    }

    /**
     * Returns value of 'nPerfectAddition' property
     *
     * @return integer
     */
    public function getNPerfectAddition()
    {
        $value = $this->get(self::NPERFECTADDITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPerfectAddition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPerfectAddition()
    {
        return $this->get(self::NPERFECTADDITION) !== null;
    }

    /**
     * Sets value of 'nGreateAddition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGreateAddition($value)
    {
        return $this->set(self::NGREATEADDITION, $value);
    }

    /**
     * Returns value of 'nGreateAddition' property
     *
     * @return integer
     */
    public function getNGreateAddition()
    {
        $value = $this->get(self::NGREATEADDITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGreateAddition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGreateAddition()
    {
        return $this->get(self::NGREATEADDITION) !== null;
    }

    /**
     * Sets value of 'nMissAddition' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMissAddition($value)
    {
        return $this->set(self::NMISSADDITION, $value);
    }

    /**
     * Returns value of 'nMissAddition' property
     *
     * @return integer
     */
    public function getNMissAddition()
    {
        $value = $this->get(self::NMISSADDITION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMissAddition' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMissAddition()
    {
        return $this->get(self::NMISSADDITION) !== null;
    }
}
}