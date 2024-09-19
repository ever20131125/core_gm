<?php
/**
 * Auto generated from authserver.proto at 2021-12-31 01:50:41
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AUSGetAuthInfoResp message
 */
class AUSGetAuthInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZACCOUNTID = 2;
    const NOPTIONALLEN = 3;
    const SZOPTIONAL = 4;

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
        $this->values[self::NOPTIONALLEN] = null;
        $this->values[self::SZOPTIONAL] = null;
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
}
}