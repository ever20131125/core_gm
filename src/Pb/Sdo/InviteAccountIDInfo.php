<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InviteAccountIDInfo message
 */
class InviteAccountIDInfo extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDACCOUNTID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDACCOUNTID => array(
            'name' => 'friendAccountID',
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
        $this->values[self::FRIENDACCOUNTID] = null;
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
     * Sets value of 'friendAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendAccountID($value)
    {
        return $this->set(self::FRIENDACCOUNTID, $value);
    }

    /**
     * Returns value of 'friendAccountID' property
     *
     * @return string
     */
    public function getFriendAccountID()
    {
        $value = $this->get(self::FRIENDACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendAccountID()
    {
        return $this->get(self::FRIENDACCOUNTID) !== null;
    }
}
}