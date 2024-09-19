<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MatchHistoryDetail message
 */
class MatchHistoryDetail extends \ProtobufMessage
{
    /* Field index constants */
    const INFO = 1;
    const ARRROLES = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INFO => array(
            'name' => 'info',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistory'
        ),
        self::ARRROLES => array(
            'name' => 'arrRoles',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistoryRole'
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
        $this->values[self::INFO] = null;
        $this->values[self::ARRROLES] = array();
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
     * Sets value of 'info' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistory $value Property value
     *
     * @return null
     */
    public function setInfo(\Xnhd\Core\Pb\Sdo\MatchHistory $value=null)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistory
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }

    /**
     * Returns true if 'info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfo()
    {
        return $this->get(self::INFO) !== null;
    }

    /**
     * Appends value to 'arrRoles' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistoryRole $value Value to append
     *
     * @return null
     */
    public function appendArrRoles(\Xnhd\Core\Pb\Sdo\MatchHistoryRole $value)
    {
        return $this->append(self::ARRROLES, $value);
    }

    /**
     * Clears 'arrRoles' list
     *
     * @return null
     */
    public function clearArrRoles()
    {
        return $this->clear(self::ARRROLES);
    }

    /**
     * Returns 'arrRoles' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryRole[]
     */
    public function getArrRoles()
    {
        return $this->get(self::ARRROLES);
    }

    /**
     * Returns true if 'arrRoles' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoles()
    {
        return count($this->get(self::ARRROLES)) !== 0;
    }

    /**
     * Returns 'arrRoles' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRolesIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLES));
    }

    /**
     * Returns element from 'arrRoles' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryRole
     */
    public function getArrRolesAt($offset)
    {
        return $this->get(self::ARRROLES, $offset);
    }

    /**
     * Returns count of 'arrRoles' list
     *
     * @return int
     */
    public function getArrRolesCount()
    {
        return $this->count(self::ARRROLES);
    }
}
}