<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AchievementInfo message
 */
class AchievementInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const LEVEL = 2;
    const PROGRESS = 3;
    const RECORD = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROGRESS => array(
            'name' => 'progress',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECORD => array(
            'name' => 'record',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AchievementRecord'
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
        $this->values[self::TYPE] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::PROGRESS] = null;
        $this->values[self::RECORD] = array();
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
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }

    /**
     * Sets value of 'progress' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProgress($value)
    {
        return $this->set(self::PROGRESS, $value);
    }

    /**
     * Returns value of 'progress' property
     *
     * @return integer
     */
    public function getProgress()
    {
        $value = $this->get(self::PROGRESS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'progress' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProgress()
    {
        return $this->get(self::PROGRESS) !== null;
    }

    /**
     * Appends value to 'record' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AchievementRecord $value Value to append
     *
     * @return null
     */
    public function appendRecord(\Xnhd\Core\Pb\Sdo\AchievementRecord $value)
    {
        return $this->append(self::RECORD, $value);
    }

    /**
     * Clears 'record' list
     *
     * @return null
     */
    public function clearRecord()
    {
        return $this->clear(self::RECORD);
    }

    /**
     * Returns 'record' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AchievementRecord[]
     */
    public function getRecord()
    {
        return $this->get(self::RECORD);
    }

    /**
     * Returns true if 'record' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecord()
    {
        return count($this->get(self::RECORD)) !== 0;
    }

    /**
     * Returns 'record' iterator
     *
     * @return \ArrayIterator
     */
    public function getRecordIterator()
    {
        return new \ArrayIterator($this->get(self::RECORD));
    }

    /**
     * Returns element from 'record' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AchievementRecord
     */
    public function getRecordAt($offset)
    {
        return $this->get(self::RECORD, $offset);
    }

    /**
     * Returns count of 'record' list
     *
     * @return int
     */
    public function getRecordCount()
    {
        return $this->count(self::RECORD);
    }
}
}