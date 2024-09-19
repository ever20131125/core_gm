<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TaskInfo message
 */
class TaskInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const TASKTYPE = 2;
    const THEME = 3;
    const COND = 4;
    const PROGRESS = 5;
    const STATE = 6;
    const MATERIAL = 7;
    const PRIZELIST = 8;
    const INDEX = 9;
    const RANK = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TASKTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\TaskType::enmTaskType_Grow,
            'name' => 'taskType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THEME => array(
            'name' => 'theme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COND => array(
            'name' => 'cond',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROGRESS => array(
            'name' => 'progress',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATERIAL => array(
            'name' => 'material',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::PRIZELIST => array(
            'name' => 'prizeList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANK => array(
            'name' => 'rank',
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
        $this->values[self::ID] = null;
        $this->values[self::TASKTYPE] = self::$fields[self::TASKTYPE]['default'];
        $this->values[self::THEME] = null;
        $this->values[self::COND] = null;
        $this->values[self::PROGRESS] = null;
        $this->values[self::STATE] = null;
        $this->values[self::MATERIAL] = array();
        $this->values[self::PRIZELIST] = array();
        $this->values[self::INDEX] = null;
        $this->values[self::RANK] = null;
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
     * Sets value of 'taskType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTaskType($value)
    {
        return $this->set(self::TASKTYPE, $value);
    }

    /**
     * Returns value of 'taskType' property
     *
     * @return integer
     */
    public function getTaskType()
    {
        $value = $this->get(self::TASKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'taskType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTaskType()
    {
        return $this->get(self::TASKTYPE) !== null;
    }

    /**
     * Sets value of 'theme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTheme($value)
    {
        return $this->set(self::THEME, $value);
    }

    /**
     * Returns value of 'theme' property
     *
     * @return integer
     */
    public function getTheme()
    {
        $value = $this->get(self::THEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'theme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTheme()
    {
        return $this->get(self::THEME) !== null;
    }

    /**
     * Sets value of 'cond' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCond($value)
    {
        return $this->set(self::COND, $value);
    }

    /**
     * Returns value of 'cond' property
     *
     * @return integer
     */
    public function getCond()
    {
        $value = $this->get(self::COND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cond' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCond()
    {
        return $this->get(self::COND) !== null;
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
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Appends value to 'material' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendMaterial(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::MATERIAL, $value);
    }

    /**
     * Clears 'material' list
     *
     * @return null
     */
    public function clearMaterial()
    {
        return $this->clear(self::MATERIAL);
    }

    /**
     * Returns 'material' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getMaterial()
    {
        return $this->get(self::MATERIAL);
    }

    /**
     * Returns true if 'material' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaterial()
    {
        return count($this->get(self::MATERIAL)) !== 0;
    }

    /**
     * Returns 'material' iterator
     *
     * @return \ArrayIterator
     */
    public function getMaterialIterator()
    {
        return new \ArrayIterator($this->get(self::MATERIAL));
    }

    /**
     * Returns element from 'material' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getMaterialAt($offset)
    {
        return $this->get(self::MATERIAL, $offset);
    }

    /**
     * Returns count of 'material' list
     *
     * @return int
     */
    public function getMaterialCount()
    {
        return $this->count(self::MATERIAL);
    }

    /**
     * Appends value to 'prizeList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendPrizeList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::PRIZELIST, $value);
    }

    /**
     * Clears 'prizeList' list
     *
     * @return null
     */
    public function clearPrizeList()
    {
        return $this->clear(self::PRIZELIST);
    }

    /**
     * Returns 'prizeList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getPrizeList()
    {
        return $this->get(self::PRIZELIST);
    }

    /**
     * Returns true if 'prizeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeList()
    {
        return count($this->get(self::PRIZELIST)) !== 0;
    }

    /**
     * Returns 'prizeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeListIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZELIST));
    }

    /**
     * Returns element from 'prizeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getPrizeListAt($offset)
    {
        return $this->get(self::PRIZELIST, $offset);
    }

    /**
     * Returns count of 'prizeList' list
     *
     * @return int
     */
    public function getPrizeListCount()
    {
        return $this->count(self::PRIZELIST);
    }

    /**
     * Sets value of 'index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return integer
     */
    public function getIndex()
    {
        $value = $this->get(self::INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIndex()
    {
        return $this->get(self::INDEX) !== null;
    }

    /**
     * Sets value of 'rank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRank($value)
    {
        return $this->set(self::RANK, $value);
    }

    /**
     * Returns value of 'rank' property
     *
     * @return integer
     */
    public function getRank()
    {
        $value = $this->get(self::RANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRank()
    {
        return $this->get(self::RANK) !== null;
    }
}
}