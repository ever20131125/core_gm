<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ConvertItem message
 */
class ConvertItem extends \ProtobufMessage
{
    /* Field index constants */
    const ORIGIITEM = 1;
    const CONVERTITEM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORIGIITEM => array(
            'name' => 'origiItem',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::CONVERTITEM => array(
            'name' => 'convertItem',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::ORIGIITEM] = null;
        $this->values[self::CONVERTITEM] = null;
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
     * Sets value of 'origiItem' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setOrigiItem(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::ORIGIITEM, $value);
    }

    /**
     * Returns value of 'origiItem' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getOrigiItem()
    {
        return $this->get(self::ORIGIITEM);
    }

    /**
     * Returns true if 'origiItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOrigiItem()
    {
        return $this->get(self::ORIGIITEM) !== null;
    }

    /**
     * Sets value of 'convertItem' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Property value
     *
     * @return null
     */
    public function setConvertItem(\Xnhd\Core\Pb\Sdo\ItemBase $value=null)
    {
        return $this->set(self::CONVERTITEM, $value);
    }

    /**
     * Returns value of 'convertItem' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getConvertItem()
    {
        return $this->get(self::CONVERTITEM);
    }

    /**
     * Returns true if 'convertItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConvertItem()
    {
        return $this->get(self::CONVERTITEM) !== null;
    }
}
}