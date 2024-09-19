<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetRaffleRecReq message
 */
class IDBGetRaffleRecReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const RAFFLEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RAFFLEID => array(
            'name' => 'raffleid',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::RAFFLEID] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'raffleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRaffleid($value)
    {
        return $this->set(self::RAFFLEID, $value);
    }

    /**
     * Returns value of 'raffleid' property
     *
     * @return integer
     */
    public function getRaffleid()
    {
        $value = $this->get(self::RAFFLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'raffleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRaffleid()
    {
        return $this->get(self::RAFFLEID) !== null;
    }
}
}