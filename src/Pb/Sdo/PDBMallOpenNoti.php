<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBMallOpenNoti message
 */
class PDBMallOpenNoti extends \ProtobufMessage
{
    /* Field index constants */
    const MALLTYPE = 1;
    const NTIMELIMIT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MALLTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MallType::enmMallType_Normal,
            'name' => 'mallType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIMELIMIT => array(
            'name' => 'nTimeLimit',
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
        $this->values[self::MALLTYPE] = self::$fields[self::MALLTYPE]['default'];
        $this->values[self::NTIMELIMIT] = null;
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
     * Sets value of 'mallType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMallType($value)
    {
        return $this->set(self::MALLTYPE, $value);
    }

    /**
     * Returns value of 'mallType' property
     *
     * @return integer
     */
    public function getMallType()
    {
        $value = $this->get(self::MALLTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mallType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMallType()
    {
        return $this->get(self::MALLTYPE) !== null;
    }

    /**
     * Sets value of 'nTimeLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeLimit($value)
    {
        return $this->set(self::NTIMELIMIT, $value);
    }

    /**
     * Returns value of 'nTimeLimit' property
     *
     * @return integer
     */
    public function getNTimeLimit()
    {
        $value = $this->get(self::NTIMELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeLimit()
    {
        return $this->get(self::NTIMELIMIT) !== null;
    }
}
}