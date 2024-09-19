<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyRankResp message
 */
class SGSQualifyRankResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GAMEMODE = 2;
    const ARRRANKUNIT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GAMEMODE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GameMode::enmGameMode_Invalid,
            'name' => 'gameMode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRRANKUNIT => array(
            'name' => 'arrRankUnit',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyRankUnit'
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
        $this->values[self::GAMEMODE] = self::$fields[self::GAMEMODE]['default'];
        $this->values[self::ARRRANKUNIT] = array();
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
     * Sets value of 'gameMode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGameMode($value)
    {
        return $this->set(self::GAMEMODE, $value);
    }

    /**
     * Returns value of 'gameMode' property
     *
     * @return integer
     */
    public function getGameMode()
    {
        $value = $this->get(self::GAMEMODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gameMode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGameMode()
    {
        return $this->get(self::GAMEMODE) !== null;
    }

    /**
     * Appends value to 'arrRankUnit' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyRankUnit $value Value to append
     *
     * @return null
     */
    public function appendArrRankUnit(\Xnhd\Core\Pb\Sdo\QualifyRankUnit $value)
    {
        return $this->append(self::ARRRANKUNIT, $value);
    }

    /**
     * Clears 'arrRankUnit' list
     *
     * @return null
     */
    public function clearArrRankUnit()
    {
        return $this->clear(self::ARRRANKUNIT);
    }

    /**
     * Returns 'arrRankUnit' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRankUnit[]
     */
    public function getArrRankUnit()
    {
        return $this->get(self::ARRRANKUNIT);
    }

    /**
     * Returns true if 'arrRankUnit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRankUnit()
    {
        return count($this->get(self::ARRRANKUNIT)) !== 0;
    }

    /**
     * Returns 'arrRankUnit' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRankUnitIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRANKUNIT));
    }

    /**
     * Returns element from 'arrRankUnit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRankUnit
     */
    public function getArrRankUnitAt($offset)
    {
        return $this->get(self::ARRRANKUNIT, $offset);
    }

    /**
     * Returns count of 'arrRankUnit' list
     *
     * @return int
     */
    public function getArrRankUnitCount()
    {
        return $this->count(self::ARRRANKUNIT);
    }
}
}