<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetWeddingVideoResp message
 */
class GASGetWeddingVideoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NWEDDINGID = 2;
    const STVIDEO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NWEDDINGID => array(
            'name' => 'nWeddingID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STVIDEO => array(
            'name' => 'stVideo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WeddingVideo'
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
        $this->values[self::NWEDDINGID] = null;
        $this->values[self::STVIDEO] = null;
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
     * Sets value of 'nWeddingID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingID($value)
    {
        return $this->set(self::NWEDDINGID, $value);
    }

    /**
     * Returns value of 'nWeddingID' property
     *
     * @return integer
     */
    public function getNWeddingID()
    {
        $value = $this->get(self::NWEDDINGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingID()
    {
        return $this->get(self::NWEDDINGID) !== null;
    }

    /**
     * Sets value of 'stVideo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WeddingVideo $value Property value
     *
     * @return null
     */
    public function setStVideo(\Xnhd\Core\Pb\Sdo\WeddingVideo $value=null)
    {
        return $this->set(self::STVIDEO, $value);
    }

    /**
     * Returns value of 'stVideo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WeddingVideo
     */
    public function getStVideo()
    {
        return $this->get(self::STVIDEO);
    }

    /**
     * Returns true if 'stVideo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStVideo()
    {
        return $this->get(self::STVIDEO) !== null;
    }
}
}