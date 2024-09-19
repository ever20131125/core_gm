<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetRewardInfoResp message
 */
class GDSGetRewardInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRREWARD = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRREWARD => array(
            'name' => 'arrReward',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildReward'
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
        $this->values[self::ARRREWARD] = array();
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
     * Appends value to 'arrReward' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildReward $value Value to append
     *
     * @return null
     */
    public function appendArrReward(\Xnhd\Core\Pb\Sdo\GuildReward $value)
    {
        return $this->append(self::ARRREWARD, $value);
    }

    /**
     * Clears 'arrReward' list
     *
     * @return null
     */
    public function clearArrReward()
    {
        return $this->clear(self::ARRREWARD);
    }

    /**
     * Returns 'arrReward' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildReward[]
     */
    public function getArrReward()
    {
        return $this->get(self::ARRREWARD);
    }

    /**
     * Returns true if 'arrReward' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrReward()
    {
        return count($this->get(self::ARRREWARD)) !== 0;
    }

    /**
     * Returns 'arrReward' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRewardIterator()
    {
        return new \ArrayIterator($this->get(self::ARRREWARD));
    }

    /**
     * Returns element from 'arrReward' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildReward
     */
    public function getArrRewardAt($offset)
    {
        return $this->get(self::ARRREWARD, $offset);
    }

    /**
     * Returns count of 'arrReward' list
     *
     * @return int
     */
    public function getArrRewardCount()
    {
        return $this->count(self::ARRREWARD);
    }
}
}