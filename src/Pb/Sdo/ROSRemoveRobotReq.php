<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSRemoveRobotReq message
 */
class ROSRemoveRobotReq extends \ProtobufMessage
{
    /* Field index constants */
    const NCOUNT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
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