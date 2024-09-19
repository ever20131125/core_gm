<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetAnchorResp message
 */
class COSGetAnchorResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const BONWORK = 3;
    const ARRANCHORID = 4;

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
        self::BONWORK => array(
            'name' => 'bOnWork',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ARRANCHORID => array(
            'name' => 'arrAnchorID',
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
        $this->values[self::BONWORK] = null;
        $this->values[self::ARRANCHORID] = array();
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
     * Sets value of 'bOnWork' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBOnWork($value)
    {
        return $this->set(self::BONWORK, $value);
    }

    /**
     * Returns value of 'bOnWork' property
     *
     * @return boolean
     */
    public function getBOnWork()
    {
        $value = $this->get(self::BONWORK);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bOnWork' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBOnWork()
    {
        return $this->get(self::BONWORK) !== null;
    }

    /**
     * Appends value to 'arrAnchorID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAnchorID($value)
    {
        return $this->append(self::ARRANCHORID, $value);
    }

    /**
     * Clears 'arrAnchorID' list
     *
     * @return null
     */
    public function clearArrAnchorID()
    {
        return $this->clear(self::ARRANCHORID);
    }

    /**
     * Returns 'arrAnchorID' list
     *
     * @return integer[]
     */
    public function getArrAnchorID()
    {
        return $this->get(self::ARRANCHORID);
    }

    /**
     * Returns true if 'arrAnchorID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAnchorID()
    {
        return count($this->get(self::ARRANCHORID)) !== 0;
    }

    /**
     * Returns 'arrAnchorID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAnchorIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRANCHORID));
    }

    /**
     * Returns element from 'arrAnchorID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAnchorIDAt($offset)
    {
        return $this->get(self::ARRANCHORID, $offset);
    }

    /**
     * Returns count of 'arrAnchorID' list
     *
     * @return int
     */
    public function getArrAnchorIDCount()
    {
        return $this->count(self::ARRANCHORID);
    }
}
}