<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningPicRemoveReq message
 */
class RLSBeckoningPicRemoveReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STPICINFOS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STPICINFOS => array(
            'name' => 'stPicInfos',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PicInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STPICINFOS] = null;
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Sets value of 'stPicInfos' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PicInfo $value Property value
     *
     * @return null
     */
    public function setStPicInfos(\Xnhd\Core\Pb\Sdo\PicInfo $value=null)
    {
        return $this->set(self::STPICINFOS, $value);
    }

    /**
     * Returns value of 'stPicInfos' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo
     */
    public function getStPicInfos()
    {
        return $this->get(self::STPICINFOS);
    }

    /**
     * Returns true if 'stPicInfos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPicInfos()
    {
        return $this->get(self::STPICINFOS) !== null;
    }
}
}