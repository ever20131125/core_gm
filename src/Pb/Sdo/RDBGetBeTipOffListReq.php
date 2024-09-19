<?php
/**
 * Auto generated from roledbserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBGetBeTipOffListReq message
 */
class RDBGetBeTipOffListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NFINISHED = 1;
    const NSTART = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NFINISHED => array(
            'default' => 0,
            'name' => 'nFinished',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTART => array(
            'name' => 'nStart',
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
        $this->values[self::NFINISHED] = self::$fields[self::NFINISHED]['default'];
        $this->values[self::NSTART] = null;
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
     * Sets value of 'nFinished' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFinished($value)
    {
        return $this->set(self::NFINISHED, $value);
    }

    /**
     * Returns value of 'nFinished' property
     *
     * @return integer
     */
    public function getNFinished()
    {
        $value = $this->get(self::NFINISHED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFinished' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFinished()
    {
        return $this->get(self::NFINISHED) !== null;
    }

    /**
     * Sets value of 'nStart' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStart($value)
    {
        return $this->set(self::NSTART, $value);
    }

    /**
     * Returns value of 'nStart' property
     *
     * @return integer
     */
    public function getNStart()
    {
        $value = $this->get(self::NSTART);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStart' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStart()
    {
        return $this->get(self::NSTART) !== null;
    }
}
}