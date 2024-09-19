<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ConsumeRankInfo message
 */
class ConsumeRankInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEINFO = 1;
    const NCONSUMEMONEY = 2;
    const NCONSUMESCORE = 3;
    const NUPDATETIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEINFO => array(
            'name' => 'roleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::NCONSUMEMONEY => array(
            'name' => 'nConsumeMoney',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCONSUMESCORE => array(
            'name' => 'nConsumeScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUPDATETIME => array(
            'name' => 'nUpdateTime',
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
        $this->values[self::ROLEINFO] = null;
        $this->values[self::NCONSUMEMONEY] = null;
        $this->values[self::NCONSUMESCORE] = null;
        $this->values[self::NUPDATETIME] = null;
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
     * Sets value of 'roleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::ROLEINFO, $value);
    }

    /**
     * Returns value of 'roleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getRoleInfo()
    {
        return $this->get(self::ROLEINFO);
    }

    /**
     * Returns true if 'roleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleInfo()
    {
        return $this->get(self::ROLEINFO) !== null;
    }

    /**
     * Sets value of 'nConsumeMoney' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNConsumeMoney($value)
    {
        return $this->set(self::NCONSUMEMONEY, $value);
    }

    /**
     * Returns value of 'nConsumeMoney' property
     *
     * @return integer
     */
    public function getNConsumeMoney()
    {
        $value = $this->get(self::NCONSUMEMONEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nConsumeMoney' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNConsumeMoney()
    {
        return $this->get(self::NCONSUMEMONEY) !== null;
    }

    /**
     * Sets value of 'nConsumeScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNConsumeScore($value)
    {
        return $this->set(self::NCONSUMESCORE, $value);
    }

    /**
     * Returns value of 'nConsumeScore' property
     *
     * @return integer
     */
    public function getNConsumeScore()
    {
        $value = $this->get(self::NCONSUMESCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nConsumeScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNConsumeScore()
    {
        return $this->get(self::NCONSUMESCORE) !== null;
    }

    /**
     * Sets value of 'nUpdateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUpdateTime($value)
    {
        return $this->set(self::NUPDATETIME, $value);
    }

    /**
     * Returns value of 'nUpdateTime' property
     *
     * @return integer
     */
    public function getNUpdateTime()
    {
        $value = $this->get(self::NUPDATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUpdateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUpdateTime()
    {
        return $this->get(self::NUPDATETIME) !== null;
    }
}
}