<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBSendMailReq message
 */
class PDBSendMailReq extends \ProtobufMessage
{
    /* Field index constants */
    const NFROMID = 1;
    const NTOID = 2;
    const SOURCE = 4;
    const STMAILDETAIL = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NFROMID => array(
            'name' => 'nFromID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOID => array(
            'name' => 'nToID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
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
        $this->values[self::NFROMID] = null;
        $this->values[self::NTOID] = null;
        $this->values[self::SOURCE] = null;
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
     * Sets value of 'nFromID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFromID($value)
    {
        return $this->set(self::NFROMID, $value);
    }

    /**
     * Returns value of 'nFromID' property
     *
     * @return integer
     */
    public function getNFromID()
    {
        $value = $this->get(self::NFROMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFromID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFromID()
    {
        return $this->get(self::NFROMID) !== null;
    }

    /**
     * Sets value of 'nToID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNToID($value)
    {
        return $this->set(self::NTOID, $value);
    }

    /**
     * Returns value of 'nToID' property
     *
     * @return integer
     */
    public function getNToID()
    {
        $value = $this->get(self::NTOID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nToID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNToID()
    {
        return $this->get(self::NTOID) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
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