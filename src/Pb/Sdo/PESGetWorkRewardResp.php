<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESGetWorkRewardResp message
 */
class PESGetWorkRewardResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const PRIZE = 2;
    const STATUS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::PRIZE => array(
            'name' => 'prize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkStatus'
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
        $this->values[self::PRIZE] = array();
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
     * Appends value to 'prize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendPrize(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::PRIZE, $value);
    }

    /**
     * Clears 'prize' list
     *
     * @return null
     */
    public function clearPrize()
    {
        return $this->clear(self::PRIZE);
    }

    /**
     * Returns 'prize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getPrize()
    {
        return $this->get(self::PRIZE);
    }

    /**
     * Returns true if 'prize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrize()
    {
        return count($this->get(self::PRIZE)) !== 0;
    }

    /**
     * Returns 'prize' iterator
     *
     * @return \ArrayIterator
     */
    public function getPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::PRIZE));
    }

    /**
     * Returns element from 'prize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getPrizeAt($offset)
    {
        return $this->get(self::PRIZE, $offset);
    }

    /**
     * Returns count of 'prize' list
     *
     * @return int
     */
    public function getPrizeCount()
    {
        return $this->count(self::PRIZE);
    }

    /**
     * Sets value of 'status' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkStatus $value Property value
     *
     * @return null
     */
    public function setStatus(\Xnhd\Core\Pb\Sdo\WorkStatus $value=null)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkStatus
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
        return $this->get(self::STATUS) !== null;
    }
}
}