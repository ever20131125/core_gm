<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSFixupAnswerReq message
 */
class COSFixupAnswerReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const FIXUPANSWER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIXUPANSWER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Agree,
            'name' => 'fixupAnswer',
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
        $this->values[self::FIXUPANSWER] = self::$fields[self::FIXUPANSWER]['default'];
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
     * Sets value of 'fixupAnswer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFixupAnswer($value)
    {
        return $this->set(self::FIXUPANSWER, $value);
    }

    /**
     * Returns value of 'fixupAnswer' property
     *
     * @return integer
     */
    public function getFixupAnswer()
    {
        $value = $this->get(self::FIXUPANSWER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fixupAnswer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFixupAnswer()
    {
        return $this->get(self::FIXUPANSWER) !== null;
    }
}
}