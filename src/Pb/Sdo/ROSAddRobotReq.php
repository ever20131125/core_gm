<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSAddRobotReq message
 */
class ROSAddRobotReq extends \ProtobufMessage
{
    /* Field index constants */
    const NCOUNT = 1;
    const NNEWPLAYER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NCOUNT => array(
            'name' => 'nCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEWPLAYER => array(
            'default' => 1,
            'name' => 'nNewPlayer',
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
        $this->values[self::NCOUNT] = null;
        $this->values[self::NNEWPLAYER] = self::$fields[self::NNEWPLAYER]['default'];
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

    /**
     * Sets value of 'nNewPlayer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNewPlayer($value)
    {
        return $this->set(self::NNEWPLAYER, $value);
    }

    /**
     * Returns value of 'nNewPlayer' property
     *
     * @return integer
     */
    public function getNNewPlayer()
    {
        $value = $this->get(self::NNEWPLAYER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNewPlayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNewPlayer()
    {
        return $this->get(self::NNEWPLAYER) !== null;
    }
}
}