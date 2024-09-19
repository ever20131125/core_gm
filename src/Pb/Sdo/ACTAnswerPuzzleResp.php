<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTAnswerPuzzleResp message
 */
class ACTAnswerPuzzleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const NBATCH = 3;
    const NPUZZLEID = 4;
    const NSELECT = 5;
    const SZSELECT = 6;
    const RESULT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBATCH => array(
            'name' => 'nBatch',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPUZZLEID => array(
            'name' => 'nPuzzleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSELECT => array(
            'name' => 'nSelect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZSELECT => array(
            'name' => 'szSelect',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RESULT => array(
            'name' => 'result',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::NBATCH] = null;
        $this->values[self::NPUZZLEID] = null;
        $this->values[self::NSELECT] = null;
        $this->values[self::SZSELECT] = null;
        $this->values[self::RESULT] = null;
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
     * Sets value of 'nBatch' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBatch($value)
    {
        return $this->set(self::NBATCH, $value);
    }

    /**
     * Returns value of 'nBatch' property
     *
     * @return integer
     */
    public function getNBatch()
    {
        $value = $this->get(self::NBATCH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBatch' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBatch()
    {
        return $this->get(self::NBATCH) !== null;
    }

    /**
     * Sets value of 'nPuzzleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPuzzleID($value)
    {
        return $this->set(self::NPUZZLEID, $value);
    }

    /**
     * Returns value of 'nPuzzleID' property
     *
     * @return integer
     */
    public function getNPuzzleID()
    {
        $value = $this->get(self::NPUZZLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPuzzleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPuzzleID()
    {
        return $this->get(self::NPUZZLEID) !== null;
    }

    /**
     * Sets value of 'nSelect' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelect($value)
    {
        return $this->set(self::NSELECT, $value);
    }

    /**
     * Returns value of 'nSelect' property
     *
     * @return integer
     */
    public function getNSelect()
    {
        $value = $this->get(self::NSELECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelect()
    {
        return $this->get(self::NSELECT) !== null;
    }

    /**
     * Sets value of 'szSelect' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzSelect($value)
    {
        return $this->set(self::SZSELECT, $value);
    }

    /**
     * Returns value of 'szSelect' property
     *
     * @return string
     */
    public function getSzSelect()
    {
        $value = $this->get(self::SZSELECT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szSelect' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzSelect()
    {
        return $this->get(self::SZSELECT) !== null;
    }

    /**
     * Sets value of 'result' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return integer
     */
    public function getResult()
    {
        $value = $this->get(self::RESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'result' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResult()
    {
        return $this->get(self::RESULT) !== null;
    }
}
}