<?php
/**
 * Auto generated from authserver.proto at 2021-12-31 01:50:41
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AUSPushAuthInfoReq message
 */
class AUSPushAuthInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZACCOUNTID = 1;
    const NOPTIONALLEN = 2;
    const SZOPTIONAL = 3;
    const NPLAYERSIGNATURELEN = 4;
    const SZPLAYERSIGNATURE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOPTIONALLEN => array(
            'name' => 'nOptionalLen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZOPTIONAL => array(
            'name' => 'szOptional',
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NOPTIONALLEN] = null;
        $this->values[self::SZOPTIONAL] = null;
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
     * Sets value of 'nOptionalLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOptionalLen($value)
    {
        return $this->set(self::NOPTIONALLEN, $value);
    }

    /**
     * Returns value of 'nOptionalLen' property
     *
     * @return integer
     */
    public function getNOptionalLen()
    {
        $value = $this->get(self::NOPTIONALLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOptionalLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOptionalLen()
    {
        return $this->get(self::NOPTIONALLEN) !== null;
    }

    /**
     * Sets value of 'szOptional' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOptional($value)
    {
        return $this->set(self::SZOPTIONAL, $value);
    }

    /**
     * Returns value of 'szOptional' property
     *
     * @return string
     */
    public function getSzOptional()
    {
        $value = $this->get(self::SZOPTIONAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOptional' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOptional()
    {
        return $this->get(self::SZOPTIONAL) !== null;
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