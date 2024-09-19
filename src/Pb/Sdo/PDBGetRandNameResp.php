<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRandNameResp message
 */
class PDBGetRandNameResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZRANDOMNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SZRANDOMNAME => array(
            'name' => 'szRandomName',
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
        $this->values[self::SZRANDOMNAME] = null;
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
     * Sets value of 'szRandomName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRandomName($value)
    {
        return $this->set(self::SZRANDOMNAME, $value);
    }

    /**
     * Returns value of 'szRandomName' property
     *
     * @return string
     */
    public function getSzRandomName()
    {
        $value = $this->get(self::SZRANDOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRandomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRandomName()
    {
        return $this->get(self::SZRANDOMNAME) !== null;
    }
}
}