<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningEditResp message
 */
class RLSBeckoningEditResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STHEADPIC = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STHEADPIC => array(
            'name' => 'stHeadPic',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PicInfo'
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
        $this->values[self::STHEADPIC] = null;
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
     * Sets value of 'stHeadPic' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PicInfo $value Property value
     *
     * @return null
     */
    public function setStHeadPic(\Xnhd\Core\Pb\Sdo\PicInfo $value=null)
    {
        return $this->set(self::STHEADPIC, $value);
    }

    /**
     * Returns value of 'stHeadPic' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo
     */
    public function getStHeadPic()
    {
        return $this->get(self::STHEADPIC);
    }

    /**
     * Returns true if 'stHeadPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHeadPic()
    {
        return $this->get(self::STHEADPIC) !== null;
    }
}
}