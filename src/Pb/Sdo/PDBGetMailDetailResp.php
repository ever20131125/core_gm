<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetMailDetailResp message
 */
class PDBGetMailDetailResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NMAILID = 3;
    const STMAILDETAIL = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
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
        self::STMAILDETAIL => array(
            'name' => 'stMailDetail',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\MailDetail'
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
        $this->values[self::NMAILID] = null;
        $this->values[self::STMAILDETAIL] = null;
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
     * Sets value of 'stMailDetail' property
     *
     * @param \Xnhd\Core\Pb\Sdo\MailDetail $value Property value
     *
     * @return null
     */
    public function setStMailDetail(\Xnhd\Core\Pb\Sdo\MailDetail $value=null)
    {
        return $this->set(self::STMAILDETAIL, $value);
    }

    /**
     * Returns value of 'stMailDetail' property
     *
     * @return \Xnhd\Core\Pb\Sdo\MailDetail
     */
    public function getStMailDetail()
    {
        return $this->get(self::STMAILDETAIL);
    }

    /**
     * Returns true if 'stMailDetail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStMailDetail()
    {
        return $this->get(self::STMAILDETAIL) !== null;
    }
}
}