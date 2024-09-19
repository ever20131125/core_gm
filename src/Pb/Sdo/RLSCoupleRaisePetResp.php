<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleRaisePetResp message
 */
class RLSCoupleRaisePetResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const RAISEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::RAISEINFO => array(
            'name' => 'raiseInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RaiseInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::RAISEINFO] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'raiseInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RaiseInfo $value Property value
     *
     * @return null
     */
    public function setRaiseInfo(\Xnhd\Core\Pb\Sdo\RaiseInfo $value=null)
    {
        return $this->set(self::RAISEINFO, $value);
    }

    /**
     * Returns value of 'raiseInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RaiseInfo
     */
    public function getRaiseInfo()
    {
        return $this->get(self::RAISEINFO);
    }

    /**
     * Returns true if 'raiseInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRaiseInfo()
    {
        return $this->get(self::RAISEINFO) !== null;
    }
}
}