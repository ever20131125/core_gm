<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WishStarActGroup message
 */
class WishStarActGroup extends \ProtobufMessage
{
    /* Field index constants */
    const INDEX = 1;
    const WISHSTARINFOS = 2;
    const FINALMALEPRIZE = 3;
    const FINALFEMALEPRIZE = 4;
    const HASGOTPRIZE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WISHSTARINFOS => array(
            'name' => 'wishStarInfos',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WishStarActInfo'
        ),
        self::FINALMALEPRIZE => array(
            'name' => 'finalMalePrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::FINALFEMALEPRIZE => array(
            'name' => 'finalFeMalePrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::HASGOTPRIZE => array(
            'name' => 'hasGotPrize',
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
        $this->values[self::INDEX] = null;
        $this->values[self::WISHSTARINFOS] = array();
        $this->values[self::FINALMALEPRIZE] = array();
        $this->values[self::FINALFEMALEPRIZE] = array();
        $this->values[self::HASGOTPRIZE] = null;
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
     * Appends value to 'wishStarInfos' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WishStarActInfo $value Value to append
     *
     * @return null
     */
    public function appendWishStarInfos(\Xnhd\Core\Pb\Sdo\WishStarActInfo $value)
    {
        return $this->append(self::WISHSTARINFOS, $value);
    }

    /**
     * Clears 'wishStarInfos' list
     *
     * @return null
     */
    public function clearWishStarInfos()
    {
        return $this->clear(self::WISHSTARINFOS);
    }

    /**
     * Returns 'wishStarInfos' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WishStarActInfo[]
     */
    public function getWishStarInfos()
    {
        return $this->get(self::WISHSTARINFOS);
    }

    /**
     * Returns true if 'wishStarInfos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWishStarInfos()
    {
        return count($this->get(self::WISHSTARINFOS)) !== 0;
    }

    /**
     * Returns 'wishStarInfos' iterator
     *
     * @return \ArrayIterator
     */
    public function getWishStarInfosIterator()
    {
        return new \ArrayIterator($this->get(self::WISHSTARINFOS));
    }

    /**
     * Returns element from 'wishStarInfos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WishStarActInfo
     */
    public function getWishStarInfosAt($offset)
    {
        return $this->get(self::WISHSTARINFOS, $offset);
    }

    /**
     * Returns count of 'wishStarInfos' list
     *
     * @return int
     */
    public function getWishStarInfosCount()
    {
        return $this->count(self::WISHSTARINFOS);
    }

    /**
     * Appends value to 'finalMalePrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendFinalMalePrize(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::FINALMALEPRIZE, $value);
    }

    /**
     * Clears 'finalMalePrize' list
     *
     * @return null
     */
    public function clearFinalMalePrize()
    {
        return $this->clear(self::FINALMALEPRIZE);
    }

    /**
     * Returns 'finalMalePrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getFinalMalePrize()
    {
        return $this->get(self::FINALMALEPRIZE);
    }

    /**
     * Returns true if 'finalMalePrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFinalMalePrize()
    {
        return count($this->get(self::FINALMALEPRIZE)) !== 0;
    }

    /**
     * Returns 'finalMalePrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getFinalMalePrizeIterator()
    {
        return new \ArrayIterator($this->get(self::FINALMALEPRIZE));
    }

    /**
     * Returns element from 'finalMalePrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getFinalMalePrizeAt($offset)
    {
        return $this->get(self::FINALMALEPRIZE, $offset);
    }

    /**
     * Returns count of 'finalMalePrize' list
     *
     * @return int
     */
    public function getFinalMalePrizeCount()
    {
        return $this->count(self::FINALMALEPRIZE);
    }

    /**
     * Appends value to 'finalFeMalePrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendFinalFeMalePrize(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::FINALFEMALEPRIZE, $value);
    }

    /**
     * Clears 'finalFeMalePrize' list
     *
     * @return null
     */
    public function clearFinalFeMalePrize()
    {
        return $this->clear(self::FINALFEMALEPRIZE);
    }

    /**
     * Returns 'finalFeMalePrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getFinalFeMalePrize()
    {
        return $this->get(self::FINALFEMALEPRIZE);
    }

    /**
     * Returns true if 'finalFeMalePrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFinalFeMalePrize()
    {
        return count($this->get(self::FINALFEMALEPRIZE)) !== 0;
    }

    /**
     * Returns 'finalFeMalePrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getFinalFeMalePrizeIterator()
    {
        return new \ArrayIterator($this->get(self::FINALFEMALEPRIZE));
    }

    /**
     * Returns element from 'finalFeMalePrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getFinalFeMalePrizeAt($offset)
    {
        return $this->get(self::FINALFEMALEPRIZE, $offset);
    }

    /**
     * Returns count of 'finalFeMalePrize' list
     *
     * @return int
     */
    public function getFinalFeMalePrizeCount()
    {
        return $this->count(self::FINALFEMALEPRIZE);
    }

    /**
     * Sets value of 'hasGotPrize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHasGotPrize($value)
    {
        return $this->set(self::HASGOTPRIZE, $value);
    }

    /**
     * Returns value of 'hasGotPrize' property
     *
     * @return integer
     */
    public function getHasGotPrize()
    {
        $value = $this->get(self::HASGOTPRIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hasGotPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasGotPrize()
    {
        return $this->get(self::HASGOTPRIZE) !== null;
    }
}
}