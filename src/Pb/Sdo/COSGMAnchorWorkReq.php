<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGMAnchorWorkReq message
 */
class COSGMAnchorWorkReq extends \ProtobufMessage
{
    /* Field index constants */
    const BONWORK = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BONWORK => array(
            'name' => 'bOnWork',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::BONWORK] = null;
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
}
}