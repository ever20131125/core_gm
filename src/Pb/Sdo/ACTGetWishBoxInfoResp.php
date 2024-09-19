<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetWishBoxInfoResp message
 */
class ACTGetWishBoxInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NBUYCOUNT = 2;
    const NWISHCOUNT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NBUYCOUNT => array(
            'name' => 'nBuyCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWISHCOUNT => array(
            'name' => 'nWishCount',
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
        $this->values[self::NBUYCOUNT] = null;
        $this->values[self::NWISHCOUNT] = null;
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
     * Sets value of 'nBuyCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBuyCount($value)
    {
        return $this->set(self::NBUYCOUNT, $value);
    }

    /**
     * Returns value of 'nBuyCount' property
     *
     * @return integer
     */
    public function getNBuyCount()
    {
        $value = $this->get(self::NBUYCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBuyCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBuyCount()
    {
        return $this->get(self::NBUYCOUNT) !== null;
    }

    /**
     * Sets value of 'nWishCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWishCount($value)
    {
        return $this->set(self::NWISHCOUNT, $value);
    }

    /**
     * Returns value of 'nWishCount' property
     *
     * @return integer
     */
    public function getNWishCount()
    {
        $value = $this->get(self::NWISHCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWishCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWishCount()
    {
        return $this->get(self::NWISHCOUNT) !== null;
    }
}
}