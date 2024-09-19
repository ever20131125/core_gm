<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetGuildConfigResp message
 */
class GDSGetGuildConfigResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NRENAMECNT = 2;
    const NRENAMEQUANTITY = 3;
    const NITEMID = 4;
    const NDISSOLVE = 5;
    const NTRANSFOR = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NRENAMECNT => array(
            'name' => 'nRenameCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NRENAMEQUANTITY => array(
            'name' => 'nRenameQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NDISSOLVE => array(
            'name' => 'nDissolve',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTRANSFOR => array(
            'name' => 'nTransfor',
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
        $this->values[self::NRENAMECNT] = null;
        $this->values[self::NRENAMEQUANTITY] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NDISSOLVE] = null;
        $this->values[self::NTRANSFOR] = null;
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
     * Sets value of 'nRenameCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRenameCnt($value)
    {
        return $this->set(self::NRENAMECNT, $value);
    }

    /**
     * Returns value of 'nRenameCnt' property
     *
     * @return integer
     */
    public function getNRenameCnt()
    {
        $value = $this->get(self::NRENAMECNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRenameCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRenameCnt()
    {
        return $this->get(self::NRENAMECNT) !== null;
    }

    /**
     * Sets value of 'nRenameQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRenameQuantity($value)
    {
        return $this->set(self::NRENAMEQUANTITY, $value);
    }

    /**
     * Returns value of 'nRenameQuantity' property
     *
     * @return integer
     */
    public function getNRenameQuantity()
    {
        $value = $this->get(self::NRENAMEQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRenameQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRenameQuantity()
    {
        return $this->get(self::NRENAMEQUANTITY) !== null;
    }

    /**
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nDissolve' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNDissolve($value)
    {
        return $this->set(self::NDISSOLVE, $value);
    }

    /**
     * Returns value of 'nDissolve' property
     *
     * @return integer
     */
    public function getNDissolve()
    {
        $value = $this->get(self::NDISSOLVE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nDissolve' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNDissolve()
    {
        return $this->get(self::NDISSOLVE) !== null;
    }

    /**
     * Sets value of 'nTransfor' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTransfor($value)
    {
        return $this->set(self::NTRANSFOR, $value);
    }

    /**
     * Returns value of 'nTransfor' property
     *
     * @return integer
     */
    public function getNTransfor()
    {
        $value = $this->get(self::NTRANSFOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTransfor' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTransfor()
    {
        return $this->get(self::NTRANSFOR) !== null;
    }
}
}