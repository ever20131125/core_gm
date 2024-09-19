<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASAchievementPrizeResp message
 */
class TASAchievementPrizeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const INFOS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::INFOS => array(
            'name' => 'infos',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AchievementInfo'
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
        $this->values[self::INFOS] = null;
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
     * Sets value of 'infos' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AchievementInfo $value Property value
     *
     * @return null
     */
    public function setInfos(\Xnhd\Core\Pb\Sdo\AchievementInfo $value=null)
    {
        return $this->set(self::INFOS, $value);
    }

    /**
     * Returns value of 'infos' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AchievementInfo
     */
    public function getInfos()
    {
        return $this->get(self::INFOS);
    }

    /**
     * Returns true if 'infos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfos()
    {
        return $this->get(self::INFOS) !== null;
    }
}
}