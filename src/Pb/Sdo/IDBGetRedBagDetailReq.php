<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetRedBagDetailReq message
 */
class IDBGetRedBagDetailReq extends \ProtobufMessage
{
    /* Field index constants */
    const NBAGID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NBAGID => array(
            'name' => 'nBagID',
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
        $this->values[self::NBAGID] = null;
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
     * Sets value of 'nBagID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBagID($value)
    {
        return $this->set(self::NBAGID, $value);
    }

    /**
     * Returns value of 'nBagID' property
     *
     * @return integer
     */
    public function getNBagID()
    {
        $value = $this->get(self::NBAGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBagID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBagID()
    {
        return $this->get(self::NBAGID) !== null;
    }
}
}