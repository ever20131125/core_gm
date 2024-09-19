<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetFriendGuildResp message
 */
class GDSGetFriendGuildResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRROLEID = 2;
    const ARRGUILDID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGUILDID => array(
            'name' => 'arrGuildID',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRROLEID] = array();
        $this->values[self::ARRGUILDID] = array();
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
     * Appends value to 'arrGuildID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGuildID($value)
    {
        return $this->append(self::ARRGUILDID, $value);
    }

    /**
     * Clears 'arrGuildID' list
     *
     * @return null
     */
    public function clearArrGuildID()
    {
        return $this->clear(self::ARRGUILDID);
    }

    /**
     * Returns 'arrGuildID' list
     *
     * @return integer[]
     */
    public function getArrGuildID()
    {
        return $this->get(self::ARRGUILDID);
    }

    /**
     * Returns true if 'arrGuildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGuildID()
    {
        return count($this->get(self::ARRGUILDID)) !== 0;
    }

    /**
     * Returns 'arrGuildID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGuildIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGUILDID));
    }

    /**
     * Returns element from 'arrGuildID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGuildIDAt($offset)
    {
        return $this->get(self::ARRGUILDID, $offset);
    }

    /**
     * Returns count of 'arrGuildID' list
     *
     * @return int
     */
    public function getArrGuildIDCount()
    {
        return $this->count(self::ARRGUILDID);
    }
}
}