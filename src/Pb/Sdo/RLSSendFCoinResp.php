<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSSendFCoinResp message
 */
class RLSSendFCoinResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const FRIENDID = 3;
    const NFCOIN = 4;
    const TODAYSENTCOUNT = 5;
    const MAXSENTCOUNT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDID => array(
            'name' => 'friendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFCOIN => array(
            'name' => 'nFCoin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TODAYSENTCOUNT => array(
            'name' => 'todaySentCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXSENTCOUNT => array(
            'name' => 'MaxSentCount',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ROLEID] = null;
        $this->values[self::FRIENDID] = null;
        $this->values[self::NFCOIN] = null;
        $this->values[self::TODAYSENTCOUNT] = null;
        $this->values[self::MAXSENTCOUNT] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'friendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendID($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendID' property
     *
     * @return integer
     */
    public function getFriendID()
    {
        $value = $this->get(self::FRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendID()
    {
        return $this->get(self::FRIENDID) !== null;
    }

    /**
     * Sets value of 'nFCoin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFCoin($value)
    {
        return $this->set(self::NFCOIN, $value);
    }

    /**
     * Returns value of 'nFCoin' property
     *
     * @return integer
     */
    public function getNFCoin()
    {
        $value = $this->get(self::NFCOIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFCoin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFCoin()
    {
        return $this->get(self::NFCOIN) !== null;
    }

    /**
     * Sets value of 'todaySentCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTodaySentCount($value)
    {
        return $this->set(self::TODAYSENTCOUNT, $value);
    }

    /**
     * Returns value of 'todaySentCount' property
     *
     * @return integer
     */
    public function getTodaySentCount()
    {
        $value = $this->get(self::TODAYSENTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'todaySentCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTodaySentCount()
    {
        return $this->get(self::TODAYSENTCOUNT) !== null;
    }

    /**
     * Sets value of 'MaxSentCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxSentCount($value)
    {
        return $this->set(self::MAXSENTCOUNT, $value);
    }

    /**
     * Returns value of 'MaxSentCount' property
     *
     * @return integer
     */
    public function getMaxSentCount()
    {
        $value = $this->get(self::MAXSENTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'MaxSentCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxSentCount()
    {
        return $this->get(self::MAXSENTCOUNT) !== null;
    }
}
}