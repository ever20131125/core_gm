<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESAchievementResp message
 */
class PESAchievementResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const SPRITENUMBER = 3;
    const FEEDLOVERNUMBER = 4;
    const RARITYSTATISTICS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPRITENUMBER => array(
            'name' => 'spriteNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FEEDLOVERNUMBER => array(
            'name' => 'feedLoverNumber',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RARITYSTATISTICS => array(
            'name' => 'rarityStatistics',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RarityStatistics'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::SPRITENUMBER] = null;
        $this->values[self::FEEDLOVERNUMBER] = null;
        $this->values[self::RARITYSTATISTICS] = array();
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
     * Sets value of 'roleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleId($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleId' property
     *
     * @return integer
     */
    public function getRoleId()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleId()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'spriteNumber' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpriteNumber($value)
    {
        return $this->set(self::SPRITENUMBER, $value);
    }

    /**
     * Returns value of 'spriteNumber' property
     *
     * @return integer
     */
    public function getSpriteNumber()
    {
        $value = $this->get(self::SPRITENUMBER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'spriteNumber' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpriteNumber()
    {
        return $this->get(self::SPRITENUMBER) !== null;
    }

    /**
     * Sets value of 'feedLoverNumber' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFeedLoverNumber($value)
    {
        return $this->set(self::FEEDLOVERNUMBER, $value);
    }

    /**
     * Returns value of 'feedLoverNumber' property
     *
     * @return integer
     */
    public function getFeedLoverNumber()
    {
        $value = $this->get(self::FEEDLOVERNUMBER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'feedLoverNumber' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedLoverNumber()
    {
        return $this->get(self::FEEDLOVERNUMBER) !== null;
    }

    /**
     * Appends value to 'rarityStatistics' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RarityStatistics $value Value to append
     *
     * @return null
     */
    public function appendRarityStatistics(\Xnhd\Core\Pb\Sdo\RarityStatistics $value)
    {
        return $this->append(self::RARITYSTATISTICS, $value);
    }

    /**
     * Clears 'rarityStatistics' list
     *
     * @return null
     */
    public function clearRarityStatistics()
    {
        return $this->clear(self::RARITYSTATISTICS);
    }

    /**
     * Returns 'rarityStatistics' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RarityStatistics[]
     */
    public function getRarityStatistics()
    {
        return $this->get(self::RARITYSTATISTICS);
    }

    /**
     * Returns true if 'rarityStatistics' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRarityStatistics()
    {
        return count($this->get(self::RARITYSTATISTICS)) !== 0;
    }

    /**
     * Returns 'rarityStatistics' iterator
     *
     * @return \ArrayIterator
     */
    public function getRarityStatisticsIterator()
    {
        return new \ArrayIterator($this->get(self::RARITYSTATISTICS));
    }

    /**
     * Returns element from 'rarityStatistics' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RarityStatistics
     */
    public function getRarityStatisticsAt($offset)
    {
        return $this->get(self::RARITYSTATISTICS, $offset);
    }

    /**
     * Returns count of 'rarityStatistics' list
     *
     * @return int
     */
    public function getRarityStatisticsCount()
    {
        return $this->count(self::RARITYSTATISTICS);
    }
}
}