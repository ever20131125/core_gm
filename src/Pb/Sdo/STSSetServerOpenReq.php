<?php
/**
 * Auto generated from stateserver.proto at 2021-12-31 05:50:58
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSSetServerOpenReq message
 */
class STSSetServerOpenReq extends \ProtobufMessage
{
    /* Field index constants */
    const NREGISTEROPEN = 1;
    const NCREATEOPEN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NREGISTEROPEN => array(
            'name' => 'nRegisterOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCREATEOPEN => array(
            'name' => 'nCreateOpen',
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
        $this->values[self::NREGISTEROPEN] = null;
        $this->values[self::NCREATEOPEN] = null;
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
     * Sets value of 'nRegisterOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRegisterOpen($value)
    {
        return $this->set(self::NREGISTEROPEN, $value);
    }

    /**
     * Returns value of 'nRegisterOpen' property
     *
     * @return integer
     */
    public function getNRegisterOpen()
    {
        $value = $this->get(self::NREGISTEROPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRegisterOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRegisterOpen()
    {
        return $this->get(self::NREGISTEROPEN) !== null;
    }

    /**
     * Sets value of 'nCreateOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateOpen($value)
    {
        return $this->set(self::NCREATEOPEN, $value);
    }

    /**
     * Returns value of 'nCreateOpen' property
     *
     * @return integer
     */
    public function getNCreateOpen()
    {
        $value = $this->get(self::NCREATEOPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreateOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateOpen()
    {
        return $this->get(self::NCREATEOPEN) !== null;
    }
}
}