<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBSelectNewOldReq message
 */
class IDBSelectNewOldReq extends \ProtobufMessage
{
    /* Field index constants */
    const NEWOLD = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEWOLD => array(
            'default' => \Xnhd\Core\Pb\Sdo\NewOldChoice::enmNewOld_None,
            'name' => 'newOld',
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
        $this->values[self::NEWOLD] = self::$fields[self::NEWOLD]['default'];
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
     * Sets value of 'newOld' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewOld($value)
    {
        return $this->set(self::NEWOLD, $value);
    }

    /**
     * Returns value of 'newOld' property
     *
     * @return integer
     */
    public function getNewOld()
    {
        $value = $this->get(self::NEWOLD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newOld' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewOld()
    {
        return $this->get(self::NEWOLD) !== null;
    }
}
}