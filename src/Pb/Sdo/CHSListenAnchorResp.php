<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSListenAnchorResp message
 */
class CHSListenAnchorResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const BOPEN = 3;
    const ARRIDOLS = 4;
    const NSTARTTIME = 5;
    const NLISTENERCNT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BOPEN => array(
            'name' => 'bOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ARRIDOLS => array(
            'name' => 'arrIdols',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\IdolInfo'
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLISTENERCNT => array(
            'name' => 'nListenerCnt',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::BOPEN] = null;
        $this->values[self::ARRIDOLS] = array();
        $this->values[self::NSTARTTIME] = null;
        $this->values[self::NLISTENERCNT] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'bOpen' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBOpen($value)
    {
        return $this->set(self::BOPEN, $value);
    }

    /**
     * Returns value of 'bOpen' property
     *
     * @return boolean
     */
    public function getBOpen()
    {
        $value = $this->get(self::BOPEN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBOpen()
    {
        return $this->get(self::BOPEN) !== null;
    }

    /**
     * Appends value to 'arrIdols' list
     *
     * @param \Xnhd\Core\Pb\Sdo\IdolInfo $value Value to append
     *
     * @return null
     */
    public function appendArrIdols(\Xnhd\Core\Pb\Sdo\IdolInfo $value)
    {
        return $this->append(self::ARRIDOLS, $value);
    }

    /**
     * Clears 'arrIdols' list
     *
     * @return null
     */
    public function clearArrIdols()
    {
        return $this->clear(self::ARRIDOLS);
    }

    /**
     * Returns 'arrIdols' list
     *
     * @return \Xnhd\Core\Pb\Sdo\IdolInfo[]
     */
    public function getArrIdols()
    {
        return $this->get(self::ARRIDOLS);
    }

    /**
     * Returns true if 'arrIdols' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrIdols()
    {
        return count($this->get(self::ARRIDOLS)) !== 0;
    }

    /**
     * Returns 'arrIdols' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrIdolsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRIDOLS));
    }

    /**
     * Returns element from 'arrIdols' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\IdolInfo
     */
    public function getArrIdolsAt($offset)
    {
        return $this->get(self::ARRIDOLS, $offset);
    }

    /**
     * Returns count of 'arrIdols' list
     *
     * @return int
     */
    public function getArrIdolsCount()
    {
        return $this->count(self::ARRIDOLS);
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }

    /**
     * Sets value of 'nListenerCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNListenerCnt($value)
    {
        return $this->set(self::NLISTENERCNT, $value);
    }

    /**
     * Returns value of 'nListenerCnt' property
     *
     * @return integer
     */
    public function getNListenerCnt()
    {
        $value = $this->get(self::NLISTENERCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nListenerCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNListenerCnt()
    {
        return $this->get(self::NLISTENERCNT) !== null;
    }
}
}