<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BPUpdateInfo message
 */
class BPUpdateInfo extends \ProtobufMessage
{
    /* Field index constants */
    const UPDATETYPE = 1;
    const NQUANTITY = 2;
    const SOURCE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UPDATETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BPUpdateType::enmBPUpdateType_None,
            'name' => 'updateType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
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
        $this->values[self::UPDATETYPE] = self::$fields[self::UPDATETYPE]['default'];
        $this->values[self::NQUANTITY] = null;
        $this->values[self::SOURCE] = null;
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
     * Sets value of 'updateType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateType($value)
    {
        return $this->set(self::UPDATETYPE, $value);
    }

    /**
     * Returns value of 'updateType' property
     *
     * @return integer
     */
    public function getUpdateType()
    {
        $value = $this->get(self::UPDATETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateType()
    {
        return $this->get(self::UPDATETYPE) !== null;
    }

    /**
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }
}
}