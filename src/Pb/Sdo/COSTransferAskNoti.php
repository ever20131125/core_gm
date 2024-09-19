<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSTransferAskNoti message
 */
class COSTransferAskNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STASKROLEINFO = 1;
    const STANSWERROLEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STASKROLEINFO => array(
            'name' => 'stAskRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::STANSWERROLEINFO => array(
            'name' => 'stAnswerRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
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
        $this->values[self::STASKROLEINFO] = null;
        $this->values[self::STANSWERROLEINFO] = null;
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
     * Sets value of 'stAskRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStAskRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STASKROLEINFO, $value);
    }

    /**
     * Returns value of 'stAskRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStAskRoleInfo()
    {
        return $this->get(self::STASKROLEINFO);
    }

    /**
     * Returns true if 'stAskRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAskRoleInfo()
    {
        return $this->get(self::STASKROLEINFO) !== null;
    }

    /**
     * Sets value of 'stAnswerRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setStAnswerRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::STANSWERROLEINFO, $value);
    }

    /**
     * Returns value of 'stAnswerRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getStAnswerRoleInfo()
    {
        return $this->get(self::STANSWERROLEINFO);
    }

    /**
     * Returns true if 'stAnswerRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAnswerRoleInfo()
    {
        return $this->get(self::STANSWERROLEINFO) !== null;
    }
}
}