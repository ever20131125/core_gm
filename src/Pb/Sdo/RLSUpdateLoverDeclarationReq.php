<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSUpdateLoverDeclarationReq message
 */
class RLSUpdateLoverDeclarationReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZDECLARATION = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZDECLARATION => array(
            'name' => 'szDeclaration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::SZDECLARATION] = null;
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
     * Sets value of 'szDeclaration' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzDeclaration($value)
    {
        return $this->set(self::SZDECLARATION, $value);
    }

    /**
     * Returns value of 'szDeclaration' property
     *
     * @return string
     */
    public function getSzDeclaration()
    {
        $value = $this->get(self::SZDECLARATION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szDeclaration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzDeclaration()
    {
        return $this->get(self::SZDECLARATION) !== null;
    }
}
}