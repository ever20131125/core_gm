<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetRoleInfoResp message
 */
class RLSGetRoleInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const FOLLOWCNT = 3;
    const FANSCNT = 4;
    const FRIENDCNT = 5;
    const FAMECNT = 6;
    const RICHCNT = 7;
    const BELIKEDCNT = 8;
    const BEVISITCNT = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FOLLOWCNT => array(
            'name' => 'followCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FANSCNT => array(
            'name' => 'fansCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDCNT => array(
            'name' => 'friendCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FAMECNT => array(
            'name' => 'fameCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RICHCNT => array(
            'name' => 'richCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BELIKEDCNT => array(
            'name' => 'beLikedCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BEVISITCNT => array(
            'name' => 'beVisitCnt',
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
        $this->values[self::FOLLOWCNT] = null;
        $this->values[self::FANSCNT] = null;
        $this->values[self::FRIENDCNT] = null;
        $this->values[self::FAMECNT] = null;
        $this->values[self::RICHCNT] = null;
        $this->values[self::BELIKEDCNT] = null;
        $this->values[self::BEVISITCNT] = null;
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
     * Sets value of 'roleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleid($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleid' property
     *
     * @return integer
     */
    public function getRoleid()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleid()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'followCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFollowCnt($value)
    {
        return $this->set(self::FOLLOWCNT, $value);
    }

    /**
     * Returns value of 'followCnt' property
     *
     * @return integer
     */
    public function getFollowCnt()
    {
        $value = $this->get(self::FOLLOWCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'followCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFollowCnt()
    {
        return $this->get(self::FOLLOWCNT) !== null;
    }

    /**
     * Sets value of 'fansCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFansCnt($value)
    {
        return $this->set(self::FANSCNT, $value);
    }

    /**
     * Returns value of 'fansCnt' property
     *
     * @return integer
     */
    public function getFansCnt()
    {
        $value = $this->get(self::FANSCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fansCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFansCnt()
    {
        return $this->get(self::FANSCNT) !== null;
    }

    /**
     * Sets value of 'friendCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendCnt($value)
    {
        return $this->set(self::FRIENDCNT, $value);
    }

    /**
     * Returns value of 'friendCnt' property
     *
     * @return integer
     */
    public function getFriendCnt()
    {
        $value = $this->get(self::FRIENDCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendCnt()
    {
        return $this->get(self::FRIENDCNT) !== null;
    }

    /**
     * Sets value of 'fameCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFameCnt($value)
    {
        return $this->set(self::FAMECNT, $value);
    }

    /**
     * Returns value of 'fameCnt' property
     *
     * @return integer
     */
    public function getFameCnt()
    {
        $value = $this->get(self::FAMECNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fameCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFameCnt()
    {
        return $this->get(self::FAMECNT) !== null;
    }

    /**
     * Sets value of 'richCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRichCnt($value)
    {
        return $this->set(self::RICHCNT, $value);
    }

    /**
     * Returns value of 'richCnt' property
     *
     * @return integer
     */
    public function getRichCnt()
    {
        $value = $this->get(self::RICHCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'richCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRichCnt()
    {
        return $this->get(self::RICHCNT) !== null;
    }

    /**
     * Sets value of 'beLikedCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBeLikedCnt($value)
    {
        return $this->set(self::BELIKEDCNT, $value);
    }

    /**
     * Returns value of 'beLikedCnt' property
     *
     * @return integer
     */
    public function getBeLikedCnt()
    {
        $value = $this->get(self::BELIKEDCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'beLikedCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBeLikedCnt()
    {
        return $this->get(self::BELIKEDCNT) !== null;
    }

    /**
     * Sets value of 'beVisitCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBeVisitCnt($value)
    {
        return $this->set(self::BEVISITCNT, $value);
    }

    /**
     * Returns value of 'beVisitCnt' property
     *
     * @return integer
     */
    public function getBeVisitCnt()
    {
        $value = $this->get(self::BEVISITCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'beVisitCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBeVisitCnt()
    {
        return $this->get(self::BEVISITCNT) !== null;
    }
}
}