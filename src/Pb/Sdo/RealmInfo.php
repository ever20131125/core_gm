<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RealmInfo message
 */
class RealmInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SZPROVICENAME = 1;
    const ARRCHANNELSTATUS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZPROVICENAME => array(
            'name' => 'szProviceName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRCHANNELSTATUS => array(
            'name' => 'arrChannelStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ChannelStatus'
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
        $this->values[self::SZPROVICENAME] = null;
        $this->values[self::ARRCHANNELSTATUS] = array();
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
     * Sets value of 'szProviceName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzProviceName($value)
    {
        return $this->set(self::SZPROVICENAME, $value);
    }

    /**
     * Returns value of 'szProviceName' property
     *
     * @return string
     */
    public function getSzProviceName()
    {
        $value = $this->get(self::SZPROVICENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szProviceName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzProviceName()
    {
        return $this->get(self::SZPROVICENAME) !== null;
    }

    /**
     * Appends value to 'arrChannelStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ChannelStatus $value Value to append
     *
     * @return null
     */
    public function appendArrChannelStatus(\Xnhd\Core\Pb\Sdo\ChannelStatus $value)
    {
        return $this->append(self::ARRCHANNELSTATUS, $value);
    }

    /**
     * Clears 'arrChannelStatus' list
     *
     * @return null
     */
    public function clearArrChannelStatus()
    {
        return $this->clear(self::ARRCHANNELSTATUS);
    }

    /**
     * Returns 'arrChannelStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChannelStatus[]
     */
    public function getArrChannelStatus()
    {
        return $this->get(self::ARRCHANNELSTATUS);
    }

    /**
     * Returns true if 'arrChannelStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrChannelStatus()
    {
        return count($this->get(self::ARRCHANNELSTATUS)) !== 0;
    }

    /**
     * Returns 'arrChannelStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrChannelStatusIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCHANNELSTATUS));
    }

    /**
     * Returns element from 'arrChannelStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ChannelStatus
     */
    public function getArrChannelStatusAt($offset)
    {
        return $this->get(self::ARRCHANNELSTATUS, $offset);
    }

    /**
     * Returns count of 'arrChannelStatus' list
     *
     * @return int
     */
    public function getArrChannelStatusCount()
    {
        return $this->count(self::ARRCHANNELSTATUS);
    }
}
}