<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GuildUpdateEvent message
 */
class GuildUpdateEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCECHANNEL = 2;
    const INFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCECHANNEL => array(
            'name' => 'sourceChannel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INFO => array(
            'name' => 'info',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\GuildUpdateInfo'
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
        $this->values[self::SOURCECHANNEL] = null;
        $this->values[self::INFO] = array();
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
     * Sets value of 'sourceChannel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceChannel($value)
    {
        return $this->set(self::SOURCECHANNEL, $value);
    }

    /**
     * Returns value of 'sourceChannel' property
     *
     * @return integer
     */
    public function getSourceChannel()
    {
        $value = $this->get(self::SOURCECHANNEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceChannel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceChannel()
    {
        return $this->get(self::SOURCECHANNEL) !== null;
    }

    /**
     * Appends value to 'info' list
     *
     * @param \Xnhd\Core\Pb\Sdo\GuildUpdateInfo $value Value to append
     *
     * @return null
     */
    public function appendInfo(\Xnhd\Core\Pb\Sdo\GuildUpdateInfo $value)
    {
        return $this->append(self::INFO, $value);
    }

    /**
     * Clears 'info' list
     *
     * @return null
     */
    public function clearInfo()
    {
        return $this->clear(self::INFO);
    }

    /**
     * Returns 'info' list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildUpdateInfo[]
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }

    /**
     * Returns true if 'info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfo()
    {
        return count($this->get(self::INFO)) !== 0;
    }

    /**
     * Returns 'info' iterator
     *
     * @return \ArrayIterator
     */
    public function getInfoIterator()
    {
        return new \ArrayIterator($this->get(self::INFO));
    }

    /**
     * Returns element from 'info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\GuildUpdateInfo
     */
    public function getInfoAt($offset)
    {
        return $this->get(self::INFO, $offset);
    }

    /**
     * Returns count of 'info' list
     *
     * @return int
     */
    public function getInfoCount()
    {
        return $this->count(self::INFO);
    }
}
}