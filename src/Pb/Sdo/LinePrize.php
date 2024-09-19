<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LinePrize message
 */
class LinePrize extends \ProtobufMessage
{
    /* Field index constants */
    const LINETYPE = 1;
    const ARRITEMBASE = 2;
    const STATUS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LINETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MergeLineType::enmMergeLineType_None,
            'name' => 'lineType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::STATUS => array(
            'name' => 'status',
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
        $this->values[self::LINETYPE] = self::$fields[self::LINETYPE]['default'];
        $this->values[self::ARRITEMBASE] = array();
        $this->values[self::STATUS] = null;
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
     * Sets value of 'lineType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLineType($value)
    {
        return $this->set(self::LINETYPE, $value);
    }

    /**
     * Returns value of 'lineType' property
     *
     * @return integer
     */
    public function getLineType()
    {
        $value = $this->get(self::LINETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lineType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLineType()
    {
        return $this->get(self::LINETYPE) !== null;
    }

    /**
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }
}
}