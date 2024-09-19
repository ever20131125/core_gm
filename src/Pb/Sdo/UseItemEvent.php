<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UseItemEvent message
 */
class UseItemEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTARGETID = 2;
    const SOURCE = 3;
    const ARRITEMEXTRA = 4;
    const ARRPRIZE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTARGETID => array(
            'name' => 'nTargetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMEXTRA => array(
            'name' => 'arrItemExtra',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemExtra'
        ),
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NTARGETID] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::ARRITEMEXTRA] = array();
        $this->values[self::ARRPRIZE] = array();
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'nTargetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTargetID($value)
    {
        return $this->set(self::NTARGETID, $value);
    }

    /**
     * Returns value of 'nTargetID' property
     *
     * @return integer
     */
    public function getNTargetID()
    {
        $value = $this->get(self::NTARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTargetID()
    {
        return $this->get(self::NTARGETID) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Appends value to 'arrItemExtra' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemExtra $value Value to append
     *
     * @return null
     */
    public function appendArrItemExtra(\Xnhd\Core\Pb\Sdo\ItemExtra $value)
    {
        return $this->append(self::ARRITEMEXTRA, $value);
    }

    /**
     * Clears 'arrItemExtra' list
     *
     * @return null
     */
    public function clearArrItemExtra()
    {
        return $this->clear(self::ARRITEMEXTRA);
    }

    /**
     * Returns 'arrItemExtra' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra[]
     */
    public function getArrItemExtra()
    {
        return $this->get(self::ARRITEMEXTRA);
    }

    /**
     * Returns true if 'arrItemExtra' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemExtra()
    {
        return count($this->get(self::ARRITEMEXTRA)) !== 0;
    }

    /**
     * Returns 'arrItemExtra' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemExtraIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMEXTRA));
    }

    /**
     * Returns element from 'arrItemExtra' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra
     */
    public function getArrItemExtraAt($offset)
    {
        return $this->get(self::ARRITEMEXTRA, $offset);
    }

    /**
     * Returns count of 'arrItemExtra' list
     *
     * @return int
     */
    public function getArrItemExtraCount()
    {
        return $this->count(self::ARRITEMEXTRA);
    }

    /**
     * Appends value to 'arrPrize' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPrize($value)
    {
        return $this->append(self::ARRPRIZE, $value);
    }

    /**
     * Clears 'arrPrize' list
     *
     * @return null
     */
    public function clearArrPrize()
    {
        return $this->clear(self::ARRPRIZE);
    }

    /**
     * Returns 'arrPrize' list
     *
     * @return integer[]
     */
    public function getArrPrize()
    {
        return $this->get(self::ARRPRIZE);
    }

    /**
     * Returns true if 'arrPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrize()
    {
        return count($this->get(self::ARRPRIZE)) !== 0;
    }

    /**
     * Returns 'arrPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZE));
    }

    /**
     * Returns element from 'arrPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPrizeAt($offset)
    {
        return $this->get(self::ARRPRIZE, $offset);
    }

    /**
     * Returns count of 'arrPrize' list
     *
     * @return int
     */
    public function getArrPrizeCount()
    {
        return $this->count(self::ARRPRIZE);
    }
}
}