<?php
/**
 * Auto generated from searchserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SHSGetMusicScoreReq message
 */
class SHSGetMusicScoreReq extends \ProtobufMessage
{
    /* Field index constants */
    const NMUSICID = 1;
    const ARRROLEIDLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEIDLIST => array(
            'name' => 'arrRoleIDList',
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
        $this->values[self::NMUSICID] = null;
        $this->values[self::ARRROLEIDLIST] = array();
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
     * Sets value of 'nMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicID($value)
    {
        return $this->set(self::NMUSICID, $value);
    }

    /**
     * Returns value of 'nMusicID' property
     *
     * @return integer
     */
    public function getNMusicID()
    {
        $value = $this->get(self::NMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicID()
    {
        return $this->get(self::NMUSICID) !== null;
    }

    /**
     * Appends value to 'arrRoleIDList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleIDList($value)
    {
        return $this->append(self::ARRROLEIDLIST, $value);
    }

    /**
     * Clears 'arrRoleIDList' list
     *
     * @return null
     */
    public function clearArrRoleIDList()
    {
        return $this->clear(self::ARRROLEIDLIST);
    }

    /**
     * Returns 'arrRoleIDList' list
     *
     * @return integer[]
     */
    public function getArrRoleIDList()
    {
        return $this->get(self::ARRROLEIDLIST);
    }

    /**
     * Returns true if 'arrRoleIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleIDList()
    {
        return count($this->get(self::ARRROLEIDLIST)) !== 0;
    }

    /**
     * Returns 'arrRoleIDList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEIDLIST));
    }

    /**
     * Returns element from 'arrRoleIDList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDListAt($offset)
    {
        return $this->get(self::ARRROLEIDLIST, $offset);
    }

    /**
     * Returns count of 'arrRoleIDList' list
     *
     * @return int
     */
    public function getArrRoleIDListCount()
    {
        return $this->count(self::ARRROLEIDLIST);
    }
}
}