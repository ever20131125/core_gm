<?php
/**
 * Auto generated from recordserver.proto at 2021-12-17 09:50:52
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESQualifyPrizeNoti message
 */
class RESQualifyPrizeNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const TYPE = 2;
    const STPRIZE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\QualifyPrizeType::enmQualifyPrizeType_Season,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STPRIZE => array(
            'name' => 'stPrize',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyTaskPrize'
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
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::STPRIZE] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'stPrize' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value Property value
     *
     * @return null
     */
    public function setStPrize(\Xnhd\Core\Pb\Sdo\QualifyTaskPrize $value=null)
    {
        return $this->set(self::STPRIZE, $value);
    }

    /**
     * Returns value of 'stPrize' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyTaskPrize
     */
    public function getStPrize()
    {
        return $this->get(self::STPRIZE);
    }

    /**
     * Returns true if 'stPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPrize()
    {
        return $this->get(self::STPRIZE) !== null;
    }
}
}