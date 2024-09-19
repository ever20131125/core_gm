<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTMergeLineUpdateNoti message
 */
class ACTMergeLineUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STBOARD = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STBOARD => array(
            'name' => 'stBoard',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MergeLineInfo'
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
        $this->values[self::STBOARD] = null;
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
     * Sets value of 'stBoard' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MergeLineInfo $value Property value
     *
     * @return null
     */
    public function setStBoard(\Xnhd\Core\Pb\Sdo\MergeLineInfo $value=null)
    {
        return $this->set(self::STBOARD, $value);
    }

    /**
     * Returns value of 'stBoard' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MergeLineInfo
     */
    public function getStBoard()
    {
        return $this->get(self::STBOARD);
    }

    /**
     * Returns true if 'stBoard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBoard()
    {
        return $this->get(self::STBOARD) !== null;
    }
}
}