<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSQueueInfoNoti message
 */
class COSQueueInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STLOGINQUEUEINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STLOGINQUEUEINFO => array(
            'name' => 'stLoginQueueInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\LoginQueueInfo'
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
        $this->values[self::STLOGINQUEUEINFO] = null;
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
     * Sets value of 'stLoginQueueInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\LoginQueueInfo $value Property value
     *
     * @return null
     */
    public function setStLoginQueueInfo(\Xnhd\Core\Pb\Sdo\LoginQueueInfo $value=null)
    {
        return $this->set(self::STLOGINQUEUEINFO, $value);
    }

    /**
     * Returns value of 'stLoginQueueInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\LoginQueueInfo
     */
    public function getStLoginQueueInfo()
    {
        return $this->get(self::STLOGINQUEUEINFO);
    }

    /**
     * Returns true if 'stLoginQueueInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStLoginQueueInfo()
    {
        return $this->get(self::STLOGINQUEUEINFO) !== null;
    }
}
}