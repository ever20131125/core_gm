<?php
/**
 * Auto generated from smallgameserver.proto at 2022-06-18 10:46:38
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SGSGMSetQualifyInfoResp message
 */
class SGSGMSetQualifyInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NSCORE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NSCORE] = null;
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
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }
}
}