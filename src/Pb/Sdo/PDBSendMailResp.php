<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBSendMailResp message
 */
class PDBSendMailResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NFROMID = 2;
    const NTOID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NFROMID => array(
            'name' => 'nFromID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOID => array(
            'name' => 'nToID',
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
        $this->values[self::NFROMID] = null;
        $this->values[self::NTOID] = null;
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
     * Sets value of 'nFromID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFromID($value)
    {
        return $this->set(self::NFROMID, $value);
    }

    /**
     * Returns value of 'nFromID' property
     *
     * @return integer
     */
    public function getNFromID()
    {
        $value = $this->get(self::NFROMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFromID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFromID()
    {
        return $this->get(self::NFROMID) !== null;
    }

    /**
     * Sets value of 'nToID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNToID($value)
    {
        return $this->set(self::NTOID, $value);
    }

    /**
     * Returns value of 'nToID' property
     *
     * @return integer
     */
    public function getNToID()
    {
        $value = $this->get(self::NTOID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nToID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNToID()
    {
        return $this->get(self::NTOID) !== null;
    }
}
}