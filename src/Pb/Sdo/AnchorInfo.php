<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AnchorInfo message
 */
class AnchorInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROOMID = 1;
    const ANCHORIDS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROOMID => array(
            'name' => 'roomid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ANCHORIDS => array(
            'name' => 'anchorids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::ROOMID] = null;
        $this->values[self::ANCHORIDS] = array();
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
     * Sets value of 'roomid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoomid($value)
    {
        return $this->set(self::ROOMID, $value);
    }

    /**
     * Returns value of 'roomid' property
     *
     * @return string
     */
    public function getRoomid()
    {
        $value = $this->get(self::ROOMID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'roomid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomid()
    {
        return $this->get(self::ROOMID) !== null;
    }

    /**
     * Appends value to 'anchorids' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendAnchorids($value)
    {
        return $this->append(self::ANCHORIDS, $value);
    }

    /**
     * Clears 'anchorids' list
     *
     * @return null
     */
    public function clearAnchorids()
    {
        return $this->clear(self::ANCHORIDS);
    }

    /**
     * Returns 'anchorids' list
     *
     * @return string[]
     */
    public function getAnchorids()
    {
        return $this->get(self::ANCHORIDS);
    }

    /**
     * Returns true if 'anchorids' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnchorids()
    {
        return count($this->get(self::ANCHORIDS)) !== 0;
    }

    /**
     * Returns 'anchorids' iterator
     *
     * @return \ArrayIterator
     */
    public function getAnchoridsIterator()
    {
        return new \ArrayIterator($this->get(self::ANCHORIDS));
    }

    /**
     * Returns element from 'anchorids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getAnchoridsAt($offset)
    {
        return $this->get(self::ANCHORIDS, $offset);
    }

    /**
     * Returns count of 'anchorids' list
     *
     * @return int
     */
    public function getAnchoridsCount()
    {
        return $this->count(self::ANCHORIDS);
    }
}
}