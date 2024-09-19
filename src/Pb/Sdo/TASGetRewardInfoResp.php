<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetRewardInfoResp message
 */
class TASGetRewardInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRPRIZE = 2;
    const ARRLOOT = 3;
    const ARRLOOTGAINED = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
        ),
        self::ARRLOOT => array(
            'name' => 'arrLoot',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::ARRLOOTGAINED => array(
            'name' => 'arrLootGained',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemGained'
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
        $this->values[self::ARRPRIZE] = array();
        $this->values[self::ARRLOOT] = array();
        $this->values[self::ARRLOOTGAINED] = array();
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
     * Appends value to 'arrPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Value to append
     *
     * @return null
     */
    public function appendArrPrize(\Xnhd\Core\Pb\Sdo\ItemGained $value)
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
     * @return \Xnhd\Core\Pb\Sdo\ItemGained[]
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
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
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

    /**
     * Appends value to 'arrLoot' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrLoot(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRLOOT, $value);
    }

    /**
     * Clears 'arrLoot' list
     *
     * @return null
     */
    public function clearArrLoot()
    {
        return $this->clear(self::ARRLOOT);
    }

    /**
     * Returns 'arrLoot' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrLoot()
    {
        return $this->get(self::ARRLOOT);
    }

    /**
     * Returns true if 'arrLoot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLoot()
    {
        return count($this->get(self::ARRLOOT)) !== 0;
    }

    /**
     * Returns 'arrLoot' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLootIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLOOT));
    }

    /**
     * Returns element from 'arrLoot' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrLootAt($offset)
    {
        return $this->get(self::ARRLOOT, $offset);
    }

    /**
     * Returns count of 'arrLoot' list
     *
     * @return int
     */
    public function getArrLootCount()
    {
        return $this->count(self::ARRLOOT);
    }

    /**
     * Appends value to 'arrLootGained' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemGained $value Value to append
     *
     * @return null
     */
    public function appendArrLootGained(\Xnhd\Core\Pb\Sdo\ItemGained $value)
    {
        return $this->append(self::ARRLOOTGAINED, $value);
    }

    /**
     * Clears 'arrLootGained' list
     *
     * @return null
     */
    public function clearArrLootGained()
    {
        return $this->clear(self::ARRLOOTGAINED);
    }

    /**
     * Returns 'arrLootGained' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained[]
     */
    public function getArrLootGained()
    {
        return $this->get(self::ARRLOOTGAINED);
    }

    /**
     * Returns true if 'arrLootGained' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLootGained()
    {
        return count($this->get(self::ARRLOOTGAINED)) !== 0;
    }

    /**
     * Returns 'arrLootGained' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLootGainedIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLOOTGAINED));
    }

    /**
     * Returns element from 'arrLootGained' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemGained
     */
    public function getArrLootGainedAt($offset)
    {
        return $this->get(self::ARRLOOTGAINED, $offset);
    }

    /**
     * Returns count of 'arrLootGained' list
     *
     * @return int
     */
    public function getArrLootGainedCount()
    {
        return $this->count(self::ARRLOOTGAINED);
    }
}
}