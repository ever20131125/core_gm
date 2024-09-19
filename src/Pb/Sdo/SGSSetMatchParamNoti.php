<?php
/**
 * Auto generated from smallgameserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSSetMatchParamNoti message
 */
class SGSSetMatchParamNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRGAMEPLAY = 2;
    const SOURCE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGAMEPLAY => array(
            'name' => 'arrGamePlay',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRGAMEPLAY] = array();
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
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
     * Appends value to 'arrGamePlay' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGamePlay($value)
    {
        return $this->append(self::ARRGAMEPLAY, $value);
    }

    /**
     * Clears 'arrGamePlay' list
     *
     * @return null
     */
    public function clearArrGamePlay()
    {
        return $this->clear(self::ARRGAMEPLAY);
    }

    /**
     * Returns 'arrGamePlay' list
     *
     * @return integer[]
     */
    public function getArrGamePlay()
    {
        return $this->get(self::ARRGAMEPLAY);
    }

    /**
     * Returns true if 'arrGamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGamePlay()
    {
        return count($this->get(self::ARRGAMEPLAY)) !== 0;
    }

    /**
     * Returns 'arrGamePlay' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGamePlayIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGAMEPLAY));
    }

    /**
     * Returns element from 'arrGamePlay' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGamePlayAt($offset)
    {
        return $this->get(self::ARRGAMEPLAY, $offset);
    }

    /**
     * Returns count of 'arrGamePlay' list
     *
     * @return int
     */
    public function getArrGamePlayCount()
    {
        return $this->count(self::ARRGAMEPLAY);
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }
}
}