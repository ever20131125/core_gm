<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGetMusicListResp message
 */
class COSGetMusicListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRMUSICID = 3;

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
        self::ARRMUSICID => array(
            'name' => 'arrMusicID',
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
        $this->values[self::ARRMUSICID] = array();
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
     * Appends value to 'arrMusicID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMusicID($value)
    {
        return $this->append(self::ARRMUSICID, $value);
    }

    /**
     * Clears 'arrMusicID' list
     *
     * @return null
     */
    public function clearArrMusicID()
    {
        return $this->clear(self::ARRMUSICID);
    }

    /**
     * Returns 'arrMusicID' list
     *
     * @return integer[]
     */
    public function getArrMusicID()
    {
        return $this->get(self::ARRMUSICID);
    }

    /**
     * Returns true if 'arrMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMusicID()
    {
        return count($this->get(self::ARRMUSICID)) !== 0;
    }

    /**
     * Returns 'arrMusicID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMusicIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMUSICID));
    }

    /**
     * Returns element from 'arrMusicID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMusicIDAt($offset)
    {
        return $this->get(self::ARRMUSICID, $offset);
    }

    /**
     * Returns count of 'arrMusicID' list
     *
     * @return int
     */
    public function getArrMusicIDCount()
    {
        return $this->count(self::ARRMUSICID);
    }
}
}