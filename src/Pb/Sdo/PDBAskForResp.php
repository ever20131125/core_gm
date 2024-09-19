<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBAskForResp message
 */
class PDBAskForResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NASKERID = 2;
    const NASKEEID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NASKERID => array(
            'name' => 'nAskerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASKEEID => array(
            'name' => 'nAskeeID',
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
        $this->values[self::NASKERID] = null;
        $this->values[self::NASKEEID] = null;
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
     * Sets value of 'nAskerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskerID($value)
    {
        return $this->set(self::NASKERID, $value);
    }

    /**
     * Returns value of 'nAskerID' property
     *
     * @return integer
     */
    public function getNAskerID()
    {
        $value = $this->get(self::NASKERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskerID()
    {
        return $this->get(self::NASKERID) !== null;
    }

    /**
     * Sets value of 'nAskeeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskeeID($value)
    {
        return $this->set(self::NASKEEID, $value);
    }

    /**
     * Returns value of 'nAskeeID' property
     *
     * @return integer
     */
    public function getNAskeeID()
    {
        $value = $this->get(self::NASKEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskeeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskeeID()
    {
        return $this->get(self::NASKEEID) !== null;
    }
}
}