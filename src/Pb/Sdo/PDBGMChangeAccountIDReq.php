<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGMChangeAccountIDReq message
 */
class PDBGMChangeAccountIDReq extends \ProtobufMessage
{
    /* Field index constants */
    const NTMPROLEID = 1;
    const SZOLDACCOUNTID = 2;
    const NOLDROLEID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTMPROLEID => array(
            'name' => 'nTmpRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZOLDACCOUNTID => array(
            'name' => 'szOldAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOLDROLEID => array(
            'name' => 'nOldRoleID',
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
        $this->values[self::NTMPROLEID] = null;
        $this->values[self::SZOLDACCOUNTID] = null;
        $this->values[self::NOLDROLEID] = null;
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
     * Sets value of 'nTmpRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTmpRoleID($value)
    {
        return $this->set(self::NTMPROLEID, $value);
    }

    /**
     * Returns value of 'nTmpRoleID' property
     *
     * @return integer
     */
    public function getNTmpRoleID()
    {
        $value = $this->get(self::NTMPROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTmpRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTmpRoleID()
    {
        return $this->get(self::NTMPROLEID) !== null;
    }

    /**
     * Sets value of 'szOldAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOldAccountID($value)
    {
        return $this->set(self::SZOLDACCOUNTID, $value);
    }

    /**
     * Returns value of 'szOldAccountID' property
     *
     * @return string
     */
    public function getSzOldAccountID()
    {
        $value = $this->get(self::SZOLDACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOldAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOldAccountID()
    {
        return $this->get(self::SZOLDACCOUNTID) !== null;
    }

    /**
     * Sets value of 'nOldRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOldRoleID($value)
    {
        return $this->set(self::NOLDROLEID, $value);
    }

    /**
     * Returns value of 'nOldRoleID' property
     *
     * @return integer
     */
    public function getNOldRoleID()
    {
        $value = $this->get(self::NOLDROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOldRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOldRoleID()
    {
        return $this->get(self::NOLDROLEID) !== null;
    }
}
}