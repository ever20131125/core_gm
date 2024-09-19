<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSTransferAnswerNoti message
 */
class COSTransferAnswerNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ANSWER = 1;
    const STASKROLEINFO = 2;
    const STANSWERROLEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ANSWER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Unknow,
            'name' => 'answer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::ANSWER] = self::$fields[self::ANSWER]['default'];
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
     * Sets value of 'answer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnswer($value)
    {
        return $this->set(self::ANSWER, $value);
    }

    /**
     * Returns value of 'answer' property
     *
     * @return integer
     */
    public function getAnswer()
    {
        $value = $this->get(self::ANSWER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'answer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnswer()
    {
        return $this->get(self::ANSWER) !== null;
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