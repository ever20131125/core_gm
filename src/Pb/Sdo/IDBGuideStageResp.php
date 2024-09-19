<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGuideStageResp message
 */
class IDBGuideStageResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GUIDESTAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
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
        $this->values[self::NERRORCODE] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
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