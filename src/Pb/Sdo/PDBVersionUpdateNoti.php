<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBVersionUpdateNoti message
 */
class PDBVersionUpdateNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NVERSION = 1;
    const SZURL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NVERSION => array(
            'name' => 'nVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZURL => array(
            'name' => 'szUrl',
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
        $this->values[self::NVERSION] = null;
        $this->values[self::SZURL] = null;
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
     * Sets value of 'nVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVersion($value)
    {
        return $this->set(self::NVERSION, $value);
    }

    /**
     * Returns value of 'nVersion' property
     *
     * @return integer
     */
    public function getNVersion()
    {
        $value = $this->get(self::NVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVersion()
    {
        return $this->get(self::NVERSION) !== null;
    }

    /**
     * Sets value of 'szUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzUrl($value)
    {
        return $this->set(self::SZURL, $value);
    }

    /**
     * Returns value of 'szUrl' property
     *
     * @return string
     */
    public function getSzUrl()
    {
        $value = $this->get(self::SZURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzUrl()
    {
        return $this->get(self::SZURL) !== null;
    }
}
}