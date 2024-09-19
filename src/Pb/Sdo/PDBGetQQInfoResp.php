<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetQQInfoResp message
 */
class PDBGetQQInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZACCOUNTID = 2;
    const NZONEID = 3;
    const NROLEID = 4;
    const SZHEALURL = 5;
    const SZNICKNAME = 6;
    const BOPEN = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZHEALURL => array(
            'name' => 'szHealUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZNICKNAME => array(
            'name' => 'szNickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BOPEN => array(
            'default' => false,
            'name' => 'bOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SZHEALURL] = null;
        $this->values[self::SZNICKNAME] = null;
        $this->values[self::BOPEN] = self::$fields[self::BOPEN]['default'];
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
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
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
     * Sets value of 'szHealUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzHealUrl($value)
    {
        return $this->set(self::SZHEALURL, $value);
    }

    /**
     * Returns value of 'szHealUrl' property
     *
     * @return string
     */
    public function getSzHealUrl()
    {
        $value = $this->get(self::SZHEALURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szHealUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzHealUrl()
    {
        return $this->get(self::SZHEALURL) !== null;
    }

    /**
     * Sets value of 'szNickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzNickName($value)
    {
        return $this->set(self::SZNICKNAME, $value);
    }

    /**
     * Returns value of 'szNickName' property
     *
     * @return string
     */
    public function getSzNickName()
    {
        $value = $this->get(self::SZNICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szNickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzNickName()
    {
        return $this->get(self::SZNICKNAME) !== null;
    }

    /**
     * Sets value of 'bOpen' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBOpen($value)
    {
        return $this->set(self::BOPEN, $value);
    }

    /**
     * Returns value of 'bOpen' property
     *
     * @return boolean
     */
    public function getBOpen()
    {
        $value = $this->get(self::BOPEN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBOpen()
    {
        return $this->get(self::BOPEN) !== null;
    }
}
}