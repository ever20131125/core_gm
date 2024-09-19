<?php
/**
 * Auto generated from searchserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SHSSearchGuildResp message
 */
class SHSSearchGuildResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUILDID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GUILDID => array(
            'name' => 'guildID',
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
        $this->values[self::GUILDID] = array();
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
     * Appends value to 'guildID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendGuildID($value)
    {
        return $this->append(self::GUILDID, $value);
    }

    /**
     * Clears 'guildID' list
     *
     * @return null
     */
    public function clearGuildID()
    {
        return $this->clear(self::GUILDID);
    }

    /**
     * Returns 'guildID' list
     *
     * @return integer[]
     */
    public function getGuildID()
    {
        return $this->get(self::GUILDID);
    }

    /**
     * Returns true if 'guildID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuildID()
    {
        return count($this->get(self::GUILDID)) !== 0;
    }

    /**
     * Returns 'guildID' iterator
     *
     * @return \ArrayIterator
     */
    public function getGuildIDIterator()
    {
        return new \ArrayIterator($this->get(self::GUILDID));
    }

    /**
     * Returns element from 'guildID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getGuildIDAt($offset)
    {
        return $this->get(self::GUILDID, $offset);
    }

    /**
     * Returns count of 'guildID' list
     *
     * @return int
     */
    public function getGuildIDCount()
    {
        return $this->count(self::GUILDID);
    }
}
}