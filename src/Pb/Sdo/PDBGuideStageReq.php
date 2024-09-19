<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGuideStageReq message
 */
class PDBGuideStageReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const GUIDESTAGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUIDESTAGE => array(
            'default' => \Xnhd\Core\Pb\Sdo\GuideStage::enmGuideStage_None,
            'name' => 'guideStage',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::GUIDESTAGE] = self::$fields[self::GUIDESTAGE]['default'];
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
     * Sets value of 'guideStage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuideStage($value)
    {
        return $this->set(self::GUIDESTAGE, $value);
    }

    /**
     * Returns value of 'guideStage' property
     *
     * @return integer
     */
    public function getGuideStage()
    {
        $value = $this->get(self::GUIDESTAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guideStage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuideStage()
    {
        return $this->get(self::GUIDESTAGE) !== null;
    }
}
}