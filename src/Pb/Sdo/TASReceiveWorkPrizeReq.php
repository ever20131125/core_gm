<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASReceiveWorkPrizeReq message
 */
class TASReceiveWorkPrizeReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const NPRIZEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZEID => array(
            'name' => 'nPrizeID',
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
        $this->values[self::NPRIZEID] = null;
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
     * Sets value of 'nPrizeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrizeID($value)
    {
        return $this->set(self::NPRIZEID, $value);
    }

    /**
     * Returns value of 'nPrizeID' property
     *
     * @return integer
     */
    public function getNPrizeID()
    {
        $value = $this->get(self::NPRIZEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrizeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrizeID()
    {
        return $this->get(self::NPRIZEID) !== null;
    }
}
}