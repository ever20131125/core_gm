<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSGetGuildEventIDResp message
 */
class GDSGetGuildEventIDResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUILDID = 2;
    const ARREVENTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GUILDID => array(
            'name' => 'guildID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARREVENTID => array(
            'name' => 'arrEventID',
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
        $this->values[self::GUILDID] = null;
        $this->values[self::ARREVENTID] = array();
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
     * Sets value of 'guildID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuildID($value)
    {
        return $this->set(self::GUILDID, $value);
    }

    /**
     * Returns value of 'guildID' property
     *
     * @return integer
     */
    public function getGuildID()
    {
        $value = $this->get(self::GUILDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildID()
    {
        return $this->get(self::GUILDID) !== null;
    }

    /**
     * Appends value to 'arrEventID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrEventID($value)
    {
        return $this->append(self::ARREVENTID, $value);
    }

    /**
     * Clears 'arrEventID' list
     *
     * @return null
     */
    public function clearArrEventID()
    {
        return $this->clear(self::ARREVENTID);
    }

    /**
     * Returns 'arrEventID' list
     *
     * @return integer[]
     */
    public function getArrEventID()
    {
        return $this->get(self::ARREVENTID);
    }

    /**
     * Returns true if 'arrEventID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrEventID()
    {
        return count($this->get(self::ARREVENTID)) !== 0;
    }

    /**
     * Returns 'arrEventID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrEventIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARREVENTID));
    }

    /**
     * Returns element from 'arrEventID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrEventIDAt($offset)
    {
        return $this->get(self::ARREVENTID, $offset);
    }

    /**
     * Returns count of 'arrEventID' list
     *
     * @return int
     */
    public function getArrEventIDCount()
    {
        return $this->count(self::ARREVENTID);
    }
}
}