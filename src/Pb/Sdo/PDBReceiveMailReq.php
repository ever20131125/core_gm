<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBReceiveMailReq message
 */
class PDBReceiveMailReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NMAILID = 2;
    const MAILTYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAILID => array(
            'name' => 'nMailID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAILTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MailType::enmMailType_Syetem,
            'name' => 'mailType',
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
        $this->values[self::NMAILID] = null;
        $this->values[self::MAILTYPE] = self::$fields[self::MAILTYPE]['default'];
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
     * Sets value of 'nMailID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMailID($value)
    {
        return $this->set(self::NMAILID, $value);
    }

    /**
     * Returns value of 'nMailID' property
     *
     * @return integer
     */
    public function getNMailID()
    {
        $value = $this->get(self::NMAILID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMailID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMailID()
    {
        return $this->get(self::NMAILID) !== null;
    }

    /**
     * Sets value of 'mailType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMailType($value)
    {
        return $this->set(self::MAILTYPE, $value);
    }

    /**
     * Returns value of 'mailType' property
     *
     * @return integer
     */
    public function getMailType()
    {
        $value = $this->get(self::MAILTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mailType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMailType()
    {
        return $this->get(self::MAILTYPE) !== null;
    }
}
}