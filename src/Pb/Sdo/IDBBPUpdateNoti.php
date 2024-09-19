<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBBPUpdateNoti message
 */
class IDBBPUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRINFO => array(
            'name' => 'arrInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BPUpdateInfo'
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
        $this->values[self::ARRINFO] = array();
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
     * Appends value to 'arrInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BPUpdateInfo $value Value to append
     *
     * @return null
     */
    public function appendArrInfo(\Xnhd\Core\Pb\Sdo\BPUpdateInfo $value)
    {
        return $this->append(self::ARRINFO, $value);
    }

    /**
     * Clears 'arrInfo' list
     *
     * @return null
     */
    public function clearArrInfo()
    {
        return $this->clear(self::ARRINFO);
    }

    /**
     * Returns 'arrInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BPUpdateInfo[]
     */
    public function getArrInfo()
    {
        return $this->get(self::ARRINFO);
    }

    /**
     * Returns true if 'arrInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrInfo()
    {
        return count($this->get(self::ARRINFO)) !== 0;
    }

    /**
     * Returns 'arrInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRINFO));
    }

    /**
     * Returns element from 'arrInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BPUpdateInfo
     */
    public function getArrInfoAt($offset)
    {
        return $this->get(self::ARRINFO, $offset);
    }

    /**
     * Returns count of 'arrInfo' list
     *
     * @return int
     */
    public function getArrInfoCount()
    {
        return $this->count(self::ARRINFO);
    }
}
}