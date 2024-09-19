<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TLInfo message
 */
class TLInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const TYPE = 2;
    const LEVEL = 3;
    const CONTENT = 4;
    const SIMILARITY = 5;
    const LABELS = 6;
    const SOURCEPLAYER = 7;
    const TARGETRID = 8;
    const TIMESTAMP = 9;
    const GLOW = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIMILARITY => array(
            'name' => 'similarity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LABELS => array(
            'name' => 'labels',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCEPLAYER => array(
            'name' => 'sourcePlayer',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TLPlayerBriefInfo'
        ),
        self::TARGETRID => array(
            'name' => 'targetRID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GLOW => array(
            'default' => false,
            'name' => 'glow',
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
        $this->values[self::ID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::SIMILARITY] = null;
        $this->values[self::LABELS] = array();
        $this->values[self::SOURCEPLAYER] = null;
        $this->values[self::TARGETRID] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::GLOW] = self::$fields[self::GLOW]['default'];
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
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
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
    }

    /**
     * Sets value of 'similarity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSimilarity($value)
    {
        return $this->set(self::SIMILARITY, $value);
    }

    /**
     * Returns value of 'similarity' property
     *
     * @return integer
     */
    public function getSimilarity()
    {
        $value = $this->get(self::SIMILARITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'similarity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSimilarity()
    {
        return $this->get(self::SIMILARITY) !== null;
    }

    /**
     * Appends value to 'labels' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendLabels($value)
    {
        return $this->append(self::LABELS, $value);
    }

    /**
     * Clears 'labels' list
     *
     * @return null
     */
    public function clearLabels()
    {
        return $this->clear(self::LABELS);
    }

    /**
     * Returns 'labels' list
     *
     * @return integer[]
     */
    public function getLabels()
    {
        return $this->get(self::LABELS);
    }

    /**
     * Returns true if 'labels' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabels()
    {
        return count($this->get(self::LABELS)) !== 0;
    }

    /**
     * Returns 'labels' iterator
     *
     * @return \ArrayIterator
     */
    public function getLabelsIterator()
    {
        return new \ArrayIterator($this->get(self::LABELS));
    }

    /**
     * Returns element from 'labels' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getLabelsAt($offset)
    {
        return $this->get(self::LABELS, $offset);
    }

    /**
     * Returns count of 'labels' list
     *
     * @return int
     */
    public function getLabelsCount()
    {
        return $this->count(self::LABELS);
    }

    /**
     * Sets value of 'sourcePlayer' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TLPlayerBriefInfo $value Property value
     *
     * @return null
     */
    public function setSourcePlayer(\Xnhd\Core\Pb\Sdo\TLPlayerBriefInfo $value=null)
    {
        return $this->set(self::SOURCEPLAYER, $value);
    }

    /**
     * Returns value of 'sourcePlayer' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TLPlayerBriefInfo
     */
    public function getSourcePlayer()
    {
        return $this->get(self::SOURCEPLAYER);
    }

    /**
     * Returns true if 'sourcePlayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourcePlayer()
    {
        return $this->get(self::SOURCEPLAYER) !== null;
    }

    /**
     * Sets value of 'targetRID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTargetRID($value)
    {
        return $this->set(self::TARGETRID, $value);
    }

    /**
     * Returns value of 'targetRID' property
     *
     * @return integer
     */
    public function getTargetRID()
    {
        $value = $this->get(self::TARGETRID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'targetRID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTargetRID()
    {
        return $this->get(self::TARGETRID) !== null;
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestamp()
    {
        return $this->get(self::TIMESTAMP) !== null;
    }

    /**
     * Sets value of 'glow' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setGlow($value)
    {
        return $this->set(self::GLOW, $value);
    }

    /**
     * Returns value of 'glow' property
     *
     * @return boolean
     */
    public function getGlow()
    {
        $value = $this->get(self::GLOW);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'glow' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGlow()
    {
        return $this->get(self::GLOW) !== null;
    }
}
}