<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchEndInfo message
 */
class MatchEndInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ARRBALANCERESULT = 1;
    const ARRNPCBALANCERESULT = 2;
    const ARRROLEMATCHSTATUS = 3;
    const ARRNPCMATCHSTATUS = 4;
    const ARRTEAMMATCHSTATUS = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRBALANCERESULT => array(
            'name' => 'arrBalanceResult',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BalanceResult'
        ),
        self::ARRNPCBALANCERESULT => array(
            'name' => 'arrNPCBalanceResult',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BalanceResult'
        ),
        self::ARRROLEMATCHSTATUS => array(
            'name' => 'arrRoleMatchStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleMatchStatus'
        ),
        self::ARRNPCMATCHSTATUS => array(
            'name' => 'arrNPCMatchStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleMatchStatus'
        ),
        self::ARRTEAMMATCHSTATUS => array(
            'name' => 'arrTeamMatchStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TeamMatchStatus'
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
        $this->values[self::ARRBALANCERESULT] = array();
        $this->values[self::ARRNPCBALANCERESULT] = array();
        $this->values[self::ARRROLEMATCHSTATUS] = array();
        $this->values[self::ARRNPCMATCHSTATUS] = array();
        $this->values[self::ARRTEAMMATCHSTATUS] = array();
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
     * Appends value to 'arrBalanceResult' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BalanceResult $value Value to append
     *
     * @return null
     */
    public function appendArrBalanceResult(\Xnhd\Core\Pb\Sdo\BalanceResult $value)
    {
        return $this->append(self::ARRBALANCERESULT, $value);
    }

    /**
     * Clears 'arrBalanceResult' list
     *
     * @return null
     */
    public function clearArrBalanceResult()
    {
        return $this->clear(self::ARRBALANCERESULT);
    }

    /**
     * Returns 'arrBalanceResult' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BalanceResult[]
     */
    public function getArrBalanceResult()
    {
        return $this->get(self::ARRBALANCERESULT);
    }

    /**
     * Returns true if 'arrBalanceResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBalanceResult()
    {
        return count($this->get(self::ARRBALANCERESULT)) !== 0;
    }

    /**
     * Returns 'arrBalanceResult' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBalanceResultIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBALANCERESULT));
    }

    /**
     * Returns element from 'arrBalanceResult' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BalanceResult
     */
    public function getArrBalanceResultAt($offset)
    {
        return $this->get(self::ARRBALANCERESULT, $offset);
    }

    /**
     * Returns count of 'arrBalanceResult' list
     *
     * @return int
     */
    public function getArrBalanceResultCount()
    {
        return $this->count(self::ARRBALANCERESULT);
    }

    /**
     * Appends value to 'arrNPCBalanceResult' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BalanceResult $value Value to append
     *
     * @return null
     */
    public function appendArrNPCBalanceResult(\Xnhd\Core\Pb\Sdo\BalanceResult $value)
    {
        return $this->append(self::ARRNPCBALANCERESULT, $value);
    }

    /**
     * Clears 'arrNPCBalanceResult' list
     *
     * @return null
     */
    public function clearArrNPCBalanceResult()
    {
        return $this->clear(self::ARRNPCBALANCERESULT);
    }

    /**
     * Returns 'arrNPCBalanceResult' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BalanceResult[]
     */
    public function getArrNPCBalanceResult()
    {
        return $this->get(self::ARRNPCBALANCERESULT);
    }

    /**
     * Returns true if 'arrNPCBalanceResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNPCBalanceResult()
    {
        return count($this->get(self::ARRNPCBALANCERESULT)) !== 0;
    }

    /**
     * Returns 'arrNPCBalanceResult' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNPCBalanceResultIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNPCBALANCERESULT));
    }

    /**
     * Returns element from 'arrNPCBalanceResult' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BalanceResult
     */
    public function getArrNPCBalanceResultAt($offset)
    {
        return $this->get(self::ARRNPCBALANCERESULT, $offset);
    }

    /**
     * Returns count of 'arrNPCBalanceResult' list
     *
     * @return int
     */
    public function getArrNPCBalanceResultCount()
    {
        return $this->count(self::ARRNPCBALANCERESULT);
    }

    /**
     * Appends value to 'arrRoleMatchStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleMatchStatus $value Value to append
     *
     * @return null
     */
    public function appendArrRoleMatchStatus(\Xnhd\Core\Pb\Sdo\RoleMatchStatus $value)
    {
        return $this->append(self::ARRROLEMATCHSTATUS, $value);
    }

    /**
     * Clears 'arrRoleMatchStatus' list
     *
     * @return null
     */
    public function clearArrRoleMatchStatus()
    {
        return $this->clear(self::ARRROLEMATCHSTATUS);
    }

    /**
     * Returns 'arrRoleMatchStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus[]
     */
    public function getArrRoleMatchStatus()
    {
        return $this->get(self::ARRROLEMATCHSTATUS);
    }

    /**
     * Returns true if 'arrRoleMatchStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleMatchStatus()
    {
        return count($this->get(self::ARRROLEMATCHSTATUS)) !== 0;
    }

    /**
     * Returns 'arrRoleMatchStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleMatchStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEMATCHSTATUS));
    }

    /**
     * Returns element from 'arrRoleMatchStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus
     */
    public function getArrRoleMatchStatusAt($offset)
    {
        return $this->get(self::ARRROLEMATCHSTATUS, $offset);
    }

    /**
     * Returns count of 'arrRoleMatchStatus' list
     *
     * @return int
     */
    public function getArrRoleMatchStatusCount()
    {
        return $this->count(self::ARRROLEMATCHSTATUS);
    }

    /**
     * Appends value to 'arrNPCMatchStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleMatchStatus $value Value to append
     *
     * @return null
     */
    public function appendArrNPCMatchStatus(\Xnhd\Core\Pb\Sdo\RoleMatchStatus $value)
    {
        return $this->append(self::ARRNPCMATCHSTATUS, $value);
    }

    /**
     * Clears 'arrNPCMatchStatus' list
     *
     * @return null
     */
    public function clearArrNPCMatchStatus()
    {
        return $this->clear(self::ARRNPCMATCHSTATUS);
    }

    /**
     * Returns 'arrNPCMatchStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus[]
     */
    public function getArrNPCMatchStatus()
    {
        return $this->get(self::ARRNPCMATCHSTATUS);
    }

    /**
     * Returns true if 'arrNPCMatchStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrNPCMatchStatus()
    {
        return count($this->get(self::ARRNPCMATCHSTATUS)) !== 0;
    }

    /**
     * Returns 'arrNPCMatchStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrNPCMatchStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRNPCMATCHSTATUS));
    }

    /**
     * Returns element from 'arrNPCMatchStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleMatchStatus
     */
    public function getArrNPCMatchStatusAt($offset)
    {
        return $this->get(self::ARRNPCMATCHSTATUS, $offset);
    }

    /**
     * Returns count of 'arrNPCMatchStatus' list
     *
     * @return int
     */
    public function getArrNPCMatchStatusCount()
    {
        return $this->count(self::ARRNPCMATCHSTATUS);
    }

    /**
     * Appends value to 'arrTeamMatchStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TeamMatchStatus $value Value to append
     *
     * @return null
     */
    public function appendArrTeamMatchStatus(\Xnhd\Core\Pb\Sdo\TeamMatchStatus $value)
    {
        return $this->append(self::ARRTEAMMATCHSTATUS, $value);
    }

    /**
     * Clears 'arrTeamMatchStatus' list
     *
     * @return null
     */
    public function clearArrTeamMatchStatus()
    {
        return $this->clear(self::ARRTEAMMATCHSTATUS);
    }

    /**
     * Returns 'arrTeamMatchStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TeamMatchStatus[]
     */
    public function getArrTeamMatchStatus()
    {
        return $this->get(self::ARRTEAMMATCHSTATUS);
    }

    /**
     * Returns true if 'arrTeamMatchStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTeamMatchStatus()
    {
        return count($this->get(self::ARRTEAMMATCHSTATUS)) !== 0;
    }

    /**
     * Returns 'arrTeamMatchStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTeamMatchStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTEAMMATCHSTATUS));
    }

    /**
     * Returns element from 'arrTeamMatchStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TeamMatchStatus
     */
    public function getArrTeamMatchStatusAt($offset)
    {
        return $this->get(self::ARRTEAMMATCHSTATUS, $offset);
    }

    /**
     * Returns count of 'arrTeamMatchStatus' list
     *
     * @return int
     */
    public function getArrTeamMatchStatusCount()
    {
        return $this->count(self::ARRTEAMMATCHSTATUS);
    }
}
}