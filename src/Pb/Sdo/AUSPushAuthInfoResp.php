<?php
/**
 * Auto generated from authserver.proto at 2021-12-31 01:50:41
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AUSPushAuthInfoResp message
 */
class AUSPushAuthInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZACCOUNTID = 2;
    const NTIMESTAMP = 3;
    const NEXPIRETIME = 4;
    const NRANDOM = 5;
    const SZMD5CHECKSUM = 6;
    const NMD5CHECKSUMLEN = 7;

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
        self::NTIMESTAMP => array(
            'name' => 'nTimeStamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXPIRETIME => array(
            'name' => 'nExpireTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRANDOM => array(
            'name' => 'nRandom',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZMD5CHECKSUM => array(
            'name' => 'szMD5CheckSum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NMD5CHECKSUMLEN => array(
            'name' => 'nMD5CheckSumLen',
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NTIMESTAMP] = null;
        $this->values[self::NEXPIRETIME] = null;
        $this->values[self::NRANDOM] = null;
        $this->values[self::SZMD5CHECKSUM] = null;
        $this->values[self::NMD5CHECKSUMLEN] = null;
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
     * Sets value of 'nTimeStamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeStamp($value)
    {
        return $this->set(self::NTIMESTAMP, $value);
    }

    /**
     * Returns value of 'nTimeStamp' property
     *
     * @return integer
     */
    public function getNTimeStamp()
    {
        $value = $this->get(self::NTIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeStamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeStamp()
    {
        return $this->get(self::NTIMESTAMP) !== null;
    }

    /**
     * Sets value of 'nExpireTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExpireTime($value)
    {
        return $this->set(self::NEXPIRETIME, $value);
    }

    /**
     * Returns value of 'nExpireTime' property
     *
     * @return integer
     */
    public function getNExpireTime()
    {
        $value = $this->get(self::NEXPIRETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExpireTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExpireTime()
    {
        return $this->get(self::NEXPIRETIME) !== null;
    }

    /**
     * Sets value of 'nRandom' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRandom($value)
    {
        return $this->set(self::NRANDOM, $value);
    }

    /**
     * Returns value of 'nRandom' property
     *
     * @return integer
     */
    public function getNRandom()
    {
        $value = $this->get(self::NRANDOM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRandom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRandom()
    {
        return $this->get(self::NRANDOM) !== null;
    }

    /**
     * Sets value of 'szMD5CheckSum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzMD5CheckSum($value)
    {
        return $this->set(self::SZMD5CHECKSUM, $value);
    }

    /**
     * Returns value of 'szMD5CheckSum' property
     *
     * @return string
     */
    public function getSzMD5CheckSum()
    {
        $value = $this->get(self::SZMD5CHECKSUM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szMD5CheckSum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzMD5CheckSum()
    {
        return $this->get(self::SZMD5CHECKSUM) !== null;
    }

    /**
     * Sets value of 'nMD5CheckSumLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMD5CheckSumLen($value)
    {
        return $this->set(self::NMD5CHECKSUMLEN, $value);
    }

    /**
     * Returns value of 'nMD5CheckSumLen' property
     *
     * @return integer
     */
    public function getNMD5CheckSumLen()
    {
        $value = $this->get(self::NMD5CHECKSUMLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMD5CheckSumLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMD5CheckSumLen()
    {
        return $this->get(self::NMD5CHECKSUMLEN) !== null;
    }
}
}