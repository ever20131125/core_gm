<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBAnswerAskForNoti message
 */
class PDBAnswerAskForNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NASKERID = 1;
    const NASKEEID = 2;
    const ASKFORRESULT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NASKERID => array(
            'name' => 'nAskerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NASKEEID => array(
            'name' => 'nAskeeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASKFORRESULT => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Agree,
            'name' => 'askForResult',
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
        $this->values[self::NASKERID] = null;
        $this->values[self::NASKEEID] = null;
        $this->values[self::ASKFORRESULT] = self::$fields[self::ASKFORRESULT]['default'];
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
     * Sets value of 'nAskerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskerID($value)
    {
        return $this->set(self::NASKERID, $value);
    }

    /**
     * Returns value of 'nAskerID' property
     *
     * @return integer
     */
    public function getNAskerID()
    {
        $value = $this->get(self::NASKERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskerID()
    {
        return $this->get(self::NASKERID) !== null;
    }

    /**
     * Sets value of 'nAskeeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAskeeID($value)
    {
        return $this->set(self::NASKEEID, $value);
    }

    /**
     * Returns value of 'nAskeeID' property
     *
     * @return integer
     */
    public function getNAskeeID()
    {
        $value = $this->get(self::NASKEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAskeeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAskeeID()
    {
        return $this->get(self::NASKEEID) !== null;
    }

    /**
     * Sets value of 'askForResult' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAskForResult($value)
    {
        return $this->set(self::ASKFORRESULT, $value);
    }

    /**
     * Returns value of 'askForResult' property
     *
     * @return integer
     */
    public function getAskForResult()
    {
        $value = $this->get(self::ASKFORRESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'askForResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAskForResult()
    {
        return $this->get(self::ASKFORRESULT) !== null;
    }
}
}