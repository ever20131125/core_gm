<?php
/**
 * Auto generated from taskserver.proto at 2021-10-20 06:51:34
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetPuzzleCustomizeResp message
 */
class TASGetPuzzleCustomizeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const TYPE = 2;
    const LOCKED = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\PuzzleLockType::enmPuzzleLockType_Invalid,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCKED => array(
            'name' => 'locked',
            'repeated' => true,
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
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::LOCKED] = array();
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Appends value to 'locked' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendLocked($value)
    {
        return $this->append(self::LOCKED, $value);
    }

    /**
     * Clears 'locked' list
     *
     * @return null
     */
    public function clearLocked()
    {
        return $this->clear(self::LOCKED);
    }

    /**
     * Returns 'locked' list
     *
     * @return integer[]
     */
    public function getLocked()
    {
        return $this->get(self::LOCKED);
    }

    /**
     * Returns true if 'locked' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLocked()
    {
        return count($this->get(self::LOCKED)) !== 0;
    }

    /**
     * Returns 'locked' iterator
     *
     * @return \ArrayIterator
     */
    public function getLockedIterator()
    {
        return new \ArrayIterator($this->get(self::LOCKED));
    }

    /**
     * Returns element from 'locked' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getLockedAt($offset)
    {
        return $this->get(self::LOCKED, $offset);
    }

    /**
     * Returns count of 'locked' list
     *
     * @return int
     */
    public function getLockedCount()
    {
        return $this->count(self::LOCKED);
    }
}
}