<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InstanceDetail message
 */
class InstanceDetail extends \ProtobufMessage
{
    /* Field index constants */
    const GENERALINFO = 1;
    const ARRPLAYERINFO = 2;
    const ARROBSERVERINFO = 3;
    const ARRACTIONLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GENERALINFO => array(
            'name' => 'generalInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\InstanceGeneral'
        ),
        self::ARRPLAYERINFO => array(
            'name' => 'arrPlayerInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\InstanceRoleInfo'
        ),
        self::ARROBSERVERINFO => array(
            'name' => 'arrObserverInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\InstanceRoleInfo'
        ),
        self::ARRACTIONLIST => array(
            'name' => 'arrActionList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\InstanceAction'
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
        $this->values[self::GENERALINFO] = null;
        $this->values[self::ARRPLAYERINFO] = array();
        $this->values[self::ARROBSERVERINFO] = array();
        $this->values[self::ARRACTIONLIST] = array();
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
     * Sets value of 'generalInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\InstanceGeneral $value Property value
     *
     * @return null
     */
    public function setGeneralInfo(\Xnhd\Core\Pb\Sdo\InstanceGeneral $value=null)
    {
        return $this->set(self::GENERALINFO, $value);
    }

    /**
     * Returns value of 'generalInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceGeneral
     */
    public function getGeneralInfo()
    {
        return $this->get(self::GENERALINFO);
    }

    /**
     * Returns true if 'generalInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGeneralInfo()
    {
        return $this->get(self::GENERALINFO) !== null;
    }

    /**
     * Appends value to 'arrPlayerInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\InstanceRoleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerInfo(\Xnhd\Core\Pb\Sdo\InstanceRoleInfo $value)
    {
        return $this->append(self::ARRPLAYERINFO, $value);
    }

    /**
     * Clears 'arrPlayerInfo' list
     *
     * @return null
     */
    public function clearArrPlayerInfo()
    {
        return $this->clear(self::ARRPLAYERINFO);
    }

    /**
     * Returns 'arrPlayerInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceRoleInfo[]
     */
    public function getArrPlayerInfo()
    {
        return $this->get(self::ARRPLAYERINFO);
    }

    /**
     * Returns true if 'arrPlayerInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerInfo()
    {
        return count($this->get(self::ARRPLAYERINFO)) !== 0;
    }

    /**
     * Returns 'arrPlayerInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERINFO));
    }

    /**
     * Returns element from 'arrPlayerInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceRoleInfo
     */
    public function getArrPlayerInfoAt($offset)
    {
        return $this->get(self::ARRPLAYERINFO, $offset);
    }

    /**
     * Returns count of 'arrPlayerInfo' list
     *
     * @return int
     */
    public function getArrPlayerInfoCount()
    {
        return $this->count(self::ARRPLAYERINFO);
    }

    /**
     * Appends value to 'arrObserverInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\InstanceRoleInfo $value Value to append
     *
     * @return null
     */
    public function appendArrObserverInfo(\Xnhd\Core\Pb\Sdo\InstanceRoleInfo $value)
    {
        return $this->append(self::ARROBSERVERINFO, $value);
    }

    /**
     * Clears 'arrObserverInfo' list
     *
     * @return null
     */
    public function clearArrObserverInfo()
    {
        return $this->clear(self::ARROBSERVERINFO);
    }

    /**
     * Returns 'arrObserverInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceRoleInfo[]
     */
    public function getArrObserverInfo()
    {
        return $this->get(self::ARROBSERVERINFO);
    }

    /**
     * Returns true if 'arrObserverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrObserverInfo()
    {
        return count($this->get(self::ARROBSERVERINFO)) !== 0;
    }

    /**
     * Returns 'arrObserverInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrObserverInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARROBSERVERINFO));
    }

    /**
     * Returns element from 'arrObserverInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceRoleInfo
     */
    public function getArrObserverInfoAt($offset)
    {
        return $this->get(self::ARROBSERVERINFO, $offset);
    }

    /**
     * Returns count of 'arrObserverInfo' list
     *
     * @return int
     */
    public function getArrObserverInfoCount()
    {
        return $this->count(self::ARROBSERVERINFO);
    }

    /**
     * Appends value to 'arrActionList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\InstanceAction $value Value to append
     *
     * @return null
     */
    public function appendArrActionList(\Xnhd\Core\Pb\Sdo\InstanceAction $value)
    {
        return $this->append(self::ARRACTIONLIST, $value);
    }

    /**
     * Clears 'arrActionList' list
     *
     * @return null
     */
    public function clearArrActionList()
    {
        return $this->clear(self::ARRACTIONLIST);
    }

    /**
     * Returns 'arrActionList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceAction[]
     */
    public function getArrActionList()
    {
        return $this->get(self::ARRACTIONLIST);
    }

    /**
     * Returns true if 'arrActionList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActionList()
    {
        return count($this->get(self::ARRACTIONLIST)) !== 0;
    }

    /**
     * Returns 'arrActionList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActionListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTIONLIST));
    }

    /**
     * Returns element from 'arrActionList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\InstanceAction
     */
    public function getArrActionListAt($offset)
    {
        return $this->get(self::ARRACTIONLIST, $offset);
    }

    /**
     * Returns count of 'arrActionList' list
     *
     * @return int
     */
    public function getArrActionListCount()
    {
        return $this->count(self::ARRACTIONLIST);
    }
}
}