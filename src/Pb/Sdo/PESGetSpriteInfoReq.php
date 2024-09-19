<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESGetSpriteInfoReq message
 */
class PESGetSpriteInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const UUID = 2;
    const ISTOGETALLFEEDLOVERINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISTOGETALLFEEDLOVERINFO => array(
            'default' => false,
            'name' => 'isToGetAllFeedLoverInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::UUID] = null;
        $this->values[self::ISTOGETALLFEEDLOVERINFO] = self::$fields[self::ISTOGETALLFEEDLOVERINFO]['default'];
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
     * Sets value of 'roleId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleId($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleId' property
     *
     * @return integer
     */
    public function getRoleId()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleId()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'uuid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return integer
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }

    /**
     * Sets value of 'isToGetAllFeedLoverInfo' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsToGetAllFeedLoverInfo($value)
    {
        return $this->set(self::ISTOGETALLFEEDLOVERINFO, $value);
    }

    /**
     * Returns value of 'isToGetAllFeedLoverInfo' property
     *
     * @return boolean
     */
    public function getIsToGetAllFeedLoverInfo()
    {
        $value = $this->get(self::ISTOGETALLFEEDLOVERINFO);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'isToGetAllFeedLoverInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsToGetAllFeedLoverInfo()
    {
        return $this->get(self::ISTOGETALLFEEDLOVERINFO) !== null;
    }
}
}