<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetLoverInfoResp message
 */
class RLSGetLoverInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const LOVERINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::LOVERINFO => array(
            'name' => 'loverInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\LoverInfo'
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
        $this->values[self::LOVERINFO] = null;
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
     * Sets value of 'loverInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\LoverInfo $value Property value
     *
     * @return null
     */
    public function setLoverInfo(\Xnhd\Core\Pb\Sdo\LoverInfo $value=null)
    {
        return $this->set(self::LOVERINFO, $value);
    }

    /**
     * Returns value of 'loverInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\LoverInfo
     */
    public function getLoverInfo()
    {
        return $this->get(self::LOVERINFO);
    }

    /**
     * Returns true if 'loverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverInfo()
    {
        return $this->get(self::LOVERINFO) !== null;
    }
}
}