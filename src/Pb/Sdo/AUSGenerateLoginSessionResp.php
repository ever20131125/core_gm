<?php
/**
 * Auto generated from authserver.proto at 2021-12-31 01:50:41
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AUSGenerateLoginSessionResp message
 */
class AUSGenerateLoginSessionResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NSESSIONKEYLEN = 3;
    const SZSESSIONKEY = 4;
    const NPLAYERSIGNATURELEN = 5;
    const SZPLAYERSIGNATURE = 6;

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
        self::NSESSIONKEYLEN => array(
            'name' => 'nSessionKeyLen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZSESSIONKEY => array(
            'name' => 'szSessionKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NPLAYERSIGNATURELEN => array(
            'name' => 'nPlayerSignatureLen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZPLAYERSIGNATURE => array(
            'name' => 'szPlayerSignature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NSESSIONKEYLEN] = null;
        $this->values[self::SZSESSIONKEY] = null;
        $this->values[self::NPLAYERSIGNATURELEN] = null;
        $this->values[self::SZPLAYERSIGNATURE] = null;
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
     * Sets value of 'nSessionKeyLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSessionKeyLen($value)
    {
        return $this->set(self::NSESSIONKEYLEN, $value);
    }

    /**
     * Returns value of 'nSessionKeyLen' property
     *
     * @return integer
     */
    public function getNSessionKeyLen()
    {
        $value = $this->get(self::NSESSIONKEYLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSessionKeyLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSessionKeyLen()
    {
        return $this->get(self::NSESSIONKEYLEN) !== null;
    }

    /**
     * Sets value of 'szSessionKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzSessionKey($value)
    {
        return $this->set(self::SZSESSIONKEY, $value);
    }

    /**
     * Returns value of 'szSessionKey' property
     *
     * @return string
     */
    public function getSzSessionKey()
    {
        $value = $this->get(self::SZSESSIONKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szSessionKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzSessionKey()
    {
        return $this->get(self::SZSESSIONKEY) !== null;
    }

    /**
     * Sets value of 'nPlayerSignatureLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPlayerSignatureLen($value)
    {
        return $this->set(self::NPLAYERSIGNATURELEN, $value);
    }

    /**
     * Returns value of 'nPlayerSignatureLen' property
     *
     * @return integer
     */
    public function getNPlayerSignatureLen()
    {
        $value = $this->get(self::NPLAYERSIGNATURELEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPlayerSignatureLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPlayerSignatureLen()
    {
        return $this->get(self::NPLAYERSIGNATURELEN) !== null;
    }

    /**
     * Sets value of 'szPlayerSignature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPlayerSignature($value)
    {
        return $this->set(self::SZPLAYERSIGNATURE, $value);
    }

    /**
     * Returns value of 'szPlayerSignature' property
     *
     * @return string
     */
    public function getSzPlayerSignature()
    {
        $value = $this->get(self::SZPLAYERSIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPlayerSignature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPlayerSignature()
    {
        return $this->get(self::SZPLAYERSIGNATURE) !== null;
    }
}
}