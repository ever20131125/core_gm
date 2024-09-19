<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTPPGameStartResp message
 */
class ACTPPGameStartResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NCOLLECTNUM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NCOLLECTNUM => array(
            'name' => 'nCollectNum',
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
        $this->values[self::NCOLLECTNUM] = null;
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
     * Sets value of 'nCollectNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCollectNum($value)
    {
        return $this->set(self::NCOLLECTNUM, $value);
    }

    /**
     * Returns value of 'nCollectNum' property
     *
     * @return integer
     */
    public function getNCollectNum()
    {
        $value = $this->get(self::NCOLLECTNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCollectNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCollectNum()
    {
        return $this->get(self::NCOLLECTNUM) !== null;
    }
}
}