<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSStateRobotNoti message
 */
class ROSStateRobotNoti extends \ProtobufMessage
{
    /* Field index constants */
    const USERID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERID => array(
            'name' => 'userid',
            'required' => true,
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
        $this->values[self::USERID] = null;
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
     * Sets value of 'userid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUserid($value)
    {
        return $this->set(self::USERID, $value);
    }

    /**
     * Returns value of 'userid' property
     *
     * @return integer
     */
    public function getUserid()
    {
        $value = $this->get(self::USERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'userid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserid()
    {
        return $this->get(self::USERID) !== null;
    }
}
}