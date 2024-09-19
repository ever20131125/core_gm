<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleLoveNoti message
 */
class RLSCoupleLoveNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NLOVELV = 1;
    const NLOVEEXP = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NLOVELV => array(
            'name' => 'nLoveLv',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLOVEEXP => array(
            'name' => 'nLoveExp',
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
        $this->values[self::NLOVELV] = null;
        $this->values[self::NLOVEEXP] = null;
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
     * Sets value of 'nLoveLv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoveLv($value)
    {
        return $this->set(self::NLOVELV, $value);
    }

    /**
     * Returns value of 'nLoveLv' property
     *
     * @return integer
     */
    public function getNLoveLv()
    {
        $value = $this->get(self::NLOVELV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoveLv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoveLv()
    {
        return $this->get(self::NLOVELV) !== null;
    }

    /**
     * Sets value of 'nLoveExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLoveExp($value)
    {
        return $this->set(self::NLOVEEXP, $value);
    }

    /**
     * Returns value of 'nLoveExp' property
     *
     * @return integer
     */
    public function getNLoveExp()
    {
        $value = $this->get(self::NLOVEEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLoveExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLoveExp()
    {
        return $this->get(self::NLOVEEXP) !== null;
    }
}
}