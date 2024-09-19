<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSGMAddAnchorReq message
 */
class COSGMAddAnchorReq extends \ProtobufMessage
{
    /* Field index constants */
    const NANCHORID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NANCHORID => array(
            'name' => 'nAnchorID',
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
        $this->values[self::NANCHORID] = null;
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
     * Sets value of 'nAnchorID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAnchorID($value)
    {
        return $this->set(self::NANCHORID, $value);
    }

    /**
     * Returns value of 'nAnchorID' property
     *
     * @return integer
     */
    public function getNAnchorID()
    {
        $value = $this->get(self::NANCHORID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAnchorID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAnchorID()
    {
        return $this->get(self::NANCHORID) !== null;
    }
}
}