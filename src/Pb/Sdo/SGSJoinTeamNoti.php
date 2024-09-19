<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSJoinTeamNoti message
 */
class SGSJoinTeamNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NHOSTID = 2;
    const NTEAMID = 3;
    const ARRROLEID = 4;
    const ARRPOSID = 6;
    const SOURCE = 7;
    const ARRGAMEPLAY = 8;
    const ARROPTION = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NHOSTID => array(
            'name' => 'nHostID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTEAMID => array(
            'name' => 'nTeamID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPOSID => array(
            'name' => 'arrPosID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGAMEPLAY => array(
            'name' => 'arrGamePlay',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARROPTION => array(
            'name' => 'arrOption',
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
        $this->values[self::NHOSTID] = null;
        $this->values[self::NTEAMID] = null;
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRPOSID] = array();
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::ARRGAMEPLAY] = array();
        $this->values[self::ARROPTION] = array();
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
     * Sets value of 'nHostID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNHostID($value)
    {
        return $this->set(self::NHOSTID, $value);
    }

    /**
     * Returns value of 'nHostID' property
     *
     * @return integer
     */
    public function getNHostID()
    {
        $value = $this->get(self::NHOSTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nHostID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNHostID()
    {
        return $this->get(self::NHOSTID) !== null;
    }

    /**
     * Sets value of 'nTeamID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTeamID($value)
    {
        return $this->set(self::NTEAMID, $value);
    }

    /**
     * Returns value of 'nTeamID' property
     *
     * @return integer
     */
    public function getNTeamID()
    {
        $value = $this->get(self::NTEAMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTeamID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTeamID()
    {
        return $this->get(self::NTEAMID) !== null;
    }

    /**
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }

    /**
     * Appends value to 'arrPosID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPosID($value)
    {
        return $this->append(self::ARRPOSID, $value);
    }

    /**
     * Clears 'arrPosID' list
     *
     * @return null
     */
    public function clearArrPosID()
    {
        return $this->clear(self::ARRPOSID);
    }

    /**
     * Returns 'arrPosID' list
     *
     * @return integer[]
     */
    public function getArrPosID()
    {
        return $this->get(self::ARRPOSID);
    }

    /**
     * Returns true if 'arrPosID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPosID()
    {
        return count($this->get(self::ARRPOSID)) !== 0;
    }

    /**
     * Returns 'arrPosID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPosIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPOSID));
    }

    /**
     * Returns element from 'arrPosID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPosIDAt($offset)
    {
        return $this->get(self::ARRPOSID, $offset);
    }

    /**
     * Returns count of 'arrPosID' list
     *
     * @return int
     */
    public function getArrPosIDCount()
    {
        return $this->count(self::ARRPOSID);
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
     * Appends value to 'arrGamePlay' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGamePlay($value)
    {
        return $this->append(self::ARRGAMEPLAY, $value);
    }

    /**
     * Clears 'arrGamePlay' list
     *
     * @return null
     */
    public function clearArrGamePlay()
    {
        return $this->clear(self::ARRGAMEPLAY);
    }

    /**
     * Returns 'arrGamePlay' list
     *
     * @return integer[]
     */
    public function getArrGamePlay()
    {
        return $this->get(self::ARRGAMEPLAY);
    }

    /**
     * Returns true if 'arrGamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGamePlay()
    {
        return count($this->get(self::ARRGAMEPLAY)) !== 0;
    }

    /**
     * Returns 'arrGamePlay' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGamePlayIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGAMEPLAY));
    }

    /**
     * Returns element from 'arrGamePlay' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGamePlayAt($offset)
    {
        return $this->get(self::ARRGAMEPLAY, $offset);
    }

    /**
     * Returns count of 'arrGamePlay' list
     *
     * @return int
     */
    public function getArrGamePlayCount()
    {
        return $this->count(self::ARRGAMEPLAY);
    }

    /**
     * Appends value to 'arrOption' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrOption($value)
    {
        return $this->append(self::ARROPTION, $value);
    }

    /**
     * Clears 'arrOption' list
     *
     * @return null
     */
    public function clearArrOption()
    {
        return $this->clear(self::ARROPTION);
    }

    /**
     * Returns 'arrOption' list
     *
     * @return integer[]
     */
    public function getArrOption()
    {
        return $this->get(self::ARROPTION);
    }

    /**
     * Returns true if 'arrOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrOption()
    {
        return count($this->get(self::ARROPTION)) !== 0;
    }

    /**
     * Returns 'arrOption' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrOptionIterator()
    {
        return new \ArrayIterator($this->get(self::ARROPTION));
    }

    /**
     * Returns element from 'arrOption' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrOptionAt($offset)
    {
        return $this->get(self::ARROPTION, $offset);
    }

    /**
     * Returns count of 'arrOption' list
     *
     * @return int
     */
    public function getArrOptionCount()
    {
        return $this->count(self::ARROPTION);
    }
}
}