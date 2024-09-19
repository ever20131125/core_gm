<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBAvatarGainUpdateNoti message
 */
class PDBAvatarGainUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STAVATARGAIN = 2;
    const ARRBOOKPRIZE = 3;
    const ARRLEVELPRIZE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAVATARGAIN => array(
            'name' => 'stAvatarGain',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AvatarGain'
        ),
        self::ARRBOOKPRIZE => array(
            'name' => 'arrBookPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PrizeCond'
        ),
        self::ARRLEVELPRIZE => array(
            'name' => 'arrLevelPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PrizeCond'
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
        $this->values[self::STAVATARGAIN] = null;
        $this->values[self::ARRBOOKPRIZE] = array();
        $this->values[self::ARRLEVELPRIZE] = array();
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
     * Sets value of 'stAvatarGain' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AvatarGain $value Property value
     *
     * @return null
     */
    public function setStAvatarGain(\Xnhd\Core\Pb\Sdo\AvatarGain $value=null)
    {
        return $this->set(self::STAVATARGAIN, $value);
    }

    /**
     * Returns value of 'stAvatarGain' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AvatarGain
     */
    public function getStAvatarGain()
    {
        return $this->get(self::STAVATARGAIN);
    }

    /**
     * Returns true if 'stAvatarGain' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAvatarGain()
    {
        return $this->get(self::STAVATARGAIN) !== null;
    }

    /**
     * Appends value to 'arrBookPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PrizeCond $value Value to append
     *
     * @return null
     */
    public function appendArrBookPrize(\Xnhd\Core\Pb\Sdo\PrizeCond $value)
    {
        return $this->append(self::ARRBOOKPRIZE, $value);
    }

    /**
     * Clears 'arrBookPrize' list
     *
     * @return null
     */
    public function clearArrBookPrize()
    {
        return $this->clear(self::ARRBOOKPRIZE);
    }

    /**
     * Returns 'arrBookPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond[]
     */
    public function getArrBookPrize()
    {
        return $this->get(self::ARRBOOKPRIZE);
    }

    /**
     * Returns true if 'arrBookPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBookPrize()
    {
        return count($this->get(self::ARRBOOKPRIZE)) !== 0;
    }

    /**
     * Returns 'arrBookPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBookPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBOOKPRIZE));
    }

    /**
     * Returns element from 'arrBookPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond
     */
    public function getArrBookPrizeAt($offset)
    {
        return $this->get(self::ARRBOOKPRIZE, $offset);
    }

    /**
     * Returns count of 'arrBookPrize' list
     *
     * @return int
     */
    public function getArrBookPrizeCount()
    {
        return $this->count(self::ARRBOOKPRIZE);
    }

    /**
     * Appends value to 'arrLevelPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PrizeCond $value Value to append
     *
     * @return null
     */
    public function appendArrLevelPrize(\Xnhd\Core\Pb\Sdo\PrizeCond $value)
    {
        return $this->append(self::ARRLEVELPRIZE, $value);
    }

    /**
     * Clears 'arrLevelPrize' list
     *
     * @return null
     */
    public function clearArrLevelPrize()
    {
        return $this->clear(self::ARRLEVELPRIZE);
    }

    /**
     * Returns 'arrLevelPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond[]
     */
    public function getArrLevelPrize()
    {
        return $this->get(self::ARRLEVELPRIZE);
    }

    /**
     * Returns true if 'arrLevelPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrLevelPrize()
    {
        return count($this->get(self::ARRLEVELPRIZE)) !== 0;
    }

    /**
     * Returns 'arrLevelPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrLevelPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRLEVELPRIZE));
    }

    /**
     * Returns element from 'arrLevelPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond
     */
    public function getArrLevelPrizeAt($offset)
    {
        return $this->get(self::ARRLEVELPRIZE, $offset);
    }

    /**
     * Returns count of 'arrLevelPrize' list
     *
     * @return int
     */
    public function getArrLevelPrizeCount()
    {
        return $this->count(self::ARRLEVELPRIZE);
    }
}
}