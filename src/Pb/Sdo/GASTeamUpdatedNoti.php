<?php
/**
 * Auto generated from gameserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASTeamUpdatedNoti message
 */
class GASTeamUpdatedNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRROLEID = 1;
    const ARRTEAM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTEAM => array(
            'name' => 'arrTeam',
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
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRTEAM] = array();
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
     * Appends value to 'arrTeam' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTeam($value)
    {
        return $this->append(self::ARRTEAM, $value);
    }

    /**
     * Clears 'arrTeam' list
     *
     * @return null
     */
    public function clearArrTeam()
    {
        return $this->clear(self::ARRTEAM);
    }

    /**
     * Returns 'arrTeam' list
     *
     * @return integer[]
     */
    public function getArrTeam()
    {
        return $this->get(self::ARRTEAM);
    }

    /**
     * Returns true if 'arrTeam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTeam()
    {
        return count($this->get(self::ARRTEAM)) !== 0;
    }

    /**
     * Returns 'arrTeam' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTeamIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTEAM));
    }

    /**
     * Returns element from 'arrTeam' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTeamAt($offset)
    {
        return $this->get(self::ARRTEAM, $offset);
    }

    /**
     * Returns count of 'arrTeam' list
     *
     * @return int
     */
    public function getArrTeamCount()
    {
        return $this->count(self::ARRTEAM);
    }
}
}