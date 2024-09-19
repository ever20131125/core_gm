<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWooNoti message
 */
class RLSWooNoti extends \ProtobufMessage
{
    /* Field index constants */
    const DETAIL = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DETAIL => array(
            'name' => 'detail',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WooedDetail'
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
        $this->values[self::DETAIL] = null;
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
     * Sets value of 'detail' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WooedDetail $value Property value
     *
     * @return null
     */
    public function setDetail(\Xnhd\Core\Pb\Sdo\WooedDetail $value=null)
    {
        return $this->set(self::DETAIL, $value);
    }

    /**
     * Returns value of 'detail' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WooedDetail
     */
    public function getDetail()
    {
        return $this->get(self::DETAIL);
    }

    /**
     * Returns true if 'detail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDetail()
    {
        return $this->get(self::DETAIL) !== null;
    }
}
}