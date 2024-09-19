<?php
/**
 * Auto generated from smallgameserver.proto at 2022-09-14 02:40:01
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSInstancePlayNoti message
 */
class SGSInstancePlayNoti extends \ProtobufMessage
{
    /* Field index constants */
    const SOURCE = 1;
    const ARRROLEID = 2;
    const NOPTION1 = 3;
    const NOPTION2 = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION1 => array(
            'name' => 'nOption1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION2 => array(
            'name' => 'nOption2',
            'required' => false,
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
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::ARRROLEID] = array();
        $this->values[self::NOPTION1] = null;
        $this->values[self::NOPTION2] = null;
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
     * Sets value of 'nOption1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption1($value)
    {
        return $this->set(self::NOPTION1, $value);
    }

    /**
     * Returns value of 'nOption1' property
     *
     * @return integer
     */
    public function getNOption1()
    {
        $value = $this->get(self::NOPTION1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption1()
    {
        return $this->get(self::NOPTION1) !== null;
    }

    /**
     * Sets value of 'nOption2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption2($value)
    {
        return $this->set(self::NOPTION2, $value);
    }

    /**
     * Returns value of 'nOption2' property
     *
     * @return integer
     */
    public function getNOption2()
    {
        $value = $this->get(self::NOPTION2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption2()
    {
        return $this->get(self::NOPTION2) !== null;
    }
}
}