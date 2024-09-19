<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASTaskGuildResp message
 */
class TASTaskGuildResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const DAYLIMIT = 2;
    const TIMES = 3;
    const ASSETTYPE = 4;
    const ASSET = 5;
    const WEEKLIMIT = 6;
    const WEEKTIMES = 7;
    const ACCELERATES = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::DAYLIMIT => array(
            'name' => 'daylimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMES => array(
            'name' => 'times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSETTYPE => array(
            'name' => 'assetType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSET => array(
            'name' => 'asset',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEEKLIMIT => array(
            'name' => 'weekLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEEKTIMES => array(
            'name' => 'weekTimes',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACCELERATES => array(
            'name' => 'accelerates',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildTaskAcc'
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
        $this->values[self::DAYLIMIT] = null;
        $this->values[self::TIMES] = null;
        $this->values[self::ASSETTYPE] = null;
        $this->values[self::ASSET] = null;
        $this->values[self::WEEKLIMIT] = null;
        $this->values[self::WEEKTIMES] = null;
        $this->values[self::ACCELERATES] = array();
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
     * Sets value of 'daylimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDaylimit($value)
    {
        return $this->set(self::DAYLIMIT, $value);
    }

    /**
     * Returns value of 'daylimit' property
     *
     * @return integer
     */
    public function getDaylimit()
    {
        $value = $this->get(self::DAYLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'daylimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDaylimit()
    {
        return $this->get(self::DAYLIMIT) !== null;
    }

    /**
     * Sets value of 'times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimes($value)
    {
        return $this->set(self::TIMES, $value);
    }

    /**
     * Returns value of 'times' property
     *
     * @return integer
     */
    public function getTimes()
    {
        $value = $this->get(self::TIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'times' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimes()
    {
        return $this->get(self::TIMES) !== null;
    }

    /**
     * Sets value of 'assetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssetType($value)
    {
        return $this->set(self::ASSETTYPE, $value);
    }

    /**
     * Returns value of 'assetType' property
     *
     * @return integer
     */
    public function getAssetType()
    {
        $value = $this->get(self::ASSETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'assetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAssetType()
    {
        return $this->get(self::ASSETTYPE) !== null;
    }

    /**
     * Sets value of 'asset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAsset($value)
    {
        return $this->set(self::ASSET, $value);
    }

    /**
     * Returns value of 'asset' property
     *
     * @return integer
     */
    public function getAsset()
    {
        $value = $this->get(self::ASSET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'asset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAsset()
    {
        return $this->get(self::ASSET) !== null;
    }

    /**
     * Sets value of 'weekLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeekLimit($value)
    {
        return $this->set(self::WEEKLIMIT, $value);
    }

    /**
     * Returns value of 'weekLimit' property
     *
     * @return integer
     */
    public function getWeekLimit()
    {
        $value = $this->get(self::WEEKLIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'weekLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeekLimit()
    {
        return $this->get(self::WEEKLIMIT) !== null;
    }

    /**
     * Sets value of 'weekTimes' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeekTimes($value)
    {
        return $this->set(self::WEEKTIMES, $value);
    }

    /**
     * Returns value of 'weekTimes' property
     *
     * @return integer
     */
    public function getWeekTimes()
    {
        $value = $this->get(self::WEEKTIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'weekTimes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeekTimes()
    {
        return $this->get(self::WEEKTIMES) !== null;
    }

    /**
     * Appends value to 'accelerates' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildTaskAcc $value Value to append
     *
     * @return null
     */
    public function appendAccelerates(\Xnhd\Core\Pb\Sdo\GuildTaskAcc $value)
    {
        return $this->append(self::ACCELERATES, $value);
    }

    /**
     * Clears 'accelerates' list
     *
     * @return null
     */
    public function clearAccelerates()
    {
        return $this->clear(self::ACCELERATES);
    }

    /**
     * Returns 'accelerates' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildTaskAcc[]
     */
    public function getAccelerates()
    {
        return $this->get(self::ACCELERATES);
    }

    /**
     * Returns true if 'accelerates' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccelerates()
    {
        return count($this->get(self::ACCELERATES)) !== 0;
    }

    /**
     * Returns 'accelerates' iterator
     *
     * @return \ArrayIterator
     */
    public function getAcceleratesIterator()
    {
        return new \ArrayIterator($this->get(self::ACCELERATES));
    }

    /**
     * Returns element from 'accelerates' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildTaskAcc
     */
    public function getAcceleratesAt($offset)
    {
        return $this->get(self::ACCELERATES, $offset);
    }

    /**
     * Returns count of 'accelerates' list
     *
     * @return int
     */
    public function getAcceleratesCount()
    {
        return $this->count(self::ACCELERATES);
    }
}
}