<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSDeposePresidentReq message
 */
class GDSDeposePresidentReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const DEPOSEVOTETYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEPOSEVOTETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\DeposeVoteType::enmDeposeVoteType_Invalid,
            'name' => 'deposeVoteType',
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
        $this->values[self::DEPOSEVOTETYPE] = self::$fields[self::DEPOSEVOTETYPE]['default'];
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
     * Sets value of 'deposeVoteType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeposeVoteType($value)
    {
        return $this->set(self::DEPOSEVOTETYPE, $value);
    }

    /**
     * Returns value of 'deposeVoteType' property
     *
     * @return integer
     */
    public function getDeposeVoteType()
    {
        $value = $this->get(self::DEPOSEVOTETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deposeVoteType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeposeVoteType()
    {
        return $this->get(self::DEPOSEVOTETYPE) !== null;
    }
}
}