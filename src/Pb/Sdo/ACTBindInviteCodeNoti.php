<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTBindInviteCodeNoti message
 */
class ACTBindInviteCodeNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const BINDID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BINDID => array(
            'name' => 'bindID',
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
        $this->values[self::BINDID] = null;
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
     * Sets value of 'bindID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBindID($value)
    {
        return $this->set(self::BINDID, $value);
    }

    /**
     * Returns value of 'bindID' property
     *
     * @return integer
     */
    public function getBindID()
    {
        $value = $this->get(self::BINDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bindID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBindID()
    {
        return $this->get(self::BINDID) !== null;
    }
}
}