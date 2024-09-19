<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TimeSegment message
 */
class TimeSegment extends \ProtobufMessage
{
    /* Field index constants */
    const NSTART = 1;
    const NEND = 2;
    const NCNT = 3;
    const NIFGOT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSTART => array(
            'name' => 'nStart',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEND => array(
            'name' => 'nEnd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCNT => array(
            'name' => 'nCnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NIFGOT => array(
            'name' => 'nIfGot',
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
        $this->values[self::NSTART] = null;
        $this->values[self::NEND] = null;
        $this->values[self::NCNT] = null;
        $this->values[self::NIFGOT] = null;
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

    /**
     * Sets value of 'nEnd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEnd($value)
    {
        return $this->set(self::NEND, $value);
    }

    /**
     * Returns value of 'nEnd' property
     *
     * @return integer
     */
    public function getNEnd()
    {
        $value = $this->get(self::NEND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEnd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEnd()
    {
        return $this->get(self::NEND) !== null;
    }

    /**
     * Sets value of 'nCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCnt($value)
    {
        return $this->set(self::NCNT, $value);
    }

    /**
     * Returns value of 'nCnt' property
     *
     * @return integer
     */
    public function getNCnt()
    {
        $value = $this->get(self::NCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCnt()
    {
        return $this->get(self::NCNT) !== null;
    }

    /**
     * Sets value of 'nIfGot' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIfGot($value)
    {
        return $this->set(self::NIFGOT, $value);
    }

    /**
     * Returns value of 'nIfGot' property
     *
     * @return integer
     */
    public function getNIfGot()
    {
        $value = $this->get(self::NIFGOT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIfGot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIfGot()
    {
        return $this->get(self::NIFGOT) !== null;
    }
}
}