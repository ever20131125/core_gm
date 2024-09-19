<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGiveResp message
 */
class RLSGiveResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NGIVEEID = 2;
    const GIVETYPE = 3;
    const NGIVERID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NGIVEEID => array(
            'name' => 'nGiveeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GIVETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GiveType::enmGiveType_None,
            'name' => 'giveType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NGIVERID => array(
            'name' => 'nGiverID',
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
        $this->values[self::NGIVEEID] = null;
        $this->values[self::GIVETYPE] = self::$fields[self::GIVETYPE]['default'];
        $this->values[self::NGIVERID] = null;
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
     * Sets value of 'nGiveeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGiveeID($value)
    {
        return $this->set(self::NGIVEEID, $value);
    }

    /**
     * Returns value of 'nGiveeID' property
     *
     * @return integer
     */
    public function getNGiveeID()
    {
        $value = $this->get(self::NGIVEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGiveeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGiveeID()
    {
        return $this->get(self::NGIVEEID) !== null;
    }

    /**
     * Sets value of 'giveType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGiveType($value)
    {
        return $this->set(self::GIVETYPE, $value);
    }

    /**
     * Returns value of 'giveType' property
     *
     * @return integer
     */
    public function getGiveType()
    {
        $value = $this->get(self::GIVETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'giveType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGiveType()
    {
        return $this->get(self::GIVETYPE) !== null;
    }

    /**
     * Sets value of 'nGiverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGiverID($value)
    {
        return $this->set(self::NGIVERID, $value);
    }

    /**
     * Returns value of 'nGiverID' property
     *
     * @return integer
     */
    public function getNGiverID()
    {
        $value = $this->get(self::NGIVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGiverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGiverID()
    {
        return $this->get(self::NGIVERID) !== null;
    }
}
}