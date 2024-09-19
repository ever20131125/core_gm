<?php
/**
 * Auto generated from mateserver.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MASInvitePlayerResp message
 */
class MASInvitePlayerResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRPLAYERLIST = 3;
    const ARRINVITERESULT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPLAYERLIST => array(
            'name' => 'arrPlayerList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRINVITERESULT => array(
            'name' => 'arrInviteResult',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRPLAYERLIST] = array();
        $this->values[self::ARRINVITERESULT] = array();
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
     * Appends value to 'arrPlayerList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPlayerList($value)
    {
        return $this->append(self::ARRPLAYERLIST, $value);
    }

    /**
     * Clears 'arrPlayerList' list
     *
     * @return null
     */
    public function clearArrPlayerList()
    {
        return $this->clear(self::ARRPLAYERLIST);
    }

    /**
     * Returns 'arrPlayerList' list
     *
     * @return integer[]
     */
    public function getArrPlayerList()
    {
        return $this->get(self::ARRPLAYERLIST);
    }

    /**
     * Returns true if 'arrPlayerList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayerList()
    {
        return count($this->get(self::ARRPLAYERLIST)) !== 0;
    }

    /**
     * Returns 'arrPlayerList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYERLIST));
    }

    /**
     * Returns element from 'arrPlayerList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPlayerListAt($offset)
    {
        return $this->get(self::ARRPLAYERLIST, $offset);
    }

    /**
     * Returns count of 'arrPlayerList' list
     *
     * @return int
     */
    public function getArrPlayerListCount()
    {
        return $this->count(self::ARRPLAYERLIST);
    }

    /**
     * Appends value to 'arrInviteResult' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrInviteResult($value)
    {
        return $this->append(self::ARRINVITERESULT, $value);
    }

    /**
     * Clears 'arrInviteResult' list
     *
     * @return null
     */
    public function clearArrInviteResult()
    {
        return $this->clear(self::ARRINVITERESULT);
    }

    /**
     * Returns 'arrInviteResult' list
     *
     * @return integer[]
     */
    public function getArrInviteResult()
    {
        return $this->get(self::ARRINVITERESULT);
    }

    /**
     * Returns true if 'arrInviteResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrInviteResult()
    {
        return count($this->get(self::ARRINVITERESULT)) !== 0;
    }

    /**
     * Returns 'arrInviteResult' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrInviteResultIterator()
    {
        return new \ArrayIterator($this->get(self::ARRINVITERESULT));
    }

    /**
     * Returns element from 'arrInviteResult' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrInviteResultAt($offset)
    {
        return $this->get(self::ARRINVITERESULT, $offset);
    }

    /**
     * Returns count of 'arrInviteResult' list
     *
     * @return int
     */
    public function getArrInviteResultCount()
    {
        return $this->count(self::ARRINVITERESULT);
    }
}
}