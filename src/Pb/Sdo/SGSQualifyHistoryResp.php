<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSQualifyHistoryResp message
 */
class SGSQualifyHistoryResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRHISTORY = 3;
    const NCOUNT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRHISTORY => array(
            'name' => 'arrHistory',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchHistoryDetail'
        ),
        self::NCOUNT => array(
            'name' => 'nCount',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRHISTORY] = array();
        $this->values[self::NCOUNT] = null;
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
     * Appends value to 'arrHistory' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchHistoryDetail $value Value to append
     *
     * @return null
     */
    public function appendArrHistory(\Xnhd\Core\Pb\Sdo\MatchHistoryDetail $value)
    {
        return $this->append(self::ARRHISTORY, $value);
    }

    /**
     * Clears 'arrHistory' list
     *
     * @return null
     */
    public function clearArrHistory()
    {
        return $this->clear(self::ARRHISTORY);
    }

    /**
     * Returns 'arrHistory' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryDetail[]
     */
    public function getArrHistory()
    {
        return $this->get(self::ARRHISTORY);
    }

    /**
     * Returns true if 'arrHistory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHistory()
    {
        return count($this->get(self::ARRHISTORY)) !== 0;
    }

    /**
     * Returns 'arrHistory' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHistoryIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHISTORY));
    }

    /**
     * Returns element from 'arrHistory' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchHistoryDetail
     */
    public function getArrHistoryAt($offset)
    {
        return $this->get(self::ARRHISTORY, $offset);
    }

    /**
     * Returns count of 'arrHistory' list
     *
     * @return int
     */
    public function getArrHistoryCount()
    {
        return $this->count(self::ARRHISTORY);
    }

    /**
     * Sets value of 'nCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCount($value)
    {
        return $this->set(self::NCOUNT, $value);
    }

    /**
     * Returns value of 'nCount' property
     *
     * @return integer
     */
    public function getNCount()
    {
        $value = $this->get(self::NCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCount()
    {
        return $this->get(self::NCOUNT) !== null;
    }
}
}