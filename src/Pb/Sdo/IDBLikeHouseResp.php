<?php
/**
 * Auto generated from itemdbserver.proto at 2021-12-09 02:04:59
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBLikeHouseResp message
 */
class IDBLikeHouseResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NTARGETID = 3;
    const NTHEMEID = 4;
    const NLIKECNT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEMEID => array(
            'name' => 'nThemeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIKECNT => array(
            'name' => 'nLikeCnt',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NTARGETID] = null;
        $this->values[self::NTHEMEID] = null;
        $this->values[self::NLIKECNT] = null;
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
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }

    /**
     * Sets value of 'nThemeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeID($value)
    {
        return $this->set(self::NTHEMEID, $value);
    }

    /**
     * Returns value of 'nThemeID' property
     *
     * @return integer
     */
    public function getNThemeID()
    {
        $value = $this->get(self::NTHEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeID()
    {
        return $this->get(self::NTHEMEID) !== null;
    }

    /**
     * Sets value of 'nLikeCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLikeCnt($value)
    {
        return $this->set(self::NLIKECNT, $value);
    }

    /**
     * Returns value of 'nLikeCnt' property
     *
     * @return integer
     */
    public function getNLikeCnt()
    {
        $value = $this->get(self::NLIKECNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLikeCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLikeCnt()
    {
        return $this->get(self::NLIKECNT) !== null;
    }
}
}