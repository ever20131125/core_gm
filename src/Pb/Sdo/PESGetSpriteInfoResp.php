<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESGetSpriteInfoResp message
 */
class PESGetSpriteInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STATUS = 2;
    const ISCANFEEDLOVER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STATUS => array(
            'name' => 'status',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\SpriteStatus'
        ),
        self::ISCANFEEDLOVER => array(
            'name' => 'isCanFeedLover',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::STATUS] = array();
        $this->values[self::ISCANFEEDLOVER] = null;
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
     * Appends value to 'status' list
     *
     * @param \Xnhd\Core\Pb\Sdo\SpriteStatus $value Value to append
     *
     * @return null
     */
    public function appendStatus(\Xnhd\Core\Pb\Sdo\SpriteStatus $value)
    {
        return $this->append(self::STATUS, $value);
    }

    /**
     * Clears 'status' list
     *
     * @return null
     */
    public function clearStatus()
    {
        return $this->clear(self::STATUS);
    }

    /**
     * Returns 'status' list
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteStatus[]
     */
    public function getStatus()
    {
        return $this->get(self::STATUS);
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return count($this->get(self::STATUS)) !== 0;
    }

    /**
     * Returns 'status' iterator
     *
     * @return \ArrayIterator
     */
    public function getStatusIterator()
    {
        return new \ArrayIterator($this->get(self::STATUS));
    }

    /**
     * Returns element from 'status' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\SpriteStatus
     */
    public function getStatusAt($offset)
    {
        return $this->get(self::STATUS, $offset);
    }

    /**
     * Returns count of 'status' list
     *
     * @return int
     */
    public function getStatusCount()
    {
        return $this->count(self::STATUS);
    }

    /**
     * Sets value of 'isCanFeedLover' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsCanFeedLover($value)
    {
        return $this->set(self::ISCANFEEDLOVER, $value);
    }

    /**
     * Returns value of 'isCanFeedLover' property
     *
     * @return boolean
     */
    public function getIsCanFeedLover()
    {
        $value = $this->get(self::ISCANFEEDLOVER);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isCanFeedLover' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsCanFeedLover()
    {
        return $this->get(self::ISCANFEEDLOVER) !== null;
    }
}
}